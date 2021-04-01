<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;
use DateTime;

class Post extends BaseModel
{
    use HasFactory;

    protected $appends = [
        'post_url' => '', 
        'header_image_url' => '',  
        'formatted_publish_date' => '', 
        'base_storage_path' => ''
    ];

    protected $fillable = [
    	'cover',
        'cover_image_description',
    	'title',
        'short_description',
        'title_slug',
        'keywords',
    	'content'
    ];
    
    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.posts');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.posts') . $this->directory_id . '/' . $this->cover);
    }

    public function getFormattedPublishDateAttribute() {
        if(Helper::isSet($this->created_at)) {
            try {
                return (new DateTime($this->created_at))->format('d. m. Y');
            } catch (Exception $e) {}
        }
    }

    public function getTitleAttribute($value) {
        return $this->checkIfEmpty($value, "N\A");
    }
}
