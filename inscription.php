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
    <form method="POST" action="insc.php">
    <div classe="raw">
            <div class="col-md-6">
            <p class="text-muted">Sexe :</p>
            <select name="sexe" required>
            <option value="" selected></option> 
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
            </select>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Pseudo : <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required></p>
                                                <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Adresse mail : <input type="text" name="email" class="form-control" placeholder="Mail" required></p>
                                                <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Nom : <input type="text" name="nom" class="form-control" placeholder="Nom" required></p>
                                            <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Prénom : <input type="text" name="prenom" class="form-control" placeholder="Prenom" required></p>
            <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Mot de Passe : <input type="password" name="pass" class="form-control" placeholder="pass" required></p>
                                                <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Retapez Votre Mot de Passe : <input type="password" name="passw2" class="form-control" placeholder="pass" required></p>
                                            <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
    <input type="submit" name="envoyer" value="envoyer" class="btn btn-xl">
        </div>


    </form>
</body>';
?>