<!DOCTYPE html>
<html>
<head>
	<title>historique</title>
</head>
<body>
<center><table style="border: 2px solid white">
	<tr>
		<td style="color: yellow;border: solid white">Date et Heure</td>
		<td style="color: yellow;border: solid white">Prix</td>
	</tr>

	<?php
	include 'db.php';
		try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
		}
		$login = $_SESSION['login'];

$nbcomm = $databaseConnection->prepare('SELECT COUNT(*) FROM commande WHERE Pseudo = :login');
			$nbcomm->bindParam(':login', $login);
			$nbcomm->execute();
			$nb = $nbcomm->fetch();
			$nbc = $nb[0];

			if ($nbc==0)
				{
				echo "Vous n'avez pas encore passé commande";
				}
			else
				{
				echo "Vous avez passé " ,$nbc, " commande(s) <br>"; 
				// On recupere tout le contenu de la table news
				$reponse = $databaseConnection->prepare('SELECT Id, Heure, Prix FROM commande WHERE Pseudo = :login');
  				$reponse->bindParam(':login', $login);
  				$reponse->execute();
				while ($donnees = $reponse->fetch())
				{
    //On affiche les données dans le tableau
 ?>
                <tr>
                    <td style="color: white;border: solid white"><?php echo $donnees['Heure'];?></td>
                   	<td style="color: white; text-align: center;border: solid white"><?php echo $donnees['Prix'];?></td>
                </tr> 
<?php    
}
$reponse->closeCursor();
}

?>
        </table>

</body>
</html>
