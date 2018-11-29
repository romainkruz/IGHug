var Participation = {
	evenements: function() {
		$('.participation').click(this.click);	
	},
	precharger: function() {
		 var participations = $('.participation');
		 for (var i = 0; i < participations.length; i++) {
		 		$.ajax({
		 			context: participations[i],
		 			type: "POST",
		 			url: "view/Participation.php",
		 			data: "cle=" + $(participations[i]).attr('title'),
		 			success: function(data) {
		 				var votes = data;
						if (votes > 0) {
							$(this).html("Je participe (nombre de participants actuels : " + votes + ")");
						} else {
							$(this).html("Je participe (Pas de participant actuellement !)");
						}
		 			}
		 		});
		 	}
	},
	click: function(e) {
		// Pour ne cliquer qu'une seule fois
		$(this).unbind('click');
		$(this).click(function() { return false; });
		
		$.ajax({
			context: this,
			type: "POST",
			url: "view/Participation.php",
			data: "vote=&cle=" + $(this).attr('title'),
			success: function(data){
				$(this).css({'opacity':0});
				$(this).addClass('participe');

				var votes = data;
				if (votes > 1) {
					$(this).html(votes + " personnes participent");
				} else {
					$(this).html(votes + " personne participe");
				}

				$(this).animate({"opacity": "1", "duration": "slow"});
			},
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
	$('a').on('mouseup', function(){
		$(this).blur();
	});
});