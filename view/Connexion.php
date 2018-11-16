<?php

// Récupération des champs de Accueil.php
	if(isset($_POST['email1']))      $email1=$_POST['email1'];
	    else      $email1="";

	if(isset($_POST['Motdepasse']))      $Motdepasse=$_POST['Motdepasse'];
	    else      $Motdepasse="";

//Vérification des champs vides
	if(empty($email1) OR empty($Motdepasse))
	    { 
	    header('Location:http://localhost/IGHug/Accueil.php'); 
	    } 

// Si aucun champs vide -> Connection à la base

	else 
	    { 	
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

// Lien entre la récupération des données et les catégories de la base de donnée

	$test = $bdd->query(
		"SELECT * FROM members WHERE Email = '$email1' AND Login = '$Motdepasse'"
	);

	if ($test->rowCount() == 0) {
		header('Location:http://localhost/IGHug/Accueil.php');
		}
		else {
		$bdd->query(
			"UPDATE members SET Online = '1' WHERE Email = '$email1';"
		);}
	echo '<script type="text/JavaScript">document.location.href="http://localhost/IGHug/HUB.php"</script>';
	}
	
?>