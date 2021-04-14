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
		// $logo = @file_get_contents(config('api.assets.logo'));
		// if($logo === FALSE) {
		// 	$logo = NULL;
		// }

		// // Continuation of above
		// if(isset($logo) && !is_null($logo) && $logo != '') {
		// 	$mail->addStringEmbeddedImage($logo, 'logo', 'logo.svg');
		// }

		// Define html and its basic layout
		// By practice, this should be the same as the html from the else {} block of the if segment below
		$html = "<h3>Puno ime: </h3>" . $user['full_name'] . "<br>" . "<h3>E-mail: </h3>" . $user['email'] . "<br>" . "<h3>Telefon: </h3>" . $user['telephone'] . "<br>" . "<h3>Poruka: </h3>" . $user['message'];

		// If logo is set, have `cid:logo` as the src of the img tag inside the html
		// Eg. <img src="cid:logo" width="200px" style="margin-left: auto; margin-right: auto; display: block;">
		// This adds the logo from above into the img src
		if(isset($logo) && !is_null($logo) && $logo != '') {
			// HTML with image here
			$html = "<img src='cid:logo' width='200px' style='margin-left: auto; margin-right: auto; display: block;'><h3>Puno ime: </h3>" . $user['full_name'] . "<br>" . "<h3>E-mail: " . $user['email'] . "</h3>" . "<br>" . "<h3>Telefon: " . $user['telephone'] . "</h3>" . "<br>" . "<h3>Poruka: " . $user['message'] . "</h3>";
		} else {
			// HTML without image here in case logo is not available
			$html = "<h3>Puno ime: " . $user['full_name'] . "</h3>" . "<br>" . "<h3>E-mail: " . $user['email'] . "</h3>" . "<br>" . "<h3>Telefon: " . $user['telephone'] . "</h3>" . "<br>" . "<h3>Poruka: " . $user['message'] . "</h3>";
		}

		$mail->msgHTML($html);

		// Always have plain text set as a lot of mail viewers do not show html by default, or at all
		// So this is the fallback text which gets shown when html is not showable
		// This should contain no html tags, just plain text
		// For new line append `\r\n` at the end of the line.
		// Eg $mail->AltBody = "Hello.\r\nThis is a new line\r\nSo is this.\r\n\r\nThis has an empty row above me."
		$mail->AltBody = "Puno ime: " . $user['full_name'] . "\r\n" . "E-mail: " . $user['email'] . "\r\n" . "Telefon: " . $user['telephone'] . "\r\n" . "Poruka: " . $user['message'];

		//send the message, check for errors
		try {
			$mail->send();
		} catch (Exception $e) {}

    // Send to user as well
    $mail->ClearAllRecipients();
    $mail->clearAttachments(); 
    $mail->msgHTML("<div style='width:100%; font-family: Poppins;'> <h1 style='font-size: 40px; margin: 0px; font-weight: 600; width: 100%; text-align: center; padding: 50px 0px 0px 0px;'>Zdravo, <span style='font-weight: normal; color:#BB1C2E'>" . $user['full_name'] . "</span></h1> <h5 style='font-size: 30px; margin: 0px; font-weight: normal; width: 100%; text-align: center; padding: 0px 0px 50px 0px;'> Dobili smo Vašu poruku i uskoro ćemo Vas kontaktirati! Srdačan pozdrav! </h5> </div> <div style='width:100%; font-family: Poppins; background-color: #3C3C3C; padding: 40px 0px;'> <table style='width: 100%; table-layout: fixed;'> <tr> <td style='text-align: center; padding-bottom: 50px'> <h1 style='color: white; text-align: center; font-size: 30px; font-weight: 600; color:#BB1C2E'>Adresa</h1> <a style='color: white; text-decoration: none;' href='https://www.google.com/maps/dir//UEZ+-+udruga+za+ekonomiju+zajedni%C5%A1tva,+Ul.+Franje+Ra%C4%8Dkog+26,+48260,+Kri%C5%BEevci,+Croatia/@46.0297226,16.50946,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47661658ac32c181:0x284666b99e25dd46!2m2!1d16.5444793!2d46.0296684?shorturl=1'>Udruga za ekonomiju zajedništva Franje Račkog 26, 48260 Križevci, Hrvatska</a> </td> </tr> <tr> <td style='text-align: center; padding-bottom: 50px'> <h1 style='color: white; text-align: center; font-size: 30px; font-weight: 600; color:#BB1C2E'>Broj telefona</h1> <a style='color: white; text-decoration: none;' href='tel:+38548682847'>385 48 682 847</a><br> <a style='color: white; text-decoration: none;' href='tel:+38597123456'>+385 97 123 456</a><br> <a style='color: white; text-decoration: none;' href='tel:385958088189'>3385 95 808 8189</a> </td> </tr> <tr> <td style='text-align: center; padding-bottom: 50px'> <h1 style='color: white; text-align: center; font-size: 30px; font-weight: 600; color:#BB1C2E'>Email</h1> <a style='color: white; text-decoration: none;' href='mailto:>hub@franjinaekonomija.hr'>hub@franjinaekonomija.h</a> </td> </tr> <tr> <td style='text-align: center;'> <h1 style='color: white; text-align: center; font-size: 30px; font-weight: 600; color:#BB1C2E'>Pratite nas</h1> <a style='color: white; text-decoration: none;' href='https://www.instagram.com/franjinaekonomijahrvatska/'>Instagram</a><br> <a style='color: white; text-decoration: none;' href='https://www.facebook.com/Franjina-Ekonomija-Hrvatska-114169500480550/'>Facebook</a><br> <a style='color: white; text-decoration: none;' href='https://www.youtube.com/channel/UCkA1mEWmqGLxXfKrRbfqaFQ'>Youtube</a><br> <a style='color: white; text-decoration: none;' href='https://www.franjinaekonomija.hr'>www.franjinaekonomija.hr</a><br> </td> </tr> </table> </div>");
    $mail->AltBody = "Zdravo, " . $user['full_name'] . "\r\n\r\n" . "Dobili smo Vašu poruku i uskoro ćemo Vas kontaktirati. Srdačan pozdrav!";
    $mail->addAddress($user['email']);
    $mail->setFrom(config('api.mail.hub.username'), 'franjinaekonomija.hr');
    $mail->addReplyTo(config('api.mail.hub.username'), 'franjinaekonomija.hr');
    $mail->send(); 

  }

  public static function sendNewsletterMail($userAll, $newsletter_content, $newsletter_subject) {
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
		$mail->setFrom(config('api.mail.hub.username'), 'franjinaekonomija.hr');
		//Set an alternative reply-to address
		$mail->addReplyTo(config('api.mail.hub.username')); 

    foreach($userAll as $userSingleIndex => $userSingleRow) {
			if($userSingleRow->active == 0) {
				continue;
			}
      $mail->addBCC($userSingleRow->subscriber_email);
		}

    
		//Set the subject line
		$mail->Subject = $newsletter_subject;

		// Define html and its basic layout
		// By practice, this should be the same as the html from the else {} block of the if segment below
		$html = $newsletter_content . "<br><br><a style='width: 100%; text-align: center' href='https://franjinaekonomija.hr/unsubscribe'>Otkaži pretplatu</a>";
 
		$mail->msgHTML($html);

		// Always have plain text set as a lot of mail viewers do not show html by default, or at all
		// So this is the fallback text which gets shown when html is not showable
		// This should contain no html tags, just plain text
		// For new line append `\r\n` at the end of the line.
		// Eg $mail->AltBody = "Hello.\r\nThis is a new line\r\nSo is this.\r\n\r\nThis has an empty row above me."
		$mail->AltBody = strip_tags($html);

		//send the message, check for errors
		try {
			$mail->send();
		} catch (Exception $e) {}

  }

  public static function sendUnsubscribeLink($user) {
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
		$mail->setFrom(config('api.mail.hub.username'), 'franjinaekonomija.hr');
		//Set an alternative reply-to address
		$mail->addReplyTo($user['subscriber_email']);
		//Set who the message is to be sent to
		// Change this to your own e-mail to see the e-mail for debug purposes
		$mail->addAddress($user['subscriber_email']);
    
		//Set the subject line
		$mail->Subject = "Link za otkazivanje pretplate na Newsletter";

		// Define html and its basic layout
		// By practice, this should be the same as the html from the else {} block of the if segment below
    $html = "<div style='width: 100%; display:block; text-align:center'><h1 style='text-align:center;'>Za otkazivanje pretplate kliknite na link:</h1><a style='text-decoration:none; font-weight:bold; font-size: 18px' href='https://franjinaekonomija.hr/unsubscribe/" . $user['subscriber_email'] . "/" . $user['token'] . "'>Otkaži pretplatu</a></div>";

		$mail->msgHTML($html);

		// Always have plain text set as a lot of mail viewers do not show html by default, or at all
		// So this is the fallback text which gets shown when html is not showable
		// This should contain no html tags, just plain text
		// For new line append `\r\n` at the end of the line.
		// Eg $mail->AltBody = "Hello.\r\nThis is a new line\r\nSo is this.\r\n\r\nThis has an empty row above me."
		$mail->AltBody = strip_tags($html);

		//send the message, check for errors
		try {
			$mail->send();
		} catch (Exception $e) {}

  }

}