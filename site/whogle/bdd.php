<?php
$servername = "localhost";
$username = "foxcyanmax";
$password = "ijttz8ii&";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=maximefox_whogle;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
