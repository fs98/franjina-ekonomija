<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use \DateTime;
use Route;
class Helper
{

    // Check if var is set 
    public static function isSet($arg = NULL) {
        if(isset($arg) && !is_null($arg) && $arg !== '') {
            return 1;
        } else {
            return 0;
        }
    }

    // Month in Croatian
    public static function enToHrMonth($month = NULL) {
      $currentDateTimeRaw = new DateTime; 
      $currentDateTimeMonth = $currentDateTimeRaw->format('m');

      if (Helper::isSet($month)) {
        if ($month < 13 && $month > 0) {
          $month = $month;
        }
        else {
        $month = $currentDateTimeMonth;
        }
      }
      else {
        $month = $currentDateTimeMonth;
      }

      if (Helper::isSet($month)) {
        switch ($month) {
                case '01':
                    $month = "Siječanj";
                    break;
                case '02':
                    $month = "Veljača";
                    break;
                case '03':
                    $month = "Ožujak";
                    break;
                case '04':
                    $month = "Travanj";
                    break;
                case '05':
                    $month = "Svibanj";
                    break;
                case '06':
                    $month = "Lipanj";
                    break;
                case '07':
                    $month = "Srpanj";
                    break;
                case '08':
                    $month = "Kolovoz";
                    break;
                case '09':
                    $month = "Rujan";
                    break;
                case '10':
                    $month = "Listopad";
                    break;
                case '11':
                    $month = "Studeni";
                    break;
                case '12':
                   $month = "Prosinac";
                    break;
                default:
                    return 0;
                    break;
            }
            return($month);
      } 

    }

}