<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

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
}
