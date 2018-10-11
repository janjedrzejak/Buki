<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<meta name="author" content="Jan Jędrzejak">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Buki - przyjazny dziennik elektroniczny</title>
</head>
<body>
	<div class="login-box col-xs-10 col-sm-10 col-md-5 col-lg-3 col-centered">
		<img src="img/logo.svg" alt="logo" width="185" height="50">
		<div class="login-form">
			<form action="#" method="POST">
				<input name="login_type" type="radio" id="radio1" value="uczen" checked />
					<label for="radio1" class="radio"><span>uczeń</span> </label>
				<input name="login_type" type="radio" id="radio2" value="nauczyciel"/>
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