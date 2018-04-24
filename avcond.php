<center><table style="border: 2px solid white">
	<tr>
		<td style="color: yellow;border: solid white">Conducteur</td>
		<td style="color: yellow;border: solid white">Avis</td>
		<td style="color: yellow;border: solid white">Note</td>
	</tr>

	<?php
$note = 0;
$nbcomm = $databaseConnection->prepare('SELECT COUNT(*) FROM avicond WHERE pseudo_iencli = :login');
			$nbcomm->bindParam(':login', $login);
			$nbcomm->execute();
			$nb = $nbcomm->fetch();
			$nbc = $nb[0];

			if ($nbc==0)
				{
				echo "Vous n'avez pas encore d'avis";
				}
			else
				{
				echo "Vous avez " ,$nbc, " avis <br>";
				// On recupere tout le contenu de la table news
				$reponse = $databaseConnection->prepare('SELECT id, pseudo_iencli, pseudo_cond, Avis, Note FROM avicond WHERE pseudo-iencli = :login');
  				$reponse->bindParam(':login', $login);
  				$reponse->execute();
				while ($donnees = $reponse->fetch())
				{
    //On affiche les données dans le tableau
				$Note += $donnees['Note'];

 ?>
                <tr>
                    <td style="color: white;border: solid white"><?php echo $donnees['pseudo_cond'];?></td>
                    <td style="color: white;border: solid white"><?php echo $donnees['Avis'];?></td>
                    <td style="color: white;border: solid white"><?php echo $donnees['Note'];?></td>
                </tr>

<?php 

}
$moy = $note/$nbc;
echo "Vous avez ",$moy," de note moyenne"; 
$reponse->closeCursor();
}

?>
</table>
</body>
</html>
