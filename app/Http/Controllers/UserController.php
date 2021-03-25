<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Swal;

use Helper;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAll = User::all();

        return view('admin.users.list')->with(['userAll' => $userAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $httpRequest) {
        $user = auth()->user();
        if(empty($user)) abort(404);
        if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);

        $httpRequest->validate([
            'post_title' => 'required|max:512',
            'post_title_slug' => 'required|max:512',
            'post_headline' => 'required|max:1024',
            'post_keywords' => 'required|max:256',
            'post_publish_date' => 'required|date',
            'post_header_image' => 'required|image|mimes:jpg,jpeg,png|max:16384',
            'post_header_image_description' => 'nullable|max:256',
            'post_header_image_url' => 'nullable',
            'post_status' => 'required|max:8',
            'post_content' => 'nullable'
        ]);

        // $postSingle = new Post;
        // $postSingle->title = $httpRequest->post_title;
        // $postSingle->title_slug = $httpRequest->post_title_slug;
        // $postSingle->headline = $httpRequest->post_headline;
        // $postSingle->keywords = $httpRequest->post_keywords;
        // $postSingle->publish_date = $post_publish_date;
        // $directory = FileStorageController::makeDirectory($postSingle->base_storage_path);
        // if($headerImageSet) {
        //     $file = FileStorageController::store($httpRequest->file('post_header_image'), $directory->getFullPath());
        //     $postSingle->header_image = $file;
        //     $postSingle->header_image_alt = $httpRequest->post_header_image_description;
        // } else {
        //     $postSingle->header_image = NULL;
        //     $postSingle->header_image_alt = NULL;
        // }
        // if(Helper::isSet($httpRequest->post_header_image_url)) {
        //     $postSingle->link = $httpRequest->post_header_image_url;
        // } else {
        //     $postSingle->link = NULL;
        // }
        // if(Helper::isSet($httpRequest->post_content)) {
        //     $postSingle->content = $httpRequest->post_content;
        // } else {
        //     $postSingle->content = NULL;
        // }
        // $postSingle->status = $httpRequest->post_status;
        // $postSingle->user_id = $user->id;
        // $postSingle->folder_id = $directory->getDirectoryId();
        // $postSingle->created_at = $currentDateTime;
        // $postSingle->updated_at = NULL;

        try {
            // $postSingle->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.users.index'), "success", "Success!", "User added.");
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
        $swal = new Swal("Success", 200, Route('admin.users.index'), "success", "Success!", "User deleted.");
        return response()->json($swal->get());
    }
}
