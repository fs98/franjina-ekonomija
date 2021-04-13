<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gdpr;
use App\Models\Swal;

class GdprController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
      $gdpr = Gdpr::where('id', '1')->first();
      return view('admin.gdpr.show')->with(['gdpr'=>$gdpr]);
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
    public function update(Request $httpRequest)
    {
      $user = auth()->user();
      if(empty($user)) abort(404);
      if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);

      $id = '1';
      $gdprEdit = Gdpr::find($id);

      $gdprEdit->content = $httpRequest->gdpr_content;

      try {
        $gdprEdit->save();
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('admin.gdpr.show', ['gdpr' => '1']), "success", "Gotovo!", "Projekat ažuriran.");
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
        //
    }
}
