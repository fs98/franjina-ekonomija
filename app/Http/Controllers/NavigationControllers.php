<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Date;

use App\Models\Post;
use App\Models\Project;
use Helper;

class NavigationControllers extends Controller
{

    //
		public function index()
		{
			// echo Date::now()->format('l j F Y H:i:s');
			// die();
			$postAll = Post::select('title','title_slug','short_description','cover','directory_id')->limit(10)->get();
			$projectAll = Project::select('title','title_slug','short_description','cover','directory_id')->limit(10)->get();
			return view('pages.home')
				->with(['postAll' => $postAll])
				->with(['projectAll' => $projectAll]);
		}

		public function show($title_slug) 
		{
			$postSingle = Post::where('title_slug', $title_slug)->firstOrFail(); 
			return view('pages.blogPost')->with(['postSingle' => $postSingle]);
		}

		public function showProject($title_slug) 
		{
			$projectSingle = Project::where('title_slug', $title_slug)->firstOrFail();
			return view('pages.project')->with(['projectSingle' => $projectSingle]);
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
			$postAll = Post::select('title','title_slug','short_description','cover','directory_id')->paginate(4);
			return view('pages.blog')->with(['postAll' => $postAll]);
		}

		//
		public function support(){
			return view('pages.support');
		}

		//
		public function projectlist(){
			$projectAll = Project::all();
			return view('pages.projectlist')->with(['projectAll' => $projectAll]);;
		}
 

}
