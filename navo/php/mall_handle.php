<?php

$contact = filter_input(INPUT_POST, "contact", FILTER_SANITIZE_STRING);
//echo $contact;

$file = "../saba.txt";
$fileopen = @fopen($file, "a+");  

if (!$fileopen) {
	die("Error adding contact information, please try again or contact us through phone or email.");
} 

fputs($fileopen, "Contact: ".$contact."\n");
fclose($fileopen);
echo "Successfully added. Thank you!";

$to      = 'landice@navo.co';
$subject = 'Navo! Important! New Mall contact information!';

mail($to, $subject, $contact);

$msg_to = "6073795084@txt.att.net";
mail($msg_to, "",$contact);

die();

?>