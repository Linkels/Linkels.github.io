<?php
session_start();
ini_set('display_errors','off');
if ($_SESSION['statut'] == 'user'){
?>

<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
  <title>Actu - Devcord</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="devcord, bot, discord, site, article" />
  <meta name="description" content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
  <meta name="author" content="Devcord-Team" />
  <meta property="og:site_name" content="Devcord" />
  <meta property="og:title" content="Login - Devcord" />
  <meta property="og:description"
    content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
  <meta property="og:locale" content="fr_FR" />
  <meta property="og:image" content="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" />
  <meta property="og:image:alt" content="Logo de Devcord by Law.Ercity" />
  <meta property="og:url" content="#">
  <meta http-equiv="pragma" content="no-cache" />
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

<body class="dv-ofh-x">
  <?php include "../view/include/header.php" ?>
  <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">
  <!-- Debut article -->
  <div class="dc-article">
    <?php include '../controller/select_article.php'; ?>
    <?php echo $nom ?>
    <br><br>
    <?php echo $desc ?>
    <br><br>
    <hr>
    <?php echo $cont ?>
  </div>
  <!-- Fin article -->

  <div class="row bootstrap snippets comment-center">
    <div class="col-md-6 col-md-offset-2 col-sm-12">
      <div class="comment-wrapper">
        <div class="panel panel-info">
          <form action="http://site.chaumoitre-maxime.fr/devcord/controller/insert_commentaire.php" method="post">
            <div class="panel-heading">
              Laisse un commentaire
            </div>
            <div class="panel-body">
              <textarea class="form-control" name="commentaire" placeholder="Ecrit un commentaire..."
                rows="3"></textarea>

              <input type="hidden" name="signature_com" value="<?php echo $_SESSION['pseudo']; ?>">

              <input type="hidden" name="id_user" value='<?php echo $_SESSION['id']; ?>'>

              <input type="hidden" name="id_article" value='<?php echo $id ?>'>
              <br>
              <button type="submit" name="submit" class="btn btn-info pull-right">Envoyer</button>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

  </div>
  </div>

  <ul class="list-unstyled">
    <?php include '../controller/select_commentaire.php';
              while ($donnees = $reponse->fetch()){ ?>
    <li class="media my-4">
      <img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" class="mr-3" alt="...">
      <div class="media-body">
        <h5 class="mt-0 mb-1"><?php echo $donnees['signature_com']; ?></h5>
        <?php echo $donnees['commentaire']; ?>
      </div>
    </li>
    <?php } ?>
  </ul>
              </div>

  <?php }elseif ($_SESSION['statut'] == 'admin'){?>

  <!DOCTYPE html>
  <html lang="fr" prefix="og: http://ogp.me/ns#">

  <head>
    <title>Actu - Devcord</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="devcord, bot, discord, site, article" />
    <meta name="description" content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
    <meta name="author" content="Devcord-Team" />
    <meta property="og:site_name" content="Devcord" />
    <meta property="og:title" content="Login - Devcord" />
    <meta property="og:description"
      content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:image" content="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" />
    <meta property="og:image:alt" content="Logo de Devcord by Law.Ercity" />
    <meta property="og:url" content="#">
    <meta http-equiv="pragma" content="no-cache" />
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

  <body class="dv-ofh-x">
    <?php include "../view/include/header.php" ?>
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">
    <!-- Debut article -->
    <div class="dc-article">
      <?php include '../controller/select_article.php'; ?>
      <?php echo $nom ?>
      <br><br>
      <?php echo $desc ?>
      <br><br>
      <hr>
      <?php echo $cont ?>
    </div>
    <!-- Fin article -->

    <div class="row bootstrap snippets comment-center">
      <div class="col-md-6 col-md-offset-2 col-sm-12">
        <div class="comment-wrapper">
          <div class="panel panel-info">
            <form action="http://site.chaumoitre-maxime.fr/devcord/controller/insert_commentaire.php" method="post">
              <div class="panel-heading">
                Laisse un commentaire
              </div>
              <div class="panel-body">
                <textarea class="form-control" name="commentaire" placeholder="Ecrit un commentaire..."
                  rows="3"></textarea>

                <input type="hidden" name="signature_com" value="<?php echo $_SESSION['pseudo']; ?>">

                <input type="hidden" name="id_user" value='<?php echo $_SESSION['id']; ?>'>

                <input type="hidden" name="id_article" value='<?php echo $id ?>'>
                <br>
                <button type="submit" name="submit" class="btn btn-info pull-right">Envoyer</button>
            </form>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

    </div>
    </div>

    <ul class="list-unstyled">
      <?php include '../controller/select_commentaire.php';
              while ($donnees = $reponse->fetch()){ ?>
      <li class="media my-4">
        <img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" class="mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0 mb-1"><?php echo $donnees['signature_com']; ?></h5>
          <?php echo $donnees['commentaire']; ?>
        </div>
        <a href='http://site.chaumoitre-maxime.fr/devcord/controller/delete/del_com.php?del=<?php echo $donnees['id_comm']; ?>'><i
            class="fas fa-trash-alt"></i></a>
      </li>
      <?php } ?>
    </ul>
              </div>  


    <?php }else {?>

    <!DOCTYPE html>
    <html lang="fr" prefix="og: http://ogp.me/ns#">

    <head>
      <title>Actu - Devcord</title>

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="keywords" content="devcord, bot, discord, site, article" />
      <meta name="description"
        content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
      <meta name="author" content="Devcord-Team" />
      <meta property="og:site_name" content="Devcord" />
      <meta property="og:title" content="Login - Devcord" />
      <meta property="og:description"
        content="Informe toi sur les actus de Devcord - Achat de bot et site vitrine en ligne !" />
      <meta property="og:locale" content="fr_FR" />
      <meta property="og:image" content="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" />
      <meta property="og:image:alt" content="Logo de Devcord by Law.Ercity" />
      <meta property="og:url" content="#">
      <meta http-equiv="pragma" content="no-cache" />
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


    <body class="dv-ofh-x">
      <?php include "../view/include/header.php" ?>
      <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">
      <!-- Debut article -->
      <div class="dc-article">
        <?php include '../controller/select_article.php'; ?>
        <?php echo $nom ?>
        <br><br>
        <?php echo $desc ?>
        <br><br>
        <hr>
        <?php echo $cont ?>
      </div>
      <!-- Fin article -->

      <ul class="list-unstyled">
        <?php include '../controller/select_commentaire.php';
              while ($donnees = $reponse->fetch()){ ?>
        <li class="media my-4">
          <img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" class="mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0 mb-1"><?php echo $donnees['signature_com']; ?></h5>
            <?php echo $donnees['commentaire']; ?>
          </div>
        </li>
        <?php } ?>
              </ul>
    </div>

      <?php } ?>