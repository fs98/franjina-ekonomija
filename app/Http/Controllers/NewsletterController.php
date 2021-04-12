<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;
use App\Models\Swal;
use Illuminate\Support\Str;

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
        return view('admin.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $httpRequest)
    {
        $user = NewsletterSubscription::where('subscriber_email', $httpRequest->subscriber_email)->get();
        
        if ($user->isNotEmpty()) {

          if ($user->active == 1) {
            
            $swal = new Swal("Error", 200, Route('index'), "error", "Greška!", "Vi ste već prijavljeni na naš newsletter");
            return response()->json($swal->get());

          } else {

            $user->active == 1;

            try {
              $user->save();
            } catch (Exception $e) {}

            $swal = new Swal("Success", 200, Route($route), "success", "Gotovo!", "Hvala Vam što ste se pretplatili na naš newsletter.");
            return response()->json($swal->get());

          }

        } else {

          $httpRequest->validate([
            'subscriber_email' => 'required|email|unique'
         ]);

          $subscription = new NewsletterSubscription;
          $subscription->subscriber_email = $httpRequest->subscriber_email;
          $subscription->token = Str::random(64);
          $route = $httpRequest->route;

          try {
            $subscription->save();
          } catch (Exception $e) {}

        }
    }

    public function unsubscribe(Request $httpRequest, $email, $token) {

      $unsubscribeUser = NewsletterSubscription::where('subscriber_email', $email)->where('token', $token)->first();
      
      $unsubscribeUser->active = false;

      try {
        $unsubscribeUser->save();
      } catch (Exception $e) {}

      return view('pages.unsubscribe');
    }
    
    public function unsubscription() {
      return view('pages.unsubscription');
    }

    public function unsubscribeLinkPost(Request $httpRequest) {

      $httpRequest->validate([
        'unsubscriber_email' => 'required'
      ]);

      $user = NewsletterSubscription::where('subscriber_email', $httpRequest->unsubscriber_email)->first();
      
      $json = array();
      $json['subscriber_email'] = $user->subscriber_email;
      $json['token'] = $user->token;

      try {
        MailController::sendUnsubscribeLink($json);
      } catch (Exception $e) {}

      $swal = new Swal("Success", 200, Route('index'), "success", "Poslano!", "Email će Vam doći kroz par trenutaka,");
      return response()->json($swal->get());
    }

    public function store(Request $httpRequest)
    {
      $httpRequest->validate([
        'newsletter_subject' => 'required',
        'newsletter_content' => 'required'
      ]);

      $newsletter_subject = $httpRequest->newsletter_subject;
      $newsletter_content = $httpRequest->newsletter_content;

      $userAll = NewsletterSubscription::get(['subscriber_email', 'active','token']);

      MailController::sendNewsletterMail($userAll, $newsletter_content, $newsletter_subject);

      $swal = new Swal("Success", 200, Route('admin.newsletter.index'), "success", "Gotovo!", "Newsletter je poslan svim aktivnim korisnicima");
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
        //
    }
}
