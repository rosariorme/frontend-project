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
<script src="js/jquery-collision.min.js"></script>
<script src="js/jquery-collision.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/hover.css">
  <link rel="icon" type="image/gif" href="media/images/animated_favicon1.gif" />
  <!--<link rel="shortcut icon" type="image/x-icon" href="media/images/favicon.ico" />-->
  <link href="//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Oswald:400normal|Open+Sans:400normal|Roboto:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Open+Sans+Condensed:300normal&amp;subset=all" rel="stylesheet" type="text/css">
<script src="//use.typekit.net/hkg3arf.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.7.1.min.js"></script>
  <style type="text/css">
  body {
	background-color: #000;
	-webkit-font-smoothing: subpixel-antialiased;
}
/*.imagina_tu_cocina_boton {
	padding-left: 10px;
	padding-right: 10px;
	height:35px;
	font-size:16px;
	font-family:'Lato';
}
.imagina_tu_cocina_boton:hover {
	background-color:#fff;
	color:#000;
	
}*/
.imagina_tu_cocina_boton 
{
	padding-left: 10px;
	padding-right: 10px;
	height:35px;
	font-size:16px;
	font-family:'Lato';
	/*display: inline-block;*/
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}

.imagina_tu_cocina_boton:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  color:#000;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.imagina_tu_cocina_boton:hover, .imagina_tu_cocina_boton:focus, .imagina_tu_cocina_boton:active {
  color: #000;
}
.imagina_tu_cocina_boton:hover:before, .imagina_tu_cocina_boton:focus:before, .imagina_tu_cocina_boton:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}

.imagina_tu_cocina_boton2 {
	padding-left: 10px;
	padding-right: 10px;
	height:35px;
	font-size:16px;
	font-family:'Lato';
	vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}

.imagina_tu_cocina_boton2:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #000;
  color:#fff;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.imagina_tu_cocina_boton2:hover, .imagina_tu_cocina_boton2:focus, .imagina_tu_cocina_boton2:active {
  color: #fff;
}
.imagina_tu_cocina_boton2:hover:before, .imagina_tu_cocina_boton2:focus:before, .imagina_tu_cocina_boton2:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}

/*.imagina_tu_cocina_boton2:hover {
	background-color:#000;
	color:#fff;
	
}*/
::-moz-selection{
   background: #fff396;
   color: #000;
}

::selection {
   background: #fff396;
   color: #000;
}
.conoce_mas_modul {
	font-weight:bold;
	}
.conoce_mas_modul:hover {
	color:#8a281b;
}
.menu li:hover {
	color:#fff1a1;
	/*font-weight:bold;*/
}
/*.over1 {
	font-family:'Lato' !important;
	text-decoration:none;
	color:#fff;
}
.over1:hover {
	background-color:#fff1a1;
	color:#000;
}
.over2 {
	font-family:'Lato' !important;
	text-decoration:none;
	color:#000;
}
.over2:hover {
	font-weight:bold;
}*/
  </style>
<script>
document.getElementById("img_fb").onmouseover = function() {document.getElementById('img_fb').src='media/images/facebook-icon.png'};
	document.getElementById("img_fb").onmouseup = function() {document.getElementById('img_fb').src='media/images/facebook_white.png'};
</script>
</head>
<body class="loading">
	<div id="preload">
	       	<img src="media/images/01-inicio/muebles-modulares.jpg">
	       	<img src="media/images/01-inicio/Modul-recomienda/Silestone_encimera_blanco-zeus-negro-tao.jpg">
	       	<img src="media/images/01-inicio/una-familia-modul.jpg">
	       <img src="media/images/01-inicio/innovacion-disenio.jpg">
		  <img src="media/images/01-inicio/calidad-asegurada.jpg">
 
       	</div>
       	
       	<main>
       	 
	        	<section id="slide-1" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-1"
				>
				<img id="logoo" src="media/images/white.png" width="81" height="130" style="z-index:10;position:absolute; left:2%;" />

