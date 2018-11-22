<?php
    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

    $reponse = $bdd->query('SELECT * FROM events ORDER BY date');
?>

<?php
    while ($donnees = $reponse->fetch()) {
        $today = new DateTime();
        $today = $today->format('Y-m-d');
        if (strtotime($donnees['date']) - strtotime($today) >= 0) {
            echo '<div class="events_list"><span><strong>Date de l\'évènement :</strong></span>' . ' ' . $donnees['date'] . '</br><span><strong>Heure de l\'évènement : </strong></span>' . $donnees['heure'] . '</br><span><strong>Lieu de l\'évènement : </strong></span>' . $donnees['nom'] . '<p>' . $donnees['description'] . '</p></div>';
        /*<figure>
            <img id="Members_image" src="img_profile/image-<?php echo $donnees['ID']; ?>.png">
            <figcaption><?php echo $donnees['Name']; ?></figcaption>
        </figure>*/
        }
    }
?>

<?php
    $reponse->closeCursor(); // Termine le traitement de la requête
?>