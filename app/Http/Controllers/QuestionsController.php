<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Swal;
use Helper;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct() {
    //   $this->middleware('auth');
    // }

    public function index()
    {
        $questionsAll = Question::orderBy('seen')->get();

        return view('admin.questions.list')->with(['questionsAll' => $questionsAll]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $httpRequest)
    {   
        if ($httpRequest->has('full_name')) {
            $httpRequest->validate([
                'full_name' => 'required',
                'email' => 'required',
                'question' => 'required'
            ]);
        } else {
            $httpRequest->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'question' => 'required'
            ]);
        }

        $questionSingle = new Question;
        
        if($httpRequest->has('full_name')) {
            $questionSingle->full_name = $httpRequest->full_name;
        } else if($httpRequest->has('first_name') && $httpRequest->has('last_name')){
            $questionSingle->full_name = $httpRequest->first_name . ' ' . $httpRequest->last_name;
        }

        if($httpRequest->has('email')) {
          $questionSingle->email = $httpRequest->email;
        }

        if(Helper::isSet($httpRequest->phone_number)) {
            $questionSingle->telephone = $httpRequest->phone_number;
        } else {
            $questionSingle->telephone = NULL;
        }

        $questionSingle->message = $httpRequest->question;

        try {
            $questionSingle->save();
        } catch (Exception $e) {}

        $json = array();
        $json['full_name'] = $questionSingle->full_name;
        $json['email'] = $questionSingle->email;
        $json['telephone'] = $questionSingle->telephone;
        $json['message'] = $questionSingle->message;

        try {
          MailController::sendMail($json);
        } catch (Exception $e) {}

        if ($httpRequest->route == 'home') {
          $swal = new Swal("Success", 200, Route('index'), "success", "Gotovo!", "Vaše pitanje je sačuvano, ubrzo ćemo Vas kontaktirati.");
        } elseif ($httpRequest->route == 'contact') {
          $swal = new Swal("Success", 200, Route('contact'), "success", "Gotovo!", "Vaše pitanje je sačuvano, ubrzo ćemo Vas kontaktirati.");
        } else {
          $swal = new Swal("Success", 200, Route('about'), "success", "Gotovo!", "Vaše pitanje je sačuvano, ubrzo ćemo Vas kontaktirati.");
        }

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
        $questionSingleDel = Question::where('id', $id)->delete();

        $swal = new Swal("Success", 200, Route('admin.questions.index'), "success", "Gotovo!", "Pitanje izbrisano");
        return response()->json($swal->get());
    }
}
