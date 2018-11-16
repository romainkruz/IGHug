<?php
	try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM places');
?>

<?php
	function fctaffichimage($img_Src, $W_max, $H_max) {
	 if (file_exists($img_Src)) {
	   // ---------------------
	   // Lit les dimensions de l'image source
	   $img_size = getimagesize($img_Src);
	   $W_Src = $img_size[0]; // largeur source
	   $H_Src = $img_size[1]; // hauteur source
	   // ---------------------
	   if(!$W_max) { $W_max = 0; }
	   if(!$H_max) { $H_max = 0; }
	   // ---------------------
	   // Teste les dimensions tenant dans la zone
	   $W_test = round($W_Src * ($H_max / $H_Src));
	   $H_test = round($H_Src * ($W_max / $W_Src));
	   // ---------------------
	   // si l'image est plus petite que la zone
	   if($W_Src<$W_max && $H_Src<$H_max) {
	      $W = $W_Src;
	      $H = $H_Src;
	   // sinon si $W_max et $H_max non definis
	   } elseif($W_max==0 && $H_max==0) {
	      $W = $W_Src;
	      $H = $H_Src;
	   // sinon si $W_max libre
	   } elseif($W_max==0) {
	      $W = $W_test;
	      $H = $H_max;
	   // sinon si $H_max libre
	   } elseif($H_max==0) {
	      $W = $W_max;
	      $H = $H_test;
	   // sinon les dimensions qui tiennent dans la zone
	   } elseif($H_test > $H_max) {
	      $W = $W_test;
	      $H = $H_max;
	   } else {
	      $W = $W_max;
	      $H = $H_test;
	   }
	 } else { // si le fichier image n existe pas
	      $W = 0;
	      $H = 0;
	 }
	 // Affiche : src="..." width="..." height="..." pour la balise img
	 echo '<img' . 'src="' . $img_Src . '" width="' . $W . '" height="' . $H . '"'. '/>';
	};
?>

<?php
fctaffichimage('image_1.jpg', 120, 100);
?>

<?php
	while ($donnees = $reponse->fetch()) {
			if ($donnees['type'] == 'Bar') {
				$test = 'img_bars/image_' . $donnees['id_places'] . '.jpg';
				//fctaffichimage('../img_bars/image_1.jpg', 120, 100);
				//echo '<figure><img class="img-fluid" id="places_image" src="img_bars/image_' . $donnees['id_places'] . '.jpg"></figure>';
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