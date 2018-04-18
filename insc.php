<?php

     	session_start();
if ($_POST['pass']==$_POST['passw2'])
{
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
			include 'db.php';
$pass=sha1($_POST['pass']);
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
$login = $_POST['pseudo'];
$records = $databaseConnection->prepare('SELECT id,login FROM  test WHERE login = :login');
			$records->bindParam(':login', $login);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

if($results['login'] == $_POST['pseudo'])
			{
			echo 'Pseudo déjà pris<br>';
			echo '<a href="index.php"> cliquez ici pour revenir</a>';
			}
			else
			{
				$req = $connexion->prepare('INSERT INTO `test`(`nom` ,`prenom` ,`pass` ,`login` ,`mail`) VALUES(:nom, :prenom, :pass, :login, :mail)');
				$req->execute(array(
					'nom' => $_POST['nom'],
					'prenom' => $_POST['prenom'],
					'pass' => $pass,
					'login' => $_POST['pseudo'],
					'mail' => $_POST['email'],
					)) or die (print_r($req->errorInfo()));
					
					$_SESSION['login'] = $_POST['pseudo'];
				    header('location:acceuil.php');
				    exit;
			}
			
}
	else 
	{
		echo '<p>votre adresse mail est érronée, merci de réésayer</p>';
		echo 'Cliquez <a href="index.php">ici <a>pour continuer';
		include 'index.php';

	}

}
else 
{
	echo '<p>les deux mots de pass ne sont pas identiques, merci de réésayer</p>';
	echo 'Cliquez <a href="index.php">ici <a>pour continuer';
	include 'index.php';

}

?>