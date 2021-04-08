<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $appends = [
      'status' => '', 
    ];  

    protected $fillable = [
      'full_name',
      'email',
      'telephone',
      'message',
      'seen'
    ];

    public function getStatusAttribute() {
      if ($this->seen === 1) {
        return '<span class="text-success">Pročitano</span>';
      } else {
        return '<span class="text-danger">Nepročitano</span>';
      }
    }
}
