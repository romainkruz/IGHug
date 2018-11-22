<?php

    $ID = $_GET['id'];

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM members WHERE id='.$ID);
    $donnees = $reponse->fetch()
?>

<div class="text-center">
    <div>
    <img id="onemember_image" src="img_profile/image-<?php echo $ID; ?>.png">
    </div>
    <div id="onemember_name">
    <?php echo $donnees['Name']; ?> <?php echo $donnees['Surname']; ?>
    </div>
    <div id="onemember_description">
        <?php echo $donnees['Description']; ?>
    </div>
    <div id="1" class="text-center">
        <input class="but2" type="button" value="OK" onclick="hidePopup();">
        <input id="onemember_mail" class="but2" type="button" value="Afficher le mail" onclick="showmail('<?php echo $donnees['Email']; ?>');">
    </div>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>