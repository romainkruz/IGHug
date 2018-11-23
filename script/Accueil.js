function showPopupForget() {

    $("#PopupForget").before('<div id="grayBack"></div>');
    $("#grayBack").css('opacity', 0).fadeTo(300, 0.5, function () { $("#PopupForget").fadeIn(500); });
    $("#PopupForgetcontent").append("Coucou Tu veux voir ma bite"); // on met le contenu dans le <div class="art">

    }

function hidePopupForget() {

    $("#grayBack").fadeOut('fast', function () { $(this).remove() });
    $("#PopupForget").fadeOut('fast', function () { $(this).hide() });

}
