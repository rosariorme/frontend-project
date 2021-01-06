<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modul</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="js/script_menu.js"></script>
<script type="text/javascript" src="js/script-catalog-cocinas.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script type="text/javascript" src="js/slippry.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/slippry.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body {
	background-color: #fff;
}
.sy-pager {
	display:none;
}
#amaderadoss:hover {text-decoration:underline;}
#lisoss:hover {text-decoration:underline;}
#condiseñoo:hover {text-decoration:underline;}
#amaderadoss2:hover {text-decoration:underline;}
#condiseñoo2:hover {text-decoration:underline;}
  </style>
  <script>
    $(document).ready(function(e) {
    amaderados();
	 loading('menu2','five','footer_top','logo_modul');
});
  var images_amaderados_modular={
		  0: "media/images/03-catalogo/closets/looks/modular/amaderados/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/closets/looks/modular/amaderados/02-Argenta.jpg",
		  2: "media/images/03-catalogo/closets/looks/modular/amaderados/03-Habano.jpg",
		  3: "media/images/03-catalogo/closets/looks/modular/amaderados/04-Cacao.jpg",
		  4: "media/images/03-catalogo/closets/looks/modular/amaderados/05-Nogal Castano.jpg",
		  5: "media/images/03-catalogo/closets/looks/modular/amaderados/06-Kumey.jpg",
		  6: "media/images/03-catalogo/closets/looks/modular/amaderados/07-Zebrano Teca.jpg",
		  7: "media/images/03-catalogo/closets/looks/modular/amaderados/08-Cerezo.jpg"
		  };
   var images_amaderados_zoom_modular={
		  0: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/02-Argenta.jpg",
		  2: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/03-Habano.jpg",
		  3: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/04-Cacao.jpg",
		  4: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/05-Nogal Castano.jpg",
		  5: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/06-Kumey.jpg",
		  6: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/07-Zebrano Teca.jpg",
		  7: "media/images/03-catalogo/closets/looks/modular/amaderados/zoom/08-Cerezo.jpg"
   };
   var images_lisos_modular={
		  0: "media/images/03-catalogo/closets/looks/modular/lisos/01-Lava.jpg",
		  1: "media/images/03-catalogo/closets/looks/modular/lisos/02-Mango.jpg",
		  2: "media/images/03-catalogo/closets/looks/modular/lisos/03-Pera.jpg",
		  3: "media/images/03-catalogo/closets/looks/modular/lisos/04-Chai.jpg",
		  4: "media/images/03-catalogo/closets/looks/modular/lisos/05-Blanco Frosty.jpg",
		  5: "media/images/03-catalogo/closets/looks/modular/lisos/06-Gris Niebla.jpg",
		  6: "media/images/03-catalogo/closets/looks/modular/lisos/07-negro.jpg"
		  };
   var images_lisos_zoom_modular={
		   0: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/01-Lava.jpg",
		   1: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/02-Mango.jpg",
		   2: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/03-Pera.jpg",
		   3: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/04-Chai.jpg",
		   4: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/05-Blanco Frosty.jpg",
		   5: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/06-Gris Niebla.jpg",
		   6: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/07-negro.jpg"
		  };
	   var images_condisenio_modular={
		  0: "media/images/03-catalogo/closets/looks/modular/con-diseno/Lino.jpg"
		  };
   var images_condisenios_zoom_modular={
		   0: "media/images/03-catalogo/closets/looks/modular/con-diseno/zoom/Lino.jpg"
		  };
	var images_lisos_modular={
		  0: "media/images/03-catalogo/closets/looks/modular/lisos/01-Lava.jpg",
		  1: "media/images/03-catalogo/closets/looks/modular/lisos/02-Mango.jpg",
		  2: "media/images/03-catalogo/closets/looks/modular/lisos/03-Pera.jpg",
		  3: "media/images/03-catalogo/closets/looks/modular/lisos/04-Chai.jpg",
		  4: "media/images/03-catalogo/closets/looks/modular/lisos/05-Blanco Frosty.jpg",
		  5: "media/images/03-catalogo/closets/looks/modular/lisos/06-Gris Niebla.jpg",
		  6: "media/images/03-catalogo/closets/looks/modular/lisos/07-negro.jpg"
		  };
   var images_lisos_zoom_modular={
		   0: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/01-Lava.jpg",
		   1: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/02-Mango.jpg",
		   2: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/03-Pera.jpg",
		   3: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/04-Chai.jpg",
		   4: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/05-Blanco Frosty.jpg",
		   5: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/06-Gris Niebla.jpg",
		   6: "media/images/03-catalogo/closets/looks/modular/lisos/zoom/07-negro.jpg"
		  };
   var images_amaderados_light={
		  0: "media/images/03-catalogo/closets/looks/light/amaderados/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/closets/looks/light/amaderados/02-Argenta.jpg",
		  2: "media/images/03-catalogo/closets/looks/light/amaderados/03-Habano.jpg",
		  3: "media/images/03-catalogo/closets/looks/light/amaderados/04-Cacao.jpg",
		  4: "media/images/03-catalogo/closets/looks/light/amaderados/05-Nogal Castano.jpg",
		  5: "media/images/03-catalogo/closets/looks/light/amaderados/06-Kumey.jpg",
		  7: "media/images/03-catalogo/closets/looks/light/amaderados/07-Cerezo.jpg"
		  };
   var images_amaderados_zoom_light={
		  0: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/01-Legno Blanco.jpg",
		  1: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/02-Argenta.jpg",
		  2: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/03-Habano.jpg",
		  3: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/04-Cacao.jpg",
		  4: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/05-Nogal Castano.jpg",
		  5: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/06-Kumey.jpg",
		  7: "media/images/03-catalogo/closets/looks/light/amaderados/zoom/07-Cerezo.jpg"
   };
   var images_condisenios_light={
		  0: "media/images/03-catalogo/closets/looks/light/con-diseno/Lino.jpg"
		  };
   var images_condisenios_zoom_light={
		  0: "media/images/03-catalogo/closets/looks/light/con-diseno/zoom/Lino.jpg"
		  };
		  
     function img_change(type,img_selected){
	if(type==0){
	 document.getElementById("zoom").src = ''+images_amaderados_zoom_modular[img_selected]; 
	}else if(type==1){
	 document.getElementById("zoom").src = ''+images_lisos_zoom_modular[img_selected]; 
	}else if(type==2){
	 document.getElementById("zoom").src = ''+images_condisenios_zoom_modular[img_selected]; 
	}else if(type==3){
	 document.getElementById("zoom").src = ''+images_amaderados_zoom_light[img_selected]; 
	}else if(type==4){
	 document.getElementById("zoom").src = ''+images_condisenios_zoom_light[img_selected]; 
	}
  }
  $(document).ready(function(e) {
    amaderados();
  });
  
  function amaderados(){
		//checkvisible();
	  $('#title-picker').html('AMADERADOS');
	  $('#description-picker').html('Apariencia cálida y natural');
	  $('#full-description-picker').html('');
	  $('#picker').html('');
	  $.each(images_amaderados_modular, function( index, value ) {
	  $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(0,'+index+')" height="40"/>');
	  });
	  img_change(0,0);/**/
	  }
	    function lisos(){
	  $('#title-picker').html('LISOS');
	  $('#description-picker').html('');
	  $('#full-description-picker').html('');
	  $('#picker').html('');
	  $.each(images_lisos_modular, function( index, value ) {
      $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(1,'+index+')" height="40"/>');
       });
	  img_change(1,0);
	  }
	  function condisenio(){
	  $('#title-picker').html('CON DISEÑO');
	  $('#description-picker').html(' ');
	  $('#full-description-picker').html('');
	  $('#picker').html('');
	  $.each(images_condisenio_modular, function( index, value ) {
      $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(2,'+index+')" height="40"/>');
       });
	  img_change(2,0);
	  }
	  function light_amaderados(){
	  $('#title-picker').html('AMADERADOS');
	  $('#description-picker').html('');
	  $('#full-description-picker').html('');
	  $('#picker').html('');
	  $.each(images_amaderados_light, function( index, value ) {
      $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(3,'+index+')" height="40"/>');
       });
	  img_change(3,0);
	  }
	  	  function light_condisenio(){
	  $('#title-picker').html('CON DISEÑO');
	  $('#description-picker').html(' ');
	  $('#full-description-picker').html('');
	  $('#picker').html('');
	  $.each(images_condisenios_light, function( index, value ) {
      $('#picker').append('<img src="'+value+'" style="padding:2.5px" width="40" onclick="img_change(4,'+index+')" height="40"/>');
       });
	  img_change(4,0);
	  }		  
