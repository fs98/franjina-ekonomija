<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Helper;
use DateTime;

class NewsletterSubscription extends Model
{
    use HasFactory;

    protected $appends = [
        'status' => '',
        'formatted_publish_date' => ''
    ];

    protected $fillable = [
        'subscriber_email',
        'active',
        'created_at'
    ];

    public function getStatusAttribute() {
        if ($this->active === 1) {
            return "<span class='text-success'>Aktivan</span>";
        } else {
            return "<span class='text-danger'>Neaktivan</span>";
        }
    }

    public function getFormattedPublishDateAttribute() {
        if(Helper::isSet($this->created_at)) {
            try {
                return (new DateTime($this->created_at))->format('d. m. Y.');
            } catch (Exception $e) {}
        }
    }
}
