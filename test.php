<?php			
if(isset($results) == 1)
			{
			$errMsg .= 'Pseudo déjà pris<br>';	
			}
			else
			{
			
				$req = $connexion->prepare('INSERT INTO `test`(`nom` ,`prenom` ,`pass` ,`login` ,`mail`) VALUES(:nom, :prenom, :pass, :login, :mail)');
				$req->execute(array(
					'nom' => $_POST['nom'],
					'prenom' => $_POST['prenom'],
					'pass' => $pass,
					'login' => $_POST['pseudo'],
					'mail' => $_POST['mail'],
					)) or die (print_r($req->errorInfo()));
			}
		endif;
?>