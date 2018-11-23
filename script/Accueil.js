function showPopupForget() {

    $("#PopupForget").before('<div id="grayBack"></div>');
    $("#grayBack").css('opacity', 0).fadeTo(300, 0.5, function () { $("#PopupForget").fadeIn(500); });
    $("#PopupForgetcontent").html('Envoyer mon nouveau mot de passe à <input type="email" placeholder="Votre Email" maxlength="20"> <input class="but1" type="button" value="OK" onclick="hidePopupForget();">');

    }

function hidePopupForget() {

    $("#grayBack").fadeOut('fast', function () { $(this).remove() });
    $("#PopupForget").fadeOut('fast', function () { $(this).hide() });

	}
