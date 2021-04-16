<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Blogger;
use App\Models\Swal;

class BloggersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloggersAll = Blogger::all();
        return view('admin.bloggers.list')->with(['bloggersAll' => $bloggersAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bloggers.create');
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
        'blogger_name' => 'required',
        'blogger_image' => 'required|image|mimes:jpg,jpeg,png|max:16384'
      ]);

      if ($httpRequest->hasFile('blogger_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $blogger = new Blogger;
      $blogger->name = $httpRequest->blogger_name;

      $blogger->directory_id = NULL;

      $directory = FileStorageController::makeDirectory($blogger->base_storage_path);
      
      if($headerImageSet) {
        $file = FileStorageController::store($httpRequest->file('blogger_image'), $directory->getFullPath());

        $blogger->image = $file;
        $blogger->image_description = $httpRequest->blogger_image_alt;
      } else {
          $blogger->image = NULL;
          $blogger->image_description = NULL;
      }

      $blogger->directory_id = $directory->getDirectoryId();

      try {
        $blogger->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.bloggers.index'), "success", "Gotovo!", "Bloger dodan.");
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
        $bloggerEdit = Blogger::find($id);

        return view('admin.bloggers.edit')->with(['bloggerEdit' => $bloggerEdit]);
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

      $bloggerEdit = Blogger::find($id);

      $httpRequest->validate([
        'blogger_name' => 'required',
        'blogger_image' => 'image|mimes:jpg,jpeg,png|max:16384'
      ]);

      if ($httpRequest->hasFile('blogger_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $bloggerEdit->name = $httpRequest->blogger_name;
      $directory = FileStorageController::makeDirectory($bloggerEdit->base_storage_path);

      if($headerImageSet) {
        $file = FileStorageController::store($httpRequest->file('blogger_image'), $directory->getFullPath());

        $bloggerEdit->image = $file;
        $bloggerEdit->directory_id = $directory->getDirectoryId();
      } else {
          $bloggerEdit->image = $bloggerEdit->image;
          $bloggerEdit->directory_id = $bloggerEdit->directory_id;
      }

      $bloggerEdit->image_description = $httpRequest->blogger_image_alt;

      try {
        $bloggerEdit->save();
    } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.bloggers.index'), "success", "Gotovo!", "Bloger ažuriran.");
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
        $bloggerDel = Blogger::find($id);

        $directory = FileStorageController::getDirectory($bloggerDel->base_storage_path, $bloggerDel->directory_id);
        Storage::deleteDirectory($directory->getFullPath()); 

        try {
          $bloggerDel = Blogger::where('id', $id)->delete();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.bloggers.index'), "success", "Gotovo!", "Bloger izbrisan.");
        return response()->json($swal->get());
    }
}
