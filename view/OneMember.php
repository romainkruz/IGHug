<?php

    // Récupération de l'ID par l'URL
    $ID = $_GET['id'];

    // Connexion à la BDD
    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    // Requête sur la BDD avec l'ID cliqué
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
    <div class="text-center">
        <input class="button" type="button" value="OK" onclick="hidePopup();">
        <input id="onemember_mail_button" class="button" type="button" value="Afficher le mail" onclick="showmail('<?php echo $donnees['Email']; ?>');">
        <div id="onemember_mail"></div>
    </div>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>