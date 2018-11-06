<?php

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM members');

?>

<p>
    <?php
    while ($donnees = $reponse->fetch()) {
    ?>
    <strong>Nom</strong> : <?php echo $donnees['Name']; ?>
    <img src="img_profile/image-<?php echo $donnees['ID']; ?>.png">
    <?php
    }
    ?>
</p>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>