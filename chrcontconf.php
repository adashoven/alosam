<?php 
session_start();
include ("db.php");
$login = $_SESSION['login'];
$contconf = $_POST['contconf'];
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
$records = $databaseConnection->prepare('SELECT id,login FROM  test WHERE login = :login');
			$records->bindParam(':login', $contconf);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

if(count($results['login']) == 0)
			{
			echo 'Pseudo introuvable<br>';
			echo '<a href="acceuil.php"> cliquez ici pour revenir</a>';
			}
			else
			{
				$req = $connexion->prepare('INSERT INTO `contconffff`(`pseudo_dem_cont` ,`pseudo_cont_conf`) VALUES(:pdc, :pcc)');
				$req->execute(array(
					'pdc' => $login,
					'pcc' => $contconf,
					)) or die (print_r($req->errorInfo()));
				    header('location:acceuil.php');
				    exit;
			}
			
?>