<?php
    $jojo = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
            integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/content.css">
        <!-- FAVICON --> 
        <link rel="shortcut icon" href="public/img/favicon.png">
        <title>TITLE</title>
    </head>

    <body>
        <?php   
            include('bdd.php');
            $req ="SELECT * FROM `Personne` WHERE `id`=$jojo LIMIT 1";
        
            $req = $bdd->prepare($req);
            $req->execute();
            while ($element = $req->fetch()):
        ?>
        <div id="notfound">
            <div>
                <a class="btn btn-secondary" href="index.php">Retour</a>
            </div>
            <!-- Page Container -->
            <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
                <!-- The Grid -->
                <div class="w3-row">
                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-card w3-round w3-white">
                            <div class="w3-container">
                                <h4 class="w3-center">
                                    <?php echo $element["nom"]; ?><?php echo " "?><?php echo $element["prenom"]; ?>
                                </h4>
                                <hr>
                                <p><i class="fas fa-location-arrow w3-margin-right w3-text-theme"></i>
                                    <?php echo $element["lieu"]; ?>
                                </p>
                            </div>
                        </div>
                        <br>

                        <!-- Alert Box -->
                        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom">
                            </span>
                            <p><strong>Recensé de
                                    <?php echo $element["date"]; ?><br/>à
                                    <?php echo $element["date"]; ?> </strong>
                            </p>
                        </div><br>
                        <!-- End Left Column -->
                    </div>

                    <!-- Middle Column -->
                    <div class="w3-col m7">
                        <center><img src="public/img/whogle.png" class="logo" width="50%" alt=""></center>
                        <?php                        
                        $reqe =" SELECT DISTINCT date FROM `Personne` WHERE id=$jojo ORDER BY date ASC LIMIT 1";
                        $reqe = $bdd->prepare($reqe);
                        $reqe->execute();
                        while($dodo = $reqe->fetch()):?>
                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <h4>Début de recensement <?php echo $dodo['date'] ?></h4><br>
                        </div>
                        <?php endwhile ?>

                        <?php
                        $reqes =" SELECT * FROM `Personne` WHERE id=$jojo ";
                        $reqes = $bdd->prepare($reqes);
                        $reqes->execute();
                        while($dododo = $reqes->fetch()):?>
                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <h4>À la date de : <?php echo $dododo["date"]; ?> </h4><br>
                            <hr class="w3-clear">
                            <p>Il/Elle a fait :
                                <?php echo $dododo["profession"]; ?> </p>

                            <div class="w3-row-padding" style="margin:0 -16px">
                            </div>
                        </div>
                        <?php endwhile ?>


                        <?php
                        $reqe =" SELECT DISTINCT date FROM `Personne` WHERE id=$jojo ORDER BY date DESC LIMIT 1";
                        $reqe = $bdd->prepare($reqe);
                        $reqe->execute();
                        while($dodo = $reqe->fetch()): ?>
                        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                            <h4>Fin du recensement <?php echo $dodo['date'] ?></h4><br>
                        </div>
                        <?php endwhile ?>
                        <!-- End Middle Column -->
                    </div>
                    <!-- Right Column -->
                    <div class="w3-col m2">
                        <div class="w3-card w3-round w3-white w3-center">
                            <div class="w3-container">
                                <p>Voir également</p>
                                <?php
                                $reqs ="SELECT DISTINCT nom  FROM Personne WHERE id=$jojo ";
                                $reqs = $bdd->prepare($reqs);
                                $reqs->execute();
                                while($donn = $reqs->fetch()): ?>
                                <p><?php echo $donn['nom']; ?></p>
                                <?php endwhile ?>
                            </div>
                        </div>
                        <!-- End Right Column -->
                    </div>
                    <?php endwhile ?>
                </div>
    </body>

</html>