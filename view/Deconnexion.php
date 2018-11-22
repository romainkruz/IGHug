<?php

//Connection à la base

	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

//Changement des données de la base de données

    $test = $bdd->query(
		"SELECT * FROM members WHERE Email = '$email1' AND Login = '$Motdepasse'"
	);

	if ($test->rowCount() == 1) {
		header('Location:http://localhost/IGHug/Accueil.php');
		
		$bdd->query(
			"UPDATE members SET Online = '0' WHERE Email = '$email1';"
		);}
?>
