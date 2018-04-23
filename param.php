<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profils</title>
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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


                        <center><table style="border-collapse: separate;border-spacing: 5px 8px;">
                        <tr>
                            <td><center><a href="#infpers" class="page-scroll btn btn-xl" data-toggle="modal">Info Perso</a></center></td>
                        <td><center><a href="#contconf" class="page-scroll btn btn-xl" data-toggle="modal">Contacts de Confiance</a></center></td>
                        <td><center><a href="#avicond" class="page-scroll btn btn-xl" data-toggle="modal">Avis</a></center></td>
                    </tr>
                </table>
            </center>
        <div class="portfolio-modal modal fade" id="infpers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Info Perso</h2>
<?php
include('db.php');
            $login = $_SESSION['login'];
    try {
        $databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
            $records = $databaseConnection->prepare('SELECT id,nom,prenom,login,pass, mail FROM  test WHERE login = :login');
            $records->bindParam(':login',$login );
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            $nom = $results['nom'];
            $prenom = $results['prenom'];   
 ?>
<center>
    <table>
        <tr>
            <td> nom </td>
            <td> <?php echo $nom;?></td>
        </tr>
        <tr>
            <td> prenom </td>
            <td> <?php echo $prenom;?></td>
        </tr>
    </table>
</center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="portfolio-modal modal fade" id="contconf" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Info Perso</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="portfolio-modal modal fade" id="avicond" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Info Perso</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>