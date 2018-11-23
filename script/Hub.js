$(document).ready(function () {

    var Members = "";

    $("#school_div").children().on("click", function () {

        var School = $(this).attr('id');
        if (School == "IGS-Formation-continue"){
            School = "IGS-Formation continue";
        }
        if (Members == School){
            $('#Members_by_school').fadeOut("slow");
            Members = "";
        }
        else{
            Members = School;
            var url = "view/ListMembers_BySchool.php?school=" + School;

            $.ajax({
                url: url,
                success: function(ListMembers_BySchool) {
                    $('#Members_by_school').html(ListMembers_BySchool).hide().fadeIn("slow");
                }
            });
        }
    });
});

function showPopup(ID) {

    var url = "view/OneMember.php?id=" + ID;
    // ici on insère dans notre page html notre div gris
    $("#customPopup").before('<div id="grayBack"></div>');

    // maintenant, on récupère la largeur et la hauteur de notre popup
    var popupH = $("#customPopup").height();
    var popupW = $("#customPopup").width();

    // ensuite, on crée des marges négatives pour notre popup, chacune faisant
    // la moitié de la largeur/hauteur du popup
    $("#customPopup").css("margin-top", "-"+(popupH/2)+"px");
    $("#customPopup").css("margin-left", "-"+(popupW/2)+"px");

    // enfin, on fait apparaître en 300 ms notre div gris de fond, et une fois
    // son apparition terminée, on fait apparaître en fondu notre popup
    $("#grayBack").css('opacity', 0).fadeTo(300, 0.5, function () { $("#customPopup").fadeIn(500); });

    $.ajax({
        url: url, // fait bien attention à l'adresse par contre
        success: function(One_Members) {
            // contenu_soumettre_tv contient tout
            // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
            $("#customPopupcontent").html(One_Members); // on met le contenu dans le <div class="art">
        }
    });
}

function hidePopup() {

    // on fait disparaître le gris de fond rapidement
    $("#grayBack").fadeOut('fast', function () { $(this).remove() });

    // on fait disparaître le popup à la même vitesse
    $("#customPopup").fadeOut('fast', function () { $(this).hide() });

}

function showmail(mail) {

    $("#onemember_mail_button").hide();
    $("#onemember_mail").html(mail);

}