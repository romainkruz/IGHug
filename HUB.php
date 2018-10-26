<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IGHug</title>

    <meta name="description" content="Site de rencontre pour IGS">
    <meta name="author" content="QAR">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/Logo_IGHug.png" />

</head>

<header>

    <?php include("header.php"); ?>

</header>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    VVVVIGHub <small>Ceci est le HUB</small>
                </h1>
            </div>
        </div>
    </div>
</div>

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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>