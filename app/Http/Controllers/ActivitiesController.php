<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Swal;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activitiesAll = Activity::all();
      return view('admin.activities.list')->with(['activitiesAll' => $activitiesAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.activities.create');
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
        'activity_name' => 'required',
        'activity_description' => 'required',
        'activity_image' => 'required|image|mimes:jpg,jpeg,png,svg|max:16384'
      ]);

      if ($httpRequest->hasFile('activity_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $activity = new Activity;
      $activity->name = $httpRequest->activity_name;
      $activity->description = $httpRequest->activity_description;

      $activity->directory_id = NULL;

      $directory = FileStorageController::makeDirectory($activity->base_storage_path);
      
      if($headerImageSet) {
        $file = FileStorageController::store($httpRequest->file('activity_image'), $directory->getFullPath());

        $activity->image = $file;
        $activity->image_description = $httpRequest->activity_image_alt;
      } else {
          $activity->image = NULL;
          $activity->image_description = NULL;
      }

      $activity->directory_id = $directory->getDirectoryId();

      try {
        $activity->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.activities.index'), "success", "Gotovo!", "Aktivnost dodana.");
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
      $activityEdit = Activity::find($id);

      return view('admin.activities.edit')->with(['activityEdit' => $activityEdit]);
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

      $activityEdit = Activity::find($id);

      $httpRequest->validate([
        'activity_name' => 'required',
        'activity_description' => 'required',
        'activity_image' => 'image|mimes:jpg,jpeg,png,svg|max:16384'
      ]);

      if ($httpRequest->hasFile('activity_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $activityEdit->name = $httpRequest->activity_name;
      $activityEdit->description = $httpRequest->activity_description;

      $directory = FileStorageController::makeDirectory($activityEdit->base_storage_path);
      
      if($headerImageSet) {
        $file = FileStorageController::store($httpRequest->file('activity_image'), $directory->getFullPath());

        $activityEdit->image = $file;
        $activityEdit->directory_id = $directory->getDirectoryId();
      } else {
          $activityEdit->image = $activityEdit->image;
          $activityEdit->directory_id = $activityEdit->directory_id;
      }

      $activityEdit->image_description = $httpRequest->activity_image_alt;

      try {
        $activityEdit->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.activities.index'), "success", "Gotovo!", "Aktivnost dodana.");
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
      $activityDel = Activity::find($id);

      $directory = FileStorageController::getDirectory($activityDel->base_storage_path, $activityDel->directory_id);
      Storage::deleteDirectory($directory->getFullPath()); 

      try {
        $activityDel = Activity::where('id', $id)->delete();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.activities.index'), "success", "Gotovo!", "Aktivnost izbrisana.");
      return response()->json($swal->get());
    }
}
