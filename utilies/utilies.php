<?php
	function show_lesson_plan($student) {
		include('db/pdo.php');
		echo '<table class="lesson_plan" cellspacing="0">';
		echo '<tr>
				<td class="days">godziny</td>
				<td class="days">poniedziałek</td>
				<td class="days">wtorek</td>
				<td class="days">środa</td>
				<td class="days">czwartek</td>
				<td class="days">piątek</td>
				</tr><tr>';
		echo '<td class="hours">
				<span>8:00 - 8:45</span>
				<span>8:50 - 9:35</span>
				<span>9:45 - 10:30</span>
				<span>10:40 - 11:25</span>
				<span>11:40 - 12:25</span>
				<span>12:40 - 13:25</span>
				<span>13:40 - 14:25</span>
				<span>14:30 - 15:15</span>
				<span>15:30 - 16:15</span>
			  </td>';
		for($day=1;$day<=4;$day++) {
			echo '<td class="subject">';
			for($i=1; $i<10; $i++) {
					
			$sql = $pdo->prepare("SELECT * FROM `students_record_subject` WHERE `student_id` = '" . $student . "' ORDER BY `student_id` ASC"); //pierwszy uczen 1A
			$sql->execute();	
				while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
					$id_date = $result['id_date'];
					//echo $id_date . '<br>';	

								$sqll = $pdo->prepare("SELECT * FROM `buki`.`subject_date` WHERE `id` = '" . $id_date . "' AND `subject_day` = '" . $day . "' AND `subject_hour`='" . $i . "'"); //poniedzialek i pierwsza godzina
								$sqll->execute();
								
								//	$count = $sqll->rowCount();
									
								while($result=$sqll->fetch(PDO::FETCH_ASSOC)) {
									$subjectid = $result['subject_id']; //id przedmiotow w poniedzialek
									$room = $result['room'];
									$professor = $result['professor_id'];
										$sqlll= $pdo->prepare("SELECT * FROM `buki`.`subjects` WHERE `id` = '" . $subjectid . "'");
										$sqlll->execute();
										
										while($result=$sqlll->fetch(PDO::FETCH_ASSOC)) {
											$nazwa_przedmiotu = $result['name'];

											echo '<span class="ceil">' . $nazwa_przedmiotu . '<span class="ceil-small"> -sala ' . $room .'</span></span>';
											
										}
										
										
								}
					}	
					echo '<br>';
				}

			echo '</td>';

			}
			echo '</tr></table>';
		}
	function show_student_name($student) {
		include('db/pdo.php');
		$q = $pdo->prepare("SELECT `student_name` FROM `students` WHERE `id` = '" . $student . "';");
		$q->execute();
		$result=$q->fetch();
		echo $result['student_name'];
	}
	function show_student_adres($student) {
		include('db/pdo.php');
		$q = $pdo->prepare("SELECT `student_adres` FROM `students` WHERE `id` = '" . $student . "';");
		$q->execute();
		$result=$q->fetch();
		echo $result['student_adres'];
	}
	function show_student_avatar($student) {
		include('db/pdo.php');
		$q = $pdo->prepare("SELECT `student_avatar` FROM `students` WHERE `id` = '" . $student . "';");
		$q->execute();
		$result=$q->fetch();
		echo $result['student_avatar'];
	}
	function show_school_name() {
		include('db/pdo.php');
		$q = $pdo->prepare("SELECT `name` FROM `school`;");
		$q->execute();
		$result=$q->fetch();
		echo $result['name'];
	}
	function change_adres($adres,$student_id,$password) {
		include('../db/pdo.php');
		$adres = htmlspecialchars($adres);
		$template = "/^[-0-9A-Z_ s]+$/i";
		$password = htmlspecialchars($password);
			if(preg_match($template, $adres) && !empty($password)) { 
				$password=md5($password);
				$query = $pdo->prepare("SELECT * FROM `students` WHERE `id` = " . $student_id . " AND `password`='" . $password . "';");
				$query->execute();
				$doit = $query->rowCount();
					if($doit==1) {
						$query = $pdo->prepare("UPDATE `students` SET `student_adres` = '" . $adres . "' WHERE `students`.`id` = " . $student_id . ";");
						$query->execute();
						header('Location:../dashboard');
					} else { header('Location:../dashboard'); }	
			} else { header('Location:../dashboard'); }
			
	}
	function change_password($student_id,$old_password,$new_password) {
		include('../db/pdo.php');

		$old_password = htmlspecialchars($old_password);
		$new_password = htmlspecialchars($new_password);

			if(!empty($old_password) && !empty($new_password)) {
				$old_password = md5($old_password);
				$new_password = md5($new_password);

					$query = $pdo->prepare("SELECT * FROM `students` WHERE `id` = " . $student_id . " AND `password`='" . $old_password . "';");
					$query->execute();
					$doit = $query->rowCount();
						if($doit==1) {
							$query = $pdo->prepare("UPDATE `students` SET `password` = '" . $new_password . "' WHERE `students`.`id` = " . $student_id . ";");
							$query->execute();
							header('Location:../dashboard');
						} else { header('Location:../dashboard'); }
			} else { header('Location:../dashboard'); }

	}
	function show_grades($student_id) {
		include('db/pdo.php');

			$sql = $pdo->prepare("SELECT * FROM `subjects` ORDER BY `subjects`.`id` ASC");
			$sql->execute();	
			echo '<table>';
			echo '<tr><td class="grades-name-col">przedmioty</td><td class="grades-name-col">oceny cząstkowe</td></tr>';
					while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
						$nazwa_przedmiotu = $result['name'];
						$subject_id = $result['id'];
						echo '<tr>';
						echo '<td class="grades-name-col">' . $nazwa_przedmiotu . '</td><td class="grades-col">';
						//=========================================
							$sqll= $pdo->prepare("SELECT * FROM `grades` WHERE `student_id` = " . $student_id . " AND `subject_id` = " . $subject_id . ""); 
							$sqll->execute();
								while($result=$sqll->fetch(PDO::FETCH_ASSOC)) {
									$grade = $result['grade'];
									$weight = $result['weight'];
										if($weight==4) { $coloruj = "red"; } else { $coloruj="white"; }
									echo '<span style="background-color:' . $coloruj . '">[' . $grade . ']</span>';
								}
						//=========================================
						echo '</td></tr>';
					}
			echo '</table>';
	}
?>