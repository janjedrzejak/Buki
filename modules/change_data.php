<?php
	if(!isset($_SESSION['logged'])) { header('Location:home'); }
?>

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
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script> jQuery(document).ready(function($){
	  		op = function(obj) {
	    	$(obj).stop().slideToggle();
    	};
		}); </script>
</head>
<body class="body-dashboard">

<div class="header">
	<a href="dashboard" class="logo"><img src="img/logo.svg" width="134" height="36"></a>
	<div class="school-name">
		<?php 
			show_school_name(); 
		?>
	</div>
</div>

<div class="sidebar">
		<img src="<?php show_avatar($_SESSION['student_id'], $login_type); ?>" class="avatar">
		<span class="name"><?php show_name($_SESSION['student_id'], $login_type)  ?></span>
		<span class="descryption"><?php echo $_SESSION['class'];  ?></span>
		<div class="buttons">
			<a href="logout" class="button logout"><span class="link">wyloguj</span></a><br>
			<a href="index.php?page=change_data" class="button edit"><span class="link">zmień dane</span></a>
		</div>
</div>
<div class="contener">
	<div class="news">
		<div class="caption">
			Zmień dane
		</div>
		<a href="dashboard"><img src="img/back.svg" class="back-link"></a>
		<div class="change-data-list">
			<table id="change-data-table" cellspacing="0" cellpadding="0">
				 	<div id="change_adres" class="change">
				 		<span>W tym obszarze możesz dokonać zmiany dotychczasowego adresu zamieszkania.</span>
						<form action="utilies/change_data_script.php" method="POST">
							<input type="text" name="adres" placeholder="<?php show_student_adres($_SESSION['student_id'], $login_type); ?>">
							<input type="password" name="password" placeholder="podaj hasło">
							<input type="hidden" name="operation" value="change_adres">
							<input type="submit" name="submit" value="zmień">
						</form>
					</div>
					<div id="change_avatar" class="change">
				 		<span>W tym obszarze możesz zmienić avatar.</span>
				 		<img src="<?php show_avatar($_SESSION['student_id'], $login_type);?>" >
						<form enctype="multipart/form-data" method="post" action="utilies/change_data_script.php">
	            			<label for="fileToUpload" class="inputfile_label">wybierz plik</label>
	            			<input type="file" name="fileToUpload" id="fileToUpload"  class="inputfile" /> 
	            			<input type="hidden" name="operation" value="change_avatar">
	            			<input type="submit" value="wgraj" />
            			</form>
					</div>
					<div id="change_password" class="change">
				 		<span>W tym obszarze możesz dokonać zmiany hasła dostępu</span>
						<form action="utilies/change_data_script.php" method="POST">
							<input type="password" name="old_password" placeholder="stare hasło">
							<input type="password" name="new_password" placeholder="nowe hasło">
							<input type="hidden" name="operation" value="change_password">
							<input type="submit" name="submit" value="zmień">
						</form>
					</div>
			  <tr>
			    <td class="date">Adres zamieszkania</td>
			    <td class="news-text">
			    	<a href="#" onClick="op('#change_adres');">zmień</a>
			    </td>
			   
			  </tr>
			  <tr>
			    <td class="date">Avatar</td>
			    <td class="news-text">
			    	<a href="#" onClick="op('#change_avatar');">zmień</a>
			    </td>
			   
			  </tr>
			   <tr>
			    <td class="date">Hasło</td>
			    <td class="news-text">
			    	<a href="#" onClick="op('#change_password');">zmień</a>
			    </td>
			   
			  </tr>
			</table>
		</div>
	</div>
	
	
	<div>
</div>
</body>
</html>