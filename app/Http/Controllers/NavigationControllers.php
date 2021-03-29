<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Date;

use App\Models\Post;
use Helper;

class NavigationControllers extends Controller
{

    //
		public function index()
		{
			// echo Date::now()->format('l j F Y H:i:s');
			// die();
			$postAll = Post::select('title','title_slug','short_description','cover','directory_id')->limit(10)->get();
			return view('pages.home')->with(['postAll' => $postAll]);
		}

		public function show($title_slug) 
		{
			$postSingle = Post::where('title_slug', $title_slug)->firstOrFail(); 
			return view('pages.blogPost')->with(['postSingle' => $postSingle]);
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