<table style="padding-top: 200px; padding-left: 460px; position: relative; top: 200px;left: 30%;">
    <tr>
    	<td></td>
    	<td valign="top"> <div><div style=" font-family:'lato' !important;font-weight:300; font-size:55px;line-height:58px; ">COCINAS <br />MODULARES</div>
    <div style="font-family:'serif'; font-style:italic; font-size:14pt; padding-top:10px; font-weight:100;">
    Espacios para cada deseo 
    <hr style="color:#fff" width="50px" align="left"/>
    
    </div>
  </div>
  
  
  
  </td>
        <td valign="top" style="vertical-align: top;"> 
		<div style="font-family:'Lato' !important; font-size:14px; width:160px; padding-top:3px; padding-left:50px; line-height:23px; font-weight:300;">
        Tenemos todo: desde<br/>
        los muebles y las<br/>
        cubiertas hasta los<br/>
        accesorios y equipo<br/>
        electrodoméstico. Todo<br/>
        para armar a tu medida<br/>
        la cocina integral<br/>
        de tus sueños.<br/>
</div>
</td>
    </tr>
</table>
			    </div>
			</section>

		
<div id="menu" class="menu"  style="font-family:'Lato' !important;font-weight:300; font-size: 55 pt;top:0px;cursor:pointer;z-index:10;">
    <ul>
        <li id="modul" onclick=" window.location.href='modul.php';">MÖDUL</li>
        <li id="catalogo" onclick="window.location.href='catalog.php';">CATÁLOGO</li>
        <li id="sucursales" onclick="window.location.href='sucursales.php';">SUCURSALES</li>
        <li id="blog" onclick="window.location.href='blog';">BLOG</li>
        <li id="creadores" onclick="window.location.href='creadores.php';">CREADORES ></li>
        <li>
            <ul class="social">
           <li style="vertical-align:middle;"  id="facebook" onclick="javascript: window.location = 'https://es-la.facebook.com/cocinasintegralesmodul';">
            <img id="img_fb" style="vertical-align:middle;" src="media/images/07-imagina-tu-cocina/icons/facebook-1.png" width="20" height="20"
            onmouseover="javascript:document.getElementById('img_fb').src='media/images/07-imagina-tu-cocina/icons/facebook-2.png'" 
            onmouseout="javascript:document.getElementById('img_fb').src='media/images/07-imagina-tu-cocina/icons/facebook-1.png'" />
           </li>
           <li style="vertical-align:middle;">&nbsp; | &nbsp;</li>
            <li style="vertical-align:middle;" id="pinterest" onclick="javascript: window.location = 'https://www.pinterest.com/search/pins/?q=M%C3%B6dul';">
            <img style="vertical-align:middle;" id="img_pt" src="media/images/07-imagina-tu-cocina/icons/pinterest1.png" width="20" height="20"
            onmouseover="javascript:document.getElementById('img_pt').src='media/images/07-imagina-tu-cocina/icons/pinterest2.png'" 
            onmouseout="javascript:document.getElementById('img_pt').src='media/images/07-imagina-tu-cocina/icons/pinterest1.png'" />
            </li>
            </ul>
        </li>
    </ul>
</div>
<div id="first" style="z-index:100;background: linear-gradient(to left, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0), #000) no-repeat scroll 0% 50% transparent;width:100%; position:absolute;z-index: 100;">
 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
            <nav class="nav_menu" style="">
              <a href="abre-tu-negocio.php" class="a_black2">FRANQUICIAS</a>
              <a class="a_black3">|</a>
              <a href="experimenta_la_calidad.php" class="a_black2">MODUL RECOMIENDA</a>
              <a class="a_black3">|</a>
              <a  href="glosario.php" class="a_black2">GLOSARIO</a>
              <a  href="visualiza_tu_cocina.php" class="a_yellow1">IMAGINA TU COCINA AQUÍ</a>
              <a  href="un_cafe_con_modul.php" class="a_yellow2">UN CAFÉ CON MÖDUL </a>
            </nav>
        </td>
    </tr>
 </table>
