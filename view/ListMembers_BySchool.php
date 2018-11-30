<?php

    $SCHOOL = $_GET['school'];

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query("SELECT * FROM members WHERE School ='$SCHOOL'");

?>

<div class="text-center">
    <?php
    while ($donnees = $reponse->fetch()) {
        $id = $donnees['ID'];
    ?>
        <figure id="<?php echo $id; ?>">
            <a href="javascript:showPopup(<?php echo $id; ?>);"><img id="Members_image" src="img_profile/image-<?php echo $id; ?>.png"></a>
            <figcaption><?php echo $donnees['Name']; ?></figcaption>
        </figure>
    <?php
    }
    ?>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>