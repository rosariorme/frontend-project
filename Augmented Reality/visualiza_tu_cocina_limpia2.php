<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Modul, Imagina tu Cocina." />
<meta property="og:description" content="El limite es tu imaginacion" /> 
<meta property="og:image" content="media/images/07-imagina-tu-cocina/miniatura.jpg" />
<link rel="icon" type="image/gif" href="media/images/animated_favicon1.gif" />
<title>Modul</title>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script_menu.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/colpick.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
	  loading('menu_visualiza','five','footer_top','logoo3');
	  	  change_arrow(1);
	  });
  </script>

<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
<style>
.css-input { border-color:#000; border-style:solid; padding:11px;font-size:12px; color:#000; border-width:1px; font-family:'Lato';  background-color: transparent;  } 
.css-input:focus { outline:none; }
input[type=checkbox].css-checkbox { position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0; }
input[type=checkbox].css-checkbox + label.css-label {
padding-left:31px;
height:62px; 
width:50px;
display:inline-block;
line-height:62px;
background-repeat:no-repeat;
background-position: 0 0;
font-size:26px;
vertical-align:middle;
cursor:pointer; } /*http://csscheckbox.com/checkboxes/u/csscheckbox_7dd90aff35ddb38fdc7cb1f8b325cea0.png*/
input[type=checkbox].css-checkbox:checked + label.css-label {background-position: 0 -62px;}
						label.css-label {
				background-image:url(media/images/cuadro2.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
}
select {
	inset;
    border:solid #000
	background: url('media/images/03-catalogo/cocinas/abajo.jpg') no-repeat right #fff;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
.color-box {
	float:left;
	width:30px;
	height:30px;
	margin:5px;
	border: 1px solid white;
}
.hvr-bubble-bottom {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}
.hvr-bubble-bottom-active {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateY(15px);
  transform: translateY(15px);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}

.hvr-bubble-bottom:before, .hvr-bubble-bottom-active2:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  border-style: solid;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  left: calc(50% - 10px);
  bottom: 0;
  border-width: 10px 10px 0 10px;
  border-color: #000 transparent transparent transparent;
}
.hvr-bubble-bottom:hover:before, .hvr-bubble-bottom:focus:before, .hvr-bubble-bottom:active:before, .hvr-bubble-bottom-active2:before{
  -webkit-transform: translateY(15px);
  transform: translateY(15px);
}
.hvr-bubble-bottom3:hover:before, .hvr-bubble-bottom3:focus:before, .hvr-bubble-bottom3:active:before, .hvr-bubble-bottom-active3:before{
  -webkit-transform: translateY(8px);
  transform: translateY(8px);
}

@-moz-keyframes tooltippulse {       
	0% {-moz-transform: scale(0); opacity: 0;}
	8% {-moz-transform: scale(0); opacity: 0;}
	15% {-moz-transform: scale(0.1); opacity: 1;}
	30% {-moz-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -moz-transform: scale(1);}
}

@-webkit-keyframes tooltippulse{
    0% {-webkit-transform: scale(0); opacity: 0;}
	8% {-webkit-transform: scale(0); opacity: 0;}
	15% {-webkit-transform: scale(0.1); opacity: 1;}
	30% {-webkit-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -webkit-transform: scale(1);}
}
@-o-keyframes tooltippulse{
    0% {-o-transform: scale(0); opacity: 0;}
	8% {-o-transform: scale(0); opacity: 0;}
	15% {-o-transform: scale(0.1); opacity: 1;}
	30% {-o-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -o-transform: scale(1);}
}
.to-pulse-holder .to-pulse-marker {
	position: relative;
	display: block;
	width: 23px;/*imagen width*/
	height: 23px;/*imagen height*/
	background: url(media/images/plus_icon.png) no-repeat;/* imagen*/
	border-radius: 10px;
}
.to-pulse-holder .to-pulse-rays {
	position: absolute;
	left: -10px;
	top: -10px;
	margin: 0 auto;
	border-radius: 100px;
	background-color: transparent;
	opacity: 0.1;
	width: 40px;/*agrandar circulo*/
	height: 40px;/*agrandar circulo*/
	border: 2px solid #fff;
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	-o-border-radius: 100px;
	-ms-border-radius: 100px;
	border-radius: 100px;
	-webkit-animation: tooltippulse 1.4s linear infinite;
	-moz-animation: tooltippulse 1.4s linear infinite; 
	-ms-animation: tooltippulse 1.4s linear infinite;
	-o-animation: tooltippulse 1.4s linear infinite;
    animation: tooltippulse 1.4s linear infinite;
	border-image: initial;
}
.hvr-grow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
  position:relative;
  z-index:10;
}
.grey { color:#666;}
.grey img{
	opacity:0.5;
}
.black22 {opacity:0;}
.black22 img{
	opacity:0;
	/*height:50px;*/
}
#cab {
	text-align: -moz-center;
}
#cabecera {
	width:100%; 
	background-color:#FBFBFB; 
	text-align: -moz-center;
	
	margin-left:auto;
	margin-right:auto;
	
    /* WebKit (Chrome & Safari) */
    display: -webkit-box;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    
    /* Firefox */
    display: -moz-box;
    -moz-box-pack: center;
    -moz-box-align: center;
    
    /* IE */
    display: -ms-box;
    -ms-box-pack: center;
    -ms-box-align: center;
    
     /* Native CSS */
    display: box;
    box-pack: center;
    box-align: center;

}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>	
<script>
var cocina_elegida = '';
var tipo_cocina = '';
var tipo_cocina_l = '';
var tipo_acabado_cocina = '';
var tipo_acabado_cocina_src = '';
var color_pared_cocina_src = '';
var tipo_cubierta_cocina_src = '';
var color_pared = '';
var color_piso = '';
var color_piso_cocina_src = '';
var url_cocina = '?espacio=chico&acabado=CODIGO&pared=CODIGO&piso=CODIGO';
var cocina_elegida_param = '';
var tipo_acabado_param = '';
var tipo_pared_param = '';
var tipo_piso_param = '';
var texto_google = 'Av. NIÑOS HÉROES 2906<br />(33) 3123 2458 <br />Col. Jardines del Bosque<br />xxxmodulstudio@xxxx.com<br />';
$(function() {
	
	$('.color-box').colpick({
	colorScheme:'dark',
	layout:'rgbhex',
	color:'ff8800',
	onSubmit:function(hsb,hex,rgb,el) {
		$(el).css('background-color', '#'+hex);
		$(el).colpickHide();
		confirmacion();
	}
	}).css('background-color', '#ff8800');
	
	$('#espacio_menu').click(function(){
		document.getElementById('acabado_coci100').src = tipo_acabado_cocina_src;
		document.getElementById('cubierta_coci100').src = tipo_cubierta_cocina_src;
		document.getElementById('pared_coci100').src = color_pared_cocina_src; 
		document.getElementById('piso_coci100').src = color_piso_cocina_src;
		document.getElementById('acabado_coci100').style.display = 'block';
		document.getElementById('cubierta_coci100').style.display = 'block';
		document.getElementById('pared_coci100').style.display = 'block';
		document.getElementById('piso_coci100').style.display = 'block';
	});
	
	function replaceAll(tofind, toreplace, str) {
	  return str.replace(new RegExp(tofind, 'g'), toreplace);
	}
	
	$("#fl1").hover(function(){
    //$("#flecha1_a").toggle('slow'); //fl2
	$("#flecha1_a").fadeIn('slow'); //fl2
	});
	$("#fl1").mouseleave(function(){
        $("#flecha1_a").fadeOut('slow'); //fl2
    });
	$("#fl3").hover(function(){
    $("#flecha2_a").fadeIn('slow'); // fl4
	});
	$("#fl3").mouseleave(function(){
        $("#flecha2_a").fadeOut('slow'); //fl2
    });
	$("#fl5").hover(function(){
    $("#flecha3_a").fadeIn('slow'); //fl6
	});
	$("#fl5").mouseleave(function(){
        $("#flecha3_a").fadeOut('slow'); //fl2
    });
	
	$('#color-box2').colpick({
	colorScheme:'dark',
	layout:'rgbhex',
	color:'ff8800',
	onSubmit:function(hsb,hex,rgb,el) {
		$(el).css('background-color', '#'+hex);
		$(el).colpickHide();
		confirmacion();
	}
	}).css('background-color', '#ff8800');
	
	document.getElementById('espacio').style.display = "block";
	/*document.getElementById('cabecera').style.display = 'none';*/
	document.getElementById('fd').style.display = 'none';
	//document.getElementById('barra_menu_negra').style.paddingTop = '50px';
	
	//ocultar islas
	/*document.getElementById('isla').style.display = 'none';
	document.getElementById('isla2').style.display = 'none';
	document.getElementById('isla3').style.display = 'none';
	document.getElementById('isla4').style.display = 'none';
	document.getElementById('isla5').style.display = 'none';
	document.getElementById('isla6').style.display = 'none';
	document.getElementById('isla7').style.display = 'none';*/
	
	var espacio = param('espacio');
	var acabado = param('acabado');
	var pared = param('pared');
	var piso = param('piso');
	
	if ((espacio != null && acabado != null && pared != null && piso != null) && (espacio != '' && acabado != '' && pared != '' && piso != ''))
	{
		// Reconsutruir cocina
		pasar_params(espacio,acabado,pared,piso);
		change_menu('piso');
	}
	$("#color_piso1").click(function(){
    //$("#cabec").slideDown('slow');
	$("#parte_abajo").slideDown('slow');
	$("#isla7").css('position','relative');
	$("#isla7").css('left','');
	$("#over_map").css('display','block');
	
	$("#pisoo").slideUp('slow');
	$('#piso_menu').addClass('grey');
	$('#piso_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar5').style.display = 'block';
	//document.getElementById('barra_menu_negra').style.paddingTop = '0px';
	});
	
	$("#color_piso2").click(function(){
    //$("#cabec").slideDown('slow');
	$("#parte_abajo").slideDown('slow');
	$("#isla7").css('position','relative');
	$("#isla7").css('left','0');
	$("#over_map").css('display','block');
	$("#pisoo").slideUp('slow');
	$('#piso_menu').addClass('grey');
	$('#piso_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar5').style.display = 'block';
	//document.getElementById('barra_menu_negra').style.paddingTop = '0px';
	});
	
	$("#color_piso3").click(function(){
    //$("#cabec").slideDown('slow');
	$("#parte_abajo").slideDown('slow');
	$("#pisoo").slideUp('slow');
	$("#isla7").css('position','relative');
	$("#isla7").css('left','0');
	$("#over_map").css('display','block');
	
	$('#piso_menu').addClass('grey');
	$('#piso_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar5').style.display = 'block';
	//document.getElementById('barra_menu_negra').style.paddingTop = '0px';
	});
	
	/*$('color_piso1').click(function(){
		$("#cabec").slideDown('slow');
		document.getElementById('barra_menu_negra').style.paddingTop = '0px';
	});*/
	
	$("#parte_abajo").slideUp('slow');
	$("#isla7").css('position','absolute');
	$("#isla7").css('left','-1000');
	$("#over_map").css('display','none');
	//alert('hola');
	$("input:checkbox.css-checkbox").click(function(){
      $("input:checkbox.css-checkbox").not($(this)).removeAttr("checked");
      $(this).attr("checked", $(this).attr("checked"));
	  $("#cabec").slideUp('slow');
	  document.getElementById('barra_menu_negra').style.paddingTop = '50px'; 
	  document.getElementById('ssl1').style.display = 'block'; 
		$("#acabados_menu").addClass("hvr-bubble-bottom");
		$("#pared_menu").addClass("hvr-bubble-bottom");
		$("#piso_menu").addClass("hvr-bubble-bottom");
	    if(document.getElementById('checkboxG4').checked == true)
		{
			
			document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/grande/cocina_grande_base.png';
			cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_Base.png';
			cocina_elegida_param = 'cocina_grande_base';
			tipo_cocina = 'grande';
			tipo_cocina_l = 'grande';
			
			tipo_acabado_cocina_src = replaceAll('pequenia','grande',tipo_acabado_cocina_src);
			color_pared_cocina_src = replaceAll('pequenia','grande',color_pared_cocina_src); 		
			color_piso_cocina_src = replaceAll('pequenia','grande',color_piso_cocina_src);
			tipo_cubierta_cocina_src = replaceAll('pequenia','grande',tipo_cubierta_cocina_src);
			//alert('fff');
			
			
			
			document.getElementById('acabado_coci99').src = tipo_acabado_cocina_src;
			document.getElementById('cubierta_coci99').src = tipo_cubierta_cocina_src;
			document.getElementById('pared_coci99').src = color_pared_cocina_src; 
			document.getElementById('piso_coci99').src = color_piso_cocina_src;
			document.getElementById('acabado_coci100').src = tipo_acabado_cocina_src;
			document.getElementById('cubierta_coci100').src = tipo_cubierta_cocina_src;
			document.getElementById('pared_coci100').src = color_pared_cocina_src; 
			document.getElementById('piso_coci100').src = color_piso_cocina_src;
		
			//alert(tipo_acabado_cocina_src + ' - ' + color_pared_cocina_src + ' - ' + color_piso_cocina_src);
			$('#imgLOAD').show();
			$('#img_espacio_back').on('load', function(){
			  $('#imgLOAD').hide();
			});
			document.getElementById('checkboxG5').checked = false;
		}
		if(document.getElementById('checkboxG5').checked == true)
		{
			
			document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/cocina_pequenia_base.png';
			cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/pequenia/cocina_pequenia_base.png';
			cocina_elegida_param = 'cocina_pequenia_base';
			tipo_cocina = 'pequenia';
			tipo_cocina_l = 'pequenia';
			
			tipo_acabado_cocina_src = replaceAll('grande','pequenia',tipo_acabado_cocina_src);
			color_pared_cocina_src = replaceAll('grande','pequenia',color_pared_cocina_src);
			color_piso_cocina_src = replaceAll('grande','pequenia',color_piso_cocina_src);
			tipo_cubierta_cocina_src = replaceAll('grande','pequenia',tipo_cubierta_cocina_src);
			//alert('xxx');
			
			
			document.getElementById('acabado_coci99').src = tipo_acabado_cocina_src;
			document.getElementById('cubierta_coci99').src = tipo_cubierta_cocina_src;
			document.getElementById('pared_coci99').src = color_pared_cocina_src; 
			document.getElementById('piso_coci99').src = color_piso_cocina_src;
			document.getElementById('acabado_coci100').src = tipo_acabado_cocina_src;
			document.getElementById('cubierta_coci100').src = tipo_cubierta_cocina_src;
			document.getElementById('pared_coci100').src = color_pared_cocina_src; 
			document.getElementById('piso_coci100').src = color_piso_cocina_src;
			//alert(tipo_acabado_cocina_src + ' - ' + color_pared_cocina_src + ' - ' + color_piso_cocina_src);
			
			$('#imgLOAD').show();
			$('#img_espacio_back').on('load', function(){
			  $('#imgLOAD').hide();
			});
			document.getElementById('checkboxG4').checked = false;
		}
	    
    });
	
	$("#ssl1").click(function(){
	var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
	var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
	var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
	var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
	$('#paleta_colores5').css('left', pos1.left);
	$('#paleta_colores3').css('left', pos2.left);
	$('#paleta_colores4').css('left', pos3.left);
	$('#paleta_colores6').css('left', pos4.left);
	document.getElementById('acabado_coci100').style.display = 'none';
		document.getElementById('cubierta_coci100').style.display = 'none';
		document.getElementById('pared_coci100').style.display = 'none';
		document.getElementById('piso_coci100').style.display = 'none';
	
	});
	
	$("#ssl2").click(function(){
	var pos1 = $(muestra_pequenia).position(); //paleta_colores5
	$('#paleta_colores').css('left', pos1.left);
	});
	
	$("#medio_2").click(function(){
		var pos5 = $(muestra_pequenia).position(); //paleta_colores
		$('#paleta_colores').css('left', pos5.left);
	});
	$("#medio_4").click(function(){
		var pos6 = $(muestra_pequenia2).position(); //paleta_colores2
		$('#paleta_colores2').css('left', pos6.left);
	});
	
	// Cuando aparece la flecha volver a acomodar
	$("#paleta_colores5").click(function(){
		if(document.getElementById('ssl3').style.display == 'block'){
			var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
			var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
			var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
			var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
			$('#paleta_colores5').css('left', pos1.left);
			$('#paleta_colores3').css('left', pos2.left);
			$('#paleta_colores4').css('left', pos3.left);
			$('#paleta_colores6').css('left', pos4.left);
		}
	});
	$("#paleta_colores3").click(function(){
		if(document.getElementById('ssl3').style.display == 'block'){
			var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
			var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
			var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
			var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
			$('#paleta_colores5').css('left', pos1.left);
			$('#paleta_colores3').css('left', pos2.left);
			$('#paleta_colores4').css('left', pos3.left);
			$('#paleta_colores6').css('left', pos4.left);
		}
	});
	$("#paleta_colores4").click(function(){
		if(document.getElementById('ssl3').style.display == 'block'){
			var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
			var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
			var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
			var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
			$('#paleta_colores5').css('left', pos1.left);
			$('#paleta_colores3').css('left', pos2.left);
			$('#paleta_colores4').css('left', pos3.left);
			$('#paleta_colores6').css('left', pos4.left);
		}
	});
	$("#paleta_colores8").click(function(){
		if(document.getElementById('ssl3').style.display == 'block'){
			var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
			var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
			var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
			var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
			$('#paleta_colores5').css('left', pos1.left);
			$('#paleta_colores3').css('left', pos2.left);
			$('#paleta_colores4').css('left', pos3.left);
			$('#paleta_colores6').css('left', pos4.left);
		}
	});
	$("#paleta_colores6").click(function(){
		if(document.getElementById('ssl3').style.display == 'block'){
			var pos1 = $(muestra_pequenia5).position(); //paleta_colores5
			var pos2 = $(muestra_pequenia3).position(); //paleta_colores3
			var pos3 = $(muestra_pequenia4).position(); //paleta_colores4
			var pos4 = $(muestra_pequenia6).position(); //paleta_colores6
			$('#paleta_colores5').css('left', pos1.left);
			$('#paleta_colores3').css('left', pos2.left);
			$('#paleta_colores4').css('left', pos3.left);
			$('#paleta_colores6').css('left', pos4.left);
		}
	});
	$("#paleta_colores7").click(function(){
		if(document.getElementById('ssl2').style.display == 'block'){
			var pos1 = $(muestra_pequenia7).position(); //paleta_colores5
			$('#paleta_colores7').css('left', pos1.left);
		}
	});
	$("#paleta_colores").click(function(){
		if(document.getElementById('ssl12').style.display == 'block'){
			var pos1 = $(muestra_pequenia).position(); //paleta_colores5
			$('#paleta_colores').css('left', pos1.left);
		}
	});
	$("#ssl12").click(function(){
		//if(document.getElementById('ssl12').style.display == 'block'){
			var pos1 = $(muestra_pequenia2).position(); //paleta_colores5
			$('#paleta_colores2').css('left', pos1.left);
		//}
	});
	$("#medio_4").click(function(){
		$('#pisoo').slideDown('slow');
		$('#cuadro_naranja').hide();
		$('#flecha1').hide();
		$('#flecha2').hide();
		$('#flecha3').hide();
		var pos1 = $(muestra_pequenia2).position(); //paleta_colores5
		$('#paleta_colores2').css('left', pos1.left);
	});

  });

