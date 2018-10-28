<?php
	function lesson_start_hour($hour) {
		switch($hour) {
			case 1: echo '8<span class="blink">:</span>00</span>';
				break;
			case 2: echo '8<span class="blink">:</span>50</span>';
				break;
			case 3: echo '9<span class="blink">:</span>45</span>';
				break;
			case 4: echo '10<span class="blink">:</span>40</span>';
				break;
			case 5: echo '11<span class="blink">:</span>40</span>';
				break;
			case 6: echo '12<span class="blink">:</span>40</span>';
				break;
			case 7: echo '13<span class="blink">:</span>40</span>';
				break;
			case 8: echo '14<span class="blink">:</span>30</span>';
				break;
			case 9: echo '15<span class="blink">:</span>30</span>';
				break;
			default: echo 'b/z';
		}
	}
	function lesson_end_hour($hour) {
		switch($hour) {
			case 1: echo '8<span class="blink">:</span>45</span>';
				break;
			case 2: echo '9<span class="blink">:</span>35</span>';
				break;
			case 3: echo '10<span class="blink">:</span>30</span>';
				break;
			case 4: echo '11<span class="blink">:</span>25</span>';
				break;
			case 5: echo '12<span class="blink">:</span>25</span>';
				break;
			case 6: echo '13<span class="blink">:</span>25</span>';
				break;
			case 7: echo '14<span class="blink">:</span>25</span>';
				break;
			case 8: echo '15<span class="blink">:</span>15</span>';
				break;
			case 9: echo '16<span class="blink">:</span>15</span>';
				break;
			default: echo 'b/z';
		}
	}
	function professor_id_to_name($id) {
		include('db/pdo.php');
		$sql = $pdo->prepare("SELECT * FROM `professors` WHERE `id` = '" . $id . "'");
		$sql->execute();
		$result=$sql->fetch();
			$name=$result['professor_name'];
		return $name;
	}
	function show_hour_start_lesson($student_id,$login_type) {
		include('db/pdo.php');
		$today = date("Y-m-d"); 
		$week_day_number = date("N",strtotime($today)) + 1;
		if($week_day_number==8) { $week_day_number = 1; }

		switch($login_type) {
			case 'students':
				$all_subject_per_day = $pdo->prepare("SELECT * FROM `subject_date` WHERE `subject_day` = " . $week_day_number . " ORDER BY `subject_hour` ASC");
				$all_subject_per_day->execute();
				$count = $all_subject_per_day->rowCount();
				if($count!=0) {
					while($result=$all_subject_per_day->fetch(PDO::FETCH_ASSOC)) {
						$id_of_subject_date = $result['id'];
						$start_hour = $result['subject_hour'];

							$student_subjects_date = $pdo->prepare("SELECT * FROM `students_record_subject` WHERE `student_id` = '" . $student_id . "' ORDER BY `id_date` ASC");
							$student_subjects_date->execute();

							while($result=$student_subjects_date->fetch(PDO::FETCH_ASSOC)) {
								$id_date = $result['id_date'];
								$start_date = 0;
								if($id_date == $id_of_subject_date) {
									$start_date = 1; break;
								}
							} if(!empty($start_date)) { break; }	
						//echo '<span style="color:black;">' . $id_of_subject_date . ' </span>'; 
					}
					// echo $id_date;
					$first_subject_per_day = $pdo->prepare("SELECT * FROM `subject_date` WHERE `id` = " . $id_date . " ORDER BY `subject_hour` ASC");
					$first_subject_per_day->execute();
						$result=$first_subject_per_day->fetch();
						$start_hour = $result['subject_hour'];
						lesson_start_hour($start_hour);
					} else { echo 'b/z'; }
			break;
			case 'professors':
				$all_subject_per_day_of_professor = $pdo->prepare("SELECT * FROM `subject_date` WHERE `professor_id` = " . $student_id . " AND `subject_day` =" . $week_day_number . " ORDER BY `subject_date`.`subject_hour` ASC");
				$all_subject_per_day_of_professor->execute();
				$count = $all_subject_per_day_of_professor->rowCount();
				if($count!=0) {
					$result=$all_subject_per_day_of_professor->fetch();
					$start_hour = $result['subject_hour'];
					lesson_start_hour($start_hour);
					} else { echo 'b/z'; }

			break;
		}
			
				
				
	}
	function show_hour_end_lesson($student_id,$login_type) {
		include('db/pdo.php');
			$today = date("Y-m-d"); 
			$week_day_number = date("N",strtotime($today)) + 1;
			if($week_day_number==8) { $week_day_number = 1; }

			switch($login_type) {
			case 'students':	
				$all_subject_per_day = $pdo->prepare("SELECT * FROM `subject_date` WHERE `subject_day` = " . $week_day_number . " ORDER BY `subject_hour` DESC");
				$all_subject_per_day->execute();
				$count = $all_subject_per_day->rowCount();
				if($count!=0) {
					while($result=$all_subject_per_day->fetch(PDO::FETCH_ASSOC)) {
						$id_of_subject_date = $result['id'];
						$start_hour = $result['subject_hour'];

							$student_subjects_date = $pdo->prepare("SELECT * FROM `students_record_subject` WHERE `student_id` = '" . $student_id . "' ORDER BY `id_date` ASC");
							$student_subjects_date->execute();

							while($result=$student_subjects_date->fetch(PDO::FETCH_ASSOC)) {
								$id_date = $result['id_date'];
								$start_date = 0;
								if($id_date == $id_of_subject_date) {
									$start_date = 1; break;
								}
							} if(!empty($start_date)) { break; }	
						//echo '<span style="color:black;">' . $id_of_subject_date . ' </span>'; 
					}
					// echo $id_date;
					$first_subject_per_day = $pdo->prepare("SELECT * FROM `subject_date` WHERE `id` = " . $id_date . " ORDER BY `subject_hour` ASC");
					$first_subject_per_day->execute();
						$result=$first_subject_per_day->fetch();
						$start_hour = $result['subject_hour'];
						lesson_end_hour($start_hour);
					} else { echo 'b/z'; }
				break;
				case 'professors':
					$all_subject_per_day_of_professor = $pdo->prepare("SELECT * FROM `subject_date` WHERE `professor_id` = " . $student_id . " AND `subject_day` =" . $week_day_number . " ORDER BY `subject_date`.`subject_hour` DESC");
					$all_subject_per_day_of_professor->execute();
					$count = $all_subject_per_day_of_professor->rowCount();
					if($count!=0) {
						$result=$all_subject_per_day_of_professor->fetch();
						$end_hour = $result['subject_hour'];
						lesson_end_hour($end_hour);
						} else { echo 'b/z'; }
				break;
			}
	}
	function show_lesson_plan($student,$login_type) {
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

			  			switch($login_type) {
						case 'students':

							$sql = $pdo->prepare("SELECT * FROM `students_record_subject` WHERE `student_id` = '" . $student . "' ORDER BY `student_id` ASC"); 
							$sql->execute();	
							while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
									$id_date = $result['id_date'];

										$sqll = $pdo->prepare("SELECT * FROM `buki`.`subject_date` WHERE `id` = '" . $id_date . "' AND `subject_day` = '" . $day . "' AND `subject_hour`='" . $i . "'"); 
										$sqll->execute();
											
										while($result=$sqll->fetch(PDO::FETCH_ASSOC)) {
											$subjectid = $result['subject_id'];
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
				
						break;
						case 'professors':
							$sql = $pdo->prepare("SELECT * FROM `subject_date` WHERE `professor_id` = " . $student . " AND `subject_day` = " . $day . " AND `subject_hour` = " . $i . " ORDER BY `subject_hour` ASC"); 
							$sql->execute();
							while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
								$subjectid = $result['subject_id'];
								$room = $result['room'];
									$sqlll= $pdo->prepare("SELECT * FROM `buki`.`subjects` WHERE `id` = '" . $subjectid . "'");
												$sqlll->execute();
												
												while($result=$sqlll->fetch(PDO::FETCH_ASSOC)) {
													$nazwa_przedmiotu = $result['name'];

													echo '<span class="ceil">' . $nazwa_przedmiotu . '<span class="ceil-small"> -sala ' . $room .'</span></span>';
													
												}
							}
							echo '<br>';
						break;
						}	
					}

					echo '</td>';
				}
			echo '</tr></table>';
	}
	function show_name($student, $login_type) {
		include('db/pdo.php');
		if($login_type == 'students') {
			$name = 'student_name';
			$table = 'students';
		}
		if($login_type == 'professors') {
			$name = 'professor_name';
			$table = 'professors';
		}
		$q = $pdo->prepare("SELECT `" . $name . "` FROM `" . $table . "` WHERE `id` = '" . $student . "';");
		$q->execute();
		$result=$q->fetch();
		echo $result[$name];
	}
	function show_student_adres($student,$login_type) {
		include('db/pdo.php');
		if($login_type == 'students') {
			$adres = 'student_adres';
			$table = 'students';
		}
		if($login_type == 'professors') {
			$adres = 'professor_adres';
			$table = 'professors';
		}
		$q = $pdo->prepare("SELECT `" . $adres . "` FROM `" . $table . "` WHERE `id` = '" . $student . "';");
		$q->execute();
		$result=$q->fetch();
		echo $result[$adres];
	}
	
	function show_avatar($student,$login_type) {
		include('db/pdo.php');
		if($login_type == 'students') {
			$avatar = 'student_avatar';
			$table = 'students';
		}
		if($login_type == 'professors') {
			$avatar = 'professor_avatar';
			$table = 'professors';
		}
			$q = $pdo->prepare("SELECT `" . $avatar . "` FROM `" . $table . "` WHERE `id` = '" . $student . "';");
			$q->execute();
			$result=$q->fetch();
			
			echo $result[$avatar];
	}

	function show_school_name() {
		include('db/pdo.php');
		$q = $pdo->prepare("SELECT `name` FROM `school`;");
		$q->execute();
		$result=$q->fetch();
		echo $result['name'];
	}
	function change_adres($adres,$student_id,$password,$login_type) {
		include('../db/pdo.php');
		$user_adres = htmlspecialchars($adres);
		$template = "/^[-0-9A-Z_ s]+$/i";
		$password = htmlspecialchars($password);
		if($login_type == 'students') {
			$adres = 'student_adres';
			$table = 'students';
		}
		if($login_type == 'professors') {
			$adres = 'professor_adres';
			$table = 'professors';
		}
			if(preg_match($template, $adres) && !empty($password)) { 
				$password=md5($password);
				$query = $pdo->prepare("SELECT * FROM `" . $table . "` WHERE `id` = " . $student_id . " AND `password`='" . $password . "';");
				$query->execute();
				$doit = $query->rowCount();
					if($doit==1) {
						$query = $pdo->prepare("UPDATE `" . $table . "` SET `" . $adres . "` = '" . $user_adres . "' WHERE `" . $table . "`.`id` = " . $student_id . ";");
						$query->execute();
						header('Location:../dashboard');
					} else { header('Location:../dashboard'); }	
			} else { header('Location:../dashboard'); }
			
	}
	function change_password($student_id,$old_password,$new_password,$login_type) {
		include('../db/pdo.php');

		$old_password = htmlspecialchars($old_password);
		$new_password = htmlspecialchars($new_password);

		if($login_type == 'students') {
			$table = 'students';
		}
		if($login_type == 'professors') {
			$table = 'professors';
		}

			if(!empty($old_password) && !empty($new_password)) {
				$old_password = md5($old_password);
				$new_password = md5($new_password);

					$query = $pdo->prepare("SELECT * FROM `" . $table . "` WHERE `id` = " . $student_id . " AND `password`='" . $old_password . "';");
					$query->execute();
					$doit = $query->rowCount();
						if($doit==1) {
							$query = $pdo->prepare("UPDATE `" . $table . "` SET `password` = '" . $new_password . "' WHERE `" . $table . "`.`id` = " . $student_id . ";");
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
			echo '<tr>';
			echo '<td class="module-name-col">przedmioty</td>';
			echo '<td class="module-name-col">oceny cząstkowe</td>';
			echo '<td class="module-name-col">średnia ocen</td>';
			echo '<td class="module-name-col">ocena końcowa</td>';
			echo '</tr>';

					while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
						$nazwa_przedmiotu = $result['name'];
						$subject_id = $result['id'];
						echo '<tr>';
						echo '<td class="module-name-col">' . $nazwa_przedmiotu . '</td>';
						echo '<td class="module-col">';
						//=========================================
							$sqll= $pdo->prepare("SELECT * FROM `grades` WHERE `student_id` = " . $student_id . " AND `subject_id` = " . $subject_id . ""); 
							$sqll->execute();
							$g_summary = $w_summary = 0;
								while($result=$sqll->fetch(PDO::FETCH_ASSOC)) {
									$grade = $result['grade'];
									$weight = $result['weight'];
										$x = ($grade * $weight);
										$g_summary = $g_summary + $x; 
										$w_summary = $w_summary + $weight;
									echo '<div class="tip">';
									echo '<span class="grade">[' . $grade . ']</span>';
									echo '<span class="tiptext">waga oceny: [' . $weight . ']</span>';
									echo '</div>';
								}
								if($w_summary != 0) { $weighted_score = $g_summary / $w_summary; } else { $weighted_score = '?'; }
						//=========================================
						echo '</td>';
						echo '<td class="grades-col"><span class="grade">[' . $weighted_score . ']</span></td>';
						echo '<td>?</td>';
						echo '</tr>';

					}
			echo '</table>';
	}
	function show_news($student_id) {
		include('db/pdo.php');
			$sql = $pdo->prepare("SELECT * FROM `grades` WHERE `student_id` = " . $student_id . " ORDER BY `date` DESC LIMIT 3");
			$sql->execute();
				
			while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
				$date = $result['date'];
				$grade = $result['grade'];
					$time = strtotime($date);
					$myFormatForView = date("Y-m-d", $time);
						echo '<tr>';
						echo '<td class="date">' . $myFormatForView . '</td>';
						echo '<td class="news-text">dodano ocenę</td>';
						echo '<td class="show"><a href="index.php?page=grades">';
						echo '<img src="img/eye.png"></a></td>';
						echo '</tr>';
			}
	}	
	function cut_phrase($content,$count) { 
	    $licz = strlen($content); 
	    if ($licz>=$count) { 
	  
	        $tnij = substr($content,0,$count);  
	        $txt = $tnij."..."; 
	    } 
	    else {
	        $txt = $content; 
	    } 
	    return $txt; 
	} 
	function show_student_messages($student_id) {
		include('db/pdo.php');

			$sql = $pdo->prepare("SELECT * FROM `messages` WHERE `student_id` = '" .  $student_id . "' ORDER BY `messages`.`id` ASC");
			$sql->execute();
					echo '<table>';
					echo '<tr>';
					echo '<td class="module-name-col">Data wiadomości</td>';
					echo '<td class="module-name-col">Nadawca</td>';
					echo '<td class="module-name-col">Temat</td>'; 
					echo '</tr>';
			while($result=$sql->fetch(PDO::FETCH_ASSOC)) {
				$id=$result['id'];
				$date = $result['date'];
				$content = $result['content'];
				$professor_id = $result['professor_id'];
					echo '<tr>';
					echo '<td class="module-name-col">' . $date . '</td>';
					echo '<td class="module-col">' . professor_id_to_name($professor_id) . '</td>';
					echo '<td class="module-col"><a href="index.php?page=messages&id=' . $id . '">' . cut_phrase($content,40) . '</a></td>';
					echo '</tr>';
			}
					echo '</table>';
	}
	function show_student_message($student_id, $id) {
		include('db/pdo.php');
			$sql=$pdo->prepare("SELECT * FROM `messages` WHERE `id` = " . $id . " AND `student_id` = " . $student_id . " ORDER BY `id` ASC LIMIT 1");
			$sql->execute();
			$result=$sql->fetch();
				$date = $result['date'];
				$content = $result['content'];
				$professor_id = $result['professor_id'];
					echo '<table>';
					echo '<tr>';
					echo '<td class="module-name-col">';
					echo $date . ' ';
					echo professor_id_to_name($professor_id) . ' napisał wiadomość:</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td class="module-col">' . $content .'</td>';
					echo '</tr>';
					echo '</table>';
	}
	function absence_id_to_name($id) {
		include('db/pdo.php');
			$sql=$pdo->prepare("SELECT * FROM `buki`.`type_of_absence` WHERE `id` = '" . $id . "'");
			$sql->execute();
				$result=$sql->fetch();
				$name=$result['name'];
			return $name;
	}
	function show_student_frequency($student_id) {
		include('db/pdo.php');
			$sql=$pdo->prepare("SELECT * FROM `frequency` WHERE `student_id` = '" . $student_id . "'");
			$sql->execute();
			echo '<table>';
			echo '<tr>';
			echo '<td class="module-name-col">Data</td>';
			echo '<td class="module-name-col">Przedmiot</td>';
			echo '<td class="module-name-col">Typ nieobecności</td>';
			echo '</tr>';
				while($result=$sql->fetch(PDO::FETCH_ASSOC)) {	
					$date=$result['date'];
					$professor_id=$result['professor_id'];
					$subject_date_id=$result['subject_date_id'];
					$type_of_absence=$result['type_of_absence'];
					$type_of_absence=absence_id_to_name($type_of_absence);

					$sqll=$pdo->prepare("SELECT * FROM `buki`.`subject_date` WHERE `id` = " . $subject_date_id . " ORDER BY `subject_day` ASC");
					$sqll->execute();
						$result=$sqll->fetch();
						$subject_id=$result['subject_id'];

					$sqll=$pdo->prepare("SELECT * FROM `buki`.`subjects` WHERE `id` = " . $subject_id ." ORDER BY `id` ASC");
					$sqll->execute();
						$result=$sqll->fetch();
						$subject_name=$result['name'];

					echo '<tr>';
						echo '<td class="module-col">';
							echo $date;
						echo '</td>';
						echo '<td class="module-col">';
							echo $subject_name;
						echo '</td>';
						echo '<td class="module-col">';
							echo $type_of_absence;
						echo '</td>';
					echo '</tr>';
				}		
			echo '</table>';	
	}
?>