<?php
  require "connect_bdd.php";
  $reponse = $bdd->prepare("SELECT * FROM commentaire WHERE id_article=:id ORDER BY id_comm DESC");
  $reponse->execute(
    array("id"=>$_GET["id"])
  );

?>
