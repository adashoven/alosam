<?php 
if ($_POST['dom'] == 'Non'){
	echo 'ajouter ladresse mais pas en dom';
	echo $_POST['adrs'];
}
else if ($_POST['dom'] == 'Oui'){
	echo 'ajouter ladresse en dom';
	echo $_POST['adrs'];
}
?>