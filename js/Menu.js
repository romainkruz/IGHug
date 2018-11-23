$(document).ready( function () {
    
// On cache les sous-menus

    $(".navigation ul.subMenu:not()").hide();

// On modifie l'évènement "click" sur le togglemenu

    $(".navigation li.toggleSubMenu > a").click( function () {
// Si le sous-menu était déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).next("ul.subMenu").fadeOut(250, function () { $(this).parent().removeClass("open") } );
        }
// Si le sous-menu est caché, on l'affiche :
        else {
            $(this).next("ul.subMenu").fadeIn(250, function () { $(this).parent().addClass("open") } );
        }
    });
} ) ;
