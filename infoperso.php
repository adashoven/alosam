<?php
            $records = $databaseConnection->prepare('SELECT id,nom,prenom,login,pass, mail FROM  test WHERE login = :login');
            $records->bindParam(':login',$login );
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            $nom = $results['nom'];
            $prenom = $results['prenom']; 
            $mail  = $results['mail'];
 ?>
<center>
    <table>
        <tr>
            <td><p> Pseudo </p></td>
            <td><p> <?php echo $login;?> </p></td>
        </tr>        
        <tr>
        	
            <td><p> Nom </p></td>
            <td><p> <?php echo $nom;?> </p></td>
        </tr>
        <tr>
            <td><p> Prenom </p></td>
            <td><p> <?php echo $prenom;?> </p></td>
        </tr>
        <tr>
            <td><p> Mail </p></td>
            <td><p> <?php echo $mail;?> </p></td>
        </tr>
    </table>
    <a href="chamdp.php">Vous voulez changer votre mot de passe ? Cliquez ici</a> <br>
 <?php           $records = $databaseConnection->prepare('SELECT iencli_adrss,dom FROM  adrsusers WHERE login = :login');
            $records->bindParam(':login',$login );
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            $ia = $results['iencli_adrss'];
            $dom = $results['dom'];

    ?>
    <table>
        <tr>
            <td><p> Adresse </p></td>
            <td><p> <?php echo $ia;?> </p></td>
        </tr>        
        <tr>
        	
            <td><p> Domicile ? </p></td>
            <td><p> <?php echo $dom;?> </p></td>
        </tr>
    </table>
    <?php include("adrs.php"); ?>
</center>