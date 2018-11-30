<?php

// Connexion à la BDD
    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

// Requête sur la BDD
    $reponse = $bdd->query('SELECT * FROM members');

?>

<div  id="Members" class="text-center">
    <?php // Boucle sur les résultats de la requête
    while ($donnees = $reponse->fetch()) {
        $id = $donnees['ID']; // Récupération de l'ID
        if ($donnees['Online'] == 1) { // Condition qui s'applique si l'utilisateur est en ligne
    ?>
        <figure id="<?php echo $id; ?>"><!--Création d'une figure avec comme attribut ID l'ID du profil connecté-->
            <a href="javascript:showPopup(<?php echo $id; ?>);"><img id="Members_image" src="img_profile/image-<?php echo $id; ?>.png"></a><!--Création d'un lien sur le profil pointant sur la fonction Javascript avec comme paramétres l'ID du profil-->
            <figcaption><?php echo $donnees['Name']; ?></figcaption><!--En légende de la figure le Prénom du profil-->
        </figure>
    <?php
        }
    }
    ?>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>