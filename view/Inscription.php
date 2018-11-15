<?php 


// Récupération des champs de Accueil.php
    if(isset($_POST['nom']))      $nom=$_POST['nom'];
    else      $nom="";

    if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
    else      $prenom="";

    if(isset($_POST['age']))      $age=$_POST['age'];
    else      $age="";

    if(isset($_POST['sexe']))      $sexe=$_POST['sexe'];
    else      $sexe="";

    if(isset($_POST['ecole']))      $ecole=$_POST['ecole'];
    else      $ecole="";

    if(isset($_POST['email']))      $email=$_POST['email'];
    else      $email="";

    if(isset($_POST['login']))      $login=$_POST['login'];
    else      $login="";

//Vérification des champs vides
        if(empty($nom) OR empty($prenom) OR empty($age) OR empty($sexe) OR empty($ecole) OR empty($email) OR empty($login) 
         { 
         echo '<font color="red">Tous les champs doivent étre remplis !</font>'; 
         } 

// Si aucun champs vide -> Connection à la base
        else 
        { 
    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

// Lien entre la récupération des données et les catégories de la base de donnée
        $bdd->query(
            "INSERT INTO members (surname, name, age, sex, school, email, login) 
            VALUES ('$nom', '$prenom', '$age', '$sexe', '$ecole', '$email', '$login');"
        )
    //}
    ;

// Redirection vers la page HUB.php
    echo '<script type="text/JavaScript">document.location.href="http://localhost/IGHug/HUB.php"</script>';

?>