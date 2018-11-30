<?php

	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM places');

	while ($donnees = $reponse->fetch()) {
		if ($donnees['type'] == 'Concert') {
			$url_img = 'img_places/image_' . $donnees['id_places'] . '.jpg';
			redimensionnerimg($url_img, 175, 175);
			echo '<div class="list_places"><div><strong>' . $donnees['nom'] . '</strong></div><div class="adresses"><img src="img/localisation2.png" class="img_fluid" />' . $donnees['adresse'] . ' ' . $donnees['cp'] . ' ' . $donnees['ville'] . '</div><div class="concert_description">' . $donnees['description'] . '</div></div><br />';
		}
	}

    $reponse->closeCursor(); // Termine le traitement de la requête

?>