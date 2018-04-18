<?php
echo'    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="allosam.png" style="width: 17%"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>';
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
<form method="POST" action="connectionconducteur.php">
<div class="col-md-6">
<p class="text-muted"> Pseudo : <input type="text" name="pseudo" class="form-control" required></p>
</div>
<div class="col-md-6">
<p class="text-muted"> Mot de passe : <input type="password" name="pass" class="form-control" required></p>
</div>
<input type="submit" name="connexion" value="Connexion" class="btn btn-xl" href="connectionconducteur.php">
</form>
</body>';


?>