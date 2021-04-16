<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Event;
use App\Models\Swal;
use DateTime;
use Helper;
use Carbon\Carbon;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $eventList = Event::select(['id','title','directory_id','cover','date as start','start as start_hour','end as end_hour','zoom_link','description'])->get(); 
		
			$eventListArray = $eventList;
			$eventListArray = $eventListArray->toArray();
			foreach($eventList as $index => $row) {
				if(array_key_exists($index, $eventListArray) && $eventListArray[$index]['id'] == $row->id) {
					if(is_null(end($eventListArray[$index])) || end($eventListArray[$index]) == '') {
						try {
							array_pop($eventListArray[$index]);
						} catch (Exception $e) {}
					}
					$eventListArray[$index]['header_image_url'] = $row->header_image_url;
					$eventListArray[$index]['formatted_date'] = (new DateTime($eventListArray[$index]['start']))->format('d.m.Y.');
          if (Helper::isset($eventListArray[$index]['start_hour'])) { 
            $eventListArray[$index]['start_hour'] = date('G:i', strtotime($eventListArray[$index]['start_hour']));
          } else {
            $eventListArray[$index]['start_hour'] = NULL;
          }
          if (Helper::isset($eventListArray[$index]['end_hour'])) {
            $eventListArray[$index]['end_hour'] = date('G:i', strtotime($eventListArray[$index]['end_hour'])); 
          } else {
            $eventListArray[$index]['end_hour'] = NULL;
          }
				}
			}  

			$events = json_encode($eventListArray); 

      return view('admin.events.list')->with(['events' => $events]);
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

        if (Helper::isSet($httpRequest->event_basic_info)) {
          $eventSingle->description = $httpRequest->event_basic_info;
        } else {
          $eventSingle->description = NULL;
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
        $eventSingle = Event::find($id);
        return view('admin.events.edit')->with(['eventSingle' => $eventSingle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $httpRequest, $id)
    {
      $user = auth()->user();
      if(empty($user)) abort(404);
      if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);

      $eventEdit = Event::find($id);

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

      $eventEdit->title = $httpRequest->event_title; 

      $directory = FileStorageController::makeDirectory($eventEdit->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('event_header_image'), $directory->getFullPath());

            $eventEdit->cover = $file;
            $eventEdit->cover_image_description = $httpRequest->event_header_image_alt;
            $eventEdit->directory_id = $directory->getDirectoryId();

        } else {
            $eventEdit->cover = $eventEdit->cover;
            $eventEdit->cover_image_description = $eventEdit->cover_image_description;
            $eventEdit->directory_id = $eventEdit->directory_id;
        }

        $eventEdit->date = $httpRequest->event_date;
        $eventEdit->start = $httpRequest->event_start;
        $eventEdit->end = $httpRequest->event_end;     
        $eventEdit->zoom_link = $httpRequest->event_zoom_link;
        $eventEdit->description = $httpRequest->event_basic_info;

        try {
          $eventEdit->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.events.index'), "success", "Gotovo!", "Event ažuriran.");
      return response()->json($swal->get());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $eventDel = Event::find($id);

      $directory = FileStorageController::getDirectory($eventDel->base_storage_path, $eventDel->directory_id);
      Storage::deleteDirectory($directory->getFullPath()); 

      try {
        $eventDel = Event::where('id', $id)->delete();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.events.index'), "success", "Gotovo!", "Event izbrisan.");
      return response()->json($swal->get());
    }
}
