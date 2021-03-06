<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Date;

use App\Models\Post;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Blogger;
use App\Models\Activity;
use App\Models\Gdpr;
use Helper;
use Carbon\Carbon;
use DateTime;

class NavigationControllers extends Controller
{

    //
		public function index()
		{ 
			$postAll = Post::select('title','title_slug','short_description','cover','cover_image_description','directory_id')->orderByDesc('created_at')->limit(10)->get();
			$projectAll = Project::select('title','title_slug','short_description','cover','cover_image_description','directory_id')->orderByDesc('created_at')->limit(10)->get();
      $heroSlider = SliderImage::where('slider_id', 1)->orderBy('order')->get();
      $calendarSlider = SliderImage::where('slider_id', 2)->orderBy('order')->get();

			
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
					$eventListArray[$index]['formatted_date'] = (new DateTime($eventListArray[$index]['start']))->format('d.m.Y.');
          if (Helper::isset($eventListArray[$index]['start_hour'])) { 
            $eventListArray[$index]['start_hour'] = date('G:i', strtotime($eventListArray[$index]['start_hour']));
          } else {
            $eventListArray[$index]['start_hour'] = NULL;
          }
          if (Helper::isset($eventListArray[$index]['end_hour'])) {
            $eventListArray[$index]['end_hour'] = date('G:i', strtotime($eventListArray[$index]['end_hour'])); 
          } else {
            $eventListArray[$index]['end_hour'] = NULL;
          }
				}
			}  

			$events = json_encode($eventListArray); 

			return view('pages.home')
				->with(['postAll' => $postAll])
				->with(['projectAll' => $projectAll])
				->with(['events' => $events])
        ->with(['heroSlider' => $heroSlider])
        ->with(['calendarSlider' => $calendarSlider]);
		}

		public function show($title_slug) 
		{
			$postSingle = Post::where('title_slug', $title_slug)->firstOrFail(); 
			return view('pages.blogpost')->with(['postSingle' => $postSingle]);
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
			$partnersAll = Partner::orderBy('name')->get();
			return view('pages.partners')->with(['partnersAll' => $partnersAll]);
		}

		// 
		public function about(){
      $sliderImages = SliderImage::where('slider_id', 3)->orderBy('order')->get();
			return view('pages.about')->with(['sliderImages' => $sliderImages]);
		}

		//
		public function activities(){
      $activitiesAll = Activity::select('name','directory_id','image','image_description','description')->get();
			return view('pages.activities')->with(['activitiesAll' => $activitiesAll]);
		}

    // 
    public function gdpr(){
      $id = 1;
      $gdprContent = Gdpr::find($id); 
      return view('pages.gdpr')->with(['gdprContent' => $gdprContent]);
    }

		//
		public function blog(){
      $bloggersAll = Blogger::select('name', 'directory_id', 'image', 'image_description')->get();
			$postAll = Post::select('title','title_slug','short_description','cover','directory_id','cover_image_description','keywords')->orderByDesc('created_at')->paginate(4);
			return view('pages.blog')
        ->with(['postAll' => $postAll])
        ->with(['bloggersAll' => $bloggersAll]);
		}

		//
		public function support(){
			$partnersAll = Partner::orderBy('name')->get();
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
      $searchResultsCount = $searchResults->count();
			return view('pages.search')->with(['searchResults' => $searchResults, 'searchResultsCount' => $searchResultsCount]);
		}

}
