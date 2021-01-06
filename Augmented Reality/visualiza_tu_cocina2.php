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
  -webkit-transform: translateY(15px);
  transform: translateY(15px);
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
		document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_Base.png';
		//document.getElementById('espacio_back').style.backgroundImage = 'url(media/images/07-imagina-tu-cocina/cocina/grande/Cocina_grande_Base.png)';
		
		document.getElementById('checkboxG5').checked = false;
	}
	if(document.getElementById('checkboxG5').checked == true)
	{
		document.getElementById('img_espacio_back').src = 'media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_Base.png';
		//document.getElementById('espacio_back').style.backgroundImage = 'url(media/images/07-imagina-tu-cocina/cocina/pequenia/Cocina_chica_Base.png)';
		document.getElementById('checkboxG4').checked = false;
	}
	//change_menu('acabados');
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
		//document.getElementById('continuar').style.display = "block";
		document.getElementById(acabados).style.display = "none";
		document.getElementById(espacios).style.display = "none";
		document.getElementById(pared).style.display = "none";
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
function ocultar_paleta() {
	document.getElementById('paleta_colores').style.display = "none";
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

<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<div style="padding:30px; color:#333; background-color:#FBFBFB; height:310px;" align="center">
        <div style="font-family:'Lato' !important; font-weight:300; font-size:55px; padding-top:80px;line-height:58px;">VISUALIZA TU COCINA</div>
        <div style="font-family:'LibreBaskerville Italic'; font-size:14pt; padding-top:15px;">El límite es tu imaginación</div>
        <div style="padding-top:3px; padding-bottom:2px;"><hr style="width:50px; border-color:#000;" align="center"></div>
        <div style="font-family:'Lato'; font-size: 14px;">
        ¿A qué se parece tu cocina ideal? <br/>
        Visualízala: escoge sus elementos, diseño y acabados en esta <br/>
        aplicación. Al terminar imprímela, guárdala o compártela y <br/>
        envíanosla para ponernos en contacto contigo y hacerla realidad. <br/>
        </div>
</div>
</td>
<!--<td style="color:#333; background-color:#FBFBFB; font-size:12px">
	<table>
    	<tr>
            <td>
                
            
            </td>
        </tr>
    	<tr><td></td></tr>
    	<tr><td></td></tr>
    </table>
</td>-->
</tr>
</table>
<div id="fd" style="position:absolute; top:90px; right:15%; color:#999; font-family:'Lato'; font-size:14px;">
<table>
                    <tr>
                        <td valign="top" style="padding-top:10px;">
                        <img src="media/images/07-imagina-tu-cocina/icons/icon_f.png" width="30" height="30" />
                        </td>
                        <td valign="top" style="padding-left:20px;padding-top:10px;">
                        COMPARTE
                        <hr style="color:#ccc;" width="30px" align="left"/>
                        </td>
                    </tr>
                    <tr >
                        <td valign="top" style="padding-top:10px;">
                        <img src="media/images/07-imagina-tu-cocina/icons/icon_p.png" width="30" height="30" />
                        </td>
                        <td valign="top"  style="padding-left:20px;padding-top:10px;">
                        PINEA
                        <hr style="color:#ccc" width="30px" align="left"/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top"  style="padding-top:10px;">
                        <img src="media/images/07-imagina-tu-cocina/icons/icon_modul.png" width="30" height="30" />
                        </td>
                        <td valign="top"  style="padding-left:20px;padding-top:10px;">
                        MÁNDALA<br />A MÖDUL
                        <hr style="color:#ccc" width="30px" align="left"/>
                        </td>
                    </tr>
                </table>
</div>

<div style="background-color:#000; width:100%; height:130px;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    	<td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom">
        <img src="media/images/07-imagina-tu-cocina/icons/medio_1.png" width="50" height="56" onclick="javascript:change_menu('espacio')" style="cursor:pointer;" border="0" />
		<div style="color:#fff; font-family:'Lato'; font-size:14px;padding-top:10px;">ESPACIO</div>
		</td>
		
        <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom">
        <img src="media/images/07-imagina-tu-cocina/icons/medio_3.png" width="50" height="56" onclick="javascript:change_menu('acabados')" style="cursor:pointer;" border="0" />
		<div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">ACABADOS</div>
		</td> 
		
        <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;">
        <img class="hvr-bubble-bottom" src="media/images/07-imagina-tu-cocina/icons/medio_2.png" width="50" height="56" onclick="javascript:change_menu('pared')" style="cursor:pointer;" border="0" />
		<div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">PARED</div>
		</td>
		
       <td width="150" align="center"  style="padding-top:20px; padding-bottom:20px;" class="hvr-bubble-bottom">
       <img src="media/images/07-imagina-tu-cocina/icons/medio_4.png" width="50" height="56" onclick="javascript:change_menu('piso')" style="cursor:pointer;"  class="hvr-bubble-bottom" border="0" />
	   <div style="color:#fff;font-family:'Lato'; font-size:14px;padding-top:10px;">PISO</div>
	   </td>
  </tr>
</table>
</div>

<div id="espacio" style="background-color:#fff; width:100%; display:none;">
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="padding-top:20px; padding-bottom:20px; ">
	<img src="media/images/07-imagina-tu-cocina/icons/medio_gris_1.png"/>
    <!--<div style="background-image:url(media/images/07-imagina-tu-cocina/icons/iconos-2.png); background-size: 60px 54px; height:54px; width:60px;"></div>-->
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
<div style="position:relative;">
<img id="img_espacio_back" src="media/images/07-imagina-tu-cocina/tono-melamina.jpg" width="100%" height="auto" />
<div id='imgLOAD' style="TEXT-ALIGN: center; position:absolute; left:50%;top:10%;">
<img alt='LOADING' height='50' src='media/images/loader.GIF' width='50'/>
</div>
</div>
<!--<div id="espacio_back" style="background-image:url(media/images/07-imagina-tu-cocina/tono-melamina.jpg); width:100%; height:800px; background-size: 100% auto; background-repeat:no-repeat;">
</div>-->
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
    <td style="padding-left:40px; opacity:0.6;">
		<table>
		<tr>
		<td style="border:1px; border-color:#000;" valign="top">
		<img src="media/images/03-catalogo/cocinas/looks/acabados/amaderados/03-Encino.jpg" width="50" height="50" style="border:1px; border-color:#000;" onclick="javascript:acabado()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">AMADERADO</div>
		</td>
		<td style="padding-left:20px;" valign="top">
		<img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg" width="50" height="50" onclick="javascript:acabado()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">LISO</div>
		</td>
		<td style="padding-left:40px;">
		<img src="media/images/03-catalogo/cocinas/looks/acabados/con-diseno/Concreto.jpg" width="50" height="50" onclick="javascript:acabado()" />
		<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">PATRONES</div>
		<div style="color:#ff0000;font-family:'Lato'; font-size:12px;">Edición Especial</div>
		</td>
		<td></td>
		</tr>
		</table>
	  
      
      
      
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
	  
      <!--<div id="color-box2" class="color-box" onclick="color()"></div>   -->
    </td>
	<td style="padding-left:50px;">
	<img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg" style="cursor:pointer;" onclick="javascript:mostrar_paleta()"/>
	<div style="color:#666;font-family:'Lato'; font-size:14px; padding-top:5px;">COLOR</div>
	</td>
  </tr>
</table>
<div id="pared_back" style="background-image:url(media/images/07-imagina-tu-cocina/fondo_samples.png); background-size:100% 600px; width:100%; height:600px; position:relative;">
<div id="paleta_colores" style="display:none;position:absolute; left:60%; top:10px; cursor:pointer;">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/01-Lava.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/02-Mango.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/03-Pera.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
  </tr>
  <tr>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/04-Chai.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/05-Blanco Frosty.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/07-Gris Niebla.jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
  </tr>
  <tr>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/10-Mostaza(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/11-Chai(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
    <td><img src="media/images/03-catalogo/cocinas/looks/acabados/lisos/14-Negro(alto-brillo).jpg" width="40" height="40" onclick="javascript:ocultar_paleta()" /></td>
  </tr>
</table>
<div style="background-color:#F0F0F0; color:#000;font-family:'Lato'; font-size:14px; padding-top:5px; padding-left:5px; padding-bottom:2px;">Hielo</div>
</div>
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
<div align="right" style=" position:relative; padding-top:50px; font-family:'Lato'; width:100%">
    <table style=" width:100%">
        <tr>
            <td align="right" valign="top" style=" width:50% position:relative;">
            <div align="left" style=" width:280px">
            <div style=" font-size:20px; font-weight:300">ISLA<hr align="left" width="40px" /></div>
            <div style=" font-size:12px">Una isla puede ser muy versátil: desde<br />
            servirte como mesa, área de trabajo<br />
            o superficie para colocar algunos<br />
            electrodomésticos. En cualquier caso,<br />
            es un gran ayudante.<br />
            </div>
            </div>
            <div align="right" style=" width:50%;position:absolute; left:0px; bottom:10px">
            <div align="left" style=" width:280px">
            <img width="30px" src="media/images/07-imagina-tu-cocina/icons/icon_3.png" />
            </div>
            </div>
            </td>
            <td align="left" style=" width:50%;">
            <img width="400px" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-2.jpg" />
            </td>
        </tr>
    </table>
<hr align="left" width="80%" />
</div>
<div>
<table cellpadding="0" cellspacing="0" width="100%" style=" font-family:'Lato';">
<tr>
<td height="145px" width="50%"><img height="100%" width="100%" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-3.jpg" /></td>
<td height="145px" width="50%"><img height="100%" width="100%" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-4.jpg" /></td>
</tr>
<tr>
<td align="right" valign="top" style=" width:50% position:relative;">
<div align="left" style=" width:280px; padding-top:30px">
            <div style=" font-size:20px; font-weight:300">ACABADOS<hr align="left" width="40px" /></div>
            <div style=" font-size:12px">Elige si deseas un espacio con la<br />
                calidez del terminado amaderado,<br />
                con la pulcritud de los colores lisos o<br />
                con la originalidad de otros tipos de<br />
                estampado.<br />
            <img style=" padding-top:20px" width="30px" src="media/images/07-imagina-tu-cocina/icons/pequenio_gris_3.png" />
            </div>
            </div>
</td>
<td width="50%">
<img  width="100%" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-5.jpg" />
</td>
</tr>
</table>
</div>
<div style=" padding-top:25px; padding-bottom:25px;">
<hr  width="75%" align="right"/>
</div>
<div>
<div align="right" style=" position:relative; padding-top:50px; font-family:'Lato'; width:100%">
    <table style=" width:100%">
        <tr>
            <td align="right" valign="top" style=" width:50% position:relative;">
            <div align="left" style=" width:280px">
            <div style=" font-size:20px; font-weight:300">COLOR DEL PISO<hr align="left" width="40px" /></div>
            <div style=" font-size:12px">El piso es fundamental para resaltar<br />
todos los muebles, puedes darle un<br />
look dramático escogiendo colores<br />
oscuros, o hacerlo adaptable a<br />
cualquier estilo con un tono neutro.<br />
            <img style=" margin-top:15px" width="30px" src="media/images/07-imagina-tu-cocina/icons/medio_gris_4.png" />
            </div>
            </div>
            </td>
            <td align="left" style=" width:50%;">
            <img width="300px" src="media/images/07-imagina-tu-cocina/modul-imagina-tu-cocina-6.jpg" />
            </td>
        </tr>
    </table>
</div>
</div>
<div style=" height:50px"></div>
<div style="background-color:#FFF; color:#999;padding: 20px;" align="center">
<table rules="all" style="background-color:#FFF; color:#999;" align="center">
	<tr>
    	<td>
        	<table>
                <tr>
                    <td style=" font-family:'Lato';">TECNOLOGÍA <br />SOLIDEX®</td>
                </tr>
                <tr>
                    <td style=" font-family:'LibreBaskerville Italic'; font-size:12px;">Exclusiva de Mödul</td>
                </tr>
                <tr align="left">
                    <td align="left"><hr align="left" width="50px"/></td>
                </tr>
                <tr>
                    <td width="200px" style=" font-size:12px; font-family:'Lato';">La tecnología de la construcción
de nuestros muebles es una de las
razones para darte 10 años de garantía
en los módulos de tu cocina, y la
logramos así...</td>
                </tr>
            </table>
        </td>
        <td align="center" width="120px" style="font-size:10px;font-family:'Lato';"><img src="media/images/02-modul/tecnologia-solidex2.png" /><p>
<p>RESISTENCIA</p>
Uso de material hidrófugo
de 16 mm revestido con
laminado melamínico
blanco resistente a la
humedad</td>
        <td align="center" width="120px" style=" font-size:10px;font-family:'Lato';"><img src="media/images/02-modul/tecnologia-solidex3.png" /><p>
<p>SELLADO</p>        
Cantos visibles y ocultos
sellados con chapa de PVC
blanco, de adherencia
permanente</td>
        <td align="center" width="120px" style=" font-size:10px;font-family:'Lato';"><img src="media/images/02-modul/tecnologia-solidex1.png" /><p>
<p>ARMADO SÓLIDO</p>  
Unión perfecta con
tornillos Confirmat en
perforaciones según el
Sistema 32 mm de
carpintería</td>
    </tr>
</table>
</div>
<div style=" font-size:12px; position:relative;font-family:'Lato'; width:100%; height:150px; background:url(media/images/07-imagina-tu-cocina/promo-redes-sociales-modul.jpg); background-size:100% 250px; background-repeat:no-repeat;">
<div style="height:150px; background-color:rgba(0,0,0,0.7);">
    <div style=" position:absolute; top:30%;left:30%; color:#FFF;">
    <table>
        <tr>
        	<td width="150px"><div style=" font-size:18px;  color:#FFF;width: 150px;">COMPARTE TU <br />COCINA MÖDUL</div></td>
        	<td width="50px"></td>
        	<td valign="top" width="80px"><img src="media/images/07-imagina-tu-cocina/icons/icon_f.png" /><br />COMPARTE<hr align="left" color="#FFF" width="25px" /></td>
        	<td valign="top" width="80px"><img src="media/images/07-imagina-tu-cocina/icons/icon_p.png" /><br />PINEA<hr align="left" color="#FFF" width="25px" /></td>
        	<td valign="top" width="80px"><img src="media/images/07-imagina-tu-cocina/icons/icon_modul.png" />MÁNDALA<br />A MÖDUL<hr align="left" color="#FFF" width="25px" /></td>
        </tr>
    </table>
    
    
    </div>
</div>
</div>
<div>
<style>
   #wrapper { position: relative; }
   #over_map { 
   position: absolute;
   top: 1px;
   left: 350px;
   z-index: 199;
   height:84%;
   padding:20px;
   background-color:rgba(255, 255, 255, 0.7);
   color:#000;
    }
</style>
<div id="wrapper">
   <div id="google_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14932.282452163305!2d-103.387856!3d20.666706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3b71d544f993918!2sMODUL+STUDIO!5e0!3m2!1sen!2suk!4v1428630052348" width="100%" height="350" frameborder="0" style="border:0"></iframe>
   </div>
<table>
    <tr id="over_map">
        <td><div style="font-family:'Lato'; font-weight:300; font-size:24px;">VISITA TU MÖDUL<br/> MÁS CERCANO
<hr align="left" width="50px" /><p style="font-size:12px;">Av. NIÑOS HÉROES 2906<br />(33) 3123 2458 <br />Col. Jardines del Bosque<br />
xxxmodulstudio@xxxx.com<br />
</p>
<p style="font-size:12px;cursor:pointer; cursor: hand;"><a style="color:#000; text-decoration:none;" href="https://www.google.com/maps/d/viewer?mid=zNq46-wvOahM.k7307HOL18xQ">+ Ver mapa en Google maps</a></p>
<p  style="font-size:12px;"><a id="agenda_tu_cita" onclick="agenda_tu_citaClick()" style="cursor:pointer; cursor: hand;">+ Agenda tu cita</a></p>
   </div></td>
        <td valign="top">
        <div id="agenda_tu_cita_div" style="padding-left:20px;">
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