$(document).ready(function () {

    var NomStart = $("#nvnom").val();
    var PrenomStart = $("#nvprenom").val();
    var MailStart = $("#nvemail").val();
    var LoginStart = $("#nvlogin").val();
    var DescriptionStart = $("#nvdescription").val();

    $("form").on("submit", function () {

        var Nom = $("#nvnom").val();
        var Prenom = $("#nvprenom").val();
        var Mail = $("#nvemail").val();
        var Login = $("#nvlogin").val();
        var Description = $("#nvdescription").val();

        if ((NomStart != Nom)||(PrenomStart != Prenom)||(MailStart != Mail)||(LoginStart != Login)||(DescriptionStart != Description)){
            console.log("OUIOUI");
            var url = "view/Profil_Modifier.php?nom=" + Nom + "&prenom=" + Prenom + "&mail=" + Mail + "&login=" + Login + "&description=" + Description;

            $.ajax({
                url: url,
            });
            var URL = document.location.href;
            var URL_SUB = URL.substring( 0 ,URL.lastIndexOf( "/" ) );
           document.location.href=URL_SUB + "/HUB.php";
        }
        });
});