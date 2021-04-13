<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Activity extends BaseModel
{
    use HasFactory;

    protected $appends = [ 
      'header_image_url' => '',  
      'formatted_publish_date' => '', 
      'base_storage_path' => ''
    ];

    protected $fillable = [
      'directory_id',
      'image',
      'image_description',
      'name',
      'description'
    ];

    public function getBaseStoragePathAttribute() {
      return config('api.storage_paths.activities');
    }

    public function getHeaderImageUrlAttribute() {
      return asset(config('api.storage_paths_v2.activities') . $this->directory_id . '/' . $this->image);
    }
}
