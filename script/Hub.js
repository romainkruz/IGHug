$(document).ready(function () {

    var Members = ""; // Initialisation de la variable à vide

    $("#school_div").children().on("click", function () { // Création de l'événement sur le clique des enfants de school_div

        var School = $(this).attr('id'); // Création de la variable avec l'ID de l'élément cliqué
        if (School == "IGS-Formation-continue"){ // Condition qui s'applique si l'ID est IGS-Formation.. et formatage de cette dernière pour correspondre à la valeur de la base
            School = "IGS-Formation continue";
        }
        if (Members == School){ // Condition qui s'applique si l'élément cliqué est le même que l'élément précedemment cliqué
            $('#Members_by_school').fadeOut("slow"); // Masquage de la div
            Members = ""; // Vidage de la variable
        }
        else{
            Members = School; // Condition qui s'applique si l'élément cliqué n'est pas le même que l'élément précedemment cliqué
            var url = "view/ListMembers_BySchool.php?school=" + School; // Création de l'url pour préparé la requête AJAX avec l'école en paramétre

            $.ajax({ // Créationde la requête AJAX
                url: url, // Passage de l'URL
                success: function(ListMembers_BySchool) { // Si la requête à réussi créé la fonction pour écrire dans la div
                    $('#Members_by_school').html(ListMembers_BySchool).hide().fadeIn("slow"); // Ecriture dans la div avec le html créé par ListMembers_BySchool.php
                }
            });
        }
    });
});

function showPopup(ID) {

    var url = "view/OneMember.php?id=" + ID; // Création de l'url pour préparé la requête AJAX avec l'ID du profil en paramétre

    $("#customPopup").before('<div id="grayBack"></div>'); //Insertion dans HUB.php html de la div pour le fond gris

    $("#grayBack").css('opacity', 0).fadeTo(300, 0.5, function () { $("#customPopup").fadeIn(500); }); //Apparition du Popup

    $.ajax({ // Créationde la requête AJAX
        url: url, // Passage de l'URL
        success: function(One_Members) { // Si la requête à réussi créé la fonction pour écrire dans la div
            $("#customPopupcontent").html(One_Members); // Ecriture dans la div avec le html créé par One_Members.php
        }
    });
}

function hidePopup() {

    $("#grayBack").fadeOut('fast', function () { $(this).remove() }); // Disparition du fond gris

    $("#customPopup").fadeOut('fast', function () { $(this).hide() }); // Disparition de la div avec l'ID customPopup

}

function showmail(mail) {

    $("#onemember_mail_button").hide(); // Disparition du bouton
    $("#onemember_mail").html(mail); // Apparition de l'adresse mail

}