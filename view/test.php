<?php 
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";



 try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $bdd->query(
        "INSERT INTO members (name) 
        VALUES ('$nom');"
    );

    echo $nom;

?>