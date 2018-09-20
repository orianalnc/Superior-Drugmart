<?php
$destino = "info@superiorpharmarx.com";
$service = $_POST["service"];
$name = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];

$content = "Name: " . $name . "\nEmail: " . $mail . "\nService: " . $service . "\Phone: " . $phone;

mail($destino,"Consultations Superior Pharmacy", $content);
header("Location:index.html");

?>