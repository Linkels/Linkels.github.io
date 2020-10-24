<?php
  require "connect_bdd.php";
  $pseudo_disc = isset($_POST['pseudo_disc']) ? $_POST['pseudo_disc'] : NULL;
  $pack = isset($_POST['pack']) ? $_POST['pack'] : NULL;
  $pack_bot = isset($_POST['pack_bot']) ? $_POST['pack_bot'] : NULL;
  $nom_bot = isset($_POST['nom_bot']) ? $_POST['nom_bot'] : NULL;
  $details_bot = isset($_POST['details_bot']) ? $_POST['details_bot'] : NULL;
  $pack_site = isset($_POST['pack_site']) ? $_POST['pack_site'] : NULL;
  $nom_site = isset($_POST['nom_site']) ? $_POST['nom_site'] : NULL;
  $statut_commande = isset($_POST['statut_commande']) ? $_POST['statut_commande'] : NULL;
  $vrai_pseudo = isset($_POST['vrai_pseudo']) ? $_POST['vrai_pseudo'] : NULL;
  $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : NULL;
  
  $req = $bdd->prepare('INSERT INTO commande(pseudo_disc, pack, pack_bot, nom_bot, details_bot, pack_site, nom_site, statut_commande, vrai_pseudo, id_user)
    VALUES(:pseudo_disc, :pack, :pack_bot, :nom_bot, :details_bot, :pack_site, :nom_site, :statut_commande, :vrai_pseudo, :id_user)');
  $req->execute(array(
    'pseudo_disc' => $pseudo_disc,
    'pack' => $pack,
    'pack_bot' => $pack_bot,
    'nom_bot' => $nom_bot,
    'details_bot' => $details_bot,
    'pack_site' => $pack_site,
    'nom_site' => $nom_site,
    'statut_commande' => $statut_commande,
    'vrai_pseudo' => $vrai_pseudo,
    'id_user' => $id_user,
  ));
  header('Location: http://site.chaumoitre-maxime.fr/devcord/view/commande.php');
?>
