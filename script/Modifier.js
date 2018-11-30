$(document).ready(function () {

    // Récupération de la valeur des champs au début du chargement de la page
    var NomStart = $("#nvnom").val();
    var PrenomStart = $("#nvprenom").val();
    var MailStart = $("#nvemail").val();
    var LoginStart = $("#nvlogin").val();
    var DescriptionStart = $("#nvdescription").val();

    $("form").on("submit", function () { // Création de l'événement sur la soumission du formulaire

        // Récupération de la valeur des champs au moment de la soumission
        var Nom = $("#nvnom").val();
        var Prenom = $("#nvprenom").val();
        var Mail = $("#nvemail").val();
        var Login = $("#nvlogin").val();
        var Description = $("#nvdescription").val();

        // Condition qui s'applique si une données à été modifié
        if ((NomStart != Nom)||(PrenomStart != Prenom)||(MailStart != Mail)||(LoginStart != Login)||(DescriptionStart != Description)){
            var url = "view/Profil_Modifier.php?nom=" + Nom + "&prenom=" + Prenom + "&mail=" + Mail + "&login=" + Login + "&description=" + Description; // Création de l'url pour préparé la requête AJAX avec les données en paramétre

            $.ajax({ // Créationde la requête AJAX
                url: url, // Passage de l'URL
            });
            var URL = document.location.href; // Récupération de l'URL courant
            var URL_SUB = URL.substring( 0 ,URL.lastIndexOf( "/" ) ); // Découpage de l'URL pour ne garder que la racine
           document.location.href=URL_SUB + "/HUB.php"; // Redirection vers le Hub
        }
        });
});