<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use App\Models\Swal;

use Helper;

class PostsController extends Controller
{ 
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $postAll = Post::select('id','title','short_description','cover','directory_id','created_at')->where('user_id', auth()->user()->id)->orderByDesc('created_at')->get();
        

        return view('admin.posts.list')->with(['postAll' => $postAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.create');
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
            'post_title' => 'required',
            'post_title_slug' => 'unique:posts,title_slug|required|max:512',
            'post_short_description' => 'required|max:256',
            'post_keywords' => 'required|max:256',
            'post_header_image' => 'required|image|mimes:jpg,jpeg,png|max:16384',
            'post_header_image_alt' => 'nullable',
            'post_content' => 'required'
        ]);

        if ($httpRequest->hasFile('post_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }

        $postSingle = new Post;
        $postSingle->title = $httpRequest->post_title;
        $postSingle->title_slug = $httpRequest->post_title_slug;
        $postSingle->short_description = $httpRequest->post_short_description;
        $postSingle->keywords = $httpRequest->post_keywords;

        $postSingle->directory_id = NULL;

        $directory = FileStorageController::makeDirectory($postSingle->base_storage_path);

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('post_header_image'), $directory->getFullPath());

            $postSingle->cover = $file;
            $postSingle->cover_image_description = $httpRequest->post_header_image_alt;
        } else {
            $postSingle->cover = NULL;
            $postSingle->cover_image_description = NULL;
        }

        $postSingle->directory_id = $directory->getDirectoryId();

        $content = $httpRequest->post_content;
        $dom = new \DomDocument();
        $dom->loadHtml('<?xml encoding="UTF-8">' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);  
        
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            // Store the image
            if(Helper::isSet($type)) {
              $file_name = FileStorageController::storeBase64($data, $directory->getDirectoryId(), $type);
            }
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $file_name);
        }

        $content = $dom->saveHTML();
        $postSingle->content = $content;  

        try {
            auth()->user()->posts()->save($postSingle);
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.posts.index'), "success", "Success!", "Post dodan.");
        return response()->json($swal->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $postSingle = $post;
        return view('admin.posts.edit')->with(['postSingle' => $postSingle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $httpRequest, Post $post)
    {
        $user = auth()->user();
        if(empty($user)) abort(404);
        if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);

        $postEdit = $post;

        $httpRequest->validate([
            'post_title' => 'required',
            'post_title_slug' => 'required|max:512',
            'post_short_description' => 'required|max:256',
            'post_keywords' => 'required|max:256',
            'post_header_image' => 'image|mimes:jpg,jpeg,png|max:16384',
            'post_header_image_alt' => 'nullable',
            'post_content' => 'required'
        ]);

        if ($httpRequest->hasFile('post_header_image')) {
            $headerImageSet = true;
        } else {
            $headerImageSet = false;
        }
        
        $directory = FileStorageController::getDirectory($postEdit->base_storage_path, $postEdit->directory_id);

        $content = $httpRequest->post_content;
        $dom = new \DomDocument();
        $dom->loadHtml('<?xml encoding="UTF-8">' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img) {
            $data = $img->getAttribute('src');

            // Works
            if(strpos($data, 'data:image/jpeg') == false && strpos($data, 'data:image/jpeg') !== 0 && strpos($data, 'data:image/png') == false && strpos($data, 'data:image/png') !== 0) {
              continue;
            }

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            // Store the image
            if(Helper::isSet($type)) {
              $file_name = FileStorageController::storeBase64($data, $directory->getDirectoryId(), $type);
            }

            $img->removeAttribute('src');
            $img->setAttribute('src', $file_name);
        }

        $content = $dom->saveHTML(); 
 
        $postEdit->title = $httpRequest->post_title;
        $postEdit->title_slug = $httpRequest->post_title_slug;
        $postEdit->short_description = $httpRequest->post_short_description;
        $postEdit->keywords = $httpRequest->post_keywords;

        if($headerImageSet) {
            $file = FileStorageController::store($httpRequest->file('post_header_image'), $directory->getFullPath());

            $postEdit->cover = $file;
            $postEdit->directory_id = $directory->getDirectoryId();
        } else {
            $postEdit->cover = $postEdit->cover;
            $postEdit->directory_id = $postEdit->directory_id;
        }

        $postEdit->cover_image_description = $httpRequest->post_header_image_alt;

        $postEdit->content = $content;

        try {
            $postEdit->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.posts.index'), "success", "Gotovo!", "Post ažuriran.");
        return response()->json($swal->get());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $postSingle = $post;

        $directory = FileStorageController::getDirectory($postSingle->base_storage_path, $postSingle->directory_id);
        Storage::deleteDirectory($directory->getFullPath()); 

        try {
          $postSingle->delete();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('admin.posts.index'), "success", "Gotovo!", "Post izbrisan.");
        return response()->json($swal->get());
    }
}