function param( name ){
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp ( regexS );
	var tmpURL = window.location.href;
	var results = regex.exec( tmpURL );
	if( results == null )
		return "";
	else
		return results[1];
}

var piso_definido = param('piso');
//alert(piso_definido);

function pasar_params(espacio,acabado,pared,piso) 
{
	/*
	?espacio=Cocina_chica_Base&acabado=Cocina_chica_cajones&pared=cocina_pequenia_back3&piso=cocina_pequenia_piso2
	cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_Base.png';
	tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones_patrones.png';
	color_pared_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_back6.png';
	tipo_cocina_l = 'pequenia';*/
	
	if(espacio.indexOf('chica') >= 0)
	{
		tipo_cocina_l = 'pequenia';
	}
	if(espacio.indexOf('grande') >= 0)
	{
		tipo_cocina_l = 'grande';
	}
	cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/' + tipo_cocina_l + '/' + espacio + '.png';
	tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/' + tipo_cocina_l + '/' + acabado + '.png';
	color_pared_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/' + tipo_cocina_l + '/' + pared + '.png';
	color_piso_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/' + tipo_cocina_l + '/' + piso + '.png';
	//alert(cocina_elegida);
	//alert(tipo_acabado_cocina_src);
	//alert(color_pared_cocina_src);
	
	change_menu('piso');
}
 
 function animator(divID){
      if(!(this instanceof animator)) return new animator(divID); /* Ignore this */
  var Node = document.getElementById(divID),
      start = new Date.getTime(), // The initiation.
      now = 0,
      dir = 1,
      visible = true;
  function step( ){
    now = new Date.getTime();
    var val = getValue( now - start,dir)
    Node.style.opacity = val;
    if( dir > 0 && val > 1 || dir < 0 && val < 0 ){
      visible = !(visible*1);
      // Optionally here u can call the block & none 
      if( dir < 0 ) { /* Hiding  and hidden*/
        Node.style.display = 'none'; // So if were repositioning using position:relative; it will         support after hide 
      }
      /* Our animation is finished lets end the continous calls */
      return;
    }
    setTimeout(step,100); // Each step is executated in 100seconds
  }
  this.animate = function(){
    Node.style.display = 'block';
    dir *= -1;
    start = new Date.getTime();
    setTimeout(step,100);
  } 
}
  
function confirmacion()
{
	var r = confirm("¿Desea avanzar a elegir un color de piso?");
	if (r == true) {
		change_menu('piso');
	}
}

function change_checkbox()
{
	if(document.getElementById('checkboxG4').checked == true)
	{
		document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_Base.png';
		cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_Base.png';
		cocina_elegida_param = 'Cocina_grande_Base';
		tipo_cocina = 'grande';
		tipo_cocina_l = 'grande';
		tipo_acabado_cocina_src = tipo_acabado_cocina_src.replace("pequenia", "grande"); 
		color_pared_cocina_src = color_pared_cocina_src.replace("pequenia", "grande"); 
		color_piso_cocina_src = color_piso_cocina_src.replace("pequenia", "grande"); 
		$('#imgLOAD').show();
		$('#img_espacio_back').on('load', function(){
		  $('#imgLOAD').hide();
		});
		document.getElementById('checkboxG5').checked = false;
	}
	if(document.getElementById('checkboxG5').checked == true)
	{
		document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_Base.png';
		cocina_elegida = 'media/images/07-imagina-tu-cocina/cocina/pequenia/cocina_pequenia_base.png';
		cocina_elegida_param = 'Cocina_chica_Base';
		tipo_cocina = 'chica';
		tipo_cocina_l = 'pequenia';
		tipo_acabado_cocina_src = tipo_acabado_cocina_src.replace("grande", "pequenia"); 
		color_pared_cocina_src = color_pared_cocina_src.replace("grande", "pequenia"); 
		color_piso_cocina_src = color_piso_cocina_src.replace("grande", "pequenia"); 
		$('#imgLOAD').show();
		$('#img_espacio_back').on('load', function(){
		  $('#imgLOAD').hide();
		});
		document.getElementById('checkboxG4').checked = false;
	}
	//change_menu('acabados');
}

function acabado(tipo_acabado)
{
	document.getElementById('ssl3').style.display = 'block';
	/*$('#paleta_colores5').css('left','41.5%');
	$('#paleta_colores3').css('left','48.4%');
	$('#paleta_colores4').css('left','54.6%');
	$('#paleta_colores6').css('left','68%');
	$('#paleta_colores8').css('left','61.7%');*/
	//
	tipo_acabado_cocina = tipo_acabado;
	if(tipo_cocina == 'grande')
	{
		if(tipo_acabado == 'amaderado')
		{
			//alert('hola 1');
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones.png';
			tipo_acabado_param = 'Cocina_grande_cajones';
			document.getElementById('acabado_grande_back').style.display = 'block';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
		}
		if(tipo_acabado == 'liso')
		{
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones_liso.png';
			tipo_acabado_param = 'Cocina_grande_cajones_liso';
			document.getElementById('acabado_grande_liso_back').style.display = 'block';
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
		}
		if(tipo_acabado == 'patrones')
		{
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones_patrones.png';
			tipo_acabado_param = 'Cocina_grande_cajones_patrones';
			document.getElementById('acabado_grande_patrones_back').style.display = 'block';
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
		}
	}
	if(tipo_cocina == 'chica')
	{
		if(tipo_acabado == 'amaderado')
		{
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones.png';
			tipo_acabado_param = 'Cocina_chica_cajones';
			document.getElementById('acabado_chico_back').style.display = 'block';
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
		}
		if(tipo_acabado == 'liso')
		{
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones_liso.png';
			tipo_acabado_param = 'Cocina_chica_cajones_liso';
			document.getElementById('acabado_chico_liso_back').style.display = 'block';
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
		}
		if(tipo_acabado == 'patrones')
		{
			tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones_patrones.png';
			tipo_acabado_param = 'Cocina_chica_cajones_patrones';
			document.getElementById('acabado_chico_patrones_back').style.display = 'block';
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
		}
	}
	// HACER IMAGEN SUPERPUESTA DISPLAY BLOCK
	//change_menu('pared');
}
function change_menu(menu)
{
	var acabados = 'acabados';
	var cubiertas = 'cubiertas';
	var espacios = 'espacio';
	var pared = 'pared';
	var piso = 'piso';

	switch(menu)
	{
		case acabados:
		if(cocina_elegida != '')
		{
			document.getElementById(menu).style.display = "block";
			document.getElementById('acabados_back').src = cocina_elegida;
			document.getElementById(espacios).style.display = "none";
			document.getElementById(pared).style.display = "none";
			document.getElementById(piso).style.display = "none";
			document.getElementById(cubiertas).style.display = "none";
			//elementos de acabados hide
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
			
			if(document.getElementById('cambiar2').style.display == 'block')
			{
				document.getElementById('acabado_coci99').src = tipo_acabado_cocina_src;
				document.getElementById('acabado_coci99').style.display = "block";
				document.getElementById('cubierta_coci99').src = tipo_cubierta_cocina_src;
				if(tipo_cubierta_cocina_src != ''){
				document.getElementById('cubierta_coci99').style.display = "block";}
				
				document.getElementById('pared_coci99').src = color_pared_cocina_src;
				if(color_pared_cocina_src != ''){
					document.getElementById('pared_coci99').style.display = "block";}
					
				document.getElementById('piso_coci99').src = color_piso_cocina_src;
				if(color_piso_cocina_src != ''){
					document.getElementById('piso_coci99').style.display = "block";}
			}
		}
		break;
		
		case cubiertas:
		//alert(cocina_elegida);
		if(cocina_elegida != '')
		{
			document.getElementById(menu).style.display = "block";
			document.getElementById('img_cubierta_back').src = cocina_elegida;
			document.getElementById('acabado_coci2').src = tipo_acabado_cocina_src;
			document.getElementById('acabado_coci2').style.display = 'block';
			document.getElementById(espacios).style.display = "none";
			document.getElementById(acabados).style.display = "none";
			document.getElementById(pared).style.display = "none";
			document.getElementById(piso).style.display = "none";
			//elementos de acabados hide
			document.getElementById('acabado_grande_back').style.display = 'none';
			document.getElementById('acabado_grande_liso_back').style.display = 'none';
			document.getElementById('acabado_grande_patrones_back').style.display = 'none';
			document.getElementById('acabado_chico_back').style.display = 'none';
			document.getElementById('acabado_chico_liso_back').style.display = 'none';
			document.getElementById('acabado_chico_patrones_back').style.display = 'none';
			
			if(document.getElementById('cambiar3').style.display == 'block')
			{
				document.getElementById('cubierta_coci1').src = tipo_cubierta_cocina_src;
				if(tipo_cubierta_cocina_src != ''){
				document.getElementById('cubierta_coci1').style.display = "block";}
				document.getElementById('pared_coci88').src = color_pared_cocina_src;
				if(color_pared_cocina_src != ''){
				document.getElementById('pared_coci88').style.display = "block";}
				document.getElementById('piso_coci88').src = color_piso_cocina_src;
				if(color_piso_cocina_src != ''){
				document.getElementById('piso_coci88').style.display = "block";}
			}
		}
		break;
		
		case espacios:
		//cocina_elegida = '';
		//tipo_cocina = '';
		//tipo_cocina_l = '';
		//tipo_acabado_cocina = '';
		//tipo_acabado_cocina_src = '';
		//color_pared_cocina_src = '';
		//color_piso_cocina_src = '';
		document.getElementById("acabados_menu").className = "";
		document.getElementById("pared_menu").className = "";
		document.getElementById("piso_menu").className = "";
		document.getElementById(menu).style.display = "block";
		document.getElementById(acabados).style.display = "none";
		document.getElementById(pared).style.display = "none";
		document.getElementById(piso).style.display = "none";
		document.getElementById(cubiertas).style.display = "none";
		document.getElementById('pared_coci').style.display = 'none';
		document.getElementById('pared_coci1').style.display = 'none';
		document.getElementById('piso_coci1').style.display = 'none';
		document.getElementById('cuadro_naranja').style.display = 'none';
		document.getElementById('flecha1').style.display = 'none';
		document.getElementById('flecha2').style.display = 'none';
		document.getElementById('flecha3').style.display = 'none';
		break;
		
		case pared:
		if(cocina_elegida != '')
		{
			document.getElementById(menu).style.display = "block";
			document.getElementById('pared_backk').src = cocina_elegida;
			if(tipo_acabado_cocina_src.length > 1){
			document.getElementById('acabado_coci').src = tipo_acabado_cocina_src;
			document.getElementById('acabado_coci').style.display = 'block';
			}
			if(tipo_cubierta_cocina_src.length > 1){
			document.getElementById('cubierta_coci').src = tipo_cubierta_cocina_src;
			document.getElementById('cubierta_coci').style.display = 'block';
			}
			document.getElementById(acabados).style.display = "none";
			document.getElementById(cubiertas).style.display = "none";
			document.getElementById(espacios).style.display = "none";
			document.getElementById(piso).style.display = "none";
			
			if(document.getElementById('cambiar4').style.display == 'block')
			{
				document.getElementById('piso_coci55').src = color_piso_cocina_src;
				if(color_piso_cocina_src != ''){
				document.getElementById('piso_coci55').style.display = "block";}
			}
		}
		break;
		
		case piso:
		if(cocina_elegida != '')
		{
			document.getElementById(menu).style.display = "block";
			document.getElementById('piso_back').src = cocina_elegida;
			if(tipo_acabado_cocina_src.length > 1){
			document.getElementById('acabado_coci1').src = tipo_acabado_cocina_src;
			document.getElementById('acabado_coci1').style.display = 'block';
			}
			if(color_pared_cocina_src.length > 1){
			document.getElementById('pared_coci1').src = color_pared_cocina_src;
			document.getElementById('pared_coci1').style.display = 'block';
			}
			document.getElementById(acabados).style.display = "none";
			document.getElementById(cubiertas).style.display = "none";
			document.getElementById(espacios).style.display = "none";
			document.getElementById(pared).style.display = "none";
			if(tipo_cubierta_cocina_src.length > 1){
			document.getElementById('cubierta_coci2').src = tipo_cubierta_cocina_src;
			document.getElementById('cubierta_coci2').style.display = 'block';
			}
			if(color_piso_cocina_src.length > 1)
			{
				document.getElementById('piso_coci1').src = color_piso_cocina_src;
				if(color_piso_cocina_src != ''){
				document.getElementById('piso_coci1').style.display = 'block';}
			}
		}
		break;
		
	}
	
}
window.onload = detectarCarga;
function detectarCarga()
{
	document.getElementById("imgLOAD").style.display="none";
} 
function mostrar_paleta() {
document.getElementById('paleta_colores').style.display = "block";
}
function mostrar_paleta8() {
document.getElementById('paleta_colores8').style.display = "block";
/**/document.getElementById('paleta_colores3').style.display = "none";
document.getElementById('paleta_colores6').style.display = "none";
document.getElementById('paleta_colores4').style.display = "none";
document.getElementById('paleta_colores5').style.display = "none";
}
function mostrar_paleta3() {
document.getElementById('paleta_colores3').style.display = "block";
document.getElementById('paleta_colores6').style.display = "none"; 
document.getElementById('paleta_colores8').style.display = "none";
document.getElementById('paleta_colores4').style.display = "none";
document.getElementById('paleta_colores5').style.display = "none";
document.getElementById('muestra_pequenia6').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia5').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia4').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
}
function mostrar_paleta6() {
document.getElementById('paleta_colores6').style.display = "block";
document.getElementById('paleta_colores3').style.display = "none";
document.getElementById('paleta_colores8').style.display = "none"; 
document.getElementById('paleta_colores4').style.display = "none";
document.getElementById('paleta_colores5').style.display = "none";	
document.getElementById('muestra_pequenia3').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia4').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia5').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
}
function mostrar_paleta7() {
document.getElementById('paleta_colores7').style.display = "block";
document.getElementById('paleta_colores6').style.display = "none";
document.getElementById('paleta_colores8').style.display = "none";
document.getElementById('paleta_colores3').style.display = "none"; 
document.getElementById('paleta_colores4').style.display = "none";
document.getElementById('paleta_colores5').style.display = "none";	
}
function mostrar_paleta4() {
document.getElementById('paleta_colores4').style.display = "block";
document.getElementById('paleta_colores6').style.display = "none"; 
document.getElementById('paleta_colores3').style.display = "none";
document.getElementById('paleta_colores8').style.display = "none";
document.getElementById('paleta_colores5').style.display = "none";	
document.getElementById('muestra_pequenia6').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia3').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia5').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
}
function mostrar_paleta5() {
document.getElementById('paleta_colores5').style.display = "block";
document.getElementById('paleta_colores6').style.display = "none"; 
document.getElementById('paleta_colores4').style.display = "none";
document.getElementById('paleta_colores3').style.display = "none";	
document.getElementById('muestra_pequenia6').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia4').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
document.getElementById('muestra_pequenia3').src = 'media/images/07-imagina-tu-cocina/fondo_sin_color.png';
}

