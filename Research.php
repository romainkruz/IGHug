<?php
    session_start();
    if ($_SESSION['loginok'] == false) {
        if ($_SERVER['SERVER_NAME']=="localhost"){
            header('Location:http://localhost/IGHug/Accueil.php');
        }
        else {
            header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/Accueil.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IGHug</title>

        <meta name="description" content="Réseau social pour IGS">
        <meta name="author" content="QAR">

        <link href="img/Logo_IGHug.png" rel="icon">
        <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="css/style_HUB.css" rel="stylesheet">
        <link href="css/style_Research.css" rel="stylesheet">
    </head>

    <header>
        <?php include("Header.php"); ?>
    </header>

    <body>
    <div class="container-fluid">
        <div id="cooming" class="row">
            <div class="col-12 text-center">
            <h1>COOMING SOON !</h1>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    </body>
</html>


