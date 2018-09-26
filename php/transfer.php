<?php
$destino = "info@qubitmarketing.com";

$firs = $_POST["firs-name"];
$last = $_POST["last-name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$pharmaname = $_POST["pharmacy-name"];
$pharmaphone = $_POST["pharmacy-phone"];
$rx = $_POST["rx-num"];
$drname = $_POST["dr-name"];
$drphone = $_POST["dr-phone"];
$medication = $_POST["medication"];
$message = $_POST["message"];
$terms = $_POST["terms"];

$content = "Firs Name: " . $firs . "\nLast Name: " . $last . "\nEmail: " . $mail . "\nPhone: " . $phone . "\nPharmacy Name: " . $pharmaname . "\nPharmacy Phone: " . $pharmaphone . "\nRx Number: " . $rx . "\nDr Name: " . $drname . "\nDr Phone: " . $drphone . "\nMedication: " . $medication . "\nTerms: " . $terms;

mail($destino,"Transfer Prescriptions - Superior Drugmart  Pharmacy", $content);
header("Location:index.html");

?>