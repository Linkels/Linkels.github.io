<?php
try
{
    // On se connecte à MySQL
$bdd = new PDO('mysql:host=front-ha-mysql-01.shpv.fr;dbname=sfdviwqu_devcord;charset=utf8', 'sfdviwqu_Luni', 'Ijttz8wow', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOexception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        print 'Erreur : '.$e->getMessage(). '<br />';
        die();
}
?>