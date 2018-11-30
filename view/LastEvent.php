<?php

// Connexion à la BDD
try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

// Requête sur la BDD
$reponse = $bdd->query('SELECT * FROM events');

// Récupération de la date du jour et formatage du format
$today = new DateTime();
$today = $today->format('Y-m-d');

?>

<div id="agenda">
    <?php
    $result_last = 0; // Initialisation de la variable de comparaison à 0
    // Boucle sur les résultats de la requête
    while ($donnees = $reponse->fetch()) {
        $event_read = ($donnees['date']); // Enregistrement de la date de l'événement lu
        $result = strtotime($event_read) - strtotime($today); // Comparaison de la date de l'événement par rapport à aujourd'hui
        if ((($result_last == 0) OR ($result < $result_last)) AND ($result > 0)) { // Condition qui s'applique si la comparaison est la première ou si l'événement est plus récent
            $result_last = $result; // Enregistrement de l'événement le plus récent dans une variable
            // Récupération des données de l'événement
            $next_event_date = ($donnees['date']);
            $next_event_city = ($donnees['ville']);
            $next_event_description = ($donnees['description']);
            $next_event_nom = ($donnees['nom']);
        }
    }
    if ($result_last == 0){ // Condition qui s'applique s'il n'y a pas d'événement plus récent
        echo "Pour l'instant aucun événement est à venir";
        echo "<br><h2>Revenez plus tard...</h2>";
    }
    else{ // Condition qui s'applique si un événement est trouvé
        $next_event_date_format = explode("-", $next_event_date); // Formatage de la date
        $next_event_date_format = $next_event_date_format[2] . "/" . $next_event_date_format[1] . "/" . $next_event_date_format[0];
        echo "Le prochain événement aura lieu le " . $next_event_date_format . " à " . $next_event_city;
        echo " au <br><h2>" . $next_event_nom ."</h2>";
    }
    ?>
</div>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>