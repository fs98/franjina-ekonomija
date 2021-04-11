<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;
use App\Models\Swal;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptionsAll = NewsletterSubscription::all();
        return view('admin.newsletter.list')->with(['subscriptionsAll' => $subscriptionsAll]);
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
    public function subscribe(Request $httpRequest)
    {
        $httpRequest->validate([
            'subscriber_email' => 'required|email'
        ]);

        $subscription = new NewsletterSubscription;
        $subscription->subscriber_email = $httpRequest->subscriber_email;
        $route = $httpRequest->route;

        try {
            $subscription->save();
        } catch (Exception $e) {}


        $swal = new Swal("Success", 200, Route($route), "success", "Gotovo!", "Hvala Vam što ste se pretplatili na naš newsletter.");
        return response()->json($swal->get());
    }

    public function store(Request $httpRequest)
    {
    
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
        //
    }
}
