<?php

$Name = $_post['Name'];
$email = $_post['email'];
$country = $_post['country'];
$contact_number = $_post['contactno.'];
$EM = $_post['EM'];

$mailheader = "From:".$Name."<".$email.">"."_".$country."_".$contact_number">\r\n";
$recipient = "babasith2@gmail.com";

mail($recipient,$mailheader,$EM)
	or die("Error!");

echo"Email sent";

?>