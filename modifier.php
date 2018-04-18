<?PHP
session_start()
?>

<!DOCTYPE html>
<html>

<head>
    <title>Modifier</title>
    <meta charset ="utf-8">
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
<body bgcolor="#E6E6FA">


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
                        <a class="page-scroll" href="#modifier">Modification</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/codshare/deconnexion.php" data-toggle="modal"><button type="button" class="btn btn-danger">déconnexion </button></a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   <!-- Header -->


<!-- ========================================================================================================================================== -->

        <!-- modifier Section -->
    <section id="modifier">
    <center>
        <div class="container">
            <div class="row">
                    <h2 class="section-heading">Entrez vos modifications</h2>
                    <!-- <p><a href="http://mail.codshare.itinet.fr"><button type="button" class="btn btn-primary">login@codshare.itinet.fr</button></a></p> -->
    <form action="" method="post">
        <input type="hidden" name="page" value="edit_pro">

        Ajouter des membres au projet : <a class="btn" href="http://localhost/codshare/creer.php" title="ajouter un developpeur"><button type="button" class="btn btn-success">+</button></a>
<input type="text" name="ajout" class="form-control" style="width:265px" value="login@codshare.itinet.fr" ><br>

             <table class="table table-striped">
                <thead>
                 <tr>
                    <th>Liste des développeurs</th>
                    <th>supprimer</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Liste des projets">Dev1@codshare.itinet.fr</td>
                    <td data-title="supprimer"><a href =""><button type="button" class="btn btn-danger">Supp.</button></a></td>
                  </tr>

                </tbody>
              </table>

        <br>
<!--         <input type="submit" name="modif" class="btn btn-success" value="valider">
 -->
        <a href="index.php?page=home_page" class="btn btn-danger">Retour</a>
                </div>
            </div>
           
        </div>
        </form>
        </div>
        </div>
        </center>
    </section>

<!-- ========================================================================================================================================== -->
    

      <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>