<?php
  require "connect_bdd.php";
  $reponse = $bdd->prepare("SELECT * FROM article ORDER BY id_article DESC");
  $reponse->execute();
?>
