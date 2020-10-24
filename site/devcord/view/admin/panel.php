<?php
session_start();
ini_set('display_errors','off');
if ($_SESSION['statut'] == 'admin'){
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://site.chaumoitre-maxime.fr/devcord/public/css/main.css">
    <title>ADMIN</title>
</head>
<body>
      <?php include "../../view/include/navadmin.php" ?>
  <h2>Bienvenue admin <?php echo $_SESSION['pseudo']; ?></h2>
</body>
</html>

<?php }else{
  header('Location: http://site.chaumoitre-maxime.fr/devcord/index.php');
}
?>
