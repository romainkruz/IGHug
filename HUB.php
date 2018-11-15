<!DOCTYPE html>
<html lang="en">
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

    <?php include("header.php"); ?>

</header>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Prochain événement</h1>
            <aside id="agenda-picture" class="hidden-sm hidden-md">
                <?php include("view/LastEvent.php"); ?>
            </aside>
            <div class="center-block">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1vsfcmfFqcvucerzGZ78aZeDmAnmCnV_w" id="maps"></iframe>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Liste des membres connectés</h1>
            <?php include("view/ListMembers.php"); ?>
        </div>
    </div>
</div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>


