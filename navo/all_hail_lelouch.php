<?php
require_once "php/config.php";
	$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );


	$query = "select * from User";
	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();
	while($row!=false){
		$email = $row["Email"];
		echo $email."<br>";
		$row = $result->fetch_assoc();
	}
	?>