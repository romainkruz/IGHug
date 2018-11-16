<?php
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM places');
?>

<?php
	while ($donnees = $reponse->fetch()) {
			if ($donnees['type'] == 'Bar') {
				echo '<figure><img class="img-fluid" id="places_image" src="img_bars/image_' . $donnees['id_places'] . '.jpg"></figure>';
				echo '<p><strong>' . $donnees['nom'] . '</strong><br />' . $donnees['adresse'] . ' ' . $donnees['cp'] . ' ' . $donnees['ville'] . '<br />' . $donnees['description'] . '</p>';
			}
	}
	/*<figure>
		<img id="Members_image" src="img_profile/image-<?php echo $donnees['ID']; ?>.png">
		<figcaption><?php echo $donnees['Name']; ?></figcaption>
	</figure>*/
?>

<?php
    $reponse->closeCursor(); // Termine le traitement de la requête
?>