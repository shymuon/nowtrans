<?php
$nam = strip_tags($_POST["contact_name"]);
$ema = strip_tags($_POST["contact_email"]);
$pho = strip_tags($_POST["contact_phone"]);
$com = strip_tags($_POST["contact_message"]);

$to_email = "kontakt@now-trans.eu";
$subject = "Zapytanie od $nam";
$thanks_page = "kontakt.php";
$contact_page = "kontakt.php";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'Od: <' .$ema. '>' . "\r\n";
$headers .= "Odpowiedz: ".$ema."\r\n";

$email_body = 
    "<strong>Od </strong>" . $nam . "<br />
	<strong>E-mail: </strong>" . $ema . "<br />	
	<strong>Telefon </strong>" . $pho . "<br />	
	<strong>Wiadomość: </strong>" . $com;

if( mail($to_email, $subject, $email_body, $headers) ) {	
    echo '<div class="form-msg"> <i class="glyphicon glyphicon-ok"></i> Dziękujemy, ' .$nam. '. Twoja wiadomość została wysłana. </div>';
} else {	
    echo '<div class="form-msg-error"> <i class="glyphicon glyphicon-remove"></i> Przepraszamy, ' .$nam. '. Twoja wiadomość nie została wysłana. Spróbuj ponownie! </div>';
}
die();
;?>