function mostrar_paleta2() {
document.getElementById('paleta_colores2').style.display = "block";
}
function ocultar_paleta(color) {
	document.getElementById('paleta_colores').style.display = "none";
	document.getElementById('ssl12').style.display = "block";
	document.getElementById('muestra_pequenia').src = 'media/images/03-catalogo/cocinas/looks/acabados/lisos/' + color;
	switch(color){
		case 'pared1.jpg':
		document.getElementById('pared_coci').style.display = 'block';
		color_pared = 1;
		color_pared_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_back1.png';
		tipo_pared_param = 'cocina_'+tipo_cocina_l+'_back1';
		document.getElementById('pared_coci').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_back1.png';
		break;
		case 'pared2.jpg':
		document.getElementById('pared_coci').style.display = 'block';
		color_pared = 2;
		color_pared_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_back2.png';
		tipo_pared_param = 'cocina_'+tipo_cocina_l+'_back2';
		document.getElementById('pared_coci').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_back2.png';
		break;
	}
}
function mostrar_text_muestra(texto) {
	document.getElementById('texto_color').innerHTML = texto;
}
function mostrar_text_muestra8(texto) {
	document.getElementById('texto_color8').innerHTML = texto;
}
function mostrar_text_muestra5(texto) {
	document.getElementById('texto_color5').innerHTML = texto;
}
function mostrar_text_muestra3(texto) {
	document.getElementById('texto_color3').innerHTML = texto;
}
function mostrar_text_muestra6(texto) {
	document.getElementById('texto_color6').innerHTML = texto;
}
function mostrar_text_muestra7(texto) {
	document.getElementById('texto_color7').innerHTML = texto;
}

function ocultar_paleta5(color) {
	document.getElementById('paleta_colores5').style.display = "none";
	document.getElementById('muestra_pequenia5').src = 'media/images/03-catalogo/cocinas/looks/acabados/amaderados/' + color;
	document.getElementById('ssl3').style.display = 'block';
	tipo_acabado_cocina = 'amaderado';
	//acabado('amaderado');
	switch(color){
		case '01-Legno Blanco.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones';
		break;
		case '02-Cremino.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones1.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones1.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones1';
		break;
		case '03-Encino.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones2.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones2.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones2';
		break;
		case '04-Argenta.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones3.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones3.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones3';
		break;
		case '05-Almendra.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones4.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones4.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones4';
		break;
		case '06-Tabaco.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones5.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones5.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones5';
		break;
		case '07-Zebrano Teca.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones6.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones6.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones6';
		break;
		case '08-Lignite.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones7.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones7.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones7';
		break;
		case '11-Nature.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones8.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones8.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones8';
		break;
		case '10-Habano.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones9.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones9.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones9';
		break;
		case '12-Cacao.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones10.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones10.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones10';
		break;
		case '13-Pinon.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones11.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones11.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones11';
		break;
		case '14-Nogal Castano.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones12.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones12.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones12';
		break;
		case '15-Nogal Americano.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones13.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones13.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones13';
		break;
		case '16-Nuez.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones14.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones14.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones14';
		break;
		case '17-Canela.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones15.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones15.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones15';
		break;
		case '18-Kumey.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones16.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones16.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones16';
		break;
		case '20-Aserrado Coco.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones17.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones17.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones17';
		break;
		case '21-Bambu.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones18.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones18.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones18';
		break;
		case '22-Maui.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones19.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones19.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones19';
		break;
		case '23-Aserrado Moka.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones20.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones20.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones20';
		break;
		case '03-Encino.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones21.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones21.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones21';
		break;
		case '24-Latte.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones21.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones21.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones21';
		break;
		case '25-Nogal Amati.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones22.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones22.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones22';
		break;
		case '26-Cerezo.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones24.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones24.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones24';
		break;
	}
}

function ocultar_paleta8(color) {
	document.getElementById('paleta_colores8').style.display = "none";
	document.getElementById('muestra_pequenia8').src = 'media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/' + color;
	switch(color){
		case 'modulart1.png':
		break;
		case 'modulart25.png':
		break;
	}
}

