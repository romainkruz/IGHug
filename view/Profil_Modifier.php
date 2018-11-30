<?php

// Récupération de l'ID actuellement connecté
session_start();
$ID = $_SESSION['id'];


// Récupération des données modifiés
$Nom = $_GET['nom'];
$Prenom = $_GET['prenom'];
$Mail = $_GET['mail'];
$Login = $_GET['login'];
$Login = sha1($Login);
$Description = $_GET['description'];

    // Connexion à la BDD
    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    // Requête sur la BDD et modification des données de l'utilisateur courant
     $bdd->query("UPDATE members SET Name ='$Prenom', Surname = '$Nom', EMail = '$Mail', Login = '$Login', Description = '$Description' WHERE ID = '$ID'");

?>