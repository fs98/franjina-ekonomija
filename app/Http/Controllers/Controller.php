<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; 

use App\Models\Question;
use App\Models\Project;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $unread_questions;
    protected $projects_sum;

    public function __construct() {
      $this->unread_questions = Question::where('seen', 0)->count();
      $this->projects_sum = Project::count();
      View::share('unread_questions', $this->unread_questions);
      View::share('projects_sum', $this->projects_sum);
    }
}
