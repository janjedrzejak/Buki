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
<div class="contener" style="color:black;">
	<div class="news">
		<div class="caption">
			Plan lekcji
		</div>
		<a href="dashboard"><img src="img/back.svg" class="back-link"></a>
		<div class="lesson_plan">
			<?php
				show_lesson_plan($_SESSION['student_id'], $login_type);
			?>	
		</div>
	</div>

	
</div>
</body>
</html>