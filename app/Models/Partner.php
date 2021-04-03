<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;
use DateTime;

class Partner extends BaseModel
{
    use HasFactory;

    protected $appends = [
        'post_url' => '', 
        'header_image_url' => '',   
        'base_storage_path' => ''
    ];

    protected $fillable = [
        'name',
        'directory_id',
        'cover',
        'cover_image_description',
        'website_url'
    ];

    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.partners');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.partners') . $this->directory_id . '/' . $this->cover);
    }
}
