<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IGHug</title>

    <meta name="description" content="Site de rencontre pour IGS">
    <meta name="author" content="QAR">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/style_HUB.css" rel="stylesheet">
    <link rel="icon" href="img/Logo_IGHug.png" />

</head>

<header>

    <?php include("Header.php"); ?>

</header>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Prochain événement</h1>
            <aside id="agenda-picture" class="hidden-sm hidden-md">
                <?php include("view/LastEvent.php"); ?>
            </aside>
            <div id="maps_div" class="text-center">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1vsfcmfFqcvucerzGZ78aZeDmAnmCnV_w" id="maps" scrolling="no" frameborder="0"></iframe>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Liste des membres connectés</h1>
            <?php include("view/ListMembers.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="school_Titre">
                <h1 class="text-center">Membres par école</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="school_div" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
            <img src="img/IPI.png" id="IPI">
            <img src="img/ICD.png" id="ICD">
            <img src="img/ISCPA.png" id="ISCPA">
            <img src="img/ESAM.png" id="ESAM">
            <img src="img/IGS-RH.png" id="IGS-RH">
            <img src="img/IGS-Alternance.png" id="IGS-Alternance">
            <img src="img/IGS-Formation continue.png" id="IGS-Formation-continue">
        </div>
    </div>
    <div id="Members_by_school">
    </div>
    <hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <p>
            IGHug © 2018
        </p>
    </div>
    <div id="customPopup">
        <div id="customPopupcontent">
        </div>
    </div>
</div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="script/Hub.js"></script>

</body>
</html>


