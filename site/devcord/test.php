<?php
session_start();
ini_set('display_errors','off');
if ($_SESSION['statut'] == 'user'){
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css"/>
        <link href="http://devcord.azeroleplay.fr/public/css/main.css" rel="stylesheet">
    </head>
    <body>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js" 
                integrity="sha256-v789mr/zBbgR53mfydCI78CSAF+9+nRqu+JRfs1UPg0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js" 
                integrity="sha256-l+AmZGiFz41J+gms80qC7faslJDberZDhjEsmDmQy8s=" crossorigin="anonymous"></script>
    </body>
</html>

<!-- /////////////////////////////////////// ADMIN ///////////////////////////////////// -->


<?php }elseif ($_SESSION['statut'] == 'admin'){?>

    <!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css"/>
        <link href="http://devcord.azeroleplay.fr/public/css/main.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js" 
                integrity="sha256-v789mr/zBbgR53mfydCI78CSAF+9+nRqu+JRfs1UPg0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js" 
                integrity="sha256-l+AmZGiFz41J+gms80qC7faslJDberZDhjEsmDmQy8s=" crossorigin="anonymous"></script>
    </body>
</html>

<!-- /////////////////////////////////////// UNCO ///////////////////////////////////// -->

<?php }else {?>

    <!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css"/>
        <link rel="stylesheet"
      href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
      integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="http://devcord.azeroleplay.fr/public/css/main2.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
    <?php include "./view/include/header.php" ?>



    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('https://techcrunch.com/wp-content/uploads/2017/10/dscf2979.jpg?w=730&crop=1');">
    <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
        <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;">Headline</h1>
        <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
a<br>
a<br>
a<br>
a<br>
a<br>
a<br>
a<br>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js" 
                integrity="sha256-v789mr/zBbgR53mfydCI78CSAF+9+nRqu+JRfs1UPg0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js" 
                integrity="sha256-l+AmZGiFz41J+gms80qC7faslJDberZDhjEsmDmQy8s=" crossorigin="anonymous"></script>
    </body>
</html>

<?php } ?>