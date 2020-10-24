<?php
  session_start();
  require "../connect_bdd.php";
  $id = $_GET['del'];
  $supcom = $bdd->prepare('DELETE FROM commentaire WHERE id_comm = :id');
  $supcom->execute(array('id' => $id));
  header("location:".  $_SERVER['HTTP_REFERER']); 
?>
