<?php

try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query('SELECT * FROM events');

$today = new DateTime();
$today = $today->format('Y-m-d');

?>

    <div  id="agenda">
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
                }
        }
        echo "Le prochain événement aura lieu le : " . $next_event_date;
        ?>
</div>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>