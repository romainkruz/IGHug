<?php
	$email1 = $_GET['email1'];

	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $deconnexion = $bdd->query("SELECT * FROM members WHERE Email = '$email1'");

    if ($deconnexion->rowCount() == 1) {
    	$bdd->query("UPDATE members SET Online = '0' WHERE Email = '$email1';");
        // On appelle la session
        session_start();
    	// On détruit les variables de notre session
    	session_unset();
    	// On détruit notre session
    	session_destroy();
    	// On redirige le visiteur vers la page d'accueil
        if ($_SERVER['SERVER_NAME']=="localhost"){
            header('Location:http://localhost/IGHug/Accueil.php');
        }
        else {
            header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/Accueil.php');
        }
    }
?>