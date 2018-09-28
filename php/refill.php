<?php
$destino = "info@superiordrugmart.com";
$firs = $_POST["firs-name"];
$last = $_POST["last-name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$rx = $_POST["rx-num"];
$message = $_POST["message"];
$terms = $_POST["terms"];

$content = "Firs Name: " . $firs . "\nLast Name: " . $last . "\nEmail: " . $mail . "\nPhone: " . $phone . "\nRx Number: " . $rx . "\Message: " . $message . "\nTerms: " . $terms;

mail($destino,"Refill Prescriptions - Superior Drugmart  Pharmacy", $content);
header("Location:index.html");

?>