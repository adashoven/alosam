<a href="addadress.php">vous souhaitez ajouter une adresse ? cliquez ici</a>
<p> Voila vos adresses connu </p>

 <?php           
 $records = $databaseConnection->prepare('SELECT iencli_adrss,dom FROM  adrsusers WHERE pseudo_cli = :login');
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