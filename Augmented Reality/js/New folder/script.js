$(document).ready(function() {
	$('.big').css('height',$( window ).height());
	$('#first').css('top',$( window ).height()-75);
	$('#second').css('top',$( window ).height()*2-40);
$('#footer').css('bottom',$(document).height()-$('#footer').height());
$('#agenda_tu_cita_div').css('display','none');
	redrawDotNav();
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){
    	//parallaxScroll();
		redrawDotNav();
    });
    
	/* Next/prev and primary nav btn click handlers */
	$('#modul').click(function(){
    	$('html, body').animate({
    		scrollTop:0
    	}, 1000, function() {
	    	parallaxScroll(); // Callback is required for iOS
		});
    	return false;
	});
	        
});

/* Scroll the background layers */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('#modul').css('top',(0-(scrolled*.25))+'px');
}

/* Set navigation dots to an active state as the user scrolls */
function redrawDotNav(){
	var section1Top =  0;
	// The top of each section is offset by half the distance to the previous section.
	//var section2Top =  $('#frameless-parachute').offset().top - (($('#english-channel').offset().top - $('#frameless-parachute').offset().top) / 2);
	var sectionTop =  $('#modul').offset().top - ($('#modul').offset().top / 5);
	//$('nav#primary a').removeClass('active');
		//sectionTop - y scrollTop +

	if($(document).scrollTop() < $( window ).height()){
		$('.menu').css('top',$( window ).height() - $( window ).height()/3);
		$('#menu2').css('top','0px');
			$('#menu2').animate({ backgroundColor: 'rgba(0, 0, 0, 0.4)' }, 1000);


		}else if($(document).scrollTop() > $( window ).height()-$( window ).height()/3){
		var scrolled = $(window).scrollTop();
	$('.menu').css('top',scrolled +'px');
	$('.menu').animate({ backgroundColor: 'rgba(0, 0, 0, 0.4)' }, 1000);
			}

}
function ver_garantia(){
	if(!$('#ver-mas').is(':visible')){
			$('#ver-mas').css('display','block');
		}else{
			$('#ver-mas').css('display','none');
			}
		}	
		
function agenda_tu_citaClick(){
	if($('#agenda_tu_cita_div').is(":visible")){
	$('#agenda_tu_cita_div').css('display','none');
	}else{
	$('#agenda_tu_cita_div').css('display','block');
		}
	}
