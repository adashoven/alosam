	<?php
	include 'db.php';
		try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
		}
		$login = $_SESSION['login'];
$records = $databaseConnection->prepare('SELECT id,Pseudo,Prix,Datecomm,Heure FROM  commande WHERE Pseudo = :login');
			$records->bindParam(':login', $login);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			echo $results['Prix'];
			echo $results['Datecomm'];
			echo $results['Heure'];
?>