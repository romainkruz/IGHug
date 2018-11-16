<?php

    $ID = $_GET['id'];

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM members WHERE id='.$ID);
    $donnees = $reponse->fetch()
?>

<div class="text-center">
    <?php echo $donnees['Name']; ?>
    PROUT
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>