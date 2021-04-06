<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

use Helper;
use DateTime;

class ProjectImage extends BaseModel
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
    	'cover',
        'cover_image_description',
    	'project_id'
    ];

    public function getBaseStoragePathAttribute() {
        return config('api.storage_paths.projects');
    }

    public function getHeaderImageUrlAttribute() {
    	return asset(config('api.storage_paths_v2.projects') . $this->directory_id . '/' . $this->cover);
    }

    public function project() {
    	return $this->belongsTo(Project::class, 'project_id');
    }
}
