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
			Oceny
		</div>
		<a href="dashboard"><img src="img/back.svg" class="back-link"></a>
		<div class="module">
			  <?php 
			  	switch ($login_type) {
			  		case 'students':
			  				show_grades($_SESSION['student_id']); 
			  			break;
			  		
			  		case 'professors':
			  				if(isset($_POST['students_class'])) {
								$students_class=htmlspecialchars($_POST['students_class']);
							} else { $students_class='1A'; }

			  				echo "<div class='grades-professor-title'>";
							echo "<form action='index.php?page=grades' method='POST'>";
							echo "<select name='students_class'>";
							
								$sql_all_class=$pdo->prepare("SELECT DISTINCT `class_name` FROM `students` WHERE 1");
								$sql_all_class->execute();
								while($result=$sql_all_class->fetch()) {
									$class_name=$result['class_name'];
									if($class_name==$students_class) { $selected='selected'; } else $selected=NULL;
									echo '<option value=' . $class_name . ' ' .  $selected . ' >klasa ';
									echo $class_name;
									echo '</option>';
								}
							echo "</select>";
							echo "<input type='submit' value='wczytaj'>";
							echo "</form>";
							echo "</div>";


							
							echo "<table>";
							$sql_all_students_of_class=$pdo->prepare("SELECT * FROM `students` WHERE `class_name` LIKE '" . $students_class . "'");
							$sql_all_students_of_class->execute();
							$i=0;
							echo '<td class="module-name-col">numer</td>';
							echo '<td class="module-name-col">imię i nazwisko</td>';
							echo '<td class="module-name-col">oceny</td>';
							echo '<td class="module-name-col">wystaw ocenę</td>';
								while($result=$sql_all_students_of_class->fetch()) {
									$student_name = $result['student_name']; 
									$student_id = $result['id'];

									$i++;

									echo "<tr>";
									echo '<td class="module-col">' . $i . '</td><td class="module-col">' .  $student_name . '</td>';

									$sql_show_grades = $pdo->prepare("SELECT * FROM `grades` WHERE `professor_id` = " . $_SESSION['student_id'] . " AND `student_id` = " . $student_id . " ORDER BY `date` DESC");
									$sql_show_grades->execute();
									echo '<td class="module-col-grade">';
									while($result=$sql_show_grades->fetch()) {
										$grade = $result['grade'];
										$weight = $result['weight'];
										
										echo '[' . $grade . ']';
										
									}
									echo '<td>';
									echo "</tr>";
								}
							echo "</table>";
			  			break;
			  	}
			  	
			  ?>
		</div>
	</div>
	
	
	<div>
</div>
</body>
</html>