<?php
session_start();
ini_set('display_errors','off');
if ($_SESSION['statut'] == 'user'){
?>

<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
  <title>Page d'Accueil - Devcord</title>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="devcord, bot, discord, site" />
  <meta name="description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
  <meta name="author" content="Devcord-Team" />
  <meta property="og:site_name" content="Devcord" />
  <meta property="og:title" content="Page d'Accueil - Devcord" />
  <meta property="og:description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
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
  <link rel="stylesheet" href="./public/css/main.css">
  <!-- Pour le parallax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <!-- Fin des liens pour parallax -->
</head>

<body>
  <?php include "./view/include/header.php" ?>
    <!-- paralax jumbo-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/code-oppa.png" alt="" id="">
      <!-- Jumbotron -->
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
          <h2 class="card-title h2 my-4 py-2">Bienvenue <?php echo $_SESSION['pseudo']; ?>
          sur Devcord, la plateforme d'achat de site web et bot pour votre serveur Discord !</h2>
          <p class="mb-4 pb-2 px-md-5 mx-md-5">
            Devcord est une plateforme vous proposant un service sur mesure d'achat de bot pour animer votre serveur<br>
            Ainsi qu'un site web pour la faire la pub de votre serveur et montrer en dehors de Discord à qu'elle point
            vous êtes unique !<br><br>
            Vous pouvez naviguer sur le site avec les deux barre de navigation circulaire en bas de votre écran !
          </p>
          <a class="btn btn-light peach-gradient" href="http://site.chaumoitre-maxime.fr/devcord/view/commande.php"><i
              class="fas fa-clone left"></i> Passer commande !</a>
        </div>
      </div>
      <!-- Jumbotron -->
    </div>
    <!-- fin de la paralax jumbo-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">

    <!-- Debut article -->
    <center>
      <h3 class="dc-article">Actu de Devcord</h3><br>
      Tenez vous informé(e) des dernières actualités de Devcord <br>
      <a class="btn btn-light peach-gradient" href="#">Toute les actus ici !</a>
    </center>
    <div class="dc-article">
      <?php include 'controller/article_index.php';
              while ($donnees = $reponse->fetch()){ ?>
      <hr>
      <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $donnees['nom_article']; ?></h5>
          <p class="card-text"><?php echo $donnees['description_article']; ?></p>
          <a href="http://site.chaumoitre-maxime.fr/devcord/view/content_article.php?id=<?php echo $donnees['id_article']; ?>"
            class="btn btn-primary">En savoir plus ?</a>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
    <!-- Fin article -->
              </div>

    <!-- paralax confiance-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://cdn.pixabay.com/photo/2017/03/20/21/00/server-2160321_1280.jpg" alt="" id="">

      <!-- Section: Features v.2 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Pourquoi faire confiance à Devcord ?</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
          Chez Devcord la confiance est primordiale ! Voici 3 raisons de nous faire confiance !
        </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-bullhorn blue-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Contact</h4>
                <p class="grey-text">
                  Il est très facile de nous contacter ! Nous sommes quasiment connecter tout le temps sur Discord<br>
                  Et nous répondons très rapidement par mail dans la mesure du possible !
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-cogs pink-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Service de qualité</h4>
                <p class="grey-text">
                  Que ce soit pour votre site web ou pour votre Bot Discord, chez Devcord nous mettons tout en oeuvres
                  pour que
                  votre commande soit la plus personalisé et fonctionnelle au possible !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Pas d'abonnement !</h4>
                <p class="grey-text">
                  Nous avons notre propres server pour l'hébergement de votre bot, et nous hébérgerons votre futur site
                  sur notre
                  nom de domaine ! Ainsi, nous n'avons aucun cout supplémentaire et vous aussi !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.2 -->

    </div>
    <!-- fin de la paralax confiance-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-pack.png" alt="" id="">

      <!-- Section: Features v.3 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Nos différants Pack !</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
        Devcord vous propose 3 pack selon ce que vous désirer avoir (En sachant que chaque service du pack est customisable par la suite)    
      </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 text-center text-lg-left">
            <img class="img-fluid" width="200px;" src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png"
              alt="Sample image">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Bot</h5>
                <p class="grey-text">
                  Le pack bot est le moins cher de tout les packs ! <br>
                  Dans ce pack vous acheter un bot Discord pour votre (ou vos) serveur(s) Discord.
                  Les bots sont complétement personalisable, de sa photo de profil, au nom jusqu'au commande disponible. 
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Site</h5>
                <p class="grey-text">
                  Si vous désirez un site web vitrine alors ce pack vous êtes destinez.
                  Dans ce pack vous aurez droit à un site web vitrine ou vous pourriez présenter votre serveurs. <br>
                  De sont style graphique jusqu'au contenu et le tout sans pub sur votre site ! 
                  C'est tout de même mieux qu'une page sur un site de pub serveur identique aux autre serveur, non ?
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!--Grid row-->
            <div class="row">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Le Pack Bot + Site</h5>
                <p class="grey-text mb-0">
                  Le pack ultime ! <br>
                  Il combine tout nos service et vous fait une réduction de -20% sur le total du prix !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!--Grid row-->

          </div>
          <!--Grid column-->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.3 -->

    </div>
    <!-- fin de la paralax nos service-->

    <div class="dv-para-space"></div>

    <!-- paralax pack bot-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-bot.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de Bot</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">5€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Modérateur</h5>
            <h6 class="card-price text-center">7€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">10€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>API NSFW (+18 uniquement)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <!-- fin de la paralax pack bot-->

    <div class="dv-para-space"></div>

    <!-- paralax pack site-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-site.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de site web</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">20€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">30€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Complet</h5>
            <h6 class="card-price text-center">35€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      
    </div>
    <!-- fin de la paralax pack site-->

    <div class="dv-para-space"></div>

    <!-- paralax discord-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://assets.blacknutlemag.com/edito/discord-c-est-quoi/discord-c-est-quoi-hero-169_md.jpg"
      alt="" id="">
      <center class="discord"><iframe src="http://discordapp.com/widget?id=625373145431277568&theme=dark" width="90%"
          height="500" allowtransparency="true" frameborder="0"></iframe></center>
    </div>
    <!-- fin de la paralax discord-->

    <?php include "./view/include/footer.php" ?>
</body>

</html>

<?php }elseif ($_SESSION['statut'] == 'admin'){?>

<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
  <title>Page d'Accueil - Devcord</title>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="devcord, bot, discord, site" />
  <meta name="description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
  <meta name="author" content="Devcord-Team" />
  <meta property="og:site_name" content="Devcord" />
  <meta property="og:title" content="Page d'Accueil - Devcord" />
  <meta property="og:description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
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

<body>
  <?php include "./view/include/header.php" ?>

    <!-- paralax jumbo-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/code-oppa.png" alt="" id="">
      <!-- Jumbotron -->
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
          <h2 class="card-title h2 my-4 py-2">Bienvenue <?php echo $_SESSION['pseudo']; ?>
          sur Devcord, la plateforme d'achat de site web et bot pour votre serveur Discord !</h2>
          <p class="mb-4 pb-2 px-md-5 mx-md-5">
            Ho ? Le site n'est pas pareil ! <br>
            En effet, tu es un "<?php echo $_SESSION['statut']; ?>", grâce à ce statut tu possèdes le pouvoir de 
            consulter les commandes, supprimer des commentaires ou même de manier le saint-banhammer ! <br><br>
            Bienvenu dans l'équipe ! <?php echo $_SESSION['pseudo']; ?>
          </p>
          <a class="btn btn-light peach-gradient" href="http://site.chaumoitre-maxime.fr/devcord/view/admin/panel.php"><i
              class="fas fa-clone left"></i>Voir le panel Admin</a>
        </div>
      </div>
      <!-- Jumbotron -->
    </div>
    <!-- fin de la paralax jumbo-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">

    <!-- Debut article -->
    <center>
      <h3 class="dc-article">Actu de Devcord</h3><br>
      Tenez vous informé(e) des dernières actualités de Devcord <br>
    <a class="btn btn-light peach-gradient" href="http://site.chaumoitre-maxime.fr/devcord/view/admin/article.php">Rajouter article</a>
      <a class="btn btn-light peach-gradient" href="#">Toute les actus ici !</a>
    </center>
    <div class="dc-article">
      <?php include 'controller/article_index.php';
              while ($donnees = $reponse->fetch()){ ?>
      <hr>
      <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $donnees['nom_article']; ?></h5>
          <p class="card-text"><?php echo $donnees['description_article']; ?></p>
          <a href="http://site.chaumoitre-maxime.fr/devcord/view/content_article.php?id=<?php echo $donnees['id_article']; ?>"
            class="btn btn-primary">En savoir plus ?</a>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
    <!-- Fin article -->
              </div>

    <!-- paralax confiance-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://cdn.pixabay.com/photo/2017/03/20/21/00/server-2160321_1280.jpg" alt="" id="">

      <!-- Section: Features v.2 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Pourquoi faire confiance à Devcord ?</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
          Chez Devcord la confiance est primordiale ! Voici 3 raisons de nous faire confiance !
        </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-bullhorn blue-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Contact</h4>
                <p class="grey-text">
                  Il est très facile de nous contacter ! Nous sommes quasiment connecter tout le temps sur Discord<br>
                  Et nous répondons très rapidement par mail dans la mesure du possible !
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-cogs pink-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Service de qualité</h4>
                <p class="grey-text">
                  Que ce soit pour votre site web ou pour votre Bot Discord, chez Devcord nous mettons tout en oeuvres
                  pour que
                  votre commande soit la plus personalisé et fonctionnelle au possible !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Pas d'abonnement !</h4>
                <p class="grey-text">
                  Nous avons notre propres server pour l'hébergement de votre bot, et nous hébérgerons votre futur site
                  sur notre
                  nom de domaine ! Ainsi, nous n'avons aucun cout supplémentaire et vous aussi !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.2 -->

    </div>
    <!-- fin de la paralax confiance-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-pack.png" alt="" id="">

      <!-- Section: Features v.3 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Nos différants Pack !</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
        Devcord vous propose 3 pack selon ce que vous désirer avoir (En sachant que chaque service du pack est customisable par la suite)    
      </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 text-center text-lg-left">
            <img class="img-fluid" width="200px;" src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png"
              alt="Sample image">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Bot</h5>
                <p class="grey-text">
                  Le pack bot est le moins cher de tout les packs ! <br>
                  Dans ce pack vous acheter un bot Discord pour votre (ou vos) serveur(s) Discord.
                  Les bots sont complétement personalisable, de sa photo de profil, au nom jusqu'au commande disponible. 
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Site</h5>
                <p class="grey-text">
                  Si vous désirez un site web vitrine alors ce pack vous êtes destinez.
                  Dans ce pack vous aurez droit à un site web vitrine ou vous pourriez présenter votre serveurs. <br>
                  De sont style graphique jusqu'au contenu et le tout sans pub sur votre site ! 
                  C'est tout de même mieux qu'une page sur un site de pub serveur identique aux autre serveur, non ?
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!--Grid row-->
            <div class="row">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Le Pack Bot + Site</h5>
                <p class="grey-text mb-0">
                  Le pack ultime ! <br>
                  Il combine tout nos service et vous fait une réduction de -20% sur le total du prix !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!--Grid row-->

          </div>
          <!--Grid column-->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.3 -->

    </div>
    <!-- fin de la paralax nos service-->

    <div class="dv-para-space"></div>

    <!-- paralax pack bot-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-bot.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de Bot</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">5€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Modérateur</h5>
            <h6 class="card-price text-center">7€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">10€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>API NSFW (+18 uniquement)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <!-- fin de la paralax pack bot-->

    <div class="dv-para-space"></div>

    <!-- paralax pack site-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-site.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de site web</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">20€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">30€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Complet</h5>
            <h6 class="card-price text-center">35€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      
    </div>
    <!-- fin de la paralax pack site-->

    <div class="dv-para-space"></div>

    <!-- paralax discord-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://assets.blacknutlemag.com/edito/discord-c-est-quoi/discord-c-est-quoi-hero-169_md.jpg"
      alt="" id="">
      <center class="discord"><iframe src="http://discordapp.com/widget?id=625373145431277568&theme=dark" width="90%"
          height="500" allowtransparency="true" frameborder="0"></iframe></center>
    </div>
    <!-- fin de la paralax discord-->

    <?php include "./view/include/footer.php" ?>
      </body>
      </html>

  <?php }else {?>

  <!DOCTYPE html>
  <html lang="fr" prefix="og: http://ogp.me/ns#">

  <head>
  <title>Page d'Accueil - Devcord</title>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="devcord, bot, discord, site" />
  <meta name="description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
  <meta name="author" content="Devcord-Team" />
  <meta property="og:site_name" content="Devcord" />
  <meta property="og:title" content="Page d'Accueil - Devcord" />
  <meta property="og:description"
    content="Site internet officiel de Devcord - Achat de bot et site vitrine en ligne !" />
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
    <link rel="stylesheet" href="./public/css/main.css">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="./public/css/animate.css">
  </head>

  <body>
    <?php include "./view/include/header.php" ?>
    <!-- paralax jumbo-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/code-oppa.png" alt="" id="">
      <!-- Jumbotron -->
      <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

          <h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1>
          <h2 class="card-title h2 my-4 py-2">Plateforme d'achat de site web et bot pour votre serveur Discord !</h2>
          <p class="mb-4 pb-2 px-md-5 mx-md-5">
            Devcord est une plateforme vous proposant un service sur mesure d'achat de bot pour animer votre serveur<br>
            Ainsi qu'un site web pour la faire la pub de votre serveur et montrer en dehors de Discord à qu'elle point
            vous êtes unique !<br><br>
            Vous pouvez naviguer sur le site avec les deux barre de navigation circulaire en bas de votre écran !
          </p>
          <a class="btn btn-light peach-gradient" href="http://site.chaumoitre-maxime.fr/devcord/view/register.php"><i
              class="fas fa-clone left"></i> Inscrit toi pour passer commande !</a>
        </div>
      </div>
      <!-- Jumbotron -->
    </div>
    <!-- fin de la paralax jumbo-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-article.png" alt="" id="">

    <!-- Debut article -->
    <center>
      <h3 class="dc-article">Actu de Devcord</h3><br>
      Tenez vous informé(e) des dernières actualités de Devcord <br>
      <a class="btn btn-light peach-gradient" href="#">Toute les actus ici !</a>
    </center>
    <div class="dc-article">
      <?php include 'controller/article_index.php';
              while ($donnees = $reponse->fetch()){ ?>
      <hr>
      <div class="card text-center">
        <div class="card-header">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $donnees['nom_article']; ?></h5>
          <p class="card-text"><?php echo $donnees['description_article']; ?></p>
          <a href="http://site.chaumoitre-maxime.fr/devcord/view/content_article.php?id=<?php echo $donnees['id_article']; ?>"
            class="btn btn-primary">En savoir plus ?</a>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
    <!-- Fin article -->
              </div>

    <!-- paralax confiance-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://cdn.pixabay.com/photo/2017/03/20/21/00/server-2160321_1280.jpg" alt="" id="">

      <!-- Section: Features v.2 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Pourquoi faire confiance à Devcord ?</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
          Chez Devcord la confiance est primordiale ! Voici 3 raisons de nous faire confiance !
        </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-bullhorn blue-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Contact</h4>
                <p class="grey-text">
                  Il est très facile de nous contacter ! Nous sommes quasiment connecter tout le temps sur Discord<br>
                  Et nous répondons très rapidement par mail dans la mesure du possible !
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-cogs pink-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Service de qualité</h4>
                <p class="grey-text">
                  Que ce soit pour votre site web ou pour votre Bot Discord, chez Devcord nous mettons tout en oeuvres
                  pour que
                  votre commande soit la plus personalisé et fonctionnelle au possible !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Pas d'abonnement !</h4>
                <p class="grey-text">
                  Nous avons notre propres server pour l'hébergement de votre bot, et nous hébérgerons votre futur site
                  sur notre
                  nom de domaine ! Ainsi, nous n'avons aucun cout supplémentaire et vous aussi !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.2 -->

    </div>
    <!-- fin de la paralax confiance-->

    <!-- paralax nos service-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-pack.png" alt="" id="">

      <!-- Section: Features v.3 -->
      <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Nos différants Pack !</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">
        Devcord vous propose 3 pack selon ce que vous désirer avoir (En sachant que chaque service du pack est customisable par la suite)    
      </p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 text-center text-lg-left">
            <img class="img-fluid" width="200px;" src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord-head.png"
              alt="Sample image">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Bot</h5>
                <p class="grey-text">
                  Le pack bot est le moins cher de tout les packs ! <br>
                  Dans ce pack vous acheter un bot Discord pour votre (ou vos) serveur(s) Discord.
                  Les bots sont complétement personalisable, de sa photo de profil, au nom jusqu'au commande disponible. 
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Pack Site</h5>
                <p class="grey-text">
                  Si vous désirez un site web vitrine alors ce pack vous êtes destinez.
                  Dans ce pack vous aurez droit à un site web vitrine ou vous pourriez présenter votre serveurs. <br>
                  De sont style graphique jusqu'au contenu et le tout sans pub sur votre site ! 
                  C'est tout de même mieux qu'une page sur un site de pub serveur identique aux autre serveur, non ?
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!--Grid row-->
            <div class="row">

              <!-- Grid column -->
              <div class="col-1">
                <i class="fas fa-share fa-lg indigo-text"></i>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Le Pack Bot + Site</h5>
                <p class="grey-text mb-0">
                  Le pack ultime ! <br>
                  Il combine tout nos service et vous fait une réduction de -20% sur le total du prix !
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!--Grid row-->

          </div>
          <!--Grid column-->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.3 -->

    </div>
    <!-- fin de la paralax nos service-->

    <div class="dv-para-space"></div>

    <!-- paralax pack bot-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-bot.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de Bot</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">5€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Modérateur</h5>
            <h6 class="card-price text-center">7€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>API NSFW (+18 uniquement)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">10€</h6>
            <hr>
            <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Hebergé h24</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Nom + Photo + texte activité</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes membre</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Commandes admin</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>API NSFW (+18 uniquement)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Jeu</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <!-- fin de la paralax pack bot-->

    <div class="dv-para-space"></div>

    <!-- paralax pack site-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="http://site.chaumoitre-maxime.fr/devcord/public/img/para-site.png"
      alt="" id="">

      <section class="pricing py-5">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Les packs de site web</h2>
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Basique</h5>
            <h6 class="card-price text-center">20€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>
            <h6 class="card-price text-center">30€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Complet</h5>
            <h6 class="card-price text-center">35€</h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Hébérgé sur Devcord</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single Page</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sans aucune pub</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Partie admin (changer contenu du site)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Indéxé sur Devcord</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      
    </div>
    <!-- fin de la paralax pack site-->

    <div class="dv-para-space"></div>

    <!-- paralax discord-->
    <div class="parallax-element" data-parallax="scroll"
      data-image-src="https://assets.blacknutlemag.com/edito/discord-c-est-quoi/discord-c-est-quoi-hero-169_md.jpg"
      alt="" id="">
      <center class="discord"><iframe src="http://discordapp.com/widget?id=625373145431277568&theme=dark" width="90%"
          height="500" allowtransparency="true" frameborder="0"></iframe></center>
    </div>
    <!-- fin de la paralax discord-->

    <?php include "./view/include/footer.php" ?>
  </body>

  </html>
  <?php } ?>