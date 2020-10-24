<?php
require ('connect_bdd.php');

// Vérification de la validité des informations
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;
$statut = isset($_POST['statut']) ? $_POST['statut'] : NULL;

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_BCRYPT);

// Insertion
 $req = $bdd->prepare('INSERT INTO user(pseudo, pass, statut)
 VALUES(:pseudo, :pass, :statut)');
 $req->execute(array(
   'pseudo' => $pseudo,
   'pass' => $pass_hache,
   'statut' => $statut,));

header('Location: http://site.chaumoitre-maxime.fr/devcord/index.php');
?>
