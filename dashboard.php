<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
	
    
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
			<a href="#" class="button logout"><span class="link">wyloguj</span></a><br>
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


<!--

	<div class="row main_container">
	<div class="wrapper col-xs-12 col-sm-12 col-md-4 col-lg-3 p-0 m-0">
		<div class="row navi m-0">
			<img src="img/logo.svg" width="134" height="36" id="navi_logo">
			<button class="hamburger">&#9776;</button>
		</div>
		<div class="row text-center justify-content-center m-0">
			<div class="user-info">
				<img src="img/avatars/avatar000.png" class="avatar">
				<span class="name">Aleksandra Locha</span>
				<span class="descryption">klasa strzyżenia jeży</span>
				<div class="buttons">
					<a href="#" class="button">wyloguj</a>
					<a href="#" class="button">zmień dane</a>
				</div>
			</div>
		</div>
	</div>

<div class="content col-xs-0 col-sm-0 col-md-8 col-lg-9 p-0">
	<div class="row navi m-0">
		<span class="school_name">Szkoła dojenia krów i byków</span>	
	</div>
	<div class="row m-0">
		<div class="col-md-11 col-lg-6">
			<span class="descryption-right">Aktualności</span>
			<div class="news">
				<div class="row news-row">
					<div class="col col-md-3 col-lg-3 news-date">
						10:15
					<span class="news-date-descryption">12 paź. 2018</span>
					</div>
					<div class="col col-md-7 col-lg-7 news-details">
						Dodano nową ocene
					</div>
					<div class="col col-md-2 col-lg-2 eye">
						<img class="img-fluid" src="img/eye.png" width="43" height="25">
					</div>
				</div>
				<div class="row news-row">
					<div class="col col-md-3 col-lg-3 news-date">
						10:15
					<span class="news-date-descryption">12 paź. 2018</span>
					</div>
					<div class="col col-lg-7 news-details">
						Dodano nową ocene
					</div>
					<div class="col col-md-2 col-lg-2 eye">
						<img class="img-fluid" src="img/eye.png" width="43" height="25">
					</div>
				</div>
				<div class="row news-row">
					<div class="col col-md-3 col-lg-3 news-date">
						10:15
					<span class="news-date-descryption">12 paź. 2018</span>
					</div>
					<div class="col col-lg-7 news-details">
						Dodano nową ocene
					</div>
					<div class="col col-md-2 col-lg-2 eye">
						<img class="img-fluid" src="img/eye.png" width="43" height="25">
					</div>
				</div>	
			
			</div>
		</div>
		<div class="col-md-12 col-lg-6">
			<span class="descryption-right">Koniec roku szkolnego za</span>
			<div class="row information_row ">
				<div class="fr_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>
					<span class="first_information_span">Jutro kończysz lekcje o:</span>
					<span class="first_information_answer">13:15</span>
				</div>
				<div class="fr_row_information">
					<span class="first_information_span">Do końca roku szkolnego pozostało:</span>
					<span class="secound_information_answer">125</span><span class="first_information_answer">dni</span>
				</div>
				<div class="fr_row_information">
					<span class="first_information_span">Twoja frekwencja<br>wynosi:</span>
					<span class="secound_information_answer">80</span><span class="first_information_answer">%</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row m-0">
	<div class="col-md-12 col-lg-6">
		<div class="row m-0">
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>	
				</div>
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>
				</div>
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>
				</div>
				
		</div>
	</div>
	<div class="col-md-12 col-lg-6">
		<div class="row m-0">
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>	
				</div>
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>
				</div>
				<div class="sc_row_information">
					<span class="first_information_span">Jutro idziesz do szkoły na:</span>
					<span class="first_information_answer">8:00</span>
				</div>
				
		</div>
	</div>
</div>
</div>
</div>-->

</body>
</html>