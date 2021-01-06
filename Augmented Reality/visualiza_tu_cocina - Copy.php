<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modul</title>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/colpick.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
<style>
.css-input { border-color:#000; border-style:solid; padding:11px;font-size:12px; color:#000; border-width:1px; font-family:'Lato';  background-color: transparent;  } 
.css-input:focus { outline:none; }
input[type=checkbox].css-checkbox { position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0; }
input[type=checkbox].css-checkbox + label.css-label {
padding-left:31px;
height:26px; 
display:inline-block;
line-height:26px;
background-repeat:no-repeat;
background-position: 0 0;
font-size:26px;
vertical-align:middle;
cursor:pointer; }
input[type=checkbox].css-checkbox:checked + label.css-label {background-position: 0 -26px;}
						label.css-label {
				background-image:url(http://csscheckbox.com/checkboxes/u/csscheckbox_7dd90aff35ddb38fdc7cb1f8b325cea0.png);
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
.hvr-bubble-bottom:before {
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
.hvr-bubble-bottom:hover:before, .hvr-bubble-bottom:focus:before, .hvr-bubble-bottom:active:before {
  -webkit-transform: translateY(10px);
  transform: translateY(10px);
}
  </style>
<script>
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
  });
  
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
		document.getElementById('checkboxG5').checked = false;
	}
	if(document.getElementById('checkboxG5').checked == true)
	{
		document.getElementById('checkboxG4').checked = false;
	}
	change_menu('acabados');
}
function acabado()
{
	change_menu('pared');
}
function change_menu(menu)
{
	var acabados = 'acabados';
	var espacios = 'espacio';
	var pared = 'pared';
	var piso = 'piso';

	switch(menu)
	{
		case acabados:
		document.getElementById(menu).style.display = "block";
		document.getElementById(espacios).style.display = "none";
		document.getElementById(pared).style.display = "none";
		document.getElementById(piso).style.display = "none";
		break;
		
		case espacios:
		document.getElementById(menu).style.display = "block";
		document.getElementById(acabados).style.display = "none";
		document.getElementById(pared).style.display = "none";
		document.getElementById(piso).style.display = "none";
		break;
		
		case pared:
		document.getElementById(menu).style.display = "block";
		document.getElementById(acabados).style.display = "none";
		document.getElementById(espacios).style.display = "none";
		document.getElementById(piso).style.display = "none";
		break;
		
		case piso:
		document.getElementById(menu).style.display = "block";
		document.getElementById('continuar').style.display = "block";
		document.getElementById(acabados).style.display = "none";
		document.getElementById(espacios).style.display = "none";
		document.getElementById(pared).style.display = "none";
		break;
		
	}
	
}

</script>
</head>
<body style="background-color:#fff; color:#000; width:100%; height:100%; padding:0; margin:0;">
<img id="logoo3" src="media/images/logo-black.png" width="81" height="130" style="z-index:10;position:absolute; top:30px; left:1%;" />
<div id="menu2" class="menu" style="opacity:1;cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt; color:#fff;">
    <ul>
        <li style="vertical-align:middle;" id="modul" onclick=" window.location.href='modul.php';">MÖDUL</li>
        <li style="vertical-align:middle;" id="catalogo" onclick="window.location.href='catalog.php';">CATÁLOGO</li>
        <li style="vertical-align:middle;" id="sucursales" onclick="window.location.href='sucursales.php';">SUCURSALES</li>
        <li style="vertical-align:middle;" id="blog" onclick="window.location.href='blog';">BLOG</li>
        <li style="vertical-align:middle;" id="creadores" onclick="window.location.href='creadores.php';">CREADORES ></li>
        <li>
            <ul class="social">
            <li style="vertical-align:middle;"  id="facebook" onclick="javascript: window.location = 'https://es-la.facebook.com/cocinasintegralesmodul';">
            <img  style="vertical-align:middle;" id="img_fb" onmouseover="javascript:document.getElementById('img_fb').src='media/images/facebook-icon.png'" onmouseout="javascript:document.getElementById('img_fb').src='media/images/facebook_white.png'" src="media/images/facebook_white.png" />
           </li>
           <li style="vertical-align:middle;">&nbsp; | &nbsp;</li>
            <li style="vertical-align:middle;" id="pinterest" onclick="javascript: window.location = 'https://www.pinterest.com/search/pins/?q=M%C3%B6dul';">
            <img style="vertical-align:middle;" id="img_pt" onmouseover="javascript:document.getElementById('img_pt').src='media/images/pinterest-icon.png'" onmouseout="javascript:document.getElementById('img_pt').src='media/images/pinterest_white.png'" src="media/images/pinterest_white.png" />
            </li>
            </ul>
        </li>
    </ul>
</div>


