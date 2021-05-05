<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;

use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;

use App\Models\Question;
use App\Models\Project; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      
      Paginator::useBootstrap();
          
      $this->unread_questions = Question::where('seen', 0)->count();
      $this->projects_sum = Project::count();
      view()->share('unread_questions', $this->unread_questions);
      view()->share('projects_sum', $this->projects_sum); 
    }
}
