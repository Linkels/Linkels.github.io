<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
  <title>Register - Devcord</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="devcord, bot, discord, site, register" />
  <meta name="description"
    content="Inscrit toi sur Devcord - Achat de bot et site vitrine en ligne !" />
  <meta name="author" content="Devcord-Team" />
  <meta property="og:site_name" content="Devcord" />
  <meta property="og:title" content="Login - Devcord" />
  <meta property="og:description"
    content="Inscrit toi sur Devcord - Achat de bot et site vitrine en ligne !" />
  <meta property="og:locale" content="fr_FR" />
  <meta property="og:image" content="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png" />
  <meta property="og:image:alt" content="Logo de Devcord by Law.Ercity" />
  <meta property="og:url" content="#">
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="theme-color" content="#697ec4">

  <link rel="shortcut icon" href="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,400italic,700,900' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
  <?php include "include/header.php" ?>  
 
  <div class="auth-wrap-background">
  <div class="auth-center">
    <div class="auth-blur auth-size"> 
      <div class="auth-wrap-background">
  <form method="post" action="../controller/serv_register.php"></div>
    </div>
  </div>
  <div class="auth-center">
    <div class="auth__inner auth-size">
      <div class="auth__sidebar dv-color-grad auth__inner__section"></div>
      <div class="auth__form auth__inner__section">
        <div class="form">
          <h1 class="form__title">Bienvenu</h1>
          <label class="form__label"><span class="form__label__text">Pseudo</span>
            <input class="form__input" type="text" name="pseudo">
            <div class="form__input-border"></div>
          </label>
          <label class="form__label"><span class="form__label__text">Mot de passe</span>
            <input class="form__input" type="password" name="pass">
            <div class="form__input-border"></div>
		  </label>
		  <label class="form__label"><span class="form__label__text">Mot de passe</span>
            <input class="form__input" type="password" name="pass_2">
            <div class="form__input-border"></div>
		  </label>
		  <input type="hidden" name="statut" value="user">
          <button class="button">Se connecter</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>
