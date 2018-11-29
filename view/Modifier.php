<?php

if (isset($_POST['nvnom']) && isset($_POST['nvprenom']) && isset($_POST['nvemail']) && isset($_POST['nvlogin'])) {
    $prenom=$_POST['nvprenom'];
    $nom=$_POST['nvnom'];
    $email=$_POST['nvemail'];
    $login=$_POST['nvlogin'];

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $bdd->query("UPDATE 'members' SET 'Name'='$prenom', 'Surname'='$nom', 'Email'='$email', 'Login'='$login' WHERE 'Name'='$nom'");
}
header('Location:http://localhost/IGHug/Hub.php');
?>



