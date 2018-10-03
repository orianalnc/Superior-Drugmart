<?php
$destino = "superiordrugmart@gmail.com";
$firs = $_POST["firs-name"];
$last = $_POST["last-name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$drname = $_POST["dr-name"];
$drphone = $_POST["dr-phone"];
$medication = $_POST["medication"];
$message = $_POST["message"];
$terms = $_POST["terms"];

$content = "Firs Name: " . $firs . "\nLast Name: " . $last . "\nEmail: " . $mail . "\nPhone: " . $phone . "\nDr Name: " . $drname . "\nDr Phone: " . $drphone . "\nMedication: " . $medication . "\Message: " . $message . "\nTerms: " . $terms;

mail($destino,"New Prescriptions - Superior Drugmart  Pharmacy", $content);
header("Location:../index.html");

?>