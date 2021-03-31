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
    public function index()
    {
        $questionsAll = Question::orderBy('created_at', 'asc')->get();

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

        $httpRequest->validate([
            'full_name' => 'required',
            'email' => 'required',
            'question' => 'required'
        ]);

        $questionSingle = new Question;
        $questionSingle->full_name = $httpRequest->full_name;
        $questionSingle->email = $httpRequest->email;
        
        if (Helper::isSet($httpRequest->phone_number)) {
            $questionSingle->telephone = $httpRequest->phone_number;
        } else {
            $questionSingle->telephone = NULL;
        }

        $questionSingle->message = $httpRequest->question;

        try {
            $questionSingle->save();
        } catch (Exception $e) {}

        $swal = new Swal("Success", 200, Route('contact'), "success", "Gotovo!", "Vaše pitanje je sačuvano, ubrzo ćemo Vas kontaktirati.");
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
