$(document).ready(function(){	
	
function trackCampaign(category,action,label){
	
	/*
	 * Event Tracking mit analytics.js
	 * Format: ga('send', 'event', 'category', 'action', 'label', value);
	 */
	if(typeof ga != 'undefined'){
		ga('send', 'event', category, action, label);
	}
	
	
	/*
	 * Event Tracking mit ga.js
	 * Format: _gaq.push(['_trackEvent','category' , 'action', 'label']);
	 */
	if(typeof _gaq != 'undefined'){
		_gaq.push(['_trackEvent',category , action, label]);
	}
	
}
			
// Probetraining Event-Tracking		
				
		$('.headersearch2 #ctrl_30').on('click', function(){
			var begriff = $('[name=standort]').val();
			trackCampaign('Probetraining', 'Studiosuche', 'Click-Wähle ein Studio ('+begriff+')');
		});
		
		$('#studioergebnisse_container #ctrl_30').on('click', function(){
			var begriff = $('[name=standort]').val();
			trackCampaign('Probetraining', 'Studiosuche', 'Click-Studiosuche ('+begriff+')');
		});		
		
		$('.studio a').on('click', function(){
				var studioVar = $(this).attr('title'); 
				trackCampaign('Probetraining', 'Studioauswahl', 'Click-Studioauswahl ('+studioVar+')');
			});
		
		$('.mod_navigation [href="de/probetraining.html"]').click(function(){
				trackCampaign('Klick Probetraining', 'Probetraining-Header', 'Click Header');
		});
		
		if ($("form[name='Antragserfassung']").length > 0 && $("form.probe").length > 0) {			

			
			$("input[name=trainer]").click(function(){
				if ($("input:radio[name='mit_trainer']:checked").val() == 1) {
					trackCampaign('Probetraining', 'mit Trainer', 'Click-mit Trainer');
				}
				else {
					trackCampaign('Probetraining', 'ohne Trainer', 'Click-ohne Trainer');
				};
			});
			
			$("input[name=kurswahl]").click(function(){
			
				if ($("input:radio[name='kt_id']:checked").val() == 3) {
					trackCampaign('Probetraining', 'Schwerpunkt', 'Click-Schwerpunkt (Geräte)');
				}
				else 
					if ($("input:radio[name='kt_id']:checked").val() == 1) {
						trackCampaign('Probetraining', 'Schwerpunkt', 'Click-Schwerpunkt (Freie Gewichte)');
					}
					else {
						trackCampaign('Probetraining', 'Schwerpunkt', 'Click-Schwerpunkt (Rücken)');
					}
			});
			
			// in probetraining.js Zeile 72
			$(".btn-termin-weiter").click(function(){				
				trackCampaign('Probetraining', 'Termin', 'Click-Termin');
			});
			
			$("input[name=persoenliche_daten]").click(function(){
				if (mitTrainer == 0) {
					//(ohne Trainer)
					trackCampaign('Probetraining', 'Persönliche Daten', 'Click-Persönliche Daten');
				}
				else {
					//(mit Trainer)
					trackCampaign('Probetraining', 'Persönliche Daten', 'Click-Persönliche Daten');
				}
			});
			
			
			$("input[name=abschluss_probetraining]").click(function(){
				if (mitTrainer == 0) {
					//(ohne Trainer)
					trackCampaign('Probetraining', 'Bestätigung', 'Click-Bestätigung');
				}
				else {
					//(mit Trainer)
					trackCampaign('Probetraining', 'Bestätigung', 'Click-Bestätigung');
				}
			});
			
		}
		
// Mitgliedsantrag Event-Tracking

		$(".antragLink").click(function(){
				trackCampaign('Klick Mitgliedschaft', 'Mitgliedschaft-Header', 'Click Header');
		});
				
		$(".antragLinkSeite .headerContainer .btn").click(function(){
				trackCampaign('Klick Mitgliedschaft', 'Probetraining-Header', 'Click Header');
		});
		
		if ($("form[name='Antragserfassung']").length > 0 && $("form.probe").length == 0) {
			
			$("input[name=studioAuswahl]").click(function(){
				
				var studioVar = $('[name=studioAuswahl2]').data('name');
				trackCampaign('Mitgliedsantrag', 'Membercard', 'Click-Membercard ('+studioVar+')');
			});
			
			$("input[name=persoenliche_daten]").click(function(){
				trackCampaign('Mitgliedsantrag', 'Persönliche Daten', 'Click-Persönliche Daten');
				
			});
			$("input[name=bankdaten]").click(function(){
				trackCampaign('Mitgliedsantrag', 'Kontodaten', 'Click-Kontodaten');
				
			});
			$("input[name=abschluss_antrag]").click(function(){
				trackCampaign('Mitgliedsantrag', 'Bestätigung', 'Click-Bestätigung');
				
			});
		}
		
// Social Media Tracking
		
		$('#SocialFooter a').on('click', function(){
			var media = $(this).attr('title');
			trackCampaign('Klick Social Bar', media+' Item', 'Click Weiterleitung');
		});
		
// Marketing Widget Tracking
		
		$('.ce_marketing .btn').on('click', function(){
			var kampagne = $(this).attr('title');
      // +mg change aktion with label:
      // trackCampaign('Kampagnen Teaser','Teaser Click', 'Teilnehmen ('+kampagne+')');
			trackCampaign('Kampagnen Teaser','Teilnehmen ('+kampagne+')', 'Teaser Click');
		});

  $('.mod_topteaser_list .btn').on('click', function(){
    var kampagne = $(this).text();
    trackCampaign('Kampagnen Teaser','Button: ('+kampagne+') Top Teaser', 'Teaser Click');
  });
		
		$('.marketing-video-container').on('click', function(){
			var kampagne = $('.ce_marketing .btn').attr('title');
      // +mg change aktion with label:
      // trackCampaign('Kampagnen Teaser','Teaser Video Click', 'Play ('+kampagne+')');
			trackCampaign('Kampagnen Teaser','Play ('+kampagne+')', 'Teaser Video Click');
		});

// Footer Kontakt

		$('.kontaktLink').click(function(){
				trackCampaign('Kontakt', 'Kontakt-Button', 'Weiterleitung Kontakt');
		});

// Explorer Tracking

		$('.mod_explorer_list a').click(function(){
				trackCampaign('Content-Click', 'Entdecke mehr', 'Click Entdecke McFIT');
		});
		
// Hauptnavigation
		$('#mainnav a').click(function(){
				trackCampaign('Content-Click', 'Navigation', 'Click Header');
		});

// Studiosuche Widget
		$('#ctrl_36').on('click', function(){
			var begriff = $('[name=standort]').val();
			trackCampaign('Studio Suche', 'Studiosuche Startseite', 'Click-Studiosuche ('+begriff+')');
		});
		
		$('#ctrl_3').on('click', function(){
			var begriff = $('[name=standort]').val();
			trackCampaign('Studio Suche', 'Studiosuche Studios', 'Click-Studiosuche ('+begriff+')');
		});

//Presse
		
//	$('.presse .ce_text a[href$="pdf"]').on('click', function(){
//			var dateiname = $(this).attr('href');
//			var fileNameIndex = dateiname.lastIndexOf("/") + 1;
//			var filename = dateiname.substr(fileNameIndex);	
//			trackCampaign('Presse', 'PDF-Downloads', 'Download - "'+filename+'"');
//	});	
//	
//	$('.presse .ce_text a[href$="jpg"]').on('click', function(){
//			var dateiname = $(this).attr('href');
//			var fileNameIndex = dateiname.lastIndexOf("/") + 1;
//			var filename = dateiname.substr(fileNameIndex);			
//			trackCampaign('Presse', 'Bilder-Downloads', 'Download - "'+filename+'"');
//	});
//	
//	$('.presse .ce_text a[href$="zip"]').on('click', function(){
//			var dateiname = $(this).attr('href');
//			var fileNameIndex = dateiname.lastIndexOf("/") + 1;
//			var filename = dateiname.substr(fileNameIndex);		
//			trackCampaign('Presse', 'Zip-Downloads', 'Download - "'+filename+'"');
//	});
	
	$('.presse .pdffile').on('click', function(){
		var dateiname = $(this).attr('href');
		var fileNameIndex = dateiname.lastIndexOf("/") + 1;
		var filename = dateiname.substr(fileNameIndex);	
		trackCampaign('Presse', 'PDF-Downloads', 'Download - "'+filename+'"');
	});	

	$('.presse .pressedla').on('click', function(){
		var dateiname = $(this).attr('href');
		var fileNameIndex = dateiname.lastIndexOf("/") + 1;
		var filename = dateiname.substr(fileNameIndex);			
		trackCampaign('Presse', 'Bilder-Downloads', 'Download - "'+filename+'"');
	});

	$('.presse .zipfile').on('click', function(){
		var dateiname = $(this).attr('href');
		var fileNameIndex = dateiname.lastIndexOf("/") + 1;
		var filename = dateiname.substr(fileNameIndex);		
		trackCampaign('Presse', 'Zip-Downloads', 'Download - "'+filename+'"');
	});

// News Video
	
	if ($('#news').length > 0) {
		jwplayer().onPlay(function(){
			var vid = this.id;
			var titel = $('span.' + vid).attr('title');
			trackCampaign('Kampagnen Teaser- News Seite', 'Teaser Video Click', 'Play - ' + titel);
		});
	}
// Partner Links

	$('[href^="http://www.mcfit-models.com"]').on('click', function(){
			trackCampaign('Weiterleitung', 'Link McFIT Models', 'Click-Weiterleitung');
	});
	
	$('[href^="http://www.loox.com"]').on('click', function(){
			trackCampaign('Weiterleitung', 'Link LOOX', 'Click-Weiterleitung');
	});	
});