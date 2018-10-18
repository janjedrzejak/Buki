<?php 
	if(!isset($_SESSION['logged'])) { header('Location:index.php'); }
?>	
	 <form action="index.php?page=add_new_subject" method="POST">
		<input type="text" name="nazwa" placeholder="">
		<input type="submit" name="submit" value="dodaj">
	</form>

<?php
	 include('db/pdo.php');

	if(isset($_POST['nazwa'])) {
		$nazwa=htmlspecialchars($_POST['nazwa']);
	

	$q = $pdo->prepare("SELECT * FROM `subjects` ORDER BY `subjects`.`id` ASC");
	$q->execute();
		while($result = $q->fetch(PDO::FETCH_ASSOC)) {
					$last_id = $result['id']; //pobierz ostatnie id
					} $last_id++;
	$q = $pdo->query("INSERT INTO `subjects` (`id`, `name`) VALUES ('" . $last_id . "', '" . $nazwa . "')");
}
	
	

?>