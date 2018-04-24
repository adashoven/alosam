<?php
session_start();
			include 'db.php';
$login = $_SESSION['login'];
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

				$req = $connexion->prepare('INSERT INTO `adrsusers`(`pseudo_cli` ,`iencli_adrss` ,`dom`) VALUES(:psi, :ia, :dom)');
				$req->execute(array(
					'psi' => $login,
					'ia' => $_POST['adrs'],
					'dom' => $_POST['dom'],
					)) or die (print_r($req->errorInfo()));
				    header('location:acceuil.php');
				    exit;
?>