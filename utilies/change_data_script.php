<?php
session_start();
require('utilies.php');

	$operation = $_POST['operation'];
		switch($operation) {
			case 'change_adres':
				change_adres($_POST['adres'], $_SESSION['student_id'], $_POST['password'],$_SESSION['login_type']);
			break;
			case 'change_avatar':
				require_once('ImageManipulator.php');
				include('../db/pdo.php');
					if ($_FILES['fileToUpload']['error'] > 0) {
					    echo "Error: " . $_FILES['fileToUpload']['error'] . "<br />";
					    header('Location:../dashboard');
					} else {
					    $validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
					    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
					    
					    if (in_array($fileExtension, $validExtensions)) {
					        $newNamePrefix = time() . '_';
					        $manipulator = new ImageManipulator($_FILES['fileToUpload']['tmp_name']);
					        $width  = $manipulator->getWidth();
					        $height = $manipulator->getHeight();
					        $centreX = round($width / 2);
					        $centreY = round($height / 2);
					        // our dimensions will be 200x130
					        $x1 = $centreX - 100; // 200 / 2
					        $y1 = $centreY - 100;
					 
					        $x2 = $centreX + 100; // 200 / 2
					        $y2 = $centreY + 100; 
					 
					        // center cropping to 200x130
					        $newImage = $manipulator->crop($x1, $y1, $x2, $y2);
					        // saving file to uploads folder
					        $manipulator->save('../img/avatars/' . $newNamePrefix . $_FILES['fileToUpload']['name']);
					        echo 'Done ...';
					        $newName = $newNamePrefix . $_FILES['fileToUpload']['name'];
					            //===============================================================================================
					        $login_type = $_SESSION['login_type'];
					        if($login_type == 'students') {
								$avatar = 'student_avatar';
								$table = 'students';
							}
							if($login_type == 'professors') {
								$avatar = 'professor_avatar';
								$table = 'professors';
							}
					               try {
					                    $sql_query = $pdo->prepare("UPDATE `" . $table . "` SET `" . $avatar . "` = 'img/avatars/" . $newName . "' WHERE `" . $table . "`.`id` = " . $_SESSION['student_id'] . ";"); //edytuj rekord
					                    $sql_query->execute();

					               } catch(PDOException $e) {
					                    header('Location:../dashboard');
					               }
					            //===============================================================================================
					            header('Location:../dashboard');
					    
					    } else {
					        header('Location:../dashboard');
					    }
					}
			break;
			case 'change_password':
				change_password($_SESSION['student_id'], $_POST['old_password'], $_POST['new_password'],$_SESSION['login_type']);
			break;
			default:
				header('Location:../dashboard');
		}
?>