</div>
<!--<section id="slide-2" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-2">-->
			    	
<div style="padding-left:30%; padding-top:10px; background-image:url(media/images/01-inicio/Modul-recomienda/Silestone_encimera_blanco-zeus-negro-tao.jpg); height:750px;">
<table>
	<tr>
        <td style="padding-top: 55px;">
        <div  class="over_map_remate" style="padding-left:30px;font-size:10px;width:347px; height:551px;">
        	<table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="font-size:55px;padding-top: 40px; padding-left:10px; font-family:'Lato' !important; font-weight:100;font-weight:300; line-height:55px;">
                EL REMATE<br /> PERFECTO<br /> DE TU<br /> COCINA<br/>
                </td>
              </tr>
              <tr>
                <td style="font-size:16px; font-family:'LibreBaskerville Italic'; padding-top:10px;  padding-left:10px;font-weight:100;">Adaptables a cualquier estilo
                </td>
              </tr>
              <tr>
                <td style="padding-top:7px; padding-left:10px;">
                <hr align="left" width="50px"  style=" border-color:#000" />
                </td>
              </tr>
              <tr>
                <td style="padding-right:20px; padding-top:7px; font-family:'Lato' !important; font-size: 14px; line-height:20px; padding-left:10px;">
                	Silestone fabrica cubiertas de cuarzo<br/>
                    natural con resina de poliéster, con<br/>
                    duración garantizada por 15 años.<br/><br/>
                    · Resistencia a las manchas y al rayado<br/>
                    · Amplia gama de texturas y colores<br/>
                    · Dureza e higiene<br/>
                </td>
              </tr>
              <tr>
                <td class="conoce_mas_modul" style=" padding-left:10px;font-family: 'Lato' !important; font-size: 16px;cursor:pointer; cursor: hand; padding-top:20px; padding-bottom:40px;">+ CONOCE MÁS</td>
              </tr>
            </table>
</div>
		</td>
    </tr>
</table>

</div>
<!--			    </div>
</section>
			<section id="slide-3" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-3"
				>-->
<div style=" background-image:url(media/images/01-inicio/una-familia-modul.jpg); height:760px; background-size:1922px 780px;">
   <div style="padding-left:30%; padding-top:105px;"> 
    <table cellspacing="0" cellpadding="0" style="padding-left:30%; padding-top:105px;border: solid #fff 1px;background-color:rgba(0, 0, 0, 0.7); width:470px; height:470px;padding-left:30px;">
           <tr>
            <td style="height:70px; font-size:55px; padding-top: 30px; padding-left:30px; font-family:'Lato' !important; font-weight:100;font-weight:300; line-height:55px; padding-bottom:15px;">
                UNA FAMILIA<br /> MÖDUL
                </td>
              </tr>
              <tr>
                <td style="height:20px; vertical-align:top; padding-left:30px; font-weight:lighter; font-size:18px; font-family:'serif'; font-style:italic; padding-top:0px;">Funcionalidad inteligente
                </td>
              </tr>
              <tr style="padding-left:30px;">
                <td valign="top" style="vertical-align:top;padding-top:5px; padding-bottom:5px; padding-left:30px; height:20px;">
                <hr style="color:#fff" width="50px" align="left"/>
                </td>
              </tr>
              <tr>
                <td valign="top" style="vertical-align:top; font-weight:300; padding-right:20px; font-family:'Lato' !important; font-size: 14px; line-height:20px; padding-left:30px;">
                	Además de vestir el corazón de tu<br/>
                    hogar con una cocina, te ofrecemos<br/>
                    muebles modulares para proyectar tu<br/>
                    estudio, cuarto de entretenimiento,<br/>
                    área de lavado, closets y baños.<br/>
                    Todo para que tu familia viva en un<br/>
                    ambiente estético y organizado.<br/><br/>
                    <table  style="color:#fff; border: solid #fff 1px; padding-left:30px;cursor:pointer; cursor: hand; font-size:16px; padding-top:20px;">
                    <tr>
                        <td onclick="javascript:window.location = 'visualiza_tu_cocina.php'" id="imagina_tu_cocina_boton" class="imagina_tu_cocina_boton" width="100%">IMAGINA TU COCINA AQUÍ</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table></div>
    </div>
			    	
