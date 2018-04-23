<?php     	
session_start();
$login =$_SESSION['login'];
	//DB configuration Constants
include('db.php');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
		$errMsg = '';
		//username and password sent from Form
		$ancmdp = sha1($_POST['ancmdp']);
		$noumdp=sha1($_POST['noumdp']);		

			$records = $databaseConnection->prepare('SELECT id,login,pass FROM  test WHERE login = :login');
			$records->bindParam(':login', $login);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($ancmdp == ($results['pass'])){
			$req = $databaseConnection->prepare("UPDATE test SET pass = :noumdp WHERE login = :login");
			$req->execute(array(
     		'noumdp' => $noumdp,
     		'login' => $login
     		));
			$req->execute();
				header('location:acceuil.php');
				exit;
			}else{
				echo 'Mauvais ancien mot de Passe<br>';
			}
     
?>