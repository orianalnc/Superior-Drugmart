<?php
$destino = "info@qubitmarketing.com";
$name = $_POST["name"];
$mail = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$content = "Name: " . $firs . "\nEmail: " . $mail . "\nSubject: " . $subject . "\Message: " . $message;

mail($destino,"Contact Us - Superior Drugmart Pharmacy", $content);
header("Location:index.html");

?>