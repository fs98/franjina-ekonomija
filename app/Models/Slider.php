<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class Slider extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place'
    ];

    public function photos() {
      return $this->hasMany(SliderImage::class, 'slider_id', 'id');
    }
}
