<?php

// On teste si les variables sont définies et on récupère les champs de Accueil.php

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['sexe']) && isset($_POST['ecole']) && isset($_POST['email']) && isset($_POST['login'])) {
        $prenom=$_POST['prenom'];
        $nom=$_POST['nom'];
        $age=$_POST['age'];
        $sexe=$_POST['sexe'];
        $ecole=$_POST['ecole'];
        $email=$_POST['email'];
        $login=$_POST['login'];

// On hash le password

        $login = sha1($login);

// On se connecte à la base

        try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

// On fait la requéte à la base

        $bdd->query("INSERT INTO members (Name, Surname, Age, Sex, School, Online, Email, Login, Description) VALUES ('$prenom', '$nom', '$age', '$sexe', '$ecole', '1', '$email', '$login', ' ');");

        $inscription = $bdd->query("SELECT * FROM members WHERE Email = '$email' AND Login = '$login'");
        $obj = $inscription->fetch();

<<<<<<< HEAD
// On initie la session lors de l'inscription

=======
>>>>>>> d889236da90d5fa7a911f0d211f7f94737f003aa
        session_start();
        $_SESSION['email1'] = $email;
        $_SESSION['loginok'] = true;
        $_SESSION['id'] = $obj['ID'];
<<<<<<< HEAD

// On redirige l'utilisateur suivant les informations qu'il fournit
=======
>>>>>>> d889236da90d5fa7a911f0d211f7f94737f003aa

        if ($_SERVER['SERVER_NAME']=="localhost"){
            header('Location:http://localhost/IGHug/Hub.php');
        }
        else {
            header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/Hub.php');
        }

    }

    else {
        if ($_SERVER['SERVER_NAME']=="localhost"){
            header('Location:http://localhost/IGHug/Accueil.php');
        }
        else {
            header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/Accueil.php');
        }
    }
?>