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
	
		 <script>
		 	$('.counter').each(function() {
		  var $this = $(this),
		      countTo = $this.attr('data-count');
		  
		  $({ countNum: $this.text()}).animate({
		    countNum: countTo
		  },

		  {

		    duration: 8000,
		    easing:'linear',
		    step: function() {
		      $this.text(Math.floor(this.countNum));
		    },
		    complete: function() {
		      $this.text(this.countNum);
		      //alert('finished');
		    }

		  });  
		  
		  

		});
		 </script>
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
			Aktualności
		</div>
		<div class="news-list">
			<table id="news-table" cellspacing="0" cellpadding="0">
				<?php
					show_news($_SESSION['student_id']);
				?>
			</table>
		</div>
	</div>
	
	<div class="counters">
		<div class="caption">
			Rok szkolny w pigułce
		</div>
		<div class="counter-list">
			<div class="counter-item">
				<span class="counter-title">Jutro idziesz do szkoły na:</span>
 				<span class="counter-caption-medium">
 					<?php show_hour_start_lesson($_SESSION['student_id']); ?>
 				</span>
 				<span class="counter-title">Jutro kończysz lekce o:</span>
 				<span class="counter-caption-medium">
 					<?php show_hour_end_lesson($_SESSION['student_id']); ?>
 				</span>
			</div>
			<div class="counter-item">
				<span class="counter-title">Do końca roku<br>szkolnego pozostało:</span>
				<div class="counter" data-count="<?php echo $_SESSION['day_to_end_year']; ?>">0</div>
  				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    			<script  src="js/index.js"></script>
    			<span class="counter-caption">dni</span>
			</div>
			<div class="counter-item">
				<span class="counter-title">Twoja frekwencja<br>wynosi:</span>
				<div class="counter" data-count="80">0</div>
  				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    			<script  src="js/index.js"></script>
    			<span class="counter-caption">%</span>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="menu-list">
			<div class="menu-item">
				<a href="index.php?page=grades"><span class="item-caption">Oceny</span></a>
				<img src="img/grade.png">
			</div>
			<div class="menu-item">
				<a href="index.php?page=lesson_plan"><span class="item-caption">Plan lekcji</span></a>
				<img src="img/day.png">
			</div>
			<div class="menu-item">
				<a href="index.php?page=messages"><span class="item-caption">Wiadomości</span></a>
			</div>
			<div class="menu-item">
				<a href="index.php?page=frequency"><span class="item-caption">Frekwencja</span></a>
			</div>
			<div class="menu-item">
				<a href="#"><span class="item-caption">Dokumenty</span></a>
			</div>

		</div>
	</div>
</div>
</body>
</html>