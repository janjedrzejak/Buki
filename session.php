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
				header('Location: index.php?page=dashboard'); 
			} else { header('Location: index.php');  }

	} else { header('Location: index.php'); }
?>