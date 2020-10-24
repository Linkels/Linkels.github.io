<?php
  require "connect_bdd.php";
  $id=$_GET["id"];
  $reponse = $bdd->prepare("SELECT * FROM article WHERE id_article=:id");
  $reponse->execute(
      array("id"=>$id)
  );

  while($row = $reponse->fetch(PDO::FETCH_ASSOC))
{
	$id = $row['id_article'];
	$nom = $row['nom_article'];
	$desc = $row['description_article'];
	$cont = $row['contenu'];
}
?>
