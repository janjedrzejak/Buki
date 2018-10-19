<?php
	if(!isset($_SESSION['logged'])) { header('Location:home'); }
	require("utilies/utilies.php");
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
		<img src="<?php show_student_avatar($_SESSION['student_id']); ?>" class="avatar">
		<span class="name"><?php echo $_SESSION['student_name'];  ?></span>
		<span class="descryption">klasa <?php echo $_SESSION['class'];  ?></span>
		<div class="buttons">
			<a href="logout" class="button logout"><span class="link">wyloguj</span></a><br>
			<a href="index.php?page=change_data" class="button edit"><span class="link">zmień dane</span></a>
		</div>
</div>
<div class="contener">
	<div class="news">
		<div class="caption">
			Oceny
		</div>
		<a href="dashboard"><img src="img/back.svg" class="back-link"></a>
		<div class="change-data-list">
			<table id="change-data-table" cellspacing="0" cellpadding="0">
			  <?php show_grades(); ?>
			</table>
		</div>
	</div>
	
	
	<div>
</div>
</body>
</html>