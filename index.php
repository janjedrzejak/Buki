<?php
	
	include('db/pdo.php');

	session_start();

	
	if(array_key_exists('page', $_GET)) {
		$module = htmlspecialchars($_GET['page']);
	} else {
		$module = 'home';
	}


	$moduleDir = 'modules/' . $module . '.php';
	if(file_exists($moduleDir)) {
		if(isset($_SESSION['student_id'])) {
			require("utilies/utilies.php");
			$login_type = $_SESSION['login_type'];
			$id = $_SESSION['student_id'];
		}
		require($moduleDir);
	} else {
		header("HTTP/1.1 404 Not Found");
		require('modules/404.php');
	}
	
?>