<!--			    </div>
			</section>
	
			<section id="slide-4" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-4"
				>-->
<div style=" position:relative; background-image:url(media/images/01-inicio/calidad-asegurada.jpg); height:758px;">
<div style="padding-top: 80px;padding-left:30%;">
    <table style="width:250px; height:400px;color:#fff; padding-left:20px; padding-top:10px; vertical-align:top">
    <tr>
    <td style="  font-family:'Lato';font-size:55px; line-height:55px; font-weight:300;">INNOVACIÓN<br />Y DISEÑO</td>
    </tr>
    <tr><td style=" padding-top:5px; font-family:'serif'; font-style:italic; font-size:18px;" valign="top">Tú eliges</td></tr>
    <tr><td><hr align="left" width="50px" /></td></tr>
    <tr><td style="font-family:'Lato'; font-weight:300;" valign="top">¿Alto diseño?, ¿uso continuo y<br/>
familiar?, ¿espacio pequeño?, ¿gusto<br/>
tradicional o tecnológico? El límite<br/>
es tu imaginación. Nuestros muebles<br/>
con tecnologías integradas harán del<br/>
uso de tu cocina un placer. Acércate<br/>
a Mödul Studio; nuestros diseñadores<br/>
crearán contigo el espacio que sueñas<br/>
disfrutar.</td></tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
  <table  style="color:#fff; border: solid #fff 1px; padding:5px;cursor:pointer; cursor: hand; width:225px;">
  	<tr>
    	<td class="imagina_tu_cocina_boton" align="center">¿QUÉ ES MÖDUL?</td>
    </tr>
  </table>
</td>
</tr>
<tr><td height="30px"></td></tr>
    </table>
</div>
<div align="right" style="height:50px; color:#fff; position:absolute; bottom:20px; right:10%; font-family:'Lato';"><span style="font-style:italic;">Cocina Xuni</span>, una edición especial inspirada en México</div>
</div>
			    	
<!--			    </div>
			</section>	-->





<table cellpadding="0" cellspacing="0" width="100%" height="580px">
<tr>
<td valign="top" style="background-image: url('media/images/01-inicio/textura1.jpg'); padding-top:80px" width="50%" height="480px">
<div>
	<div style="padding-left:60%; font-size:24px; font-family:'Lato';  font-weight:300; font-size: 34px; line-height:37px;">GENERA <br />SENSACIONES<br /></div>
    <div style="padding-left:60%; font-family:'serif'; font-style:italic; font-size:18px;height:20px; padding-top:10px; padding-bottom:7px;">Adaptables a cualquier estilo</div>
</div>
<div><hr width="70%" align="left"/></div>
<div><p style="padding-left:60%;font-family:'Lato'; font-weight:300; width:250px;">Variedad de acabados y texturas<br/>
disponibles en cada mueble Mödul.<br/>
Personaliza tus espacios con el <span style="font-family:'serif'; font-style:italic;">look</span><br/>
que vaya contigo.</p>
<br />
<div style="padding-left:60%">
<table style="color:#fff; border: solid #fff 1px; padding:5px; cursor:pointer; cursor: hand; width:229px;">
  	<tr>
    	<td align="center" style="font-family:'Lato';  font-weight:300;" class="imagina_tu_cocina_boton">APARIENCIAS Y ACABADOS</td>
    </tr>
  </table>
  </div>
</div>
</td>
<td valign="top" width="50%"  height="500px">
	<table width="100%"   height="500px" cellpadding="0" cellspacing="0">
    	<tr>
        <td valign="top" style="background-image: url('media/images/01-inicio/textura2.jpg'); color:#000;" width="100%" height="300px">
        <div style=" padding-left:40px; padding-top:80px">
        	<div style=" font-family:'Lato'; font-size:34px; font-weight:300;line-height:37px;">APARIENCIA <br />NATURAL<br /></div>
        	<div style=" font-family:'LibreBaskerville Italic'; padding-top:7px;">Espacios cálidos<br /></div>
        	<div><hr align="left" width="50px"  style=" border-color:#000" /></div>
        </div>
        </td>
        </tr>
        <tr>
      		<td valign="top" style="background-image: url('media/images/01-inicio/textura3.jpg')" width="100%" height="300px">
            <div style=" padding-left:40px; padding-top:60px">
        	<div style=" font-family:'Lato'; font-size:34px; line-height:37px; font-weight:300;">ASPECTO<br />INDUSTRIAL<br /></div>
        	<div style=" font-family:'LibreBaskerville Italic'; padding-top:7px;">Espacios contemporáneos<br /></div>
        	<div><hr align="left" width="50px" style=" border-color:#fff"/></div>
        </div>
            </td>
        </tr>
    </table>
</td>
</tr>
</table>
<!--			<section id="slide-5" class="homeSlide">
				<div class="bcg" style="position: relative;"
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-5"
				>-->
<div id="fin" style="position:relative; background-image:url(media/images/01-inicio/innovacion-disenio.jpg); height:760px;">
<div id="calidad_asegurada" style="padding-top: 105px;padding-left:30%;">
    <table style="width:470px; height:470px;background-color:rgba(255, 255, 255, 0.7);color:#000; padding:20px;  vertical-align:top">
    <tr>
    <td style="padding-left: 30px; padding-top:30px;padding-right: 150px; font-family:'Lato';font-size:55px; font-weight:300; line-height:55px;">CALIDAD<br />ASEGURADA</td>
    </tr>
    <tr><td valign="top" style="padding-left: 30px;padding-right: 150px; font-family:'LibreBaskerville Italic'; pading-top:10px;">Mödul Studio es tranquilidad<hr color="#000000" style="  background:#000;" width="50px" /></td></tr>
    <tr><td valign="top" style="padding-left: 30px;padding-right: 150px; font-size:14px; width:100px; font-family:'Lato';">Diez años de garantía respaldan tu<br/>
elección. Nuestros muebles de calidad<br/>
profesional significan que están<br/>
construidos para uno uso extendido y<br/>
repetido durante años, lo que optimiza<br/>
tu inversión.<br /><br />
<table style="color:#000; border: solid #000 1px; padding:5px;cursor:pointer; cursor: hand; width:225px; padding-top:20px;">
  	<tr>
    	<td align="center" width="100%" class="imagina_tu_cocina_boton2">CONOCE MÁS</td>
    </tr>
  </table></td></tr>
<tr><td height="30px"></td></tr>
    </table>
<div align="left" style="height:50px; color:#fff; position:absolute; top:600px; left:30%; font-family:'Lato';"><span style="font-style:italic;">Cocina Xuni</span>, zona gourmet</div>
    </div>
<div id="pie" align="center" style="position:absolute; bottom:0px; width: 100%;color:#fff;font-size:12px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="text-align:center; padding-left:30px; font-family:'Lato';font-size:16px;border-top: 2px solid black;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
        <td style="font-family:'Lato'; font-size:16px;border-top: 2px solid black;">POR</td>
        <td style="text-align:right; padding-right:20%;border-top: 2px solid black;"><img style=" background:#fff" src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
      </tr>
    </table>
</div>
<!--<hr id="id_pie" />-->
	</div>		    	
	<!--		    </div>
			</section>-->
</main>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>
</body>

</html>