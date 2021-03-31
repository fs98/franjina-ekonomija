<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use \DateTime;
use Helper;

class MailController extends Controller
{
    public static function sendVerificationEmail($userSingle = NULL) {
    	$user = auth()->user();
        if(empty($user)) abort(404);
        if(!isset($user->id) || $user->id === NULL || $user->id === '') abort(404);

    	if(!isset($userSingle) || is_null($userSingle) || $userSingle === '') abort(404);
    	if(!isset($userSingle->email) || is_null($userSingle->email) || $userSingle->email === '') abort(404);
        if(!isset($userSingle->verification_token) || is_null($userSingle->verification_token) || $userSingle->verification_token === '') abort(404);

        if(strlen($userSingle->email) > 128) {
            abort(500);
        }
        if(strlen($userSingle->verification_token) > 64) {
            abort(500);
        }

        $mail = new PHPMailer(true);
        $mail->CharSet = "utf-8";

        $mail->isSMTP();
        //Enable SMTP debugging
		// SMTP::DEBUG_OFF = off (for production use)
		// SMTP::DEBUG_CLIENT = client messages
		// SMTP::DEBUG_SERVER = client and server messages
		$mail->SMTPDebug = SMTP::DEBUG_OFF;
		//Set the hostname of the mail server
		$mail->Host = config('api.mail.settings.mail_server');
		// Enable this if you are using gmail SMTP, for mandrill app it is not required
		$mail->SMTPSecure = 'tls';   
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 587;
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = config('api.mail.no_reply.username');
		//Password to use for SMTP authentication
		$mail->Password = config('api.mail.no_reply.password');
		//Set who the message is to be sent from
		$mail->setFrom(config('api.mail.no_reply.username'), config('api.mail.no_reply.fullname'));
		//Set an alternative reply-to address
		$mail->addReplyTo(config('api.mail.no_reply.username'), config('api.mail.no_reply.fullname'));
		//Set who the message is to be sent to
		$mail->addAddress($userSingle->email);
		//Set the subject line
		$mail->Subject = config('api.mail.no_reply.verification_email.subject');
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		
		$logo = NULL;
		
		$logo = @file_get_contents(config('api.assets.logo'));
		if($logo === FALSE) {
			$logo = NULL;
		}
		

		if(isset($logo) && !is_null($logo) && $logo != '') {
			$mail->addStringEmbeddedImage($logo, 'logo', 'logo.png');
		}

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body

		$html = '<div style="width: 75%; background-color: #0097A1; border-radius: 5px; padding: 30px 20px; color: #fff; font-size: 1rem; margin-left: auto;margin-right: auto; text-align: center; line-height: 1.5">
		    <p style="width: 50%; margin-left: auto; margin-right: auto;">Liebe*r ' . $userSingle->name . " " . $userSingle->surname . ", " .
		      '<br>
		      wir freuen uns, dass du da bist und hoffen, dir die Wohnungs-/Untermietersuche mit DuWo zu erleichtern. 
		      <br>
		      <br>
		      Um dein Konto zu aktivieren, klicke hier:
		      <a href="' . Route('verifyEmail', ['token' => $userSingle->verification_token]) . "?referrer=email_verification" . '" rel="noopener" target="_blank" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 40px; border: 0; padding:10px 20px; border-radius: 5px; background-color: #fff; color: orange; font-weight: bold; font-size: 1.5rem; text-decoration: none;">E-Mail bestätigen</a> 
		      Mit diesem Aktivierungsverfahren stellen wir sicher, dass du dich persönlich bei DuWo angemeldet hast und kein Missbrauch deiner E-Mail-Adresse vorliegt. 
		      <br>
		      Falls es sich bei der Anmeldung um ein Versehen handelt oder du dich nicht selbst auf DuWo registriert hast, kannst du diese E-Mail ignorieren. 
		      <br>
		      Viel Spaß bei der Wohnungs-/Untermietersuche auf DuWo!
		      <br>
		      <br>
		      Liebe Grüße,
		      <br>
		      Giulia und Michael von DuWo
		    </p>
		  </div>';

		if(isset($logo) && !is_null($logo) && $logo != '') {
			$html = '<div style="width: 75%; background-color: #0097A1; border-radius: 5px; padding: 30px 20px; color: #fff; font-size: 1rem; margin-left: auto;margin-right: auto; text-align: center; line-height: 1.5">
			    <img src="cid:logo" width="200px" style="margin-left: auto; margin-right: auto; display: block;">
			    <p style="width: 50%; margin-left: auto; margin-right: auto;">Liebe*r ' . $userSingle->name . " " . $userSingle->surname . ", " .
			      '<br>
			      wir freuen uns, dass du da bist und hoffen, dir die Wohnungs-/Untermietersuche mit DuWo zu erleichtern. 
			      <br>
			      <br>
			      Um dein Konto zu aktivieren, klicke hier:
			      <a href="' . Route('verifyEmail', ['token' => $userSingle->verification_token]) . "?referrer=email_verification" . '" rel="noopener" target="_blank" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 40px; border: 0; padding:10px 20px; border-radius: 5px; background-color: #fff; color: orange; font-weight: bold; font-size: 1.5rem; text-decoration: none;">E-Mail bestätigen</a> 
			      Mit diesem Aktivierungsverfahren stellen wir sicher, dass du dich persönlich bei DuWo angemeldet hast und kein Missbrauch deiner E-Mail-Adresse vorliegt. 
			      <br>
			      Falls es sich bei der Anmeldung um ein Versehen handelt oder du dich nicht selbst auf DuWo registriert hast, kannst du diese E-Mail ignorieren. 
			      <br>
			      Viel Spaß bei der Wohnungs-/Untermietersuche auf DuWo!
			      <br>
			      <br>
			      Liebe Grüße,
			      <br>
			      Giulia und Michael von DuWo
			    </p>
			  </div>';
		} else {
			$html = '<div style="width: 75%; background-color: #0097A1; border-radius: 5px; padding: 30px 20px; color: #fff; font-size: 1rem; margin-left: auto;margin-right: auto; text-align: center; line-height: 1.5">
			    <p style="width: 50%; margin-left: auto; margin-right: auto;">Liebe*r ' . $userSingle->name . " " . $userSingle->surname . ", " .
			      '<br>
			      wir freuen uns, dass du da bist und hoffen, dir die Wohnungs-/Untermietersuche mit DuWo zu erleichtern. 
			      <br>
			      <br>
			      Um dein Konto zu aktivieren, klicke hier:
			      <a href="' . Route('verifyEmail', ['token' => $userSingle->verification_token]) . "?referrer=email_verification" . '" rel="noopener" target="_blank" style="display: block; margin-left: auto; margin-right: auto; margin-top: 20px; margin-bottom: 40px; border: 0; padding:10px 20px; border-radius: 5px; background-color: #fff; color: orange; font-weight: bold; font-size: 1.5rem; text-decoration: none;">E-Mail bestätigen</a> 
			      Mit diesem Aktivierungsverfahren stellen wir sicher, dass du dich persönlich bei DuWo angemeldet hast und kein Missbrauch deiner E-Mail-Adresse vorliegt. 
			      <br>
			      Falls es sich bei der Anmeldung um ein Versehen handelt oder du dich nicht selbst auf DuWo registriert hast, kannst du diese E-Mail ignorieren. 
			      <br>
			      Viel Spaß bei der Wohnungs-/Untermietersuche auf DuWo!
			      <br>
			      <br>
			      Liebe Grüße,
			      <br>
			      Giulia und Michael von DuWo
			    </p>
			  </div>';
		}
		$mail->msgHTML($html);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'Um dein Konto zu aktivieren, klicke hier: ' . Route('verifyEmail', ['token' => $userSingle->verification_token]) . "?referrer=email_verification";
		//Attach an image file

		//send the message, check for errors
		if (!$mail->send()) {
		    abort(500);
		} else {
		     return 1;
		}
    }
}