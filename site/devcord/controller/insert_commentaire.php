<?php
  require "connect_bdd.php";
  $commentaire = isset($_POST['commentaire']) ? $_POST['commentaire'] : NULL;
  $signature_com = isset($_POST['signature_com']) ? $_POST['signature_com'] : NULL;
  $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : NULL;
  $id_article = isset($_POST['id_article']) ? $_POST['id_article'] : NULL;

  $req = $bdd->prepare('INSERT INTO commentaire(commentaire, signature_com, id_user, id_article)
    VALUES(:commentaire, :signature_com, :id_user, :id_article)');
  $req->execute(array(
    'commentaire' => $commentaire,
    'signature_com' => $signature_com,
    'id_user' => $id_user,
    'id_article' => $id_article
  ));
  header('Location: http://site.chaumoitre-maxime.fr/devcord/view/content_article.php?id='.$id_article);
?>
