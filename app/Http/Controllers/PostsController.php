<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Swal;

use Helper;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postAll = Post::all();
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
            'title' => 'required',
            'post_header_image' => 'required|mimes:jpeg,png|max:1014',
            'editordata' => 'required'
        ]);
        
        $postSingle = new Post();
        $postSingle->title = $httpRequest->title;
        $postSingle->cover = $httpRequest->post_header_image;
        $postSingle->content = $httpRequest->editordata;

        try {
            $postSingle->save();
        } catch (Exception $e) {
        }

        $swal = new Swal("Success", 200, Route('admin.posts.index'), "success", "Success!", "Post dodan.");
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
        $postSingle = Post::find($id);
        return view('admin.posts.edit')->with(['postSingle' => $postSingle]);
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
