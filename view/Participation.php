<?php
	
	session_start();
	$ID = $_SESSION['id'];

	// On récupère cle et vote avec les requêtes ajax du fichier Events.js
	$cle = $_POST['cle'];
	$vote = isset($_POST['vote']);

	// Connexion à la base de données
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

	// Si $vote est vrai, on effectue une requête sur la base de données pour vérifier si une ligne
	// avec l'id du membre + l'id de l'évènement existe déjà
	if ($vote) {
		$result1 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle' AND id_members = '$ID'");
		// Si la requête ne retourne pas de ligne on insère une nouvelle ligne dans la table participate
		if ($result1->rowCount() == 0) {
			$bdd->query("INSERT INTO participate (id_events, id_members) VALUES ('$cle', '$ID');");
		}
	}

	// On effectue une requête sur la table participate qui sélectionne toutes les lignes qui
	// correspondent à un évènement en particulier
	$result2 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle'");
	$nb_participation = $result2->rowCount();

	// On retourne le nombre de lignes qui correspondent à un évènement en particulier
	echo $nb_participation;

?>