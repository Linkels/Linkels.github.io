<?php
require "../connect_bdd.php";
$id = $_POST['id_article'];
  $req = $bdd->prepare('UPDATE article
  SET nom_article = :nom_article, description_article = :description_article, contenu = :contenu
  WHERE id_article = :id');
  $req->execute(array(
    'nom_article' => $_POST['nom_article'],
    'description_article' => $_POST['description_article'],
    'contenu' => $_POST['contenu'],
    'id' => $id
  ));
  //une redirection vers la page de configuration
header('Location: http://127.0.0.1/Nexia/view/admin/article.php');
?>