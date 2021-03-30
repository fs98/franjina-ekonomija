<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;
use DateTime;

class Event extends BaseModel
{
    use HasFactory;

    protected $appends = [
        'post_url' => '', 
        'header_image_url' => '',  
        'formatted_event_date' => '', 
        'base_storage_path' => ''
    ];

    protected $fillable = [
        'title',
        'cover',
        'cover_image_description',
        'date',
        'start',
        'end',
        'zoom_link',
        'description'
    ];

    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.events');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.events') . $this->directory_id . '/' . $this->cover);
    }

    public function getFormattedEventDateAttribute() {
        if(Helper::isSet($this->created_at)) {
            try {
                return (new DateTime($this->created_at))->format('d. m. Y');
            } catch (Exception $e) {}
        }
    }

    public function getTitleAttribute($value) {
        return $this->checkIfEmpty($value);
    }
}
