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

											echo '<span class="ceil">' . $nazwa_przedmiotu . ' - ' . '<span style="font-size:10px; font-weight:bold;">sala ' . $room .'</span></span>';
											
										}
										
										
								}
					}	
					echo '<br>';
				}

			echo '</td>';

			}
			echo '</tr></table>';
		}

		//show_lesson_plan(34);
?>