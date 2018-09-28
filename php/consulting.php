<?php
$destino = "info@superiordrugmart.com";
$service = $_POST["service"];
$name = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];

$content = "Name: " . $name . "\nEmail: " . $mail . "\nService: " . $service . "\Phone: " . $phone;

mail($destino,"Consultations - Superior Drugmart  Pharmacy", $content);
header("Location:index.html");

?>