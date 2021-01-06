$(document).ready(function() {
	
	$('.big').css('height',$(window).height());
	$('#first').css('top','760px'); //$(window).height()-75
	$('#first').css('left','0px');
	$('#second').css('top',$(window).height()*2-40);
    $('#footer').css('bottom',$(document).height()-$('#footer').height());
    $('#agenda_tu_cita_div').css('display','none');
	redrawDotNav();

	$(function() {
    $("img_fb")
        .mouseover(function() { 
            document.getElementById("img_fb").src = 'facebook_white.png';
        })
        .mouseout(function() {
            document.getElementById("img_fb").src = 'facebook-icon.png';
        });
	});
	
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
	
	
	function getPositions( elem ) {
        var pos, width, height;
        pos = $( elem ).position();
        width = $( elem ).width();
        height = $( elem ).height();
        return [ [ pos.left, pos.left + width ], [ pos.top, pos.top + height ] ];
    }
	
	
	        
}); 

/* Scroll the background layers */
function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('#modul').css('top',(0-(scrolled*.25))+'px');
}

/* Set navigation dots to an active state as the user scrolls */

function redrawDotNav(){
    var section1Top =  0;
	var sectionTop =  $('#modul').offset().top - ($('#modul').offset().top / 5);
	var bodyHeight = $('body').height()-$( window ).height();
	var pos_footer = $('#fin').position(); // footer position, terms and conditions
	var pos_first = $('#first').position(); // position menu del pie de pagina
var scrolled = $(window).scrollTop();
		var scrolled2 = $(window).scrollTop()+$( window ).height()-50;
		
	if($(document).scrollTop() < $( window ).height())
	{
		$('.menu').css('top',$( window ).height() - $( window ).height()/3);
		$('#menu_visualiza').css('top','0px');
		$('#menu2').animate({ backgroundColor: 'rgba(0, 0, 0, 0.4)' }, 1000);
		$('#menu').css('background-color', 'transparent');
		$('#logoo').css('top',(scrolled + 10) +'px');
		//$('#first').css('top',800 +'px');
		
		var pos = $('#pie').position();
		//alert(pos.top);
		}else if($(document).scrollTop() > $( window ).height()-$( window ).height()/3){
		$('.menu').css('top',scrolled +'px');
		$('#menu_visualiza').css('top',scrolled +'px');
		$('#logoo').css('top',(scrolled + 10) +'px');
		$('.menu').animate({ backgroundColor: 'rgba(0, 0, 0, 0.4)' }, 1000);
		$('#menu').css('background-color', 'rgba(0, 0, 0, 0.4)');
		//
	}
	
	var b=$('#fin').position().top - $('#fin').height()/3;
	var a=$('#fin').position().top + $('#pie').position().top - $('#pie').height()/2;
	//var a=$('#fin').position().top+$('#pie').position().top;
	if($(document).scrollTop() < b){
		
		if($(document).scrollTop()==0){
			var c=$('#slide-1').height()-$('#first').height();
			$('#first').css('top',c +'px');
			}else{
			$('#first').css('top',scrolled2 +'px');
				}
		}else{
		$('#first').css('top', a+'px');
		}
	/*
			
	if(pos_first.top > f_t ){
			
			}else{
			$('#first').css('top',scrolled2 +'px');
			
				}*/
				

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
