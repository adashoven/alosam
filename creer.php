<!DOCTYPE html>
<html>
<?php 
session_start();
?>
<head>
    <meta charset="utf-8">
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
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="acceuil.php">CodShare</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                
                    <li>
                        <a class="page-scroll" href="deconnexion.php" data-toggle="modal"> <button type="button" class="btn btn-danger"> déconnexion</button></a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



   <!-- Header -->
<!--     <header>
        <div class="container">
            <div class="intro-text">
                <form method="POST" action="insc.php">
                <div class="intro-lead-in"> Nom du projet : <input type="text" name="name" value="nom du projet" > </div>
                <div class="intro-lead-in">activer base de données  <FORM>
                                                                    <INPUT type= "radio" name="choix" value="oui"> Oui 
                                                                    <INPUT type= "radio" name="choix" value="non"> Non 
                                                                    </FORM>
                </div>
                <input type="submit" name="valider" value="valider" class="btn btn-xl" href="insc.php">
                <a href=""><button type="button" class="btn btn-danger">annuler</button></a>
    
                </form>
            </div>
        </div>
    </header> -->
     <section id="creer">
    <center>
          <div class="container">
            <div class="intro-text">
<center>
        <form action="addprodject.php" method="post">
            <input type="hidden" name="page" value="edit_pro">
           <h3> <input type="text" name="projet" value="entrez le nom du projet" class="form-control" style="width:800px"><br> </h3>
           <h3> Votre site nécésitera t-il une base de donnée : <br> </h3>
                                                                    <INPUT type= "radio" name="choix" value="oui"> Oui </INPUT>
                                                                    <INPUT type= "radio" name="choix" value="non"> Non </INPUT> 
                                                                    <br><br>

            <input type="submit" name="modif" class="btn btn-success" value="valider">

            <a href="" class="btn btn-danger">annuler</a>

        </form>

</center>
</div>
</div>
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