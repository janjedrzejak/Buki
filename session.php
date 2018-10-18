<?php
	require('db/pdo.php');

	session_start();

	if(!empty($_POST['login']) && !empty($_POST['password'])) {

		$login = htmlspecialchars($_POST['login'] , ENT_QUOTES);
		$password = md5($_POST['password']);
		$user_type = htmlspecialchars($_POST['login_type']);

		switch($user_type) {
			case 'students':
				$table_name = 'students';
			break;
			case 'professors':
				$table_name = 'professors';
			break;
			default:
				echo 'na default';
		}

		$q = $pdo->prepare("SELECT * FROM `" . $table_name . "` WHERE `login` = '" . $login . "' AND `password` = '" . $password . "';");
		$q->execute();
		$result=$q->fetch();
			if($result && isset($result['id'])) {
				$_SESSION['logged'] = true;
				$_SESSION['login_type'] = $table_name;
				$_SESSION['user_login'] = $result['login'];
				$_SESSION['student_name'] = $result['student_name'];
				$_SESSION['student_id'] = $result['id'];
				$_SESSION['class'] = $result['class_name'];

					$now = date("Y:m:d h:i:s");
					$end_of_year = date("2019:06:22 23:59:59");
					$result=round((strtotime($end_of_year)-strtotime($now))/86400); 	
					$_SESSION['day_to_end_year'] = $result;

					header('Location: dashboard'); 
			} else { header('Location: index.php');  }

	} else { header('Location: index.php'); }
?>