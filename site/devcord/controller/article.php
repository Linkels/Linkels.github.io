<?php
  require "connect_bdd.php";
  $nom_article = isset($_POST['nom_article']) ? $_POST['nom_article'] : NULL;
  $description_article = isset($_POST['description_article']) ? $_POST['description_article'] : NULL;
  $contenu = isset($_POST['contenu']) ? $_POST['contenu'] : NULL;
  $signature_article = isset($_POST['signature_article']) ? $_POST['signature_article'] : NULL;
  $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : NULL;

  $req = $bdd->prepare('INSERT INTO article(nom_article, description_article, contenu, signature_article, id_user)
    VALUES(:nom_article, :description_article, :contenu, :signature_article, :id_user)');
  $req->execute(array(
    'nom_article' => $nom_article,
    'description_article' => $description_article,
    'contenu' => $contenu,
    'signature_article' => $signature_article,
    'id_user' => $id_user,
  ));
  header('Location: http://site.chaumoitre-maxime.fr/devcord/view/admin/article.php');
?>
