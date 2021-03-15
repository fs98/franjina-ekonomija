<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationControllers extends Controller
{

    //
		public function index()
		{

			return view('pages.home');

		}

		// 
		public function contact(){
			return view('pages.contact');
		}

		// 
		public function partners(){
			return view('pages.partners');
		}

}
