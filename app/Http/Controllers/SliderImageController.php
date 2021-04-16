<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Swal;
use App\Models\SliderImage;
use App\Models\Slider;


class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'slider_image' => 'required|image|mimes:jpg,jpeg,png|max:16384',
        'slider_image_alt' => 'nullable',
        'slider_image_order' => 'nullable'
      ]);

      if ($httpRequest->hasFile('slider_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $sliderImage = new SliderImage;

      $sliderImage->directory_id = NULL;

      $directory = FileStorageController::makeDirectory($sliderImage->base_storage_path);

      if($headerImageSet) {
          $file = FileStorageController::store($httpRequest->file('slider_image'), $directory->getFullPath());

          $sliderImage->image = $file;
          $sliderImage->image_description = $httpRequest->slider_image_alt;
      } else {
          $sliderImage->image = NULL;
          $sliderImage->image_description = NULL;
      }

      $sliderImage->directory_id = $directory->getDirectoryId();
      $sliderImage->order = $httpRequest->slider_image_order;
      $sliderImage->slider_id = $httpRequest->slider_id;
      
      try {
        $sliderImage->save();
      } catch (Exception $e) {}
      

      $swal = new Swal("Success", 200, Route('admin.sliders.edit', ['slider' => $sliderImage->slider_id]), "success", "Gotovo!", "Slika dodana.");
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
        $sliderImage = SliderImage::find($id);
        return view('admin.sliders.slider-image-edit')->with(['sliderImage' => $sliderImage]);
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

      $sliderImageEdit = SliderImage::find($id);

      $httpRequest->validate([
        'slider_image' => 'image|mimes:jpg,jpeg,png|max:16384',
        'slider_image_alt' => 'nullable',
        'slider_image_order' => 'nullable'
      ]);

      if ($httpRequest->hasFile('slider_image')) {
        $headerImageSet = true;
      } else {
          $headerImageSet = false;
      }

      $directory = FileStorageController::makeDirectory($sliderImageEdit->base_storage_path);

      if($headerImageSet) {
          $file = FileStorageController::store($httpRequest->file('slider_image'), $directory->getFullPath());

          $sliderImageEdit->image = $file;
          $sliderImageEdit->directory_id = $directory->getDirectoryId();
      } else {
          $sliderImageEdit->image = $sliderImageEdit->image;
          $sliderImageEdit->directory_id = $sliderImageEdit->directory_id;
      }

      $sliderImageEdit->image_description = $httpRequest->slider_image_alt;
      $sliderImageEdit->order = $httpRequest->slider_image_order;
    
      try {
        $sliderImageEdit->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.sliders.edit', ['slider' => $sliderImageEdit->slider_id]), "success", "Gotovo!", "Slika ažurirana.");
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
        $sliderImageDel = SliderImage::where('id', $id)->first();
       
        $directory = FileStorageController::getDirectory($sliderImageDel->base_storage_path, $sliderImageDel->directory_id);
        Storage::deleteDirectory($directory->getFullPath()); 

        try {
          $sliderImageDel->delete();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.sliders.edit', ['slider' => $sliderImageDel->slider_id]), "success", "Gotovo!", "Slika izbrisana.");
        return response()->json($swal->get());

    }
}
