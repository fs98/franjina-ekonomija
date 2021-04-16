<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Swal;

use Helper;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectAll = Project::all();

        return view('admin.projects.list')->with(['projectAll' => $projectAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
            'project_title' => 'required',
            'project_title_slug' => 'unique:projects,title_slug|required|max:512',
            'project_short_description' => 'required|max:256',
            'project_keywords' => 'required|max:256',
            'project_header_image' => 'required|image|mimes:jpg,jpeg,png|max:16384',
            'project_header_image_alt' => 'nullable',
            'project_start_date' => 'required',
            'project_end_date' => 'required',
            'project_content' => 'required',
            'gallery_photos' => 'nullable',
            'gallery_photos.*' => 'nullable|image|mimes:jpg,jpeg,png|max:12288'
        ]);

        if ($httpRequest->hasFile('project_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        if($httpRequest->hasFile('gallery_photos.*')) {
          $galleryImagesSet = true;
        } else {
          $galleryImagesSet = false;
        }


        $projectSingle = new Project;
        $projectSingle->title = $httpRequest->project_title;
        $projectSingle->title_slug = $httpRequest->project_title_slug;
        $projectSingle->short_description = $httpRequest->project_short_description;
        $projectSingle->keywords = $httpRequest->project_keywords;
        $projectSingle->start = $httpRequest->project_start_date;
        $projectSingle->end = $httpRequest->project_end_date;

        if (Helper::isSet($httpRequest->project_donations)) {
            $projectSingle->donations = true;
        } else {
            $projectSingle->donations = false;
        }

        if (Helper::isSet($httpRequest->project_money_goal)) {
            $projectSingle->money_goal = $httpRequest->project_money_goal;
        } else {
            $projectSingle->money_goal = NULL;
        }

        if (Helper::isSet($httpRequest->project_money_collected)) {
            $projectSingle->money_collected = $httpRequest->project_money_collected;
        } else {
            $projectSingle->money_collected = NULL;
        }

        if (Helper::isSet($httpRequest->project_money_investors)) {
            $projectSingle->investors = $httpRequest->project_money_investors;
        } else {
            $projectSingle->investors = NULL;
        }

        $projectSingle->directory_id = NULL;

        $directory = FileStorageController::makeDirectory($projectSingle->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('project_header_image'), $directory->getFullPath());

            $projectSingle->cover = $file;
            $projectSingle->cover_image_description = $httpRequest->project_header_image_alt;
        } else {
            $projectSingle->cover = NULL;
            $projectSingle->cover_image_description = NULL;
        }

        $projectSingle->directory_id = $directory->getDirectoryId();

        if (Helper::isSet($httpRequest->project_content)) {
            $projectSingle->content = $httpRequest->project_content;
        } else {
            $projectSingle->content = NULL;
        }

        try {
            $projectSingle->save();
        } catch (Exception $e) {}

        if($galleryImagesSet) {
          foreach($httpRequest->file('gallery_photos.*') as $photo) {
            $file = FileStorageController::store($photo, $directory->getFullPath());

            $projectPicture = new ProjectImage;
            $projectPicture->cover = $file;
            $projectPicture->directory_id = $directory->getDirectoryId();
            $projectPicture->project_id = $projectSingle->id;
            $projectPicture->save();
          }
        }
        
        $swal = new Swal("Success", 200, Route('admin.projects.index'), "success", "Gotovo!", "Projekat dodan.");
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
        $projectSingle = Project::find($id);
        $projectImages = ProjectImage::where('project_id', $id)->get();
        return view('admin.projects.edit')->with([
            'projectSingle' => $projectSingle,
            'projectImages' => $projectImages
            ]);
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

        $projectEdit = Project::find($id);

        $httpRequest->validate([
            'project_title' => 'required',
            'project_title_slug' => 'required|max:512',
            'project_short_description' => 'required|max:256',
            'project_keywords' => 'required|max:256',
            'project_header_image' => 'image|mimes:jpg,jpeg,png|max:16384',
            'project_header_image_alt' => 'nullable',
            'project_start_date' => 'required',
            'project_end_date' => 'required',
            'project_content' => 'required',
            'gallery_photos' => 'nullable',
            'gallery_photos.*' => 'nullable|image|mimes:jpg,jpeg,png|max:12288'
        ]);
        
        
        if ($httpRequest->hasFile('project_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        if($httpRequest->hasFile('gallery_photos.*')) {
          $galleryImagesSet = true;
        } else {
          $galleryImagesSet = false;
        }

        $projectEdit->title = $httpRequest->project_title;
        $projectEdit->title_slug = $httpRequest->project_title_slug;
        $projectEdit->short_description = $httpRequest->project_short_description;
        $projectEdit->keywords = $httpRequest->project_keywords;
        $projectEdit->start = $httpRequest->project_start_date;
        $projectEdit->end = $httpRequest->project_end_date;

        if (Helper::isSet($httpRequest->project_donations)) {
            $projectEdit->donations = true;
        } else {
            $projectEdit->donations = false;
        }

        if (Helper::isSet($httpRequest->project_money_goal)) {
            $projectEdit->money_goal = $httpRequest->project_money_goal;
        } else {
            $projectEdit->money_goal = NULL;
        }

        if (Helper::isSet($httpRequest->project_money_collected)) {
            $projectEdit->money_collected = $httpRequest->project_money_collected;
        } else {
            $projectEdit->money_collected = NULL;
        }

        if (Helper::isSet($httpRequest->project_money_investors)) {
            $projectEdit->investors = $httpRequest->project_money_investors;
        } else {
            $projectEdit->investors = NULL;
        }

        $directory = FileStorageController::makeDirectory($projectEdit->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('project_header_image'), $directory->getFullPath());

            $projectEdit->cover = $file;
            $projectEdit->directory_id = $directory->getDirectoryId();
        } else {
            $projectEdit->cover = $projectEdit->cover;
            $projectEdit->directory_id = $projectEdit->directory_id;
        }

        $projectEdit->cover_image_description = $httpRequest->project_header_image_alt;

        if (Helper::isSet($httpRequest->project_content)) {
            $projectEdit->content = $httpRequest->project_content;
        } else {
            $projectEdit->content = NULL;
        }   

        try {
            $projectEdit->save();
        } catch (Exception $e) {}

        if($galleryImagesSet) {
          foreach($httpRequest->file('gallery_photos.*') as $photo) {
            $file = FileStorageController::store($photo, $directory->getFullPath());

            $projectPicture = new ProjectImage;
            $projectPicture->cover = $file;
            $projectPicture->directory_id = $directory->getDirectoryId();
            $projectPicture->project_id = $projectEdit->id;
            $projectPicture->save();
          }
        }

        $swal = new Swal("Success", 200, Route('admin.projects.index'), "success", "Gotovo!", "Projekat ažuriran.");
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
        $projectEditDel = Project::find($id);

        $projectImagesDel = ProjectImage::where('project_id', $id)->get();
        
        foreach ($projectImagesDel as $key => $projectImage) {
          $directory = FileStorageController::getDirectory($projectImage->base_storage_path, $projectImage->directory_id);
          Storage::deleteDirectory($directory->getFullPath()); 
        }

        try {
          $projectEditDel = Project::where('id', $id)->delete();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.projects.index'), "success", "Gotovo!", "Projekat izbrisan.");
        return response()->json($swal->get());
    }
}
