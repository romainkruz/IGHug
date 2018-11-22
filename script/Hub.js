$(document).ready(function () {

    var Members = "";

    $("#school_IPI").on("click", function () {

        if (Members != "IPI"){
            Members = "IPI";
            $.ajax({
                url: 'view/ListMembers_IPI.php', // fait bien attention à l'adresse par contre
                success: function(IPI_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(IPI_Members).hide().fadeIn("slow"); // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
            }
    });

    $("#school_ICD").on("click", function () {

        if (Members != "ICD"){
            Members = "ICD";
            $.ajax({
                url: 'view/ListMembers_ICD.php', // fait bien attention à l'adresse par contre
                success: function(ICD_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(ICD_Members).hide().fadeIn("slow"); // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
        }
    });

    $("#school_IGS_ISCPA").on("click", function () {

        if (Members != "ISCPA"){
            Members = "ISCPA";
            $.ajax({
                url: 'view/ListMembers_ISCPA.php', // fait bien attention à l'adresse par contre
                success: function(ISCPA_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(ISCPA_Members).hide().fadeIn("slow");; // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
        }
    });

    $("#school_ESAM").on("click", function () {

        if (Members != "ESAM"){
            Members = "ESAM";
            $.ajax({
                url: 'view/ListMembers_ESAM.php', // fait bien attention à l'adresse par contre
                success: function(ESAM_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(ESAM_Members).hide().fadeIn("slow");; // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
                Members = "";
                $('#Members_by_school').fadeOut("slow");
            }
    });

    $("#school_IGS_RH").on("click", function () {

        if (Members != "RH"){
            Members = "RH";
            $.ajax({
                url: 'view/ListMembers_IGS-RH.php', // fait bien attention à l'adresse par contre
                success: function(IGS_RH_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(IGS_RH_Members).hide().fadeIn("slow");; // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
        }
    });

    $("#school_IGS_Alternance").on("click", function () {

        if (Members != "Alternance"){
            Members = "Alternance";
            $.ajax({
                url: 'view/ListMembers_IGS-Alternance.php', // fait bien attention à l'adresse par contre
                success: function(IGS_Alternance_Members) {
                    // contenu_soumettre_tv contient tout
                    // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                    $('#Members_by_school').html(IGS_Alternance_Members).hide().fadeIn("slow");; // on met le contenu dans le <div class="art">
                }
            });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
        }
    });

    $("#school_IGS_Formation_continue").on("click", function () {

        if (Members != "Formation"){
            Members = "Formation";
        $.ajax({
            url: 'view/ListMembers_IGS-Formation_continue.php', // fait bien attention à l'adresse par contre
            success: function(IGS_Formation_continue_Members) {
                // contenu_soumettre_tv contient tout
                // ce que renvoit "soumettre_cv.php" si tu l'appelais en direct
                $('#Members_by_school').html(IGS_Formation_continue_Members).hide().fadeIn("slow");; // on met le contenu dans le <div class="art">
            }
        });
        }
        else {
            Members = "";
            $('#Members_by_school').fadeOut("slow");
        }
    });

});