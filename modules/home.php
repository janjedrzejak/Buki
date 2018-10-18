<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex">
	<link rel="icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	
	<meta name="author" content="Jan Jędrzejak">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Buki - przyjazny dziennik elektroniczny</title>
</head>
<body>
	<div class="login-box">
		<img src="img/logo.svg" alt="logo" width="185" height="50">
		<div class="login-form">
			<form action="session.php" method="POST">
				<input name="login_type" type="radio" id="radio1" value="students" checked />
					<label for="radio1" class="radio"><span>uczeń</span> </label>
				<input name="login_type" type="radio" id="radio2" value="professors"/>
					<label for="radio2" class="radio"><span>nauczyciel</span> </label>
        		<br/>
				<input type="text" name="login" placeholder="twój login">
				<input type="password" name="password" placeholder="twoje hasło"><br>
				<input type="submit" name="submit" value="zaloguj się">
			</form>
		</div>
		<div class="forgot">
			<a href="#" id="link">Nie pamiętasz hasła?</a>
		</div>
	</div>
</body>
</html>