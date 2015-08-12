$(document).ready(function() {
if ($("#owly").length > 0) {
		$('.tabwidth:first').addClass('aktiv');
		
		$("#owly").owlCarouselNew({ 
		      // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      autoHeight : false,
		      
		      responsive: true,
		      items : 1,
		      itemsDesktop : [1392,1],
		      itemsDesktopSmall : [1020,1],
		      itemsTablet: [768,1],
		      itemsMobile : [684,1],
		      
		      // Navigation
		      navigation : true,
		      navigationText : ["prev","next"],
		      pagination : false,
		      paginationNumbers: false,      
		      baseClass : "owl-carousel2",
		      theme : "owl-theme",
		      rewindNav: true, 
		      autoPlay: true,
		      addClassActive: true,
		      afterMove : function() {		  		
					var cur = owl.currentItem
					$('.tabwidth').removeClass('aktiv');
					$('.ig-'+cur).addClass('aktiv');
		  		}
		});
		
	  
	  	// Tabs
		$('.tabs').each(function(i,container){
			var gap = 0.3;	
	  		var count = $(this).find('li').length;		
			var breite = 100;
			var tabwidth = (breite-((count-1)*gap))/count;
			$('.tabwidth', this).css({'width':tabwidth + '%','margin': '0'}).not('.tabwidth:first').css('margin-left',gap+'%');
		});
	  
		
		
		var owl = $("#owly").data('owlCarouselNew');
		
		$('.tabs li').each(function(i){			
			$('a',this).bind('click', function(e){
				e.preventDefault();
				owl.goTo(i)
			});  
		});
		
		// Arrows
		$('.next-tab').bind('click', function(e){
				e.preventDefault();
				owl.next();
		}); 
		$('.prev-tab').bind('click', function(e){
				e.preventDefault();
				owl.prev();
		}); 
}	
		
 });