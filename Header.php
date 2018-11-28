<div class="container-fluid">
    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 text-center text-xl-left text-lg-left text-md-left">
            <img id="logo_header" src="img/Logo_IGHug_Nude-320x260.png"/>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="page-header text-center">
                <img src="img/Titre-800x70.png" id="Titre"/>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <ul class="navigation zoom icone_header float-xl-right float-lg-right float-md-right text-center">
                <li><a href="HUB.php"><img src="img/home-5-xxl.png"/></a></li>
                <li><a href="Research.php"><img src="img/search-3-xxl.png"/></a></li>
                <li><a href="Events.php"><img src="img/champagne-xxl.png"/></a></li>
                <li class="toggleSubMenu"><a><img src="img/contacts-xxl.png"/></a>
                    <ul class="subMenu">
                        <li><a href="Profil.php" style="color: white" title="Modify">Modifier mon profil</a></li>
                        <li><?php echo '<a style="color: white" href="view/Deconnexion.php?email1=' .  $_SESSION['email1'] . '" title="Deconnexion">Deconnexion</a>' ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="script/Menu.js"></script>