<div style="padding:30px; color:#333; background-color:#FBFBFB; height:310px;" align="center">
        <div style="font-family:'Lato' !important; font-weight:300; font-size:55px; padding-top:50px;line-height:58px;">VISUALIZA TU COCINA</div>
        <div style="font-family:'LibreBaskerville Italic'; font-size:14pt; padding-top:15px;">El límite es tu imaginación</div>
        <div style="padding-top:3px; padding-bottom:2px;"><hr style="width:50px; border-color:#000;" align="center"></div>
        <div style="font-family:'Lato'; font-size: 14px;">
        ¿A qué se parece tu cocina ideal? <br/>
        Visualízala: escoge sus elementos, diseño y acabados en esta <br/>
        aplicación. Al terminar imprímela, guárdala o compártela y <br/>
        envíanosla para ponernos en contacto contigo y hacerla realidad. <br/>
        </div>
</div>

<div style="background-color:#000; width:100%;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    	<td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom"><img src="media/images/07-imagina-tu-cocina/icons/arrow_icon.png" width="50" height="56" usemap="#Map" style="" border="0" /></td>
        <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom"><img src="media/images/07-imagina-tu-cocina/icons/pen_icon.png" width="50" height="56" usemap="#Map" style="" border="0" /></td> 
        <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom"><img src="media/images/07-imagina-tu-cocina/icons/painbrush_icon.png" width="50" height="56" usemap="#Map" style="" border="0" /></td>
       <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom"><img src="media/images/07-imagina-tu-cocina/icons/mosai_icon.png" width="50" height="56" usemap="#Map"  class="hvr-bubble-bottom" border="0" /></td>
  </tr>
</table>
</div>

<div id="espacio" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="padding-top:20px; padding-bottom:20px; ">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;">
    MI ESPACIO ES 
    </td>
    <td style="padding-left:20px;">
    <form action="" method="post">
    &nbsp;<input class="css-checkbox" name="checkboxG4" id="checkboxG4" type="checkbox" value="1" onchange="change_checkbox()" />
    <label for="checkboxG4" class="css-label" checked></label>&nbsp;&nbsp;
    <input class="css-checkbox" name="checkboxG5" id="checkboxG5" type="checkbox" value="2"  onchange="change_checkbox()"/>
    <label for="checkboxG5" class="css-label" checked></label><br/>
    <span style="font-family:'Lato'; font-size:9px; color:#666;">AMPLIO &nbsp;&nbsp; REDUCIDO</span>
    </form>
    </td>
  </tr>
</table>
<div id="espacio_back" style="background-image:url(media/images/07-imagina-tu-cocina/tono-melamina.jpg); width:100%; height:600px;">
</div>
</div>



<div id="acabados" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -200px 0px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;">
    ME GUSTARÍA<br/>
UN ACABADO... 
    </td>
    <td style="padding-left:20px; opacity:0.6;">
      <img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/03-Encino.jpg" width="40" height="40" style="border:1px; border-color:#000;" onclick="javascript:acabado()" /></a>
      <img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg" width="40" height="40" onclick="javascript:acabado()" />
      <img src="media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Concreto.jpg" width="40" height="40" onclick="javascript:acabado()" />
      
      </td>
  </tr>
</table>
<div id="acabados_back" style="background-image:url(media/images/07-imagina-tu-cocina/fondo_samples.png); background-size:100% 600px; width:100%; height:600px;">
</div>
</div>

<div id="pared" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -280px 0px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;">
    EL COLOR DE LA<br/>
	PARED SERÁ...
    </td>
    <td style="padding-left:20px; opacity:0.6;">
      <div id="color-box2" class="color-box" onclick="color()"></div>   
      </td>
  </tr>
</table>
<div id="pared_back" style="background-image:url(media/images/07-imagina-tu-cocina/fondo_samples.png); background-size:100% 600px; width:100%; height:600px;">
</div>
</div>

<div id="piso" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="padding-top:20px; padding-bottom:20px; opacity:0.6;">
    <div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-position: -350px 0px;  height:80px; width:70px;"></div>
    </td>
    <td style="font-family:'Lato' !important; font-weight:300; font-size:34px; color:#666; padding-left:10px;">
    EL COLOR DEL<br/>
	PISO SERÁ...
    </td>
    <td style="padding-left:20px; opacity:0.6;">
      <div class="color-box"></div>   
      </td>
  </tr>
</table>
<div id="piso_back" style="background-image:url(media/images/07-imagina-tu-cocina/fondo_samples.png); background-size:100% 600px; width:100%; height:600px;">
</div>
</div>

<div style="width:100%;">
 <div id="five">
 <table align="center"  style="width:100%;">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%">
            <nav class="nav_menu" style="background: linear-gradient(to right, black 0%,black 50%,#000000 50%,rgba(0,0,0,0.01) 50%,rgba(0,0,0,0.01) 50%) 100%;border-bottom: 2px solid black; font-family:'Lato';">
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
</div>

<div align="center" style="background-color:#fff; width: 100%;color:#000;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
   


<map name="Map" id="Map">
  <area shape="rect" coords="411,5,482,141" href="#" onclick="javascript:change_menu('piso')" />
  <area shape="rect" coords="273,3,328,65" href="#" onclick="javascript:change_menu('pared')" />
  <area shape="rect" coords="138,1,188,63" href="#" onclick="javascript:change_menu('acabados')" />
  <area shape="rect" coords="3,0,48,58" href="#" onclick="javascript:change_menu('espacio')" />
</map>

</body>
</html>