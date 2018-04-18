<?php 
include 'db.php';
$req = $bdd->prepare('INSERT INTO `compte unix`(`login` ,`mdp`) VALUES(:login, :mdp)');
$req->execute(array(
	'login' => $_POST['pseudo'],
	'mdp' => $pass,
	)) or die (print_r($req->errorInfo()));
?>