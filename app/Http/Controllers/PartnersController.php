<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Partner;
use App\Models\Swal;

use Helper;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnersAll = Partner::all();
        return view('admin.partners.list')->with(['partnersAll' => $partnersAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
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
            'partner_name' => 'required',
            'partner_header_image' => 'required|image|mimes:jpg,jpeg,png|max:16384',
            'partner_header_image_alt' => 'nullable',
            'partner_website_url' => 'required'
        ]);

        if ($httpRequest->hasFile('partner_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        $partnerSingle = new Partner;
        $partnerSingle->name = $httpRequest->partner_name;

        $partnerSingle->directory_id = NULL;

        $directory = FileStorageController::makeDirectory($partnerSingle->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('partner_header_image'), $directory->getFullPath());

            $partnerSingle->cover = $file;
            $partnerSingle->cover_image_description = $httpRequest->partner_header_image_alt;
        } else {
            $partnerSingle->cover = NULL;
            $partnerSingle->cover_image_description = NULL;
        }

        $partnerSingle->directory_id = $directory->getDirectoryId();

        $partnerSingle->website_url = $httpRequest->partner_website_url;

        try {
            $partnerSingle->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.partners.index'), "success", "Gotovo!", "Partner dodan.");
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
        $partnerSingle = Partner::find($id);
        return view('admin.partners.edit')->with(['partnerSingle' => $partnerSingle]);
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

        $partnerEdit = Partner::find($id);

        $httpRequest->validate([
            'partner_name' => 'required',
            'partner_header_image' => 'image|mimes:jpg,jpeg,png|max:16384',
            'partner_header_image_alt' => 'nullable',
            'partner_website_url' => 'required'
        ]);

        if ($httpRequest->hasFile('partner_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        $partnerEdit->name = $httpRequest->partner_name;

        $directory = FileStorageController::makeDirectory($partnerEdit->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('partner_header_image'), $directory->getFullPath());

            $partnerEdit->cover = $file;
            $partnerEdit->directory_id = $directory->getDirectoryId();
        } else {
            $partnerEdit->cover = $partnerEdit->cover;
            $partnerEdit->directory_id = $partnerEdit->directory_id;
        }

        $partnerEdit->cover_image_description = $httpRequest->partner_header_image_alt;
    
        $partnerEdit->website_url = $httpRequest->partner_website_url;

        try {
            $partnerEdit->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.partners.index'), "success", "Gotovo!", "Partner ažuriran.");
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
        $partnersSingleDel = Partner::find($id);

        $directory = FileStorageController::getDirectory($pasrtnersSingleDel->base_storage_path, $pasrtnersSingleDel->directory_id);
        Storage::deleteDirectory($directory->getFullPath()); 

        try {
          $partnerSingleDel = Partner::where('id', $id)->delete();
        } catch (Exception $e) {}
        
        $swal = new Swal("Success", 200, Route('admin.partners.index'), "success", "Gotovo!", "Partner izbrisan.");
        return response()->json($swal->get());
    }
}
