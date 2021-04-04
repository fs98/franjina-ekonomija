<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;
use Helper;

class SliderImage extends BaseModel
{
    use HasFactory;

    protected $appends = [
        'post_url' => '', 
        'header_image_url' => '',  
        'formatted_publish_date' => '', 
        'base_storage_path' => ''
    ];

    protected $fillable = [
        'slider_id',
        'directory_id',
        'image',
        'image_description',
        'oder'
    ];

    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.sliders');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.sliders') . $this->directory_id . '/' . $this->image);
    }
}
