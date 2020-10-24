<?php
  session_start();
  require "../connect_bdd.php";
  $id = $_GET['del'];
  $supcom = $bdd->prepare('DELETE FROM commentaire WHERE id_article = :id');
  $supcom->execute(array('id' => $id));
  $sup = $bdd->prepare('DELETE FROM article WHERE id_article = :id');
  $sup->execute(array('id' => $id));
  header('Location: http://site.chaumoitre-maxime.fr/devcord/view/admin/article.php');
?>