</script>
</head>
<body>
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/white.png" />
<div id="menu2" class="menu" style=" background:rgba(0,0,0,0.4); top:0px;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;cursor:pointer; cursor: hand; z-index: 100;">
    <ul>
        <li id="modul" onclick=" window.location.href='modul.php';">MÖDUL</li>
        <li id="catalogo" onclick="window.location.href='catalog.php';">CATÁLOGO</li>
        <li id="sucursales" onclick="window.location.href='sucursales.php';">SUCURSALES</li>
        <li id="blog" onclick="window.location.href='blog';">BLOG</li>
        <li id="creadores" onclick="window.location.href='creadores.php';">CREADORES ></li>
        <li>
            <ul class="social">
            <li id="facebook" style="background:url(media/images/redes-sociales.png) 0 -31px; height:50px;">
            <a href="https://es-la.facebook.com/cocinasintegralesmodul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>|<a href="https://www.pinterest.com/search/pins/?q=M%C3%B6dul" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
           </li>
            <li id="pinterest"></li>
            </ul>
        </li>
    </ul>
</div>

<div id="slider1_container" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(media/images/slider/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"><br/>
            </div>
        </div>
			<div style="position:relative; top:20px; left:400px; z-index:10;padding-top:10px;">
       			 <table rules="cols" style="font-family:'Lato' !important; font-size: 14 pt;cursor:pointer; cursor: hand; ">
                    <tr style="padding-left:10px; padding-right:10px;">
                        <td style="padding-left:10px; padding-right:10px"><strong>Looks</strong></td>
                        <td style="padding-left:10px; padding-right:10px">Garantía</td>
                    </tr>
                </table>
   			</div>   
        <div style="position: absolute; width: 300px; height: 100%; top: 0px; z-index:10;">
                <div style="position:absolute; left:100px; top:30px;"></div>
                    <div style="color:#000; position: absolute; width: 300px; height: 300px; top: 100px; left: 200px; background-color:rgba(255,255,255,0.7);">
                        <div style="padding:30px;">
                            <div style="font-family:'Lato' !important; font-weight:300; font-size:40px;">CLOSETS</div>
                            <div style="font-family:'LibreBaskerville Italic'; font-weight:100; font-size:12px;">Configura tu espacio</div>
                            <hr style="width:50px; border-color:#000;" align="left">
                            <div style="font-family:'Lato'; font-size: 12px;">Mödul te ofrece la posibilidad de almacenar tus artículos personales y organizar tu vida a tu gusto, con orden, estilo y a la medida de tus necesidades.</div>
                            <br/>
                         </div>
					</div>
					<div style="color:#FFF; position: absolute; width: 130px; height: 100%; top: 0px; left: 800px; background-color:#000; opacity: 0.8; filter: alpha(opacity=60);">
                    <div style="padding:10px; padding-top:100px;">
                        <div style="font-family:'Lato' !important; font-weight:300; font-size:20px;">UN CAFÉ<br/>CON MÖDUL</div>
                        <div style="font-family:'LibreBaskerville Italic'; font-size:12px;" align="left">Cotiza tu cocina</div>
                        <hr align="left" style="border-color:#000; width:50px; position:relative; left:0px;"/>
                        <div style="font-size:12px; font-family:'Lato'">Inicia el día con un buen café preparado con amor. Si tienes pensado remodelar o instalar una cocina desde cero, visita una de nuestras sucursales.</div>
                        <br/>
                        <a href="un_cafe_con_modul.php" style="font-size:12px; text-decoration:none; color:#FFF2A1; font-weight:bold;">+ AGENDA AQUÍ</a>
                        </div>
                    </div>
                </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;height: 500px; overflow: hidden;">
            <div><img u="image" src="media/images/03-catalogo/closets/slider-promo/closet-modular-modul.jpg" /> </div>
            <div><img u="image" src="media/images/03-catalogo/closets/slider-promo/IMG_0117.jpg" /></div>
            <div><img u="image" src="media/images/03-catalogo/closets/slider-promo/IMG_6641.jpg" /> </div>
        </div>
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;"><div u="prototype"></div></div>
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
    </div>
</div>
<div align="left" style="padding-left:400px;">
<div style="background-color:#fff; color:#999; font-family:'Lato';  font-weight:300;">
<table style="padding-top:30px; padding-bottom:10px;">
  <tr>
    <td style="font-family:'Lato' !important; font-size:60px; font-weight:300;">LOOKS</td>
    <td width="50px"></td>
    <td>
    Módulos exactos para el tamaño de tu cocina.<br/>
Mezcla, unifica, crea tu espacio… El resultado será único.
    </td>
  </tr>
</table> 
<div style="padding-left:0px;"><hr align="left" width="100%"/></div>
<table style="background-color:#fff; color:#000; font-family:'Lato';  font-weight:300; padding-top:20px;">
<tr style="font-family:'Lato' !important; font-size:30px; font-weight:300;">
<td>MODULAR</td>
<td width="100px"></td>
<td>LIGHT</td>
</tr>
<tr style="font-family:'LibreBaskerville Italic'; font-size:16px;">
<td>Garantía por 10 años<hr width="55px" align="left" /></td>
<td width="100px"></td>
<td>Garantía por 5 años<hr  width="55px" align="left"  /></td>
</tr>
<tr style="font-size:12px; font-family:'Lato'">
<td width="250">La practicidad de elegir un mueble previamente armado con módulos completos y cajones de diversas medidas preestablecidas para quedar bien en cualquier espacio. El clóset Modular es un mueble completo y armado que colocaremos donde tú desees.</td>
<td width="100px"></td>
<td width="250">Configura, con ayuda de nuestros diseñadores, los módulos de cajones y repisas del tamaño y con el acomodo exacto que requieres. ¿Con puertas o sin ellas? Tú eliges el tipo de acabado.Una vez terminado, instalaremos tu clóset Light usando tu pared como base, ya sea dentro de un nicho o al nivel del muro. 
</td>
</tr>
</table>
<br />
<br />
<table style="color: #999; font-family:'Lato'; font-weight:300; font-size:14px; width:600px; cursor:pointer;">
    <tr>
        <td>
        	<table>
            	<tr>
                	<td onclick="amaderados()" id="amaderadoss">+ Amaderados</td>
                </tr>
                <tr>
                	<td onclick="lisos()" id="lisoss">+ Lisos</td>
                </tr>
                <tr>
                	<td onclick="condisenio()" id="condiseñoo">+ Con diseño</td>
                </tr>
            </table>
        </td>
        <td width="100px"></td>
        <td>
        	<table>
            	<tr>
                	<td onclick="light_amaderados()" id="amaderadoss2">+ Amaderados</td>
                </tr>
                <tr>
                	<td onclick="light_condisenio()" id="condiseñoo2">+ Con diseño</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br />
<br />
</div>
</div>
<div align="center" style=" background-color:#333; color:#fff; padding:10px">CONOCE NUESTROS COLORES Y ACABADOS DE CLÓSET <a style=" color:#fff2a1">MODULAR</a> </div>
<div style=" background-color:#fff; color:#000">
<div id="amaderados" align="left" style="color:#000; width:100%">
<table border="0" style="border-collapse:collapse;">
  <tr width="100%">
    <td  align="left"valign="top" width="50%" style="padding-left:400px;">
    <div align="left" style="width:300px;">
    <div id="title-picker" style="font-family:'Lato' !important; font-size:30px; font-weight:300; padding-top:10px;">AMADERADOS</div>
    <div id="description-picker" style="font-family:'LibreBaskerville Italic'; font-size:16px;">Apariencia cálida y natural</div>
    <hr width="50" align="left"/>
    <div id="full-description-picker" style="font-family:'Lato';font-size: 12px; padding-bottom:10px; padding-right:5px;">
    Reflejos de modernidad en una textura
    lustrosa y tersa de fácil mantenimiento,
    que suma la capacidad de pulirse para
    seguir brillando como el primer día.
    </div>
    <div id="picker" style="cursor:pointer;">
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/01-Legno Blanco.jpg" width="40" height="40" />
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/02-Argenta.jpg" width="40" height="40"/>
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/03-Habano.jpg" width="40" height="40"/>
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/04-Cacao.jpg" width="40" height="40"/>
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/05-Nogal Castano.jpg" width="40" height="40" />
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/06-Kumey.jpg" width="40" height="40" />
    <img src="media/images/03-catalogo/closets/looks/light/amaderados/07-Cerezo.jpg" width="40" height="40" />
    </div>
    </div>
    </td>
    <td width="812" height="400" id="zoomid" align="right">
    <img id="zoom" src="media/images/03-catalogo/closets/looks/light/amaderados/zoom/01-Legno Blanco.jpg" width="100%" height="400"/>
    </td>
  </tr>
</table>
<script>
function img_change2(src){
	$('#zoom').attr('src','media/images/03-catalogo/closets/looks/light/amaderados/zoom/'+src);
	}
</script>
</div>

<div style="position:relative; background-image:url(media/images/03-catalogo/cocinas/garantia.jpg); background-size:100% auto; height:80px;"> 
<div id="texto_garantia" style="position: absolute; top: 10px; left: 30%; color: #EBEFA1; font-family: 'Lato'; font-size: 30px; font-weight: 300;">
<div valign="middle" style="padding-top:10px;width:50px; height:100%; background-image:url(media/images/logo-garantia.png); background-size:60px 60px; height:60px; width:100%; background-repeat:no-repeat;">
<div style="padding-left:70px;">HASTA 10 AÑOS DE GARANTÍA  |   <a style="font-size:12px; vertical-align:middle; cursor:pointer;" onclick="ver_garantia()">+ VER MÁS</a></div>
</div>
</div>
</div>

<div id="ver-mas" style=" background-color:#fff; color:#666;">
    <div class="garantia-content" align="center">
        <table class="garantia-text" style=" font-family:'Lato'; font-size:12px;">
            <tr>
                <td>GARANTÍA PARA EL CLIENTE FINAL</td>
                <td>GARANTÍA PARA EL PROFESIONAL</td>
            </tr>
            <tr>
                <td style=" font-family:'Lato'; font-size:12px">Si los adquieres en una tienda Mödul Studio, tus muebles
        de cocina y clóset Modular están garantizados por 10 años
        (o, tratándose de clóset Light, por 5 años) contra defectos
        de materiales, mano de obra y vicios ocultos. El
        compromiso es reparar o reemplazar las piezas
        defectuosas sin costo. Sólo aplica para muebles fabricados
        por Mödul.</td>
                <td style=" font-family:'Lato'; font-size:12px">Si eliges a Mödul Studio para ser tu proveedor de mayoreo
        en los proyectos residenciales de tu constructora o
        despacho de arquitectura, puedes estar tranquilo, ya que
        una vez que entregas la vivienda, tu cliente tratará
        directamente con nosotros para encargarnos de tramitar la
        garantía de los muebles fabricados por nosotros, si fuera
        necesario.</td>
            </tr>
        </table>
    </div>
<hr  style="width:1180px;" align="right"/>
<div class="garantia-content" align="center">
<table class="garantia-text" style=" font-family:'Lato'; font-size:12px">
	<tr>
    	<td>PARA VALIDAR TU GARANTÍA</td>
    </tr>
    <tr>
    	<td>
        	<ul>
            	<li>Debes asegurarte de que la póliza está vigente</li>
            	<li>Debes contar con un documento que avale la compra de tu producto en alguna de nuestras tiendas</li>
            	<li>Acudir a la sucursal para hacer la reclamación. Ahí se tramitará la reparación o sustitución de la pieza defectuosa; en ningún caso se hará devolución de dinero</li>
            	<li>Si se tratara de un artículo descontinuado, Mödul lo reparará o reemplazará por uno de similares o mejores características</li>
            </ul>
        </td>
    </tr>
</table>
</div>
</div>
</div>

<table cellpadding="0" cellspacing="0" height="500px">
<tr>
<td width="50%" height="500px">    
	<table cellpadding="0" cellspacing="0">
        <tr>
            <td><img src="media/images/03-catalogo/closets/closet-modular-amarerado-modul.jpg" width="100%" height="250"/></td>
            <td height="50%"><img src="media/images/03-catalogo/closets/modulares.jpg" width="100%" height="250" /></td>
        </tr>
        <tr>
            <td><img src="media/images/03-catalogo/closets/ordena-tu-casa.jpg" width="100%" height="250"/></td>
            <td width="50%" style="background-color:#000; color:#FFF; font-family:'Lato'; font-size:24px; font-weight:300;"><div style="padding-left:20px">ORDEN Y ARMONÍA <hr align="left" width="50px" style="padding-left:20px" color="#FFF" /></div></td>
        </tr>
    </table>
</td>
<td width="50%"  height="500px">
<img src="media/images/03-catalogo/closets/modul-closet.jpg" width="100%" height="500px" />
</td>
</tr>
</table>

</div>
</div>

</div>
<div>
<img style=" position:relative; left:50%;" src="media/images/03-catalogo/closets/soluciones-modulares.jpg" />
</div>
 <div id="five" style="width:100%; position:absolute">
 <table align="center"  style="width:100%">
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
</body>
<footer id="footer_top" style="background: #FFF; color:#000;">
<div align="center" style="width: 100%;color:#000;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
</footer>
<!--footer  style="width:100%; top:50px;position:relative; background:#fff; vertical-align:text-bottom">
<div style="width:100%; position:relative;">
 <div id="five">
 <table align="center"  style="width:100%">
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

</div>
</footer-->
</html>