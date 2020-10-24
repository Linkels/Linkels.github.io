<?php
  session_start();
//   ini_set('display_errors','off');
  if ($_SESSION['statut'] == 'admin')
{
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Création d'article</title>
    <link rel="stylesheet" href="css/fontawesome-5.9.0/css/all.min.css">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
  </head>
  <body>
      <?php include "../../view/include/navadmin.php" ?>
    <div class="corps">
      <div class="contenu">
        <div class="titre">
          <h1>Rédaction d'article</h1>
        </div>
        <div class="perso">
          <form class="crea_breve" action="http://site.chaumoitre-maxime.fr/devcord/controller/article.php" method="post">
            <label for="nom_article">nom_article:</label>
              <input type="text" name="nom_article" placeholder="nom_article">


              <label for="description_article">description_article:</label>
              <input type="text" name="description_article" placeholder="description_article">

            <label for="contenu">contenu:</label>
              <textarea name="contenu" rows="8" cols="60"></textarea>

              <input type="hidden" name="signature_article" value="<?php echo $_SESSION['pseudo']; ?>">

              <input type="hidden" name="id_user" value='<?php echo $_SESSION['id']; ?>'>

            <button type="submit" name="submit">Valider</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }else{
  header('Location: http://site.chaumoitre-maxime.fr/devcord/view/admin/article.php');
} ?>
