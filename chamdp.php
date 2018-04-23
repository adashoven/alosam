<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/othercss.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">


    <!-- Navigation -->
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
<!--                    <li>
                        <a class="page-scroll" href="#services">Commander un Allosam</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Compte</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Historique</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Paramètre</a>
                    </li>
                    <li>-->
                        <li>
                        <a class="page-scroll" href="deconnexion.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="liste" class="bg-light-gray">
            <center><p><h1 class="section-heading">Changement de Mot de Passe</h1></p>
                <section id="liste" class="bg-light-gray">
                <div class="container">
                    <div class="row">
                        <form method="POST" action="chgmdp.php">
                        <div class="col-md-6">
            <p class="text-muted"> Ancien Mot de Passe : <input type="password" name="ancmdp" class="form-control" placeholder="Ancien mot de passe" required></p>
                                                <p class="help-block text-danger"></p>
        </div>
        <div class="col-md-6">
            <p class="text-muted"> Nouveau Mot de Passe : <input type="password" name="noumdp" class="form-control" placeholder="Nouveau mot de passe" required></p>
                                                <p class="help-block text-danger"></p>
        </div>
                <div class="col-md-6">
    <input type="submit" name="envoyer" value="envoyer" class="btn btn-xl">
                    </div>

                </form>
                <form action="acceuil.php">
                <div class="col-md-6">
    <input type="submit" value="Retour" class="btn btn-xl">
                </div>
            </form>
            </div>
        </div>
        </section>
    </center>
    </section>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>