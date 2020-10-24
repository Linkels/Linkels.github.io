<?php
  session_start();
//   ini_set('display_errors','off');
  if ($_SESSION['statut'] == 'admin'){
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des brèves</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/fontawesome-5.9.0/css/all.min.css">
  </head>
  <body>
      <?php include "../../view/include/navadmin.php" ?>
    <div class="corps">
      <div class="contenu">
        <div class="titre">
          <h1>Article</h1>
          <p>
            <a href="http://site.chaumoitre-maxime.fr/devcord/view/admin/creat_article.php">Création d'article</a>
          </p>
        </div>
        <?php include "../../controller/list_article.php";
        while ($donnees = $reponse->fetch()){
        ?>
        <div class="article">
        <hr>
        <div class="breve">
          <h3><?php echo $donnees['nom_article']; ?></h3>
          <p>
            <?php
            echo $donnees['description_article'];
            ?>
          </p>
          <h5>
            Supprimer cet article : <a href='../../controller/delete/del_article.php?del=<?php echo $donnees['id_article']; ?>'><i class="fas fa-trash-alt"></i></a>
<br>
            Modifier cet article : <a href='../../view/admin/up_article.php?id=<?php echo $donnees['id_article']; ?>'><i class="fas fa-edit"></i></a>
          </h5>
        </div>
        <hr>
        </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
<?php }else{
  header('Location: index.php');
  } ?>