function ocultar_paleta7(color) {
	document.getElementById('ssl2').style.display = 'block';
	document.getElementById('paleta_colores7').style.display = "none";
	document.getElementById('muestra_pequenia7').src = 'media/images/03-catalogo/cocinas/looks/cubiertas/' + color;
	//acabado('cubiertas');
	switch(color){
		case '01. Corian.Glacier.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/glacier.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/glacier.png';
		break;
		case '01. Granito.BlancoCristal.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/blanco-cristal.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/blanco-cristal.png';
		break;
		case '01. Marmol.Galala.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/galala.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/galala.png';
		break;
		case '02. Corian.Ecru.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/ecru.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/ecru.png';
		break;
		case '02. Granito.Grissal.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/grissal.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/grissal.png';
		break;
		case '02. Marmol.Travertino.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/puebla.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/puebla.png';
		break;
		case '02. Sileston.Sienna.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/sienna.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/sienna.png';
		break;
		case '03. Corian.Hot.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/redhot.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/redhot.png';
		break;
		case '03. Granito.Labrador.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/labrador.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/labrador.png';
		break;
		case '03. Marmol.Perseus.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/perseus.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/perseus.png';
		break;
		case '03. Sileston.Noka.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/noka.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/noka.png';
		break;
		case '04. Corian.Earth.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/earth.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/corian/earth.png';
		break;
		case '04. Granito.BlackSwell.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/swell.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/granito/swell.png';
		break;
		case '04. Marmol.EraSilver.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/silver.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/marmol/silver.png';
		break;
		case '04. Sileston.Atlantis.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/atlantis.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/atlantis.png';
		break;
		case '01. Sileston.Montblanc.jpg':
		document.getElementById('cubierta_coci1').style.display = 'block';
		tipo_cubierta_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/montblanc.png';
		document.getElementById('cubierta_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/sileston/montblanc.png';
		break;
	}
}

function ocultar_paleta4(color) {
	document.getElementById('paleta_colores4').style.display = "none";
	document.getElementById('muestra_pequenia4').src = 'media/images/03-catalogo/cocinas/looks/acabados/con-diseno/' + color;
	document.getElementById('ssl3').style.display = 'block';
	tipo_acabado_cocina = 'patrones';
	//acabado('patrones');
	switch(color){
		case 'Concreto.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_patrones.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_patrones.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_patrones';
		break;
		case 'Lino.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_patrones1.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_patrones1.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_patrones';
		break;
	}
}

function ocultar_paleta6(color) {
	document.getElementById('paleta_colores6').style.display = "none";
	document.getElementById('muestra_pequenia6').src = 'media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/' + color;
	document.getElementById('ssl3').style.display = 'block';
	tipo_acabado_cocina = 'xuni';
	//acabado('patrones');
	switch(color){
		case '08-Lignite.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_xuni.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_xuni.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_xuni';
		break;
	}
}
function ocultar_paleta3(color) {
	document.getElementById('paleta_colores3').style.display = "none";
	document.getElementById('muestra_pequenia3').src = 'media/images/03-catalogo/cocinas/looks/acabados/lisos/' + color;
	document.getElementById('ssl3').style.display = 'block';
	tipo_acabado_cocina = 'liso';
	//acabado('liso');
	switch(color){
		case '01-Lava.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso';
		break;
		case '02-Mango.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso1.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso1.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso1';
		break;
		case '03-Pera.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso2.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso2.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso2';
		break;
		case '04-Chai.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso3.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso3.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso3';
		break;
		case '05-Blanco Frosty.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso4.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso4.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso4';
		break;
		case '06-Lustro.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso5.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso5.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso5';
		break;
		case '07-Gris Niebla.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso6.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso6.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso6';
		break;
		case '08-negro.jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso7.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso7.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso7';
		break;
		case '09-Rojo(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso8.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso8.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso8';
		break;
		case '10-Mostaza(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso9.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso9.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso9';
		break;
		case '11-Chai(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso10.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso10.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso10';
		break;
		case '12-Wengue(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso11.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso11.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso11';
		break;
		case '13-Blanco(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso12.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso12.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso12';
		break;
		case '14-Negro(alto-brillo).jpg':
		document.getElementById('acabado_coci99').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso13.png';
		document.getElementById('acabado_coci99').style.display = 'block';
		tipo_acabado_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_cajones_liso13.png';
		tipo_acabado_param = 'cocina_'+tipo_cocina_l+'_cajones_liso13';
		break;
	}
}


function ocultar_paleta2(color) {
	
	document.getElementById('paleta_colores2').style.display = "none";
	document.getElementById('muestra_pequenia2').src = 'media/images/03-catalogo/cocinas/looks/acabados/lisos/' + color;
	

	document.getElementById('cuadro_naranja').style.display = "block";	
	document.getElementById('flecha1').style.display = "block";
	document.getElementById('flecha2').style.display = "block";
	document.getElementById('flecha3').style.display = "block";
	
	
	/*document.getElementById('cabecera').style.display = 'block';*/
	//document.getElementById('fd').style.display = 'block';
	/*document.getElementById('barra_menu_negra').style.paddingTop = '0px';*/

	//mostrar islas
	/*document.getElementById('isla').style.display = 'block';
	document.getElementById('isla2').style.display = 'block';
	document.getElementById('isla3').style.display = 'block';
	document.getElementById('isla4').style.display = 'block';
	document.getElementById('isla5').style.display = 'block';
	document.getElementById('isla6').style.display = 'block';
	document.getElementById('isla7').style.display = 'block';*/
	switch(color){
		case '04-Chai.jpg':
		document.getElementById('piso_coci1').style.display = 'block';
		color_piso = 1;
		
		color_piso_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_piso.png';
		tipo_piso_param = 'cocina_'+tipo_cocina_l+'_piso';
		document.getElementById('piso_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_piso.png';
		break;
		case '05-Blanco Frosty.jpg':
		color_piso = 2;
		document.getElementById('piso_coci1').style.display = 'none';
		tipo_piso_param = 'na';
		break;
		case '07-Gris Niebla.jpg':
		document.getElementById('piso_coci1').style.display = 'block';
		color_piso = 3;
		color_piso_cocina_src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_piso2.png';
		tipo_piso_param = 'cocina_'+tipo_cocina_l+'_piso2';
		document.getElementById('piso_coci1').src = 'media/images/07-imagina-tu-cocina/cocina/'+tipo_cocina_l+'/cocina_'+tipo_cocina_l+'_piso2.png';
		break;
	}
}
function mostrar_text_muestra2(texto) {
	document.getElementById('texto_color2').innerHTML = texto;
}
function mostrar_text_muestra4(texto) {
	document.getElementById('texto_color4').innerHTML = texto;
}
function facebook_compartir() {	
var fbtitle="Imagina Tu Cocina Modul";
var fbsummary="A que se parece tu cocina ideal";
var fburl="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/"+tipo_cocina_l+"_"+tipo_acabado_cocina+"_"+color_pared+"_"+color_piso+".PNG";
var fbimgurl="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/muestras/"+tipo_cocina_l+"_"+tipo_acabado_cocina+"_"+color_pared+"_"+color_piso+".PNG";
var sharerURL = 'http://www.facebook.com/sharer.php?s=100&p[url]='+ encodeURI(fburl) + '&p[title]="Imagina Tu Cocina Mödul"&p[summary]="A que se parece tu cocina ideal? Visualízala: escoge sus elementos, diseño y acabados en esta aplicación. Al terminar imprímela, guárdala o compártela y envíanosla para ponernos en contacto contigo y hacerla realidad"&p[images][0]='+encodeURI(fbimgurl)+'';



    window.open(

      sharerURL,

      'facebook-share-dialog', 

      'width=626,height=436');

}

function facebook_compartir2() {
	var u=location.href;
	var t=document.title;
	window.open("http://www.facebook.com/sharer.php?u="+encodeURIComponent(u)+"&t="+encodeURIComponent(t),"sharer","toolbar=0,status=0,width=626,height=436");
}
function twitter_compartir() {
	window.open('http://www.twitter.com/?status=' + encodeURIComponent('http://192.185.138.124/~emil/modul/visualiza_tu_cocina.php?espacio=' + cocina_elegida_param + '&acabado=' + tipo_acabado_param + '&pared=' + tipo_pared_param + '&piso=' + tipo_piso_param) + '%20Mödul%20Imagina%20Tu%20Cocina');
}
function pinit() {
	var pinimgurl="http://192.185.138.124/~emil/modul/media/images/07-imagina-tu-cocina/cocina/pequenia/cocina_pequenia_base.png";
window.open('http://pinterest.com/pin/create/button/?url=www.modulstudio.mx&media='+encodeURI(pinimgurl)+'&description=Mödul Imagina Tu Cocina');
}
function change_arrow(ind){
	if(ind==1){
	if(document.getElementById('cambiar1').style.display == 'block'){
		$('#espacio_menu').removeClass('hvr-bubble-bottom-active2');
		$('#espacio_menu').addClass('hvr-bubble-bottom3');
	}else{
		$('#espacio_menu').addClass('hvr-bubble-bottom-active2');
		$('#espacio_menu').removeClass('hvr-bubble-bottom3');
	}
	/*$('#espacio_menu').addClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('hvr-bubble-bottom3');*/
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	//$('#cubierta_menu').removeClass('hvr-bubble-bottom');
	$('#espacio_menu').removeClass('grey');
	$('#espacio_menu').removeClass('black22');
	
	$('#acabados_menu').addClass('black22');
	$('#acabados_menu').removeClass('hvr-bubble-bottom-active2');
	$('#acabados_menu').removeClass('grey');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	
	
	$('#cubierta_menu').removeClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('grey');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#cubierta_menu').addClass('black22');
	
	$('#pared_menu').addClass('black22');
	$('#pared_menu').removeClass('hvr-bubble-bottom-active2');
	$('#pared_menu').removeClass('grey');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	
	$('#piso_menu').addClass('black22');
	$('#piso_menu').removeClass('hvr-bubble-bottom-active2');
	$('#piso_menu').removeClass('grey');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	
	
	}else if(ind==2){
	$('#espacio_menu').addClass('grey');
	$('#acabados_menu').addClass('hvr-bubble-bottom3');
	$('#espacio_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar1').style.display = 'block';
	//hvr-bubble-bottom3
	document.getElementById('espacio_menu').style.paddingTop = '10px';
	document.getElementById('acabados_menu').style.paddingTop = '10px';
	document.getElementById('cubierta_menu').style.paddingTop = '10px';
	document.getElementById('pared_menu').style.paddingTop = '10px';
	document.getElementById('piso_menu').style.paddingTop = '10px';
	$('#espacio_menu').removeClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	
	if(document.getElementById('cambiar2').style.display == 'block'){
		$('#acabados_menu').removeClass('hvr-bubble-bottom-active2');
		$('#acabados_menu').addClass('hvr-bubble-bottom3');
	}else{
		$('#acabados_menu').addClass('hvr-bubble-bottom-active2');
		$('#acabados_menu').removeClass('hvr-bubble-bottom3');
	}
	/*$('#acabados_menu').addClass('hvr-bubble-bottom-active2');
	$('#acabados_menu').removeClass('hvr-bubble-bottom3');*/
	$('#acabados_menu').removeClass('grey');
	$('#acabados_menu').removeClass('black22');
	
	$('#cubierta_menu').removeClass('hvr-bubble-bottom-active2');
	$('#cubierta_menu').addClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#cubierta_menu').removeClass('grey');
	
	$('#pared_menu').removeClass('hvr-bubble-bottom-active2');
	$('#pared_menu').addClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#pared_menu').removeClass('grey');
	
	$('#piso_menu').removeClass('hvr-bubble-bottom-active2');
	$('#piso_menu').addClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#piso_menu').removeClass('grey');
	
	}else if(ind==3){
	$('#cubierta_menu').addClass('hvr-bubble-bottom3');
	$('#acabados_menu').addClass('hvr-bubble-bottom3');
	$('#espacio_menu').removeClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#espacio_menu').addClass('grey');
	$('#espacio_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar1').style.display = 'block';

	
	$('#acabados_menu').removeClass('hvr-bubble-bottom-active2');
	$('#acabados_menu').removeClass('black22');
	
	$('#acabados_menu').addClass('grey');
	$('#acabados_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar2').style.display = 'block';
	
	$('#cubierta_menu').removeClass('hvr-bubble-bottom-active2');
	$('#cubierta_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#cubierta_menu').addClass('grey');
	$('#cubierta_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar3').style.display = 'block';

	if(document.getElementById('cambiar3').style.display == 'block'){
		$('#pared_menu').removeClass('hvr-bubble-bottom-active2');
		$('#pared_menu').addClass('hvr-bubble-bottom3');
	}else{
		$('#pared_menu').addClass('hvr-bubble-bottom-active2');
		$('#pared_menu').removeClass('hvr-bubble-bottom3');
	}
	/*$('#pared_menu').addClass('hvr-bubble-bottom-active2');
	$('#pared_menu').removeClass('hvr-bubble-bottom3');*/
	$('#pared_menu').removeClass('black22');
	$('#pared_menu').removeClass('grey');
	
	$('#piso_menu').removeClass('hvr-bubble-bottom-active2');
	$('#piso_menu').removeClass('grey');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#piso_menu').addClass('black22');
	
	}else if(ind==4){
	$('#cubierta_menu').addClass('hvr-bubble-bottom3');
	$('#espacio_menu').removeClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#espacio_menu').addClass('grey');
	$('#espacio_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar1').style.display = 'block';
	
	$('#acabados_menu').removeClass('hvr-bubble-bottom-active2');
	$('#acabados_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#acabados_menu').addClass('grey');
	$('#acabados_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar2').style.display = 'block';
	
	$('#cubierta_menu').removeClass('hvr-bubble-bottom-active2');
	$('#cubierta_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#cubierta_menu').addClass('grey');
	$('#cubierta_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar3').style.display = 'block';
	
	$('#pared_menu').removeClass('hvr-bubble-bottom-active2');
	$('#pared_menu').removeClass('black22');
	//$('#espacio_menu').removeClass('hvr-bubble-bottom');
	$('#pared_menu').addClass('grey');
	$('#pared_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar4').style.display = 'block';
	
	if(document.getElementById('cambiar4').style.display == 'block'){
		$('#piso_menu').removeClass('hvr-bubble-bottom-active2');
		$('#piso_menu').addClass('hvr-bubble-bottom3');
	}else{
		$('#piso_menu').addClass('hvr-bubble-bottom-active2');
		$('#piso_menu').removeClass('hvr-bubble-bottom3');
	}
	/*$('#piso_menu').addClass('hvr-bubble-bottom-active2');
	$('#piso_menu').removeClass('hvr-bubble-bottom3');*/
	$('#piso_menu').removeClass('black22');
	$('#piso_menu').removeClass('grey');
	
	}else if(ind==5){
	$('#pared_menu').addClass('hvr-bubble-bottom3');
	$('#espacio_menu').removeClass('hvr-bubble-bottom-active2');
	$('#espacio_menu').removeClass('black22');
	$('#espacio_menu').addClass('grey');
	$('#espacio_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar1').style.display = 'block';
	
	$('#acabados_menu').removeClass('hvr-bubble-bottom-active2');
	$('#acabados_menu').removeClass('black22');
	$('#acabados_menu').addClass('grey');
	$('#acabados_menu').addClass('hvr-bubble-bottom3');
	document.getElementById('cambiar2').style.display = 'block';
	
	$('#pared_menu').removeClass('hvr-bubble-bottom-active2');
	$('#pared_menu').removeClass('grey');
	$('#pared_menu').addClass('black22');
	
	$('#piso_menu').removeClass('hvr-bubble-bottom-active2');
	$('#piso_menu').removeClass('grey');
	$('#piso_menu').addClass('black22');
	
	
	if(document.getElementById('cambiar3').style.display == 'block'){
		$('#cubierta_menu').removeClass('hvr-bubble-bottom-active2');
		$('#cubierta_menu').addClass('hvr-bubble-bottom3');
	}else{
		$('#cubierta_menu').addClass('hvr-bubble-bottom-active2');
		$('#cubierta_menu').removeClass('hvr-bubble-bottom3');
	}
	$('#cubierta_menu').removeClass('black22');
	$('#cubierta_menu').removeClass('grey');
	
	}	
	}
    </script>
    
   
<script>
	/*var locations = [
	{lat:31.693562,lon:-106.372032,place:"Mödul Studio Cd. Juárez Cocinas y Closets"},
	{lat:17.995260,lon:-92.929092,place:"Mödul Studio Villahermosa, Cocinas y Closets"},
	{lat:18.933414,lon:-99.224373,place:"Mödul Studio Cuernavaca, Cocinas y Closets"},
	{lat:20.67858,lon:-103.39523,place:'Mödul Studio Guadalajara Av.Mexico , Cocinas y Closets'},
	{lat:20.66675,lon:-103.38702,place:'Mödul Studio Guadalajara Av. Niños Héroes, Cocinas y Closets'},
	{lat:20.69759,lon:-103.38385,place:'Mödul Studio Guadalajara Av. Pablo Neruda, Cocinas y Closets'},
	{lat:20.65506,lon:-103.40036,place:'Mödul Studio Guadalajara Av. López Mateos, Cocinas y Closets'},
	{lat:21.92488,lon:-102.29926,place:'Mödul Studio Aguascalientes Blvd. Luis Donaldo Colosio, Cocinas y Closets'},
	{lat:31.74659,lon:-106.42493,place:'Mödul Studio Juarez Av. Valle del Sol, Cocinas y Closets'},
	{lat:25.56393,lon:-103.42834,place:'Mödul Studio Torreón Blvd. Independencia, Cocinas y Closets'},
	{lat:24.03437,lon:-104.67529,place:'Mödul Studio Durango Blvd. Felipe Pescador, Cocinas y Closets'},
	{lat:19.26185,lon:-99.57690,place:'Mödul Studio Edo. de México Av. Tecnológico, Cocinas y Closets'},
	{lat:32.54731,lon:-116.89078,place:'Mödul Studio Michoacán Av. Melchor Ocampo, Cocinas y Closets'},
	{lat:19.69012,lon:-101.16021,place:'Mödul Studio Michoacán Artilleros, Cocinas y Closets'},
	{lat:19.38616,lon:-99.08076,place:'Mödul Studio Morelos Av. Río Mayo, Cocinas y Closets'},
	{lat:26.00511,lon:-98.06543,place:'Mödul Studio Nuevo León Rio Grijalva, Cocinas y Closets'},
	{lat:25.97587, lon:-98.06892,place:'Mödul Studio Nuevo León Av. Lázaro Cárdenas, Cocinas y Closets'},
	{lat:18.52299, lon:-88.26986,place:'Mödul Studio Quintana Roo Chetumal, Cocinas y Closets'},
	{lat:22.14287, lon:-101.02230,place:'Mödul Studio San Luis Potosí Montes Blancos, Cocinas y Closets'},
	{lat:25.84059, lon:-97.51240,place:'Mödul Studio Sinaloa Plaza fiesta, Cocinas y Closets'},
	{lat:32.46498,lon:-114.79834,place:'Mödul Studio Sonora Sinaloa, Cocinas y Closets'},
	{lat:32.62981,lon:-114.85051,place:'Mödul Studio Sonora Blvd. Morelos, Cocinas y Closets'},
	{lat:18.06815,lon:-93.17226,place:'Mödul Studio Tabasco Av. Ruiz Cortines, Cocinas y Closets'},
	{lat:19.16993,lon:-96.14928,place:'Mödul Studio Veracruz Lázaro Cárdenas, Cocinas y Closets'},
	{lat:19.15281,lon:-96.11436,place:'Mödul Studio Veracruz Urano, Cocinas y Closets'},
	{lat:19.31560,lon:-99.22368,place:'Mödul Studio Calle 1-C Yucatán Cocinas y Closets'}
	];

    var map; 
    function Init()
    {
        if ( navigator.geolocation )
        {
            navigator.geolocation.getCurrentPosition( UserLocation, errorCallback,{maximumAge:60000,timeout:10000});
        }
        else
            ClosestLocation( 31.693562, -106.372032, "Mödul Studio Cd. Juárez Cocinas y Closets <br/>Cocinas Integrales en Cd. Juárez<br/>Av. Balle del Sol #1952 Local E-1<br/>Plaza del Sol<br/>CP: 32546<br/>Tel: (656) 1227350" );
    }

    function errorCallback( error )
    {
    }

    // Callback function for asynchronous call to HTML5 geolocation
    function UserLocation( position )
    {
		//alert(position.coords.latitude); alert(position.coords.longitude);
        ClosestLocation( position.coords.latitude, position.coords.longitude, "This is my Location" );
		//alert(position.coords.latitude);
		
		//ClosestLocation( '18.97812637173517', '-99.36981616987302', "This is my Location" );
    }

    // Display a map centered at the nearest location with a marker and InfoWindow.
    function ClosestLocation( lat, lon, title )
    {
        // Create a Google coordinate object for where to center the map
        var latlng = new google.maps.LatLng( lat, lon );    

        // Map options for how to display the Google map
        var mapOptions = { zoom: 12, center: latlng  };

        // Show the Google map in the div with the attribute id 'map-canvas'.
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // find the closest location to the user's location
        var closest = 0;
        var mindist = 99999;

        for(var i = 0; i < locations.length; i++) 
        {
            // get the distance between user's location and this point
            var dist = Haversine( locations[ i ].lat, locations[ i ].lon, lat, lon );

            // check if this is the shortest distance so far
            if ( dist < mindist )
            {
                closest = i;
                mindist = dist;
            }
        }

        // Create a Google coordinate object for the closest location
        var latlng = new google.maps.LatLng( locations[ closest].lat, locations[ closest].lon );   
		//alert(locations[ closest].lat);
		switch(locations[ closest].lat)
		{
			case 31.693562:
			texto_google = 'Av. Valle del Sol # 1952 Local E-1<br/>Plaza del Sol<br/>C.P. 32546<br/>+52 (656) 122 73 50<br/>miguel.sarmiento@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 17.995260:
			texto_google = 'Av. Ruiz Cortines, esquina Usumacinta<br/>Andador Perú, local I11-I12<br/>Plaza City Center<br/>C.P. 86035<br/>+52 (993) 316 5839<br/>anayatzi.morales@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.933414:
			texto_google = 'Av. Río Mayo No. 109 Local 1-A<br/>Col. Vista Hermosa<br/>C.P. 62290<br/>+52 (777) 228 91 48<br/>alejandra.bernal@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.67858:
			texto_google = 'Av. Mexico 3181<br/>Col. Vallarta San Jorge<br/>C.P. 44690<br/>+52 (33) 3647 9999<br/>+52 (33) 3647 9995<br/>daniel.sada@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.66675:
			texto_google = 'Av. Niños Héroes 2906<br/>Col. Jardines del Bosque<br/>C.P. 44520<br/>+52 (33) 3123 2458<br/>gerencia.estudio@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.69759:
			texto_google = 'Av. Pablo Neruda 2823<br/>Col. Providencia<br/>C.P. 44639<br/>+52 (33) 3642 8629<br/>elena.suarez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.65506:
			texto_google = 'Av. Pablo Neruda 2823<br/>Col. Providencia<br/>C.P. 44639<br/>+52 (33) 3642 8629<br/>elena.suarez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 21.92488:
			texto_google = 'Blvd. Luis Donaldo Colosio No. 633<br/>Col. Jardines de la Concepción, 2da. Sección<br/>C.P. 20120<br/>+52 (449) 251 4266<br/>hector.gonzalez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 31.74659:
			texto_google = 'Av. Valle del Sol # 1952 Local E-1<br/>Plaza del Sol<br/>C.P. 32546<br/>+52 (656) 122 73 50<br/>miguel.sarmiento@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.56393:
			texto_google = 'Blvd. Independencia 2600 local 12<br/>Plaza San Luciano<br/>Col. La Estrella<br/>C.P. 27010<br/>+52 (871) 747 9696<br/>ventas.torreon@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 24.03437:
			texto_google = 'Blvd. Felipe Pescador 1008 Ote.<br/>Col. Fátima.<br/>C.P. 34060<br/>+52 (618) 811 0977<br/>fernando.toulet@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.26185:
			texto_google = 'Av. Tecnológico No. 715 planta alta<br/>Col. Bellavista<br/>C.P. 52172<br/>+52 (722) 624 8895';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.54731:
			texto_google = 'Av. Melchor Ocampo No. 2382<br/>Col. Lomas de Bellavista<br/>C.P. 60950<br/>+52 (753) 532 9600<br/>robert.dillon@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.69012:
			texto_google = 'Artilleros de 1847 #1520-8<br/>Col. Chapultepec Oriente<br/>C.P. 58260<br/>+52 (443) 204 4606<br/>adriana.aquino@mor.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.38616:
			texto_google = 'Av. Río Mayo No. 109 Local 1-A<br/>Col. Vista Hermosa<br/>C.P. 62290<br/>+52 (777) 228 91 48<br/>alejandra.bernal@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 26.00511:
			texto_google = 'Rio Grijalva #217 nte, Local 5<br/>entre Amazonas y Orinoco<br/>Col. Del Valle<br/>C.P. 64346<br/>+52 (81) 8143 8003<br/>gloria.trujillo@mty.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.97587:
			texto_google = 'Av. Lázaro Cárdenas #2510, Local E<br/>Col. Residencial San Agustín<br/>C.P. 66260<br/>+52 (81) 2089 0228<br/>diego.sanchez@modulstudio.mx'; document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.52299:
			texto_google = 'Calle 2 No. 590-B<br/>Col. Zona Industrial<br/>C.P. 77049<br/>karelia.razo@ctm.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 22.14287:
			texto_google = 'Montes Blancos No. 180, Local 6<br/>Esq. Montes Apalaches<br/>Col. Lomas 2da. Sección<br/>C.P. 78210<br/>+52 (444) 243 0003<br/>dirección.slp@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.84059:
			texto_google = 'Plaza fiesta Locales 6,7 y 8<br/>Col. Centro<br/>C.P. 80120<br/>+52 (667) 714 74 10<br/>luisgerardo.garcia@modulstudio.mx ';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.46498:
			texto_google = 'Sinaloa 576 Local 4 esq. con Mayo<br/>Col. Centro<br/>C.P. 8500<br/>+52 (644) 415 0707<br/>rafael.zunigacoronado@obr.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.62981:
			texto_google = 'Blvd. Morelos 726 Local D<br/>Col. Cucurpe Residencial<br/>C.P. 83105<br/>+52 (662) 284 7776<br/>dulce.peralta@hmo.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.06815:
			texto_google = 'Av. Ruiz Cortines, esquina Usumacinta<br/>Andador Perú, local I11-I12<br/>Plaza City Center<br/>C.P. 86035<br/>+52 (993) 316 5839<br/>anayatzi.morales@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.16993:
			texto_google = 'Lázaro Cárdenas No. 115<br/>Col. Centro<br/>C.P. 96400<br/>+52 (921) 212 77 26<br/>gabriela.colorado@coa.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.15281:
			texto_google = 'Urano No. 766<br/>Fracc. Jardines de Virginia<br/>C.P. 94294<br/>+52 (229)130 42 14<br/>sofia.garcia@coa.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.31560:
			texto_google = 'Calle 1-C, local 1<br/>Plaza Campestre<br/>Fracc. Campestre<br/>C.P. 97120<br/>+52 (999) 254 0012<br/>gerardo.rosas@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
		}
		 
		// Create a Google Icon
		var img = new google.maps.MarkerImage("media/images/04-sucursales/sucursal-modul.png");
        // Place a Google Marker at the closest location as the map center 
        // When you hover over the marker, it will display the title
        var marker2 = new google.maps.Marker( { 
            position: latlng,     
            map: map,
			icon: img,      
            title: "Closest Location to User: Distance is " + mindist + " km"
        });

        // Create an InfoWindow for the marker
        var contentString = "" + "<img src='media/images/animated_favicon1.gif' width='14' height='14' />&nbsp;<span style='text-decoration:underline;'>Sucursal m&aacute;s cercana M&ouml;dul:</span><br/><br/><strong>" + locations[ closest ].place + "</strong><br/>" + texto_google;    // HTML text to display in the InfoWindow
        var infowindow = new google.maps.InfoWindow( { content: contentString } );  

        // Set event to display the InfoWindow anchored to the marker when the marker is clicked.
        google.maps.event.addListener( marker2, 'click', function() { infowindow.open( map, marker2 ); });

        map.setCenter( latlng );
    }

    // Convert Degress to Radians
    function Deg2Rad( deg ) {
       return deg * Math.PI / 180;
    }

    // Get Distance between two lat/lng points using the Haversine function
    // First published by Roger Sinnott in Sky & Telescope magazine in 1984 (“Virtues of the Haversine”)
    //
    function Haversine( lat1, lon1, lat2, lon2 )
    {
        var R = 6372.8; // Earth Radius in Kilometers

        var dLat = Deg2Rad(lat2-lat1);  
        var dLon = Deg2Rad(lon2-lon1);  

        var a = Math.sin(dLat/2) * Math.sin(dLat/2) + 
                        Math.cos(Deg2Rad(lat1)) * Math.cos(Deg2Rad(lat2)) * 
                        Math.sin(dLon/2) * Math.sin(dLon/2);  
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
        var d = R * c; 

        // Return Distance in Kilometers
        return d;
    }
	
    // Call the method 'Init()' to display the google map when the web page is displayed ( load event )
    google.maps.event.addDomListener( window, 'load', Init );
	*/
	</script>
</head>
<body style="background-color:#fff; color:#000; width:100%; height:100%; padding:0; margin:0;">
<!--<img id="logoo3" src="media/images/logo-black.png" width="81" height="130" style="z-index:10;position:absolute; top:50px; left:1%; cursor:pointer;" onclick="javascript:window.location = 'http://www.modulstudio.mx/';" />
<div id="menu_visualiza" class="menu" style="top:0px;position:absolute;z-index: 100;opacity:1;cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; height:35px; padding-top:5px; font-size: 55 pt; color:#fff; background-color:rgba(0,0,0,0.5);">
    <ul>
        <li style="vertical-align:middle; padding-top:15px !important; -webkit-padding-before:15px;" id="modul" onclick=" window.location.href='http://www.modulstudio.mx/phone/fabricantes-cocinas-integrales.html';">
        MÖDUL
        </li>
        <li style="vertical-align:middle; padding-top:15px;" id="catalogo" onclick="window.location.href='http://www.modulstudio.mx/catalogo.html';">CATÁLOGO</li>
        <li style="vertical-align:middle; padding-top:15px;" id="sucursales" onclick="window.location.href='http://www.modulstudio.mx/sucursales.html';">SUCURSALES</li>
        <li style="vertical-align:middle; padding-top:15px;" id="blog" onclick="window.location.href='http://blog.modulstudio.mx/';">BLOG</li>
        <li style="vertical-align:middle; padding-top:15px;" id="creadores" onclick="window.location.href='http://www.modulstudio.mx/creadores.html';">CREADORES 
        <img id="flechita" style="padding-left:9px; vertical-align:middle;" src="media/images/flecha_blanca.jpg" width="5" height="12"
         onmouseover="javascript:document.getElementById('flechita').src='media/images/flecha_amarilla.jpg'" 
         onmouseout="javascript:document.getElementById('flechita').src='media/images/flecha_blanca.jpg'" />
        </li>
        <li>
            <ul class="social">
            <li style="vertical-align:middle; padding-top:12px;"  id="facebook" onclick="javascript: window.location = 'https://es-la.facebook.com/cocinasintegralesmodul';">
            <img id="img_fb" style="vertical-align:middle;" src="media/images/07-imagina-tu-cocina/icons/facebook-1.png" width="20" height="20"
            onmouseover="javascript:document.getElementById('img_fb').src='media/images/07-imagina-tu-cocina/icons/facebook-2.png'" 
            onmouseout="javascript:document.getElementById('img_fb').src='media/images/07-imagina-tu-cocina/icons/facebook-1.png'" />
           </li>
           <li style="vertical-align:middle; padding-top:15px;">&nbsp; | &nbsp;</li>
            <li style="vertical-align:middle; padding-top:12px;" id="pinterest" onclick="javascript: window.location = 'https://www.pinterest.com/search/pins/?q=M%C3%B6dul';">
            <img style="vertical-align:middle;" id="img_pt" src="media/images/07-imagina-tu-cocina/icons/pinterest1.png" width="20" height="20"
            onmouseover="javascript:document.getElementById('img_pt').src='media/images/07-imagina-tu-cocina/icons/pinterest2.png'" 
            onmouseout="javascript:document.getElementById('img_pt').src='media/images/07-imagina-tu-cocina/icons/pinterest1.png'" />
            </li>
            </ul>
        </li>
    </ul>
</div>-->

<div id="cabec">
<table id="cabecera" cellpadding="0" cellspacing="0" width="100%" align="center">
<tr>
<td style="width:100%;" width="100%" align="center">
<div style="padding:30px; color:#333; height:360px;" align="center">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td id="cab" align="center">
            <div style="font-family:'Lato' !important; font-weight:300; font-size:55px; padding-top:100px;line-height:58px;" align="center">VISUALIZA TU COCINA</div>
        <div style="font-family:'LibreBaskerville Italic'; font-size:14pt; padding-top:15px;" align="center">El límite es tu imaginación</div>
        <div style="padding-top:3px; padding-bottom:2px;"><hr style="width:50px; border-color:#999999;" color="#999999" align="center"></div>
        <div style="font-family:'Lato'; font-size: 14px;" align="center">
        ¿A qué se parece tu cocina ideal? <br/>
        Visualízala: escoge sus elementos, diseño y acabados en esta <br/>
        aplicación. Al terminar imprímela, guárdala o compártela y <br/>
        envíanosla para ponernos en contacto contigo y hacerla realidad. <br/>
        </div>
            
            </td>
          </tr>
        </table>
</div>
</td>
</tr>
</table>
</div>

<div id="fd" style="position:absolute; top:90px; right:15%; color:#999; font-family:'Lato'; font-size:14px;">
<table>
                    <tr>
                        <td valign="top" style="padding-top:10px; cursor:pointer;">
                        <img id="f1" src="media/images/07-imagina-tu-cocina/icons/icon_f.png" width="30" height="30" 
                        onclick="javascript:facebook_compartir()" 
                        onmouseover="javascript:document.getElementById('f1').src = 'media/images/07-imagina-tu-cocina/icons/facebook-2.png'" 
                        onmouseout="javascript:document.getElementById('f1').src='media/images/07-imagina-tu-cocina/icons/icon_f.png'" />
                        </td>
                        <td valign="top" style="padding-left:20px;padding-top:10px;">
                        COMPARTE
                        <hr style="color:#ccc;"  color="#CCC" width="30px" align="left"/>
                        </td>
                    </tr>
                    <tr >
                        <td valign="top" style="padding-top:10px; cursor:pointer;">
                        <img id="p1" src="media/images/07-imagina-tu-cocina/icons/icon_p.png" width="30" height="30" 
                        onclick="javascript:pinit()"
                        onmouseover="javascript:document.getElementById('p1').src = 'media/images/07-imagina-tu-cocina/icons/pinterest2.png'" 
                        onmouseout="javascript:document.getElementById('p1').src='media/images/07-imagina-tu-cocina/icons/icon_p.png'" />
                        </td>
                        <td valign="top"  style="padding-left:20px;padding-top:10px;">
                        PINEA
                        <hr style="color:#ccc" color="#CCC" width="30px" align="left"/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"  style="padding-top:10px; cursor:pointer;">
                        <img id="m1" src="media/images/07-imagina-tu-cocina/icons/icon_modul.png" width="30" height="30" 
                        onclick="javascript:window.location = 'mailto:armando.parada@modul.mx';"
                        onmouseover="javascript:document.getElementById('m1').src = 'media/images/07-imagina-tu-cocina/icons/mandala-over.png'" 
                        onmouseout="javascript:document.getElementById('m1').src='media/images/07-imagina-tu-cocina/icons/icon_modul.png'" />
                        </td>
                        <td valign="top"  style="padding-left:20px;padding-top:10px;">
                        MÁNDALA<br />A MÖDUL
                        <hr style="color:#ccc"  color="#CCC" width="30px" align="left"/>
                        </td>
                    </tr>
                </table>
</div>

<div id="barra_menu_negra" style="background-color:#000; width:100%; height:118px;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> <!-- class="hvr-bubble-bottom" -->
    	<td id="espacio_menu" width="150" align="center" valign="top"  style="padding-top:17px; padding-bottom:15px;" class="hvr-bubble-bottom">
        <img src="media/images/07-imagina-tu-cocina/icons/medio_1.png" width="50" height="50" onclick="change_menu('espacio');change_arrow(1);" style="cursor:pointer;" border="0" />
		<div style="color:#fff; font-family:'Lato'; font-size:14px;padding-top:10px;">ESPACIO<br/><a id="cambiar1" style="display:none;text-decoration:none;color:#FFF5BE;font-size:12px;">Cambiar</a></div>
		</td>
		
        <td id="acabados_menu" width="150" align="center" valign="top"  style="padding-top:17px; padding-bottom:15px;">
        <img id="mml3" src="media/images/07-imagina-tu-cocina/icons/icono-cocinas.png" width="50" height="50" onclick="change_menu('acabados');change_arrow(2);" style="cursor:pointer;" border="0" />
		<div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">COCINA<br/><a id="cambiar2" style="display:none;text-decoration:none;color:#FFF5BE;font-size:12px;">Cambiar</a></div>
		</td> 
        
        <td id="cubierta_menu" width="150" align="center" valign="top"  style="padding-top:17px; padding-bottom:15px;" class="hvr-bubble-bottom">
        <img id="mml7" src="media/images/07-imagina-tu-cocina/icons/icono-cubiertas.png" width="50" height="50" onclick="change_menu('cubiertas');change_arrow(5);" style="cursor:pointer;" border="0" />
		<div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">CUBIERTA<br/><a id="cambiar3" style="display:none;text-decoration:none;color:#FFF5BE;font-size:12px;">Cambiar</a></div>
		</td>
		
        <td id="pared_menu" width="150" align="center" valign="top"  style="padding-top:17px; padding-bottom:15px;">
        <img id="medio_2" src="media/images/07-imagina-tu-cocina/icons/medio_2.png" width="50" height="50" onclick="change_menu('pared');change_arrow(3);" style="cursor:pointer;" border="0" />
		<div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">PARED<br/><a id="cambiar4" style="display:none;text-decoration:none;color:#FFF5BE;font-size:12px;">Cambiar</a></div>
		</td>
		
       <td id="piso_menu" width="150" align="center" valign="top"  style="padding-top:17px; padding-bottom:15px;">
       <img id="medio_4" src="media/images/07-imagina-tu-cocina/icons/medio_4.png" width="50" height="50" onclick="change_menu('piso');change_arrow(4);" style="cursor:pointer;"  class="hvr-bubble-bottom" border="0" />
	   <div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;" align="center">PISO<br/><a id="cambiar5" style="display:none;text-decoration:none;color:#FFF5BE;font-size:12px;">Cambiar</a></div>
	   </td>
  </tr>
</table>
</div>

<div id="espacio" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr style="height:129px;">
    <td style="padding-top:20px; padding-bottom:20px; ">
	<img src="media/images/07-imagina-tu-cocina/icons/medio_gris_1.png" width="auto" height="54"/>
    <!--<div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-size: 60px 54px; height:54px; width:60px;"></div>-->
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:20px;">
    MI ESPACIO ES...
    </td>
    <td style="padding-left:20px;">
    <form action="" method="post"> <!-- onchange="change_checkbox()" -->
    &nbsp;<input class="css-checkbox" name="checkboxG4" id="checkboxG4" type="checkbox" value="1"  />
    <label for="checkboxG4" class="css-label" checked></label>&nbsp;&nbsp;
    <input class="css-checkbox" name="checkboxG5" id="checkboxG5" type="checkbox" value="2"/>
    <label for="checkboxG5" class="css-label" checked></label><br/>
    <span style="font-family:'Lato'; font-size:14px; color:#666; padding-left:9px;">&nbsp;AMPLIO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;REDUCIDO</span>
    </form>
    </td>
    <td style="padding-left:80px;">
      <img id="ssl1" src="media/images/siguiente.png" style="cursor:pointer; display:none;" width="30" height="47"
      onclick="javascript:change_menu('acabados');change_arrow(2);"
      onmouseover="javascript:document.getElementById('ssl1').src = 'media/images/siguiente-over.png'" 
      onmouseout="javascript:document.getElementById('ssl1').src='media/images/siguiente.png'" />
      </td>
  </tr>
</table>
<div style="position:relative;">
<img id="img_espacio_back" src="media/images/07-imagina-tu-cocina/tono-melamina.jpg" width="100%" height="auto" />
<img id="cubierta_coci100" style="display:none;position:absolute; left:0; top:0; z-index:10;" src="" width="100%" height="auto" />
<img id="pared_coci100" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="piso_coci100" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="acabado_coci100" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<div id='imgLOAD' style="TEXT-ALIGN: center; position:absolute; left:0;top:0; background-color:#000; opacity:0.8; width:100%; height:100%; text-align:center;" align="center">
<img alt='LOADING' height='50' src='media/images/loader.GIF' width='50' style="z-index:10; vertical-align:middle; padding-top:300px;"/>
</div>
</div>
<!--<div id="espacio_back" style="background-image:url(media/images/07-imagina-tu-cocina/tono-melamina.jpg); width:100%; height:800px; background-size: 100% auto; background-repeat:no-repeat;">
</div>-->
</div>

<div id="cubiertas" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr style="height:129px;">
  <td style="padding-right:80px;">
      <img id="ssl77" src="media/images/anterior.png" style="cursor:pointer;" width="30" height="47"
      onclick="javascript:change_menu('acabados');change_arrow(2);"
      onmouseover="javascript:document.getElementById('ssl77').src = 'media/images/anterior-over.png'" 
      onmouseout="javascript:document.getElementById('ssl77').src='media/images/anterior.png'" />
    </td>
    <td style="padding-top:20px; padding-bottom:20px; ">
	<img src="media/images/07-imagina-tu-cocina/icons/medio_gris_1.png" width="auto" height="54"/>
    <!--<div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-size: 60px 54px; height:54px; width:60px;"></div>-->
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:20px;">
    LA CUBIERTA SERÁ...
    </td>
    <td style="padding-left:20px;">
		<!-- ACA VA EL SELECTOR DE CUBIERTA muestra_pequenia-->
        <img id="muestra_pequenia7" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50" style="border: 1px solid black; cursor:pointer;" onclick="javascript:mostrar_paleta7()" />   
    </td>
    <td style="padding-left:80px;">
      <img id="ssl2" src="media/images/siguiente.png" style="cursor:pointer;display:none;" width="30" height="47"
      onclick="javascript:change_menu('pared');change_arrow(3);"
      onmouseover="javascript:document.getElementById('ssl2').src = 'media/images/siguiente-over.png'" 
      onmouseout="javascript:document.getElementById('ssl2').src='media/images/siguiente.png'" />
      </td>
  </tr>
</table>
<div style="position:relative;">
<img id="img_cubierta_back" src="media/images/07-imagina-tu-cocina/tono-melamina.jpg" width="100%" height="auto" />
<img id="cubierta_coci1" style="display:none;position:absolute; left:0; top:0; z-index:10;" src="" width="100%" height="auto" />
<img id="pared_coci88" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="piso_coci88" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="acabado_coci2" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<div id="paleta_colores7" style="display:none;position:absolute; left:58.7%; top:0px; cursor:pointer; z-index:20;">
<div align="center" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">Corian - Superficie Sólida</div>
  <table border="0" cellspacing="0" cellpadding="0" style="border-color:#fff; border-collapse:collapse;">
      <tr>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/corian/01. Corian.Glacier.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('01. Corian.Glacier.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/corian/02. Corian.Ecru.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('02. Corian.Ecru.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/corian/03. Corian.Hot.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('03. Corian.Hot.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/corian/04. Corian.Earth.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('04. Corian.Earth.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
      </tr>
    </table>
  <div align="center" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">
  Silestone - Cuarzo</div>
  <table border="0" cellspacing="0" cellpadding="0" style="border-color:#fff; border-collapse:collapse;">
      <tr>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/sileston/01. Sileston.Montblanc.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('01. Sileston.Montblanc.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/sileston/02. Sileston.Sienna.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('02. Sileston.Sienna.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/sileston/03. Sileston.Noka.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('03. Sileston.Noka.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/sileston/04. Sileston.Atlantis.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('04. Sileston.Atlantis.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
      </tr>
    </table>
<div align="center" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">
Mármol</div>
  <table border="0" cellspacing="0" cellpadding="0" style="border-color:#fff; border-collapse:collapse;">
      <tr>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/marmol/01. Marmol.Galala.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('01. Marmol.Galala.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/marmol/02. Marmol.Travertino.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('02. Marmol.Travertino.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/marmol/03. Marmol.Perseus.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('03. Marmol.Perseus.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/marmol/04. Marmol.EraSilver.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('04. Marmol.EraSilver.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
      </tr>
    </table>
<div align="center" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">
Granito</div>
  <table border="0" cellspacing="0" cellpadding="0" style="border-color:#fff; border-collapse:collapse;">
      <tr>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/granito/01. Granito.BlancoCristal.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('01. Granito.BlancoCristal.jpg')" onmouseover="mostrar_text_muestra7('Granito Blanco Cristal')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/granito/02. Granito.Grissal.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('02. Granito.Grissal.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/granito/03. Granito.Labrador.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('03. Granito.Labrador.jpg')" onmouseover="mostrar_text_muestra7('Chai')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="acabado2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/cubiertas/granito/04. Granito.BlackSwell.jpg" width="40" height="40" onclick="javascript:ocultar_paleta7('04. Granito.BlackSwell.jpg')" onmouseover="mostrar_text_muestra7('Blanco Frosty')" style="border: 1px solid white;" /></td>
      </tr>
    </table>
    <div align="center" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:10px; padding-left:10px; padding-bottom:10px; padding-right:10px;">
    Ven a tu sucursal<br/> más cercana y conoce <br/>nuestro catálogo<br/> completo de cubiertas
	</div>

    <!--<div id="texto_color7" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">Hielo</div>-->
  </div>

</div>

</div>
</div>
<!--<div id="espacio_back" style="background-image:url(media/images/07-imagina-tu-cocina/tono-melamina.jpg); width:100%; height:800px; background-size: 100% auto; background-repeat:no-repeat;">
</div>-->
</div>

<div id="acabados" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  <td style="padding-right:80px;">
      <img id="ssl75" src="media/images/anterior.png" style="cursor:pointer;" width="30" height="47"
      onclick="javascript:change_menu('espacio');change_arrow(1);"
      onmouseover="javascript:document.getElementById('ssl75').src = 'media/images/anterior-over.png'" 
      onmouseout="javascript:document.getElementById('ssl75').src='media/images/anterior.png'" />
    </td>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
<div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -200px 10px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px; height:129px;">
    ME GUSTARÍA<br/>
UN ACABADO... 
    </td>
    <td style="padding-left:40px; opacity:0.6;">
		<table>
		<tr>
        <td style="padding-left:20px; cursor:pointer;"> 
		<img id="muestra_pequenia6" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50"  style="border: 1px solid black;" onclick="javascript:mostrar_paleta6()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">XUNI</div>
		<div style="color:#ff0000;font-family:'Lato'; font-size:12px;">Edición Especial</div>
		</td>
		<td style="padding-left:20px;border:1px; border-color:#000; cursor:pointer;" valign="top">
		<img id="muestra_pequenia5" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50" style="border: 1px solid black;" onclick="javascript:mostrar_paleta5()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">AMADERADO</div> <!-- onclick="javascript:acabado('amaderado')" -->
		</td>
		<td style="padding-left:20px; cursor:pointer;" valign="top"> 
		<img id="muestra_pequenia3" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50" onclick="javascript:mostrar_paleta3()" style="border: 1px solid black;" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">LISO</div>
		</td>
		<td style="padding-left:50px; cursor:pointer;"  valign="top">
		<img id="muestra_pequenia4" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50" style="border: 1px solid black;" onclick="javascript:mostrar_paleta4()" /> 
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">PATRONES</div>
		</td>
        <!--<td style="padding-left:40px; cursor:pointer;">
		<img id="muestra_pequenia8" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" width="50" height="50" style="border: 1px solid black;" onclick="javascript:mostrar_paleta8()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">MODULART</div>
		<div style="color:#ff0000;font-family:'Lato'; font-size:12px;">Edición Especial</div>
		</td>-->
        
		<td></td>
        <td style="padding-left:80px;">
      <img id="ssl3" src="media/images/siguiente.png" style="cursor:pointer;display:none;" width="30" height="47"
      onclick="javascript:change_menu('cubiertas');change_arrow(5);"
      onmouseover="javascript:document.getElementById('ssl3').src = 'media/images/siguiente-over.png'" 
      onmouseout="javascript:document.getElementById('ssl3').src='media/images/siguiente.png'" />
        </td>
		</tr>
		</table>
	  
      
      
      
      </td>
  </tr>
</table>
<div style="width:100%; position:relative;">
<img id="acabados_back" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_032515_V2.jpg" width="100%" height="auto" />
<img id="acabado_coci99" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="cubierta_coci99" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="pared_coci99" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<img id="piso_coci99" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />

<img id="acabado_chico_back" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones.png" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="acabado_grande_back" src="media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones.png" width="100%" height="auto" style="display:none;position:absolute; left:0; top:0;" />

<img id="acabado_chico_liso_back" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones_liso.png" width="100%" height="auto" style="display:none;position:absolute; left:0; top:0;" />
<img id="acabado_chico_patrones_back" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_cajones_patrones.png" width="100%" height="auto" style="display:none;position:absolute; left:0; top:0;" />
<img id="acabado_grande_liso_back" src="media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones_liso.png" width="100%" height="auto" style="display:none;position:absolute; left:0; top:0;" />
<img id="acabado_grande_patrones_back" src="media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_cajones_patrones.png" width="100%" height="auto" style="display:none;position:absolute; left:0; top:0;" />

<div id="paleta_colores3" style="display:none;position:absolute; left:49.2%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
  <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('05-Blanco Frosty.jpg')" onmouseover="mostrar_text_muestra3('Blanco Frosty')" style="border: 1px solid white;" /></td>
   <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/06-Lustro.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('06-Lustro.jpg')" onmouseover="mostrar_text_muestra3('Lustro')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/03-Pera.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('03-Pera.jpg')" onmouseover="mostrar_text_muestra3('Pera')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('02-Mango.jpg')" onmouseover="mostrar_text_muestra3('Mango')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/01-Lava.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('01-Lava.jpg')" onmouseover="mostrar_text_muestra3('Lava')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/04-Chai.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('04-Chai.jpg')" onmouseover="mostrar_text_muestra3('Chai')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/07-Gris Niebla.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('07-Gris Niebla.jpg')" onmouseover="mostrar_text_muestra3('Gris Niebla')" style="border: 1px solid white;" /></td>
    </tr>
    <tr>
        <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/08-negro.jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('08-negro.jpg')" onmouseover="mostrar_text_muestra3('Negro')" style="border: 1px solid white;" /></td>
        <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/13-Blanco(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('13-Blanco(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Blanco (alto brillo)')" style="border: 1px solid white;" /></td>     
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/10-Mostaza(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('10-Mostaza(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Mostaza (alto brillo)')" style="border: 1px solid white;" /></td>
  <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/09-Rojo(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('09-Rojo(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Rojo (alto brillo)')" style="border: 1px solid white;" /></td>
 <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/12-Wengue(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('12-Wengue(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Wengue (alto brillo)')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/11-Chai(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('11-Chai(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Chai (alto brillo)')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/14-Negro(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta3('14-Negro(alto-brillo).jpg')" onmouseover="mostrar_text_muestra3('Negro (alto brillo)')" style="border: 1px solid white;" /></td>
  </tr>
</table>
<div id="texto_color3" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">Hielo</div>
</div>

<div id="paleta_colores4" style="display:none;position:absolute; left:55.5%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Concreto.jpg" width="40" height="40" onclick="javascript:ocultar_paleta4('Concreto.jpg')" onmouseover="mostrar_text_muestra4('Concreto')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Lino.jpg" width="40" height="40" onclick="javascript:ocultar_paleta4('Lino.jpg')" onmouseover="mostrar_text_muestra4('Lino')" style="border: 1px solid white;" /></td>
  </tr>
</table>
<div id="texto_color4" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">Concreto</div>
</div>

<div id="paleta_colores8" style="display:none;position:absolute; left:62.5%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/modulart1.png" width="40" height="40" onclick="javascript:ocultar_paleta8('modulart1.png')" onmouseover="mostrar_text_muestra8('Diseño 1')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/modulart/modulart25.png" width="40" height="40" onclick="javascript:ocultar_paleta8('modulart25.png')" onmouseover="mostrar_text_muestra8('Diseño 2')" style="border: 1px solid white;" /></td>
  </tr>
</table>
<div id="texto_color4" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">Concreto</div>
</div>
<!--  left:48.2%; -->
<div id="paleta_colores5" style="display:none;position:absolute;left:42.5%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/01-Legno Blanco.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('01-Legno Blanco.jpg')" onmouseover="mostrar_text_muestra5('Legno Blanco')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/02-Cremino.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('02-Cremino.jpg')" onmouseover="mostrar_text_muestra5('Cremino')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/03-Encino.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('03-Encino.jpg')" onmouseover="mostrar_text_muestra5('Encino')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/04-Argenta.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('04-Argenta.jpg')" onmouseover="mostrar_text_muestra5('Argenta')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/05-Almendra.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('05-Almendra.jpg')" onmouseover="mostrar_text_muestra5('Almendra')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/06-Tabaco.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('06-Tabaco.jpg')" onmouseover="mostrar_text_muestra5('Tabaco')" style="border: 1px solid white;" /></td>
      </tr>
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/07-Zebrano Teca.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('07-Zebrano Teca.jpg')" onmouseover="mostrar_text_muestra5('Zebrano Teca')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/08-Lignite.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('08-Lignite.jpg')" onmouseover="mostrar_text_muestra5('Lignite')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/11-Nature.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('11-Nature.jpg')" onmouseover="mostrar_text_muestra5('Nature')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/10-Habano.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('10-Habano.jpg')" onmouseover="mostrar_text_muestra5('Habano')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/12-Cacao.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('12-Cacao.jpg')" onmouseover="mostrar_text_muestra5('Cacao')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/13-Pinon.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('13-Pinon.jpg')" onmouseover="mostrar_text_muestra5('Piñon')" style="border: 1px solid white;" /></td>
      </tr>
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/14-Nogal Castano.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('14-Nogal Castano.jpg')" onmouseover="mostrar_text_muestra5('Nogal Castaño')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/15-Nogal Americano.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('15-Nogal Americano.jpg')" onmouseover="mostrar_text_muestra5('Nogal Americano')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/16-Nuez.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('16-Nuez.jpg')" onmouseover="mostrar_text_muestra5('Nuez')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/17-Canela.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('17-Canela.jpg')" onmouseover="mostrar_text_muestra5('Canela')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/18-Kumey.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('18-Kumey.jpg')" onmouseover="mostrar_text_muestra5('Kumey')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/20-Aserrado Coco.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('20-Aserrado Coco.jpg')" onmouseover="mostrar_text_muestra5('Aserrado Coco')" style="border: 1px solid white;" /></td>
     </tr>
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/21-Bambu.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('21-Bambu.jpg')" onmouseover="mostrar_text_muestra5('Bambu')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/22-Maui.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('22-Maui.jpg')" onmouseover="mostrar_text_muestra5('Maui')" style="border: 1px solid white;" /></td>
     <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/23-Aserrado Moka.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('23-Aserrado Moka.jpg')" onmouseover="mostrar_text_muestra5('Aserrado Moka')" style="border: 1px solid white;" /></td>
     <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/24-Latte.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('24-Latte.jpg')" onmouseover="mostrar_text_muestra5('Latte')" style="border: 1px solid white;" /></td>
     <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/25-Nogal Amati.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('25-Nogal Amati.jpg')" onmouseover="mostrar_text_muestra5('Nogal Amati')" style="border: 1px solid white;" /></td>
     <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/26-Cerezo.jpg" width="40" height="40" onclick="javascript:ocultar_paleta5('26-Cerezo.jpg')" onmouseover="mostrar_text_muestra5('Cerezo')" style="border: 1px solid white;" /></td>
  </tr>
</table>
<div id="texto_color5" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">01-Legno Blanco</div>
</div>

<div id="paleta_colores6" style="display:none;position:absolute; left:69%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/08-Lignite.jpg" width="40" height="40" onclick="javascript:ocultar_paleta6('08-Lignite.jpg')" onmouseover="mostrar_text_muestra6('Xuni')" style="border: 1px solid white;" /></td>
    <!--<td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/ediciones-especiales/xuni/xuni2.jpg" width="40" height="40" onclick="javascript:ocultar_paleta6('xuni2.jpg')" onmouseover="mostrar_text_muestra6('xuni2')" style="border: 1px solid white;" /></td>-->
  </tr>
</table>
<div id="texto_color6" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">Xuni</div>
</div>



</div>
</div>

<div id="pared" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  <td style="padding-right:80px;">
      <img id="ssl76" src="media/images/anterior.png" style="cursor:pointer;" width="30" height="47"
      onclick="javascript:change_menu('cubiertas');change_arrow(5);"
      onmouseover="javascript:document.getElementById('ssl76').src = 'media/images/anterior-over.png'" 
      onmouseout="javascript:document.getElementById('ssl76').src='media/images/anterior.png'" />
    </td>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -280px 0px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;height:129px;">
    EL COLOR DE LA<br/>
	PARED SERÁ...
    </td>
    <td style="padding-left:20px; opacity:0.6;">
	  
      <!--<div id="color-box2" class="color-box" onclick="color()"></div>   -->
    </td>
	<td style="padding-left:50px;"> <!-- media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg -->
	<img id="muestra_pequenia" height="50" width="50" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" style="cursor:pointer; border: 1px solid black;" onclick="javascript:mostrar_paleta()"/>
	<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">COLOR</div>
	</td>
    <td style="padding-left:80px;">
      <img id="ssl12" src="media/images/siguiente.png" style="cursor:pointer;display:none;" width="30" height="47"
      onclick="javascript:change_menu('piso');change_arrow(4);"
      onmouseover="javascript:document.getElementById('ssl12').src = 'media/images/siguiente-over.png'" 
      onmouseout="javascript:document.getElementById('ssl12').src='media/images/siguiente.png'" />
    </td>
  </tr>
</table>
<!-- id="pared_back" background-image:url(media/images/07-imagina-tu-cocina/fondo_samples.png); background-size:100% 600px; width:100%; height:600px; position:relative; -->
<div style="width:100%; position:relative;">
<img id="pared_backk" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_032515_V2.jpg" width="100%" height="auto" />
<img id="acabado_coci" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="cubierta_coci" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="pared_coci" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="piso_coci55" style="display:none;position:absolute; left:0; top:0;" src="" width="100%" height="auto" />
<div id="paleta_colores" style="display:none;position:absolute; left:60%; top:0px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0" style=" border-collapse:collapse;"> <!-- border-color:#fff; style="border-color:#fff;" -->
  <tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/pared1.jpg" width="50" height="50" onclick="javascript:ocultar_paleta('pared1.jpg')" onmouseover="mostrar_text_muestra('Claro')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/pared2.jpg" width="50" height="50" onclick="javascript:ocultar_paleta('pared2.jpg')" onmouseover="mostrar_text_muestra('Concreto')" style="border: 1px solid white;" /></td>
    <!--<td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/03-Pera.jpg" width="40" height="40" onclick="javascript:ocultar_paleta('03-Pera.jpg')" onmouseover="mostrar_text_muestra('Pera')" style="border: 1px solid white;" /></td>-->
  </tr>
  <!--<tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/04-Chai.jpg" width="40" height="40" onclick="javascript:ocultar_paleta('04-Chai.jpg')" onmouseover="mostrar_text_muestra('Chai')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg" width="40" height="40" onclick="javascript:ocultar_paleta('05-Blanco Frosty.jpg')" onmouseover="mostrar_text_muestra('Blanco Frosty')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/07-Gris Niebla.jpg" width="40" height="40" onclick="javascript:ocultar_paleta('07-Gris Niebla.jpg')" onmouseover="mostrar_text_muestra('Gris Niebla')" style="border: 1px solid white;" /></td>
  </tr>-->
  <!--<tr>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/10-Mostaza(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta('10-Mostaza(alto-brillo).jpg')" onmouseover="mostrar_text_muestra('Mostaza(alto-brillo)')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/11-Chai(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta('11-Chai(alto-brillo).jpg')" onmouseover="mostrar_text_muestra('Chai(alto-brillo)')" style="border: 1px solid white;" /></td>
    <td><img class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/14-Negro(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta('14-Negro(alto-brillo).jpg')" onmouseover="mostrar_text_muestra('Negro(alto-brillo)')" style="border: 1px solid white;" /></td>
  </tr>-->
</table>
<div id="texto_color" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-bottom:3px;" align="center">Hielo</div>
</div>
</div>
</div>

<div id="piso" style="background-color:#fff; width:100%; display:none;">

<div id="pisoo">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  <td style="padding-right:80px;">
      <img id="ssl78" src="media/images/anterior.png" style="cursor:pointer;" width="30" height="47"
      onclick="javascript:change_menu('pared');change_arrow(3);"
      onmouseover="javascript:document.getElementById('ssl78').src = 'media/images/anterior-over.png'" 
      onmouseout="javascript:document.getElementById('ssl78').src='media/images/anterior.png'" />
    </td>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -350px 0px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;height:129px;">
    EL COLOR DEL<br/>
	PISO SERÁ...
    </td>
    <td style="padding-left:60px; opacity:0.6;">
      <!--<div class="color-box"></div>  -->
      <img id="muestra_pequenia2" height="50" width="50" src="media/images/07-imagina-tu-cocina/fondo_sin_color.png" style="cursor:pointer;border: 1px solid black;" onclick="javascript:mostrar_paleta2()"/>
	<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">COLOR</div>
       
      </td>
  </tr>
</table>
</div>
<div style="width:100%; position:relative;">
<img id="piso_back" src="media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_032515_V2.jpg" width="100%" height="auto" />
<img id="acabado_coci1" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="cubierta_coci2" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="pared_coci1" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<img id="piso_coci1" src="" width="100%" height="auto" style="display:none; position:absolute; left:0; top:0;" />
<div id="cuadro_naranja" style="background-color:rgba(175,71,37, 0.6); position:absolute; left:80%; top:0; display:none;">
<table width="94" height="312" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">
    <div style="font-family:'Lato'; font-size:12px; color:#fff; padding-top:12px;">
    <center>COMPARTE<br/>
    TU COCINA</center>
    </div>
    <hr width="50" style="border-color:#fff;" color="#fff"/>
    <div style="font-family:'Lato'; font-size:12px; color:#fff;  padding-top:5px;cursor:pointer;">
    <div style="padding-left:25%;">
    <img id="ff1" style="padding-left:7px;" src="media/images/07-imagina-tu-cocina/icons/facebook-1.png" width="30" height="30" 
    onclick="javascript:facebook_compartir2()"
    onmouseover="javascript:document.getElementById('ff1').src = 'media/images/07-imagina-tu-cocina/icons/facebook-2.png'" 
    onmouseout="javascript:document.getElementById('ff1').src='media/images/07-imagina-tu-cocina/icons/facebook-1.png'" />
    </div>
    <div align="center" style="padding-top:5px;">COMPARTE</div>
    </div>
    <hr width="50" style="border-color:#fff;" color="#fff"/>
    <div style="font-family:'Lato'; font-size:12px; color:#fff;  padding-top:5px;cursor:pointer;">
    <div style="padding-left:25%;">
    <img id="pp1" style="padding-left:7px;" src="media/images/07-imagina-tu-cocina/icons/pinterest1.png" width="30" height="30"
    onmouseover="javascript:document.getElementById('pp1').src = 'media/images/07-imagina-tu-cocina/icons/pinterest2.png'" 
    onmouseout="javascript:document.getElementById('pp1').src='media/images/07-imagina-tu-cocina/icons/pinterest1.png'"
     onclick="pinit()" />
    </div>
    <div align="center" style="padding-top:5px;">PINEA</div>
    </div>
    <hr width="50" style="border-color:#fff;" color="#fff"/>
    <div style="font-family:'Lato'; font-size:12px; color:#fff;  padding-top:5px;cursor:pointer;">
    <div style="padding-left:25%;">
    <img id="mm1" style="padding-left:10px;" src="media/images/07-imagina-tu-cocina/icons/mandala.png" width="30" height="30" 
    onclick="javascript:window.location = 'mailto:armando.parada@modul.mx';"
    onmouseover="javascript:document.getElementById('mm1').src = 'media/images/07-imagina-tu-cocina/icons/mandala-over.png'" 
    onmouseout="javascript:document.getElementById('mm1').src='media/images/07-imagina-tu-cocina/icons/mandala.png'" /></div>
    <div style="padding-top:5px;"><center>COTIZA EN MODÜL</center></div>
    </div>
    <hr width="50" style="border-color:#fff;" color="#fff"/>
    </td>
  </tr>
</table>
</div>

<div id="flecha1" style="position:absolute; top:70%; left:50%;display:none;">
<table width="140" height="120" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="fl1" valign="top" style="cursor:pointer;padding-right:20px;">
    <!--<img src="media/images/07-imagina-tu-cocina/icons/indicaciones.png" width="30" height="30" />-->
    <span class="to-pulse-holder">
    <span class="to-pulse-marker">
    <span class="to-pulse-rays"></span>
    </span>
    </span>
    </td>
    <td>
    
    <div id="flecha1_a" style="background-color:rgba(255,255,255,0.5);color:#fff; font-family:'Lato'; font-size:14px; display:none;width:160px;">
    <table id="fl2_a" height="120" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="fl2" style="padding-left:20px; padding-top:20px; padding-bottom:20px; padding-right:20px;" width="auto">
        Sistema de <br/>
        construcción <br/>
        Solidex® <br/>
		que hace tu cocina<br/>
         más duradera <br/>
         y resistente.<br/>
        </td>
      </tr>
    </table>
    </div>
    
    </td>
  </tr>
</table>
</div>

<div id="flecha2" style="position:absolute; top:20%; left:20%;display:none;">
<table width="140" height="120" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="fl3" valign="top" style="cursor:pointer;padding-right:20px;">
    <!--<img src="media/images/07-imagina-tu-cocina/icons/indicaciones.png" width="30" height="30" />-->
    <span class="to-pulse-holder">
    <span class="to-pulse-marker">
    <span class="to-pulse-rays"></span>
    </td>
    <td>
    <div id="flecha2_a" style="background-color:rgba(255,255,255,0.5);color:#fff; font-family:'Lato'; font-size:14px;display:none; width:130px;">
    <table id="fl4_a" height="120" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="fl4" style="padding-left:20px;padding-top:20px; padding-bottom:20px; padding-right:20px;" width="auto">
        Módulos exactos<br/>
         para el tamaño<br/>
          de tu cocina.
        </td>
      </tr>
    </table>
    </div>
    </td>
  </tr>
</table>
</div>

<div id="flecha3" style="position:absolute; top:77%; left:7%;display:none;">
<table width="140" height="120" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="fl5" valign="top" style="cursor:pointer;padding-right:20px;">
    <!--<img src="media/images/07-imagina-tu-cocina/icons/indicaciones.png" width="30" height="30" />-->
    <span class="to-pulse-holder">
    <span class="to-pulse-marker">
    <span class="to-pulse-rays"></span>
    </td>
    <td>
    <div id="flecha3_a" style="background-color:rgba(255,255,255,0.5);color:#fff; font-family:'Lato'; font-size:14px;display:none;width:160px;">
    <table id="fl6_a" height="120" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="fl6" style="padding-left:20px;padding-top:20px; padding-bottom:20px; padding-right:20px;" width="auto">
        Garantía de <br/>
        hasta 10 años<br/>
        en defectos <br/>        
        de materiales,<br/> 
        mano de obra <br/> 
        y vicios ocultos.
        </td>
      </tr>
    </table>
    </div>
    </td>
  </tr>
</table>
</div>

<div id="paleta_colores2" style="display:none;position:absolute; left:60%; top:0px; cursor:pointer;">
    <table border="0" cellspacing="0" cellpadding="0" style="border-color:#fff; border-collapse:collapse;">
      <tr>
        <td style="border-color:#fff;"><img id="color_piso1" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/04-Chai.jpg" width="40" height="40" onclick="javascript:ocultar_paleta2('04-Chai.jpg')" onmouseover="mostrar_text_muestra2('Duela')" style="border: 1px solid white;" /></td>
        <td style="border-color:#fff;"><img id="color_piso2" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg" width="40" height="40" onclick="javascript:ocultar_paleta2('05-Blanco Frosty.jpg')" onmouseover="mostrar_text_muestra2('Porcelanato')" style="border: 1px solid white;" /></td>
        <!--<td style="border-color:#fff;"><img id="color_piso3" class="hvr-grow" src="media/images/03-catalogo/cocinas/looks/acabados/lisos/07-Gris Niebla.jpg" width="40" height="40" onclick="javascript:ocultar_paleta2('07-Gris Niebla.jpg')" onmouseover="mostrar_text_muestra2('Gris Niebla')" style="border: 1px solid white;" /></td-->
      </tr>
    </table>
    <div id="texto_color2" style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:12px; padding-top:5px; padding-left:5px; padding-bottom:2px;">Hielo</div>
    </div>

</div>
</div>
<!-- All -->
<div id="parte_abajo">
<div id="isla" style=" width:100%;">
<div style="height:50px;"></div>
    <table  width="100%" cellpadding="0" cellspacing="0">
    	<tr>
        	<td width="25%"></td>
            <td width="25%" valign="top">
                    <!--<div style=" height:20px;"></div>-->
                    <div style=" font-family:'Lato';font-size:34px; font-weight:300">ISLA<hr align="left" width="40px" color="#000" style="border-color:#000;" /></div>
                    <div style=" font-size:14px">Una isla puede ser muy versátil: desde<br />
                        servirte como mesa, área de trabajo<br />
                        o superficie para colocar algunos<br />
                        electrodomésticos. En cualquier caso,<br />
                        es un gran ayudante.<br />
                        <img width="42px" src="media/images/07-imagina-tu-cocina/icons/icon_3.png" style="padding-top:40px;" />
                    </div>
            </td>
            <td width="50%" valign="top">
            <img width="460px" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-2.jpg" />
            </td>
        </tr>
        <tr>
        	<td width="25%" style="padding-top:40px;padding-bottom:40px;"><hr color="#CCC" style="border-color:#CCC;" /></td>
        	<td valign="top" style="padding-top:40px;padding-bottom:40px;"><hr color="#CCC" style="border-color:#CCC;" /></td>        	
            <td valign="top" style="padding-top:40px; padding-bottom:40px;"><hr color="#CCC" style="border-color:#CCC;" align="left" width="460px" /></td>
        </tr>
    </table>
</div>
<!-- All -->
<div id="isla2">
<table cellpadding="0" cellspacing="0" width="100%" style=" font-family:'Lato';">
<tr>
<td height="145px" width="50%"><img height="100%" width="100%" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-3.jpg" /></td>
<td height="145px" width="50%"><img height="100%" width="100%" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-4.jpg" /></td>
</tr>
</table>
</div>
<!-- All 2 -->
<div id="isla3" style=" width:100%;">
    <table width="100%" cellpadding="0" cellspacing="0">
    	<tr>
        	<td width="25%"></td>
            <td width="25%">
             <div style=" height:20px;"></div>
                    <div style=" font-family:'Lato';font-size:34px; font-weight:300">ACABADOS<hr align="left" width="40px" color="#000" style="border-color:#000;" /></div>
                    <div style=" font-size:14px">Elige si deseas un espacio con la<br />
                        calidez del terminado amaderado,<br />
                        con la pulcritud de los colores lisos o<br />
                        con la originalidad de otros tipos de<br />
                        estampado.<br />
                    <img style=" padding-top:40px" width="42px" src="media/images/07-imagina-tu-cocina/icons/pequenio_gris_3.png" />
                    </div>
            </td>
            <td width="50%"><img  width="100%" height="355px" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-5.jpg" /></td>
        </tr>
        <tr>
        	<td width="25%" style="padding-top:40px;padding-bottom:40px;"></td>
            <td width="25%" style="padding-top:40px;padding-bottom:40px;"><hr color="#CCC" style="border-color:#CCC;" /></td>
            <td width="50%" style="padding-top:40px;padding-bottom:40px;"><hr color="#CCC" style="border-color:#CCC;" /></td>
        </tr>
         <tr>
        	<td width="25%"></td>
            <td width="25%">
             <div style=" height:20px;"></div>
                    <div style=" font-family:'Lato';font-size:34px; font-weight:300">COLOR DEL PISO<hr align="left" width="40px" color="#000" style="border-color:#000;" /></div>
                    <div style=" font-size:14px">El piso es fundamental para resaltar<br />
                        todos los muebles, puedes darle un<br />
                        look dramático escogiendo colores<br />
                        oscuros, o hacerlo adaptable a<br />
                        cualquier estilo con un tono neutro.<br />
                    <img style=" padding-top:40px" width="42px" src="media/images/07-imagina-tu-cocina/icons/medio_gris_4.png" />
                    </div>
            </td>
            <td width="50%"><img width="450px" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-6.jpg" /></td>
        </tr>

    </table>
</div>
<!-- All 2 -->
<div id="isla4" style=" height:50px"></div>
<div id="isla5" align="left" style="background-color:#fef19d; color:#999; height:360px;">
<table align="left" width="100%">
    <tr>
    <td width="25%" height="50px"></td>
    <td width="75%" height="50px"></td>
    </tr>
	<tr>
    	<td width="25%"></td>
    	<td width="50%">
        <table  width="800px" rules="all" cellpadding="0" cellspacing="0">
            <tr>
                <td width="250px" valign="top">
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style=" font-family:'Lato'; font-size:34px; font-weight:300;">
                    TECNOLOGÍA <br />SOLIDEX <span style="font-size:24px; vertical-align:top;">®</span>
                    </td>
                </tr>
                <tr>
                    <td style=" font-family:'LibreBaskerville Italic'; font-size:16px;">
                    Exclusiva de Mödul
                    </td>
                </tr>
                <tr align="left">
                    <td align="left"><hr color="#999999" style="border-color:#999999;" align="left" width="50px"/></td>
                </tr>
                <tr>
                    <td width="200px" style=" font-size:14px; font-family:'Lato';">
                    La tecnología de la construcción<br />
                    de nuestros muebles es una de las<br />
                    razones para darte 10 años de garantía<br />
                    en los módulos de tu cocina, y la<br />
                    logramos así...<br />
				</td>
                </tr>
            </table>
                </td>
                <td width="200px" valign="top" align="center">
                <img src="media/images/02-modul/tecnologia-solidex2.png" /><p>
                <div style="font-size:16px; font-family:'Lato';">RESISTENCIA</div>
                <div style="font-size:14px; font-family:'Lato';">Uso de material hidrófugo<br/>
                de 16 mm revestido con<br/>
                laminado melamínico<br/>
                blanco resistente a la<br/>
                humedad</div>
                </td>
                <td width="200px" valign="top" align="center">
                <img src="media/images/02-modul/tecnologia-solidex3.png" /><p>
                <div style="font-size:16px; font-family:'Lato';">SELLADO</div>        
                <div style="font-size:14px; font-family:'Lato';">
                Cantos visibles y ocultos<br/>
                sellados con chapa de PVC<br/>
                blanco, de adherencia<br/>
                permanente<br/>
                </div>
                </td>
                <td width="200px" valign="top" align="center">
                <img src="media/images/02-modul/tecnologia-solidex1.png" /><p>
                <div style="font-size:16px; font-family:'Lato';">ARMADO SÓLIDO</div>
                <div style="font-size:14px; font-family:'Lato';">  
                Unión perfecta con<br/>
                tornillos Confirmat en<br/>
                perforaciones según el<br/>
                Sistema 32 mm de<br/>
                carpintería<br/>
                </div>
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</div>

<div id="isla6" style=" font-size:12px; position:relative;font-family:'Lato'; width:100%; height:160px; background:url(media/images/07-imagina-tu-cocina/promo-redes-sociales-modul.jpg); background-size:100% 250px; background-repeat:no-repeat;">
    <div style="height:160px; background-color:rgba(0,0,0,0.7);">
        <div style=" position:absolute; top:0%;left:25%; color:#FFF; ">
        <table >
            <tr>
                <td width="150px" height="160" valign="middle"><div style=" font-size:20px;  color:#FFF;width: 170px;">COMPARTE TU <br />COCINA MÖDUL</div></td>
                <td width="50px"></td>
                <td valign="top" width="100px" style="cursor:pointer; padding-top:30px;">
                <img id="fff1" src="media/images/07-imagina-tu-cocina/icons/facebook-1.png" onclick="javascript:facebook_compartir2()"
                onmouseover="javascript:document.getElementById('fff1').src = 'media/images/07-imagina-tu-cocina/icons/facebook-2.png'" 
                onmouseout="javascript:document.getElementById('fff1').src='media/images/07-imagina-tu-cocina/icons/facebook-1.png'" />
                <div style="padding-top:15px;">COMPARTE</div>
                <hr align="left" color="#FFF" width="25px" />
                </td>
                <td valign="top" width="100px" style="cursor:pointer; padding-top:30px;">
                <img id="ppp1" src="media/images/07-imagina-tu-cocina/icons/pinterest1.png" onclick="javascript:pinit()"
                onmouseover="javascript:document.getElementById('ppp1').src = 'media/images/07-imagina-tu-cocina/icons/pinterest2.png'" 
                onmouseout="javascript:document.getElementById('ppp1').src='media/images/07-imagina-tu-cocina/icons/pinterest1.png'" />
                <div style="padding-top:15px;">PINEA</div>
                <hr align="left" color="#FFF" width="25px" />
                </td>
                <td valign="top" width="100px" style="cursor:pointer; padding-top:30px;">
                <img id="mmm1" src="media/images/07-imagina-tu-cocina/icons/mandala.png" 
                onclick="javascript:window.location = 'mailto:armando.parada@modul.mx';"
                onmouseover="javascript:document.getElementById('mmm1').src = 'media/images/07-imagina-tu-cocina/icons/mandala-over.png'" 
                onmouseout="javascript:document.getElementById('mmm1').src='media/images/07-imagina-tu-cocina/icons/mandala.png'" />
                <div style="padding-top:15px;">
                MÁNDALA
                <br />A MÖDUL
                </div>
                <hr align="left" color="#FFF" width="25px" />
                </td>
            </tr>
        </table>
        </div>
    </div>
</div>

</div>

<style>
   #wrapper { position: relative; }
   #over_map { 
   position: absolute;
   top: 1px;
   left: 24%;
   z-index: 100;
   height:84%;
   padding-top:51px;
   padding-left:20px;
   padding-right:20px;
   background-color:rgba(255, 255, 255, 0.7);
   color:#000;
    }
	#map-canvas
{
	width : 100%; 	/* map width */
	height: 400px;	/* map height */
}
</style>

<div id="isla7" style="display:none;">
    <div id="wrapper">
       <div id="google_map">
       		<div id='map-canvas' ></div>
       </div>
    <table>
        <tr id="over_map">
            <td onclick="javascript:window.location = 'mailto:daniel.sada@modulstudio.mx';"><div style="font-family:'Lato'; cursor:pointer; font-weight:300; font-size:24px;">
            VISITA TU MÖDUL<br/> MÁS CERCANO
    <hr align="left" width="50px" color="#999999" style="border-color:#999;" />
    <p id="texto_mapa" style="font-size:12px;">
    <script>
    document.write(texto_google);
    </script>
    </p>
    <div style="font-size:12px;cursor:pointer; cursor: hand; padding-top:30px;">
    <a style="color:#000; text-decoration:none;" href="https://www.google.com/maps/d/viewer?mid=zNq46-wvOahM.k7307HOL18xQ">+ Ver mapa en Google maps</a>
    </div>
    <div  style="font-size:12px; padding-top:10px;">
    <a id="agenda_tu_cita" onclick="agenda_tu_citaClick()" style="cursor:pointer; cursor: hand;">+ Agenda tu cita</a>
    </div>
       </div></td>
            <td valign="top">
            <div id="agenda_tu_cita_div" style=" display:none;padding-left:20px;">
            <form name="form_agenda" action="" method="post">
            <p><input class="nombre" name="nombre" type="text" placeholder="NOMBRE COMPLETO*" required /></p>
            <p><input class="telefono" name="telefono" type="tel" placeholder="TELÉFONO*" required /></p>
    <p><input class="hora" name="hora" type="text" placeholder="HORA DESEADA*" required />&nbsp;&nbsp;
    <!--<inputtype="text"/>-->
    <label class="arrow">
    <select class="fecha" name="fecha"  placeholder="FECHA DESEADA*" required>
    <option value="">FECHA DESEADA*</option>
    <option value="ESTA SEMANA">ESTA SEMANA</option>
    <option value="EN UN MES">EN UN MES</option>
    <option value="INDEFINIDO">INDEFINIDO</option>
    </select>
    </label>
    </p>
    <p><input class="email" name="email"  type="email" placeholder="E-MAIL*" required /></p>
    <p><input type="submit" name="submit" value="Enviar" style="background-color:#999; color:#fff; padding:20px; padding-left:30px; padding-right:30px; border:none;"/></p>
            </form>
            </div>
            </td>
        </tr>
    </table>
  </div>
</div>



<div style="width:100%;">
   
<map name="Map" id="Map">
  <area shape="rect" coords="411,5,482,141" href="#" onclick="javascript:change_menu('piso')" />
  <area shape="rect" coords="273,3,328,65" href="#" onclick="javascript:change_menu('pared')" />
  <area shape="rect" coords="138,1,188,63" href="#" onclick="javascript:change_menu('acabados')" />
  <area shape="rect" coords="3,0,48,58" href="#" onclick="javascript:change_menu('espacio')" />
</map>
<div style=" height:50px;"></div>
<!--<div id="five" style="z-index:200;width:100%; position:absolute">
 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%">
            <nav class="nav_menu" style="background: linear-gradient(to right, black 0%,black 50%,#000000 50%,rgba(0,0,0,0.01) 50%,rgba(0,0,0,0.01) 50%) 100%;font-family:'Lato';">
              <a href="abre-tu-negocio.php" class="a_black2">FRANQUICIAS</a>
              <a class="a_black2">|</a>
              <a href="experimenta_la_calidad.php" class="a_black2">MODUL RECOMIENDA</a>
              <a class="a_black2">|</a>
              <a href="glosario.php" class="a_black2">GLOSARIO</a>
              <a href="visualiza_tu_cocina.php" class="a_yellow1">IMAGINA TU COCINA AQUÍ</a>
              <a href="un_cafe_con_modul.php" class="a_yellow2">UN CAFÉ CON MÖDUL </a>
            </nav>
        </td>
    </tr>
 </table>
</div>-->
</body>
<!--<footer id="footer_top" style="border-top: 2px solid black; color:#000;">
<div align="center" style="width: 100%;color:#000;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><a href="http://www.miq.mx"><img src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></a></td>
  </tr>
</table>
</div>
</footer>-->
</html>