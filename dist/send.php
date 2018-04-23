<?php

$client = $_POST['client'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$date = $_POST['date'];
$person = $_POST['person'];
$road = $_POST['road'];
$message = $_POST['message'];
$companyemail = 'kontakt@ekobusik.pl';
$autoresponse = 'Dziękujemy za kontakt, odpowiemy na Twoje zapytanie tak szybko jak to możliwe.';
$headers .= "Reply-to: ".$_POST['email']."\r\n";
$autoresponseheaders .= "Reply-to: ".$companyemail."\r\n";
$zap = 'Wiadomość ze strony ekobusik.pl IMIĘ: ' .$client . ' TEL.:  '.$telephone . ' TRASA: ' .$road . ' TERMIN: ' .$date . ' ILOŚĆ OSÓB: ' .$person . ' TREŚĆ WIADOMOŚCI: ' .$message .'';


mail("kontakt@ekobusik.pl", "Wiadomość ze strony ekobusik.pl", $zap, $headers, "-f $companyemail\r\n");
mail($email, "Dziękujemy za kontakt z Eko-Busik Team :)", $autoresponse, $autoresponseheaders, "-f $companyemail\r\n");


echo "Dziękujemy za kontakt, niebawem otrzymasz email z potwierdzeniem wysłania wiadomości."

?>