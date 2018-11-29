<?php
	
	session_start();
	$email = $_SESSION['email1'];
	$ID = $_SESSION['id'];

	$cle = $_POST['cle'];
	$vote = isset($_POST['vote']);

	// Connexion à la base de données
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

	if ($vote) {
		$result3 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle' AND id_members = '$ID'");
		if ($result3->rowCount() == 0) {
			$bdd->query("INSERT INTO participate (id_events, id_members) VALUES ('$cle', '$ID');");
		}
	}

	$result4 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle'");
	$nb_participation = $result4->rowCount();

	echo $nb_participation;

?>