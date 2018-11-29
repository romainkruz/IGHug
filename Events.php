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
        <link href="css/style_Events.css" rel="stylesheet">
	</head>

    <header>
        <?php include("Header.php"); ?>
    </header>

	<body>
		<div class="container-fluid" id="main_bloc">
			<div class="row" id="gauche_et_droite">
				<div class="col-lg-6 col-md-12" id="gauche">
					<?php include("view/ListEvents.php"); ?>
				</div>
				<div class="col-lg-6 col-md-12" id="droite">
					<div class="row" id="titre_quart">
						<div class="col-md-12">
							<h1>THE PLACE TO BE</h1>
						</div>
					</div>
					<div class="row" id="droite_haut">
						<div class="col-md-6" id="premier_quart">
							<h2>Bar</h2>
							<?php include("view/ListBars.php"); ?>
						</div>
						<div class="col-md-6" id="deuxieme_quart">
							<h2>Restaurants</h2>
							<?php include("view/ListRestaurants.php"); ?>
						</div>
					</div>
					<div class="row" id="droite_bas">
						<div class="col-md-6" id="troisieme_quart">
							<h2>Concerts</h2>
							<?php include("view/ListConcerts.php"); ?>
						</div>
						<div class="col-md-6" id="quatrieme_quart">
							<h2>Autres</h2>
							<?php include("view/ListAutres.php"); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
		<script src="script/Events.js"></script>

	</body>
</html>