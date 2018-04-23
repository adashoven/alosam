<?php
include('db.php');
			$login = $_SESSION['login'];
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
			$records = $databaseConnection->prepare('SELECT id,nom,prenom,login,pass, mail FROM  test WHERE login = :login');
			$records->bindParam(':login',$login );
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			$nom = $results['nom'];
			$prenom = $results['prenom'];	
 ?>
<center>
	<table>
		<tr>
			<td> nom </td>
			<td> <?php echo $nom;?></td>
		</tr>
		<tr>
			<td> prenom </td>
			<td> <?php echo $prenom;?></td>
		</tr>
	</table>
</center>