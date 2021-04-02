<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Swal;

use Helper;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.events.list');
    }

    /**
     * Display all events.
     * 
     * @return \Illuminate\Http\Response
     */
    public function calendarEvents(Request $request) 
    {
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $httpRequest)
    {
        $user = auth()->user();
        if(empty($user)) abort(404);
        if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);
        
        $httpRequest->validate([
            'event_title' => 'required',
            'event_header_image' => 'image|mimes:jpg,jpeg,png|max:16384',
            'event_header_image_alt' => 'nullable',
            'event_date' => 'required',  
        ]);

        if ($httpRequest->hasFile('event_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        $eventSingle = new Event;
        $eventSingle->title = $httpRequest->event_title; 

        $eventSingle->directory_id = NULL;

        $directory = FileStorageController::makeDirectory($eventSingle->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('event_header_image'), $directory->getFullPath());

            $eventSingle->cover = $file;
            $eventSingle->cover_image_description = $httpRequest->event_header_image_alt;
            $eventSingle->directory_id = $directory->getDirectoryId();

        } else {
            $eventSingle->cover = NULL;
            $eventSingle->cover_image_description = NULL;
            $eventSingle->directory_id = NULL;
        }

        $eventSingle->date = $httpRequest->event_date;

        if (Helper::isSet($httpRequest->event_start)) {
            $eventSingle->start = $httpRequest->event_start;
        } else {
            $eventSingle->start = NULL;
        }

        if (Helper::isSet($httpRequest->event_end)) {
            $eventSingle->end = $httpRequest->event_end;
        } else {
            $eventSingle->end = NULL;
        }        

        if (Helper::isSet($httpRequest->event_zoom_link)) {
            $eventSingle->zoom_link = $httpRequest->event_zoom_link;
        } else {
            $eventSingle->zoom_link = NULL;
        }

        try {
            $eventSingle->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.events.index'), "success", "Gotovo!", "Event dodan.");
        return response()->json($swal->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
