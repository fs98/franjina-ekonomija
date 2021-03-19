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

		// 
		public function about(){
			return view('pages.about');
		}

		//
		public function activities(){
			return view('pages.activities');
		}

		//
		public function blogpost(){
			return view('pages.blogpost');
		}

		//
		public function blog(){
			return view('pages.blog');
		}

		//
		public function support(){
			return view('pages.support');
		}

		//
		public function projectlist(){
			return view('pages.projectlist');
		}

		//
		public function project(){
			return view('pages.project');
		}

}
