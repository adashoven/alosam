    <form method="POST" action="chrcontconf.php">
        <div class="col-md-6">
            <p class="text-muted"> Chercher un contact de Confiance : <input type="text" name="contconf" class="form-control" placeholder="Contact" required></p>
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
    <input type="submit" name="envoyer" value="Rechercher" class="btn btn-xl">
        </div>

<center><table style="border: 2px solid white">
	<tr>
		<td style="color: yellow;border: solid white">Contact</td>
	</tr>

	<?php
		$login = $_SESSION['login'];

$nbcomm = $databaseConnection->prepare('SELECT COUNT(*) FROM contconffff WHERE pseudo_dem_cont = :login');
			$nbcomm->bindParam(':login', $login);
			$nbcomm->execute();
			$nb = $nbcomm->fetch();
			$nbc = $nb[0];

			if ($nbc==0)
				{
				echo "Vous n'avez pas encore de contact de confiance";
				}
			else
				{
				echo "Vous avez passé " ,$nbc, " commande(s) <br>"; 
				// On recupere tout le contenu de la table news
				$reponse = $databaseConnection->prepare('SELECT id, pseudo_dem_cont, pseudo_cont_conf FROM contconffff WHERE pseudo_dem_cont = :login');
  				$reponse->bindParam(':login', $login);
  				$reponse->execute();
				while ($donnees = $reponse->fetch())
				{
    //On affiche les données dans le tableau
 ?>
                <tr>
                    <td style="color: white;border: solid white"><?php echo $donnees['pseudo_cont_conf'];?></td>
                </tr> 
<?php    
}
$reponse->closeCursor();
}

?>
        </table>

</body>
</html>
