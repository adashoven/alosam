<?php 
session_start();
include 'db.php';
$projet = $_POST['projet'];

$pass=sha1($_SESSION['mdp']);
$req = $connexion->prepare('INSERT INTO `compte_unix`(`login` ,`mdp`) VALUES(:login, :mdp)');
$req->execute(array(
	'login' => $projet,
	'mdp' => $pass,
	)) or die (print_r($req->errorInfo()));

			$records = $connexion->prepare('SELECT id_unix,login,mdp FROM  compte_unix WHERE login = :login');
			$records->bindParam(':login', $projet);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
$id_unix_projet = $results['id_unix'];

$requ = $connexion->prepare('INSERT INTO `Projet`(`deployer` ,`compte_unix_id_unix`) VALUES(:deployer, :compte)');
$requ->execute(array(
	'deployer' => '1',
	'compte' => $id_unix_projet,
	)) or die (print_r($requ->errorInfo()));

			$records = $connexion->prepare('SELECT `id`, `nom`, `prenom`, `email`, `compte_unix_id_unix` FROM `developpeurs` WHERE compte_unix_id_unix = :compte');
			$records->bindParam(':compte', $_SESSION['id_unix']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

$iddev = $results['id'];

echo "$iddev et  $id_unix_projet"; 

$reqa = $connexion->prepare('INSERT INTO `developpeurs_has_projet`(`Developpeurs_id`, `Projet_id`, `Chef_id`) VALUES(:dev, :projet, :chefid)');
$reqa->execute(array(
	'dev' => $iddev,
	'projet' => $id_unix_projet,
	'chefid' => $iddev,
	)) or die (print_r($reqa->errorInfo()));

	exec('script/create_project.sh' $projet $_SESSION['mdp']);

if (($POST_['choix'])=="oui")
{
	exec('scripts/add_user_bdd.sh' $projet $_SESSION['mdp']);
}
$_SESSION['projet']=$projet;
header('location:acceuil.php');
?>