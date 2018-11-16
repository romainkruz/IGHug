<?php

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM members WHERE School = "IGS-RH" ');

?>

<div class="text-center">
    <?php
    while ($donnees = $reponse->fetch()) {
    ?>
        <figure id="<?php echo $donnees['ID']; ?>">
            <img id="Members_image" src="img_profile/image-<?php echo $donnees['ID']; ?>.png">
            <figcaption><?php echo $donnees['Name']; ?></figcaption>
        </figure>
    <?php
    }
    ?>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>