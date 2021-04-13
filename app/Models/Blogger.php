<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;

class Blogger extends BaseModel
{
    use HasFactory;

    protected $appends = [
      'post_url' => '', 
      'header_image_url' => '',  
      'formatted_publish_date' => '', 
      'base_storage_path' => ''
    ];

    protected $fillable = [
      'directory_id',
      'image',
      'image_description',
      'name'
    ];

    public function getBaseStoragePathAttribute() {
      return config('api.storage_paths.bloggers');
    }

    public function getHeaderImageUrlAttribute() {
      return asset(config('api.storage_paths_v2.bloggers') . $this->directory_id . '/' . $this->image);
    }
}
