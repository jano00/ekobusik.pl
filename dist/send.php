<?php

$client = $_POST['client'];
$email = $_POST['email'];
$message = $_POST['message'];
$companyemail = 'kontakt@ekobusik.pl';
$autoresponse = 'Dziękujemy za kontakt, odpowiemy na Twoje zapytanie tak szybko jak to możliwe.';
$headers .= "Reply-to: ".$_POST['email']."\r\n";
$autoresponseheaders .= "Reply-to: ".$companyemail."\r\n";


mail("kontakt@ekobusik.pl", "Wiadomość ze strony ekobusik.pl", $message, $headers, "-f $companyemail\r\n");
mail($email, "Dziękujemy za kontakt z Eko-Busik Team :)", $autoresponse, $autoresponseheaders, "-f $companyemail\r\n");


echo "Dziękujemy za kontakt, niebawem otrzymasz email z potwierdzeniem wysłania wiadomości."

?>