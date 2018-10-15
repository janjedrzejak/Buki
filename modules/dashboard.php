<?php
	if(!isset($_SESSION['logged'])) { header('Location:index.php'); }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex">
	<link rel="icon" href="img/favicon.png">
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
	<a class="logo"><img src="img/logo.svg" width="134" height="36"></a>
</div>

<div class="sidebar">
		<img src="img/avatars/avatar000.png" class="avatar">
		<span class="name">Aleksandra Locha</span>
		<span class="descryption">klasa strzyżenia jeży</span>
		<div class="buttons">
			<a href="?page=logout" class="button logout"><span class="link">wyloguj</span></a><br>
			<a href="#" class="button edit"><span class="link">zmień dane</span></a>
		</div>
</div>
<div class="contener">
	<div class="news">
		<div class="caption">
			Aktualności
		</div>
		<div class="news-list">
			<table id="news-table" cellspacing="0" cellpadding="0">
			  <tr>
			    <td class="date">12 paź. 2018</td>
			    <td class="news-text">Dodano ocenę do przedmiotu</td>
			    <td class="show"><a href="#"><img src="img/eye.png"></a></td>
			  </tr>
			  <tr>
			    <td class="date">12 paź. 2018</td>
			    <td class="news-text">Dodano ocenę do przedmiotu</td>
			    <td class="show"><a href="#"><img src="img/eye.png"></a></td>
			  </tr>
			  <tr>
			    <td class="date">12 paź. 2018</td>
			    <td class="news-text">Dodano ocenę do przedmiotu</td>
			    <td class="show"><a href="#"><img src="img/eye.png"></a></td>
			  </tr>
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
 				<span class="counter-caption-medium">8<span class="blink">:</span>00</span>
 				<span class="counter-title">Jutro kończysz lekce o:</span>
 				<span class="counter-caption-medium">15<span class="blink">:</span>45</span>
			</div>
			<div class="counter-item">
				<span class="counter-title">Do końca roku<br>szkolnego pozostało:</span>
				<div class="counter" data-count="125">0</div>
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
				<span class="item-caption">Oceny</span>
				<img src="img/grade.png">
			</div>
			<div class="menu-item">
				<span class="item-caption">Plan lekcji</span>
				<img src="img/day.png">
			</div>
			<div class="menu-item">
				<span class="item-caption">Tok nauki</span>
			</div>
			<div class="menu-item">
				<span class="item-caption">Frekwencja</span>
			</div>
			<div class="menu-item">
				<span class="item-caption">Dokumenty</span>
			</div>

		</div>
	</div>
</div>
</body>
</html>