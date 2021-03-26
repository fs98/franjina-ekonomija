<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $userAll = User::select('id','name','email','created_at','status')->get();
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $userSingle = new User();
        $userSingle->name = $httpRequest->name;
        $userSingle->email = $httpRequest->email;
        $userSingle->status = 'active';
        $rawPassword = $httpRequest->password;
        $userSingle->password = Hash::make($rawPassword);
        
        try {
            $userSingle->save();
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
        $userSingle = User::find($id);
        return view('admin.users.show')->with(['userSingle' => $userSingle]);
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
        $userSignleDel = User::where('id', $id)->delete();

        $swal = new Swal("Success", 200, Route('admin.users.index'), "success", "Success!", "User deleted.");
        return response()->json($swal->get());
    }
}
