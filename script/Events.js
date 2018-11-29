var Participation = {
	evenements: function() {
		$('.participation').click(this.click);	
	},
	// fonction qui détermine ce qui est affiché avant de cliquer sur le lien
	precharger: function() {
		var participations = $('.participation');
		for (var i = 0; i < participations.length; i++) {
				$.ajax({
					context: participations[i],
					type: "POST",
					url: "view/Participation.php",
					// On définie la variable cle + on lui affecte la valeur de l'id de l'event correspondant au selecteur .participation associé
					data: "cle=" + $(participations[i]).attr('title'),
					// On récupère la valeur que renvoie Participation.php
					success: function(data) {
						var votes = data;
						if (votes > 0) {
							$(this).html("Je participe (nombre de participants actuels : " + votes + ")");
						} else {
							$(this).html("Je participe (Pas de participant actuellement !)");
						}
					},
					// Si la requête n'est pas effectuée correctement on affiche une erreur
					error: function() {
						alert("Une erreur s'est produite, merci de recharger la page !");
					}
				});
			}
	},
	// fonction qui détermine ce qui est affiché après avoir cliqué sur le lien
	click: function(e) {
		// Pour ne cliquer qu'une seule fois
		$(this).unbind('click');
		$(this).click(function(){ return false; });
		
		$.ajax({
			context: this,
			type: "POST",
			url: "view/Participation.php",
			// On définie la variable vote et cle + on affecte à cle la valeur de l'id de l'event
			data: "vote=&cle=" + $(this).attr('title'),
			// On récupère la valeur que renvoie Participation.php
			success: function(data){
				$(this).css({'opacity':0});
				$(this).addClass('participe');
				var votes = data;
				if (votes > 1) {
					$(this).html(votes + " personnes participent");
				} else {
					$(this).html(votes + " personne participe");
				}
				// On modifie l'animation quand le nouveau texte apparaît
				$(this).animate({"opacity": "1", "duration": "slow"});
			},
			// Si la requête n'est pas effectuée correctement on affiche une erreur
			error: function() {
				alert("Une erreur s'est produite, merci de recharger la page !");
			}
		});
		return false;
	}
};

$(document).ready(function(){
	Participation.precharger();
	Participation.evenements();

	// Enlever cadre autour d'un lien une fois cliqué
	$('a').on('mouseup', function(){
		$(this).blur();
	});
});