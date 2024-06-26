<?php

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/Exception.php';
require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';


// Enter your email address. If you need multiple email recipes simply add a comma: email@domain.com, email2@domain.com
$to = "info@aone.pl";

// Add your reCaptcha Secret key if you wish to activate google reCaptcha security
$recaptcha_secret_key = '6LfcAoEUAAAAADknGOO_OxF1xaifstMTMZqWpeBO';

// Default message responses
const RESPONSE_MSG = [
    'success' => [
        "message_sent"           => "Twoja wiadomość została <strong>pomyślnie</strong> wysłana.<br />Skontaktujemy się z Tobą tak szybko, jak to możliwe."
    ],
    'form' => [
        "recipient_email"        => "Wiadomość nie została wysłana! Brakuje adresu e-mail odbiorcy.",
        "name"                   => "Contact Form",
        "subject"                => "Nowa wiadomość z formularza kontaktowego"
    ],
    'google' => [
        "recapthca_invalid_v3"  => "reCaptcha nie przeszedł poprawnie testów.",
        "recapthca_invalid"     => "reCaptcha nie jest poprawnie uzupełniona! Proszę spróbuj ponownie.",
        "recaptcha_secret_key"  => "W pliku konfiguracyjnym brakuje tajnego klucza Google reCaptcha!"
    ]

];

//This functionality will process post fields without worrying to define them on your html template for your customzied form.
//Note: autofields will process only post fields that starts with name widget-contact-form OR with custom prefix field name
$form_prefix = isset($_POST["form-prefix"]) ? $_POST["form-prefix"] : "widget-contact-form-";
$form_title	= isset($_POST["form-name"]) ? $_POST["form-name"] : RESPONSE_MSG['form']['name'];
$subject = 'Wiadomość wysłana ze strony aone.pl';
$email = isset($_POST[$form_prefix."email"]) ? $_POST[$form_prefix."email"] : null;
$name = isset($_POST[$form_prefix."name"]) ? $_POST[$form_prefix."name"] : null;


if( $_SERVER['REQUEST_METHOD'] == 'POST') {

    if($email != '') {
        if(empty($to)) {
            $response = array ('response'=>'warning', 'message'=> RESPONSE_MSG['form']['recipient_email']);
            echo json_encode($response);
            die;
        }

        $mail = new PHPMailer;

        //If you don't receive the email, enable and configure these parameters below:
        //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));
        $mail->IsSMTP();
        $mail->Host = 'SSL0.OVH.NET';                  // Specify main and backup SMTP servers, example: smtp1.example.com;smtp2.example.com
        $mail->SMTPAuth = true;
        $mail->Port = 465;                                    // TCP port to connect to  587 or 465
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Username = 'www@aone.pl';                    // SMTP username
        $mail->Password = '2mKEGvvRAmQLyrs';                    // SMTP password

        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->From = $email;
        $mail->FromName = $name;
        if(strpos($to, ',') !== false){
            $email_addresses = explode(',', $to);
            foreach($email_addresses as $email_address) {
                $mail->AddAddress(trim($email_address));
            }
        }
        else {$mail->AddAddress($to);}
        $mail->AddReplyTo($email, $name);
        $mail->Subject = $subject;


       // Check if google captch is present
       if(isset($_POST['g-recaptcha-response'])) {
            /* RECAPTCHA v2 */
            /*
            if(empty($recaptcha_secret_key)) {
                $response = array ('response'=>'error', 'message'=> RESPONSE_MSG['google']['recaptcha_secret_key']);
                echo json_encode($response);
                die;
            }

            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$recaptcha_secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($response);

            if ($response_data->success !== true ) {
                $response = array ('response'=>'error', 'message'=> RESPONSE_MSG['google']['recapthca_invalid']);
                echo json_encode($response);
                die;
            }
            */

            /* RECAPTCHA v3 */
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$recaptcha_secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($response);

            // Take action based on the score returned:
            if ($response_data->score <= 0.5) {
                $response = array ('response'=>'error', 'message'=> RESPONSE_MSG['google']['recapthca_invalid_v3']);
                echo json_encode($response);
                die;
            }

        }

        //Remove unused fields
        foreach (array("form-prefix", "subject", "g-recaptcha") as $fld) {
            unset($_POST[$form_prefix . $fld]);
        }
        unset($_POST['g-recaptcha-response']);
        //Format eMail Template
        $mail_template  = '<table width="100%" cellspacing="40" cellpadding="0" bgcolor="#F5F5F5"><tbody><tr><td>';
        $mail_template .= '<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#F5F5F5" style="border-spacing:0;font-family:sans-serif;color:#475159;margin:0 auto;width:100%;max-width:70%"><tbody>';
        $mail_template .= '<tr><td style="padding-top:20px;padding-left:0px;padding-right:0px;width:100%;text-align:right; font-size:12px;line-height:22px">This email is sent from&nbsp;'.$_SERVER['HTTP_HOST'].'</td></tr>';
        $mail_template .= '</tbody></table>';
        $mail_template .= '<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#F5F5F5" style="padding: 50px; border-spacing:0;font-family:sans-serif;color:#475159;margin:0 auto;width:100%;max-width:70%; background-color:#ffffff;"><tbody>';
        $mail_template .= '<tr><td style="font-weight:bold;font-family:Arial,sans-serif;font-size:36px;line-height:42px">'.$form_title.'</td></tr>';
        $mail_template .= '<tr><td style="padding-top:25px;padding-bottom:40px; font-size:16px;">';
        foreach ($_POST as $field => $value) {
                $split_field_name = str_replace($form_prefix, '', $field);
                $ucwords_field_name = ucfirst(str_replace('-', ' ', $split_field_name));
                $mail_template .= '<p style="display:block;margin-bottom:10px;"><strong>'.$ucwords_field_name.': </strong>'.$value.'</p>';
        }
        $mail_template .= '</td></tr>';
        $mail_template .= '<tr><td style="padding-top:16px;font-size:12px;line-height:24px;color:#767676; border-top:1px solid #f5f7f8;">Date: '.date("F j, Y, g:i a").'</td></tr>';
        $mail_template .= '<tr><td style="font-size:12px;line-height:24px;color:#767676">From: '.$email.'</td></tr>';
        $mail_template .= '</tbody></table>';
        $mail_template .= '</td></tr></tbody></table>';
        $mail->Body = $mail_template;

        // Check if any file is attached
        $attachments = [];
        if (!empty($_FILES[$form_prefix.'attachment'])) {
            $result = array();
            foreach ($_FILES[$form_prefix.'attachment'] as $key => $value) {
                for ($i = 0; $i < count($value); $i++) {
                    $result[$i][$key] = $value[$i];
                }
            }
            foreach ( $result as $key => $attachment) {
                 $mail->addAttachment($attachment['tmp_name'],$attachment['name']);
            }
        }

        if(!$mail->Send()) {
            $response = array ('response'=>'error', 'message'=> $mail->ErrorInfo);
        }else {
            $response = array ('response'=>'success', 'message'=> RESPONSE_MSG['success']['message_sent']);
        }
        echo json_encode($response);
    } else {
        $response = array ('response'=>'error');
        echo json_encode($response);
    }
}
?>
