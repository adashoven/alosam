<?php
     	session_start();
     	 echo $_SESSION['login'];
echo 'coucou'; 
echo '<form action="deconnexion.php">
<p> <input type="submit" name="deco" value="déconnexion" href="deconnexion.php"> </p>
</form>'
?>