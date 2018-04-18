<?php
echo '

<head>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700 rel=stylesheet type=text/css>

</head>
<body>
<p class="item-intro text-muted">Si vous êtes conducteur <a href="concon.php">cliquez ici</a></p>
<form method="POST" action="conn.php">
<div class="col-md-6">
<p class="text-muted"> Pseudo : <input type="text" name="pseudo" class="form-control" required></p>
</div>
<div class="col-md-6">
<p class="text-muted"> Mot de passe : <input type="password" name="pass" class="form-control" required></p>
</div>
<input type="submit" name="connexion" value="Connexion" class="btn btn-xl" href="conn.php">
</form>
</body>';


?>