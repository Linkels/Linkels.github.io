<?php
session_start();
ini_set('display_errors','off');
if ($_SESSION['statut'] == 'user'){
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Commande - Devcord</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="theme-color" content="#697ec4">

  <link rel="shortcut icon" href="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
  <!-- Pour le parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Fin des liens pour parallax -->
  <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/animate.css">
</head>

<body>
  <?php include "./include/header.php" ?>

  <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
  <h2>Bienvenue <?php echo $_SESSION['pseudo']; ?></h2>

  <form action="http://site.chaumoitre-maxime.fr/devcord/controller/commande.php" method="post">
  <div class="form-group">
    <label for="pseudo_disc">Pseudo Discord</label>
    <input type="text" class="form-control" name="pseudo_disc" placeholder="Pseudo#1234">
  </div>
  <div class="form-group">
    <label for="pack">Selection du pack</label>
    <select class="form-control" name="pack">
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="pack_bot">Selection du pack de bot</label>
    <select class="form-control" name="pack_bot">
      <option>AUCUN BOT</option>
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  <div class="form-group">
    <label for="nom_bot">Nom du bot</label>
    <input type="text" class="form-control" name="nom_bot" placeholder="Mettre le pseudo désiré">
  </div>
  </div>
  <div class="form-group">
    <label for="details_bot">Details pour le bot</label>
    <textarea class="form-control" name="details_bot" placeholder="Décrivez vos attentes..." rows="3"></textarea>
  </div>  <div class="form-group">
    <label for="pack_site">Selection du pack de Site web</label>
    <select class="form-control" name="pack_site">
      <option>AUCUN SITE</option>
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  <div class="form-group">
    <label for="nom_site">Nom du site</label>
    <input type="text" class="form-control" name="nom_site" placeholder="Exemple : Monsite.fr">
  </div>

  <input type="hidden" name="statut_commande" value='Pas encore vue'>
  <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id'];?>">
    <input type="hidden" class="form-control" name="vrai_pseudo" value="<?php echo $_SESSION['pseudo']; ?>">

          <center><button type="submit" name="submit">Valider</button></center>
</form>

  </body>
  </html>

  <?php }elseif ($_SESSION['statut'] == 'admin'){?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Commande - Devcord</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="theme-color" content="#697ec4">

  <link rel="shortcut icon" href="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
  <!-- Pour le parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Fin des liens pour parallax -->
  <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/animate.css">
</head>

<body>
<?php include "./include/header.php" ?>

  <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
  <h2>Bienvenue admin <?php echo $_SESSION['pseudo']; ?></h2>

  <form action="http://site.chaumoitre-maxime.fr/devcord/controller/commande.php" method="post">
  <div class="form-group">
    <label for="pseudo_disc">Pseudo Discord</label>
    <input type="text" class="form-control" name="pseudo_disc" placeholder="Pseudo#1234">
  </div>
  <div class="form-group">
    <label for="pack">Selection du pack</label>
    <select class="form-control" name="pack">
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="pack_bot">Selection du pack de bot</label>
    <select class="form-control" name="pack_bot">
      <option>AUCUN BOT</option>
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  <div class="form-group">
    <label for="nom_bot">Nom du bot</label>
    <input type="text" class="form-control" name="nom_bot" placeholder="Mettre le pseudo désiré">
  </div>
  </div>
  <div class="form-group">
    <label for="details_bot">Details pour le bot</label>
    <textarea class="form-control" name="details_bot" placeholder="Décrivez vos attentes..." rows="3"></textarea>
  </div>  <div class="form-group">
    <label for="pack_site">Selection du pack de Site web</label>
    <select class="form-control" name="pack_site">
      <option>AUCUN SITE</option>
      <option>PACK 1</option>
      <option>PACK 2</option>
      <option>PACK 3</option>
    </select>
  <div class="form-group">
    <label for="nom_site">Nom du site</label>
    <input type="text" class="form-control" name="nom_site" placeholder="Exemple : Monsite.fr">
  </div>

  <input type="hidden" name="statut_commande" value='Pas encore vue'>
  <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id'];?>">
    <input type="hidden" class="form-control" name="vrai_pseudo" value="<?php echo $_SESSION['pseudo']; ?>">

          <center><button type="submit" name="submit">Valider</button></center>
</form>
  </body>
  </html>

  
  <?php }else {?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Commande - Devcord</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="theme-color" content="#697ec4">

  <link rel="shortcut icon" href="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
  <!-- Pour le parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Fin des liens pour parallax -->
  <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/animate.css">
</head>

<body>
<?php include "./include/header.php" ?>

  <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
  <h2>Vous n'êtes pas co</h2><br>
  Veillez vous connectez pour pouvoir passer une commande !
  </body>
  </html>
  </body>
</html>
<?php } ?>