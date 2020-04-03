<?php
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);

require_once "config.php";
$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	//$mysqli = mysql_connect('DB_HOST','DB_USER','DB_PASSWORD');
	/*
	mysql_select_db('navo', $con);
	if($mysqli){
		echo "successful";
	}else{
		echo mysql_error();
	}
	*/
/*
	$query = 'INSERT INTO User (Email) VALUES ("'.$email.'")';
	
	$result = mysql_query($query, $mysqli);

	if($result){
		echo "successful".$query;
	}else{
		echo "unsuccessful".$query;
	}
*/

	$to      = 'landice@navo.co';
	$subject = 'Navo! Important! New User contact information!';

	mail($to, $subject, $contact);

	$msg_to = "6073795084@txt.att.net";
	mail($msg_to, "",$contact);

	if ($mysqli->connect_error) {
		echo ($mysqli->connect_error);	
		//die();
	}



	$query = 'INSERT INTO User (Email) VALUES ("'.$email.'")';

	$result = $mysqli->query($query);

	if($result){
		echo "successfully signed up";
	}else{
		echo "unsuccessful: you have already signed up";
	}
	
	$mysqli->close();



	?>