<?php
	
	session_start();
	$email = $_SESSION['email1'];
	$ID = $_SESSION['id'];

	$cle = $_POST['cle'];
	$vote = isset($_POST['vote']);

	// Connexion à la base de données
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
	catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

	// $nb_participation = 0;
	// $result = $bdd->query("SELECT * FROM events WHERE id_events = '$cle' LIMIT 1");
	// $result2 = $bdd->query("SELECT * FROM members WHERE Email = '$email'");

	// if ($result) {
		// if ($result->rowCount() == 1) {
			// $obj = $result->fetch();
			// $obj2 = $result2->fetch();
			// $nb_participation = $obj['votes'];
			// $ID = $obj2['ID'];
			if ($vote) {
				// $nb_participation = $nb_participation + 1;
				// $bdd->query("UPDATE events SET votes = votes + 1 WHERE id_events = '$cle';");

				$result3 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle' AND id_members = '$ID'");
				if ($result3->rowCount() == 0) {
					$bdd->query("INSERT INTO participate (id_events, id_members) VALUES ('$cle', '$ID');");
				}
			}

			$result4 = $bdd->query("SELECT * FROM participate WHERE id_events = '$cle'");
			$nb_participation = $result4->rowCount();
		// } // elseif ($vote) {
			// $nb_participation = $nb_participation + 1;
			// $bdd->query("UPDATE events SET votes = 1 WHERE id_events = '$cle';");
		// }
	// }

	echo $nb_participation;

?>