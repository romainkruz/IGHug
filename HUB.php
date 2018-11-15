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
        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Prochain événement</h1>
            <aside id="agenda-picture" class="hidden-sm hidden-md">
                <?php include("view/LastEvent.php"); ?>
            </aside>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
            <h1 class="text-center">Liste des membres connectés</h1>
            <?php include("view/ListMembers.php"); ?>
        </div>
    </div>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="https://embedgooglemaps.com/it/">embedgooglemaps EN</a></small></div><div><small><a href="https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/">https://lasagradafamiliatickets.de/la-sagrada-familia-ticket/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(44.837789,-0.5791799999999512),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.837789,-0.5791799999999512)});infowindow = new google.maps.InfoWindow({content:'<strong>Prochain événement</strong><br>Ospedaletto Lodigiano<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>


