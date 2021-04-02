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
  public static function sendMail($user) {
    $mail = new PHPMailer(true);
    $mail->CharSet = "utf-8";

    $mail->isSMTP();

		// SMTP::DEBUG_OFF = off (for production use)
		// SMTP::DEBUG_CLIENT = client messages
		// SMTP::DEBUG_SERVER = client and server messages
		$mail->SMTPDebug = SMTP::DEBUG_OFF;
		//Set the hostname of the mail server
		$mail->Host = config('api.mail.settings.mail_server');
		// Enable this if you are using gmail SMTP, for mandrill app it is not required
		$mail->SMTPSecure = 'ssl';   
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 465;
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication
		$mail->Username = config('api.mail.hub.username');
		//Password to use for SMTP authentication
		$mail->Password = config('api.mail.hub.password');
		//Set who the message is to be sent from
		$mail->setFrom($user['email'], $user['full_name']);
		//Set an alternative reply-to address
		$mail->addReplyTo($user['email'], $user['full_name']);
		//Set who the message is to be sent to
		// Change this to your own e-mail to see the e-mail for debug purposes
		$mail->addAddress(config('api.mail.hub.username'));
		//Set the subject line
		$mail->Subject = config('api.mail.hub.contact_email.subject');
		
		$logo = NULL;
		
		// This is for inserting the logo into the html of the e-mail
		// config('api.assets.logo') should be a URL to the logo, like franjinaekonomija.ml/images/logo.svg
		$logo = @file_get_contents(config('api.assets.logo'));
		if($logo === FALSE) {
			$logo = NULL;
		}

		// Continuation of above
		if(isset($logo) && !is_null($logo) && $logo != '') {
			$mail->addStringEmbeddedImage($logo, 'logo', 'logo.png');
		}

		// Define html and its basic layout
		// By practice, this should be the same as the html from the else {} block of the if segment below
		$html = 'gg';

		// If logo is set, have `cid:logo` as the src of the img tag inside the html
		// Eg. <img src="cid:logo" width="200px" style="margin-left: auto; margin-right: auto; display: block;">
		// This adds the logo from above into the img src
		if(isset($logo) && !is_null($logo) && $logo != '') {
			// HTML with image here
			$html = 'gg';
		} else {
			// HTML without image here in case logo is not available
			$html = 'gg';
		}

		$mail->msgHTML($html);

		// Always have plain text set as a lot of mail viewers do not show html by default, or at all
		// So this is the fallback text which gets shown when html is not showable
		// This should contain no html tags, just plain text
		// For new line append `\r\n` at the end of the line.
		// Eg $mail->ALtBody = "Hello.\r\nThis is a new line\r\nSo is this.\r\n\r\nThis has an empty row above me."
		$mail->AltBody = 'gg';

		//send the message, check for errors
		try {
			$mail->send();
		} catch (Exception $e) {}
  }
}