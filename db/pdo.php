<?php

	$db_server_name = "localhost";
	$db_username = "root";
	$db_password = "root";
	$db_name = "buki";

	$pdo = new PDO("mysql:host=$db_server_name; dbname=$db_name", $db_username, $db_password);	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
?>