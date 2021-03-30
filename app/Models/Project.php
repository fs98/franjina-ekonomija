<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;
use DateTime;

use Carbon\Carbon;

class Project extends BaseModel
{
    use HasFactory;

    protected $appends = [
        'post_url' => '', 
        'header_image_url' => '',  
        'formatted_publish_date' => '', 
        'base_storage_path' => '',
        'percentage' => '',
        'days_left' => '',
    ];    

    protected $fillable = [
        'title',
        'title_slug',
        'keywords',
        'cover',
        'cover_image_description',
        'content',
        'start',
        'end',
        'likes',
        'investors',
        'money_goal',
        'money_collected'
    ];

    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.projects');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.projects') . $this->directory_id . '/' . $this->cover);
    }

    public function getFormattedPublishDateAttribute() {
        if(Helper::isSet($this->created_at)) {
            try {
                return (new DateTime($this->created_at))->format('d. m. Y');
            } catch (Exception $e) {}
        }
    }

    // Get percentage of collected money
    public function getPercentageAttribute() {
        $percentage = ($this->money_collected / $this->money_goal ) * 100;
        return round($percentage,2);
    }

    // Get number of days left till the end of project
    public function getDaysLeftAttribute() {
        $today = Carbon::today();
        $project_end = new Carbon($this->end);
        $days_left = $today->diffInDays($project_end);
        return $days_left;

    }

}
