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
                            <?php include("infoperso.php"); ?>
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
                            <h2>Contact de Confiance</h2>
                            <?php include("contconf.php"); ?>
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
                            <h2>Avis</h2>
                            <?php include("avcond.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>