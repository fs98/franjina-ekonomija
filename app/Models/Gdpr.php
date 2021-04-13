<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gdpr extends Model
{
    use HasFactory;

    protected $table = 'gdpr';

    protected $fillable = [
      'content'
    ];
}
