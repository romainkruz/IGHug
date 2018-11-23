<?php

try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query('SELECT * FROM events');

$today = new DateTime();
$today = $today->format('Y-m-d');

?>

<div id="agenda">
    <?php
    $result_last = 0;
    while ($donnees = $reponse->fetch()) {
        $event_read = ($donnees['date']);
        $result = strtotime($event_read) - strtotime($today);
        if ((($result_last == 0) OR ($result < $result_last)) AND ($result > 0)) {
            $result_last = $result;
            $next_event_date = ($donnees['date']);
            $next_event_city = ($donnees['ville']);
            $next_event_description = ($donnees['description']);
            $next_event_nom = ($donnees['nom']);
        }
    }
    if ($result_last == 0){
        echo "Pour l'instant aucun événement est à venir";
        echo "<br><h2>Revenez plus tard...</h2>";
    }
    else{
        $next_event_date_format = explode("-", $next_event_date);
        $next_event_date_format = $next_event_date_format[2] . "/" . $next_event_date_format[1] . "/" . $next_event_date_format[0];
        echo "Le prochain événement aura lieu le " . $next_event_date_format . " à " . $next_event_city;
        echo " au <br><h2>" . $next_event_nom ."</h2>";
    }
    ?>
</div>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>