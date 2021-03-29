<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Helper;

class BaseModel extends Model
{
    // Default error
    private $error = "N/A";

    public function checkIfEmpty($var, $error = NULL) {
        if(Helper::isSet($var)) {
            return $var;
        } else {
            if(Helper::isSet($error)) {
                return $error;
            } else {
                return $this->error;
            }
        }
    }
}
