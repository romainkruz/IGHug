<?php
    session_start();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
            <img id="logo_header" src="img/Logo_IGHug_Nude-320x260.png"/>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="page-header text-center">
                <img src="img/Titre-800x70.png" id="Titre"/>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <ul class="navigation zoom icone_header">
                <li><a href="http://localhost/IGHug/HUB.php"><img src="img/home-5-xxl.png"/></a></li>
                <li><a href="http://localhost/IGHug/Research.php"><img src="img/search-3-xxl.png"/></a></li>
                <li><a href="http://localhost/IGHug/Events.php"><img src="img/champagne-xxl.png"/></a></li>
                <li class="toggleSubMenu"><a><img src="img/contacts-xxl.png"/></a>
                    <ul class="subMenu">
                        <li><a href="http://localhost/IGHug/Modify.php" style="color: white" title="Modify">Modifier mon profil</a></li>
                        <li><?php echo '<a style="color: white" href="http://localhost/IGHug/view/Deconnexion.php?email1=' .  $_SESSION['email1'] . '" title="Deconnexion">Deconnexion</a>' ?></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="script/Popup.js"></script>
        <script src="js/Menu.js"></script>
        </div>
    </div>
</div>