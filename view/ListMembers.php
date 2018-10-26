<?php
try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query('SELECT * FROM members');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()) {
    ?>
    <p>
        <strong>Nom</strong> : <?php echo $donnees['Name']; ?>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>