<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Date;

use App\Models\Post;
use App\Models\Project;
use App\Models\Event;
use App\Models\Partner;
use Helper;
use Carbon\Carbon;
use DateTime;

class NavigationControllers extends Controller
{

    //
		public function index()
		{
			// echo Date::now()->format('l j F Y H:i:s');
			// die();
			$postAll = Post::select('title','title_slug','short_description','cover','directory_id')->limit(10)->get();
			$projectAll = Project::select('title','title_slug','short_description','cover','directory_id')->limit(10)->get();

			
			$eventList = Event::select(['id','title','directory_id','cover','date as start','start as start_hour','end as end_hour','zoom_link','description'])->get(); 
		
			$eventListArray = $eventList;
			$eventListArray = $eventListArray->toArray();
			foreach($eventList as $index => $row) {
				if(array_key_exists($index, $eventListArray) && $eventListArray[$index]['id'] == $row->id) {
					if(is_null(end($eventListArray[$index])) || end($eventListArray[$index]) == '') {
						try {
							array_pop($eventListArray[$index]);
						} catch (Exception $e) {}
					}
					$eventListArray[$index]['header_image_url'] = $row->header_image_url;
					$eventListArray[$index]['date'] = (new DateTime($eventListArray[$index]['start']))->format('d.m.Y.');
					$eventListArray[$index]['start_hour'] = (new DateTime($eventListArray[$index]['start_hour']))->format('H:m');
					$eventListArray[$index]['end_hour'] = (new DateTime($eventListArray[$index]['end_hour']))->format('H:m'); 
				}
			}   
			$events = json_encode($eventListArray); 

			return view('pages.home')
				->with(['postAll' => $postAll])
				->with(['projectAll' => $projectAll])
				->with(['events' => $events]);
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
			$partnersAll = Partner::all()->sortBy('name');
			return view('pages.partners')->with(['partnersAll' => $partnersAll]);
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
			$partnersAll = Partner::all()->sortBy('name');
			return view('pages.support')->with(['partnersAll' => $partnersAll]);
		}

		//
		public function projectlist(){
			$now = Carbon::today()->format('Y-m-d'); 

			$projectsActive = Project::where('end', '>=', $now)->get();
			$projectsPassed = Project::where('end', '<', $now)->get();
			return view('pages.projectlist')->with(['projectsActive' => $projectsActive, 'projectsPassed' => $projectsPassed]);;
		}

		public function search(Request $httpRequest) {
			$search = $httpRequest->search_text;
			
			$searchResults = Post::select(['id','cover','directory_id','title','title_slug','short_description'])->where('title', 'LIKE', "%{$search}%")->orWhere('short_description', 'like', "%{$search}%")->paginate(4);
			
			return view('pages.search')->with(['searchResults' => $searchResults]);
		}

}
