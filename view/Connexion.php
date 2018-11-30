<?php

// On teste si les variables sont définies et on récupère les champs de Accueil.php

	if(isset($_POST['email1']) && isset($_POST['Motdepasse'])) {
        $email1 = $_POST['email1'];
        $Motdepasse = $_POST['Motdepasse'];

// On hash le password
        $hash = sha1($Motdepasse);

// On se connecte à la base

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

//On fait la requéte à la bdd

        $connexion = $bdd->query("SELECT * FROM members WHERE Email = '$email1' AND Login = '$hash'");
        $obj = $connexion->fetch();

// On initie la session en marquant l'utilisateur comme Online

        if ($connexion->rowCount() == 1) {
            $bdd->query("UPDATE members SET Online = '1' WHERE Email = '$email1';");
            session_start();
            $_SESSION['email1'] = $_POST['email1'];
            $_SESSION['motdepasse'] = $hash;
            $_SESSION['loginok'] = true;
            $_SESSION['id'] = $obj['ID'];

// On redirige l'utilisateur suivant les données fournis

            if ($_SERVER['SERVER_NAME'] == "localhost") {
                header('Location:http://localhost/IGHug/Hub.php');
            } else {
                header('Location:http://' . $_SERVER['SERVER_NAME'] . ':8080/Hub.php');
            }
        } else {
            if ($_SERVER['SERVER_NAME'] == "localhost") {
                header('Location:http://localhost/IGHug/Accueil.php');
            } else {
                header('Location:http://' . $_SERVER['SERVER_NAME'] . ':8080/Accueil.php');
            }
        }
    }
?>