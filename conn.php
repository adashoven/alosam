<?php 
     	session_start();
	
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'test');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
		$errMsg = '';
		//username and password sent from Form
		$login = trim($_POST['pseudo']);
		$pass=sha1($_POST['pass']);		
		if($login == '')
			$errMsg .= 'You must enter your Username<br>';
		
		if($pass == '')
			$errMsg .= 'You must enter your Password<br>';
		
		
		if($errMsg == ''){
			$records = $databaseConnection->prepare('SELECT id,login,pass FROM  test WHERE login = :login');
			$records->bindParam(':login', $login);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			if(count($results) > 0 && $pass == ($results['pass'])){
				$_SESSION['login'] = $results['login'];
				$_SESSION['pass'] = $_POST['pass'];
				header('location:acceuil.php');
				exit;
			}else{
				echo 'Username and Password are not found<br>';
			}
		}
     
?>