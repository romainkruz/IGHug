<?php

	function redimensionnerimg($img_Src, $W_max, $H_max) {

		// vérifie que l'image source existe
		if (file_exists($img_Src)) {

			$img_size = getimagesize($img_Src);	// obtient les dimensions de l'image source
			$W_Src = $img_size[0];	// largeur source
			$H_Src = $img_size[1];	// hauteur source

			if ($W_Src > $W_max && $W_Src >= $H_Src) {	// si largeur image source plus grande que largeur souhaitée et largeur image source plus grande que hauteur image source
				echo '<img src="' . $img_Src . '" class="img-fluid list_places_img" width="' . $W_max . '" />';	// alors on écrit <img src="$img_src" width="$w_max" />
			} elseif ($H_Src > $H_max) {	// sinon si hauteur image source plus grande que hauteur souhaitée
					echo '<img src="' . $img_Src . '" class="img-fluid list_places_img" height="' . $H_max . '" />';	// alors on écrit <img src="$img_src" height="$H_max" />
				}
		} else {
			echo '<img src="' . $img_Src . '" class="img-fluid list_places" width="0"/>';	// si l'image source n'existe pas alors on écrit <img src="$img_src" widtht="0" />
		}
	}

	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM places');

	while ($donnees = $reponse->fetch()) {
		if ($donnees['type'] == 'Bar') {
			$url_img = 'img_places/image_' . $donnees['id_places'] . '.jpg';
			redimensionnerimg($url_img, 175, 175);
			echo '<div class="list_places"><div><strong>' . $donnees['nom'] . '</strong></div><div class="adresses"><img src="img/localisation2.png" class="img_fluid" />' . $donnees['adresse'] . ' ' . $donnees['cp'] . ' ' . $donnees['ville'] . '</div><div class="bar_description">' . $donnees['description'] . '</div></div><br />';
		}
	}

    $reponse->closeCursor();	// Termine le traitement de la requête

?>