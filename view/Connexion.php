<?php

// On teste si les variables sont définies et on récupère les champs de Accueil.php
	if(isset($_POST['email1']) && isset($_POST['Motdepasse'])){
		$email1=$_POST['email1'];
	    $Motdepasse=$_POST['Motdepasse'];

	    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

	    $test = $bdd->query(
		"SELECT * FROM members WHERE Email = '$email1' AND Login = '$Motdepasse'");

		if ($test->rowCount() == 1) {
			$bdd->query("UPDATE members SET Online = '1' WHERE Email = '$email1';");
			session_start();
			$_SESSION['email1'] = $_POST['email1'];
			$_SESSION['Motdepasse'] = $_POST['Motdepasse'];
			while ($donnees = $test->fetch()) {
				$_SESSION['name'] = $donnees['Name'];
			}
			header('Location:http://localhost/IGHug/Hub.php');
		} else {
			header('Location:http://localhost/IGHug/Accueil.php');
		}
	}
?>