<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Modul</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/parallax.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'/>
  <style type="text/css">
  body {
	background-color: #000;
}
.submenu_movil {
	cursor:pointer;
	padding-bottom:5px;
	padding-top:5px;
}
.submenu_movil:hover {
	background-color:#F63;
	color:#000;
	cursor:pointer;
}
.links_mob {
	background-color:#999; 
	color:#fff;
	font-family:'Lato'; font-size:16px;
}
.links_mob:hover {
	background-color:#FF9;
	color:#666;
}

  </style>
<script>
var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)){ 
window.location = "http://192.185.138.124/~emil/modul/mobile/";
}

function toggle(){
	$("#sub_menu").slideToggle();
}
var width = $(window).width();
$(window).resize(function(){
   if($(this).width() <= 595){
      width = $(this).width();
      console.log(width);
	  
	  // Hacer el responsive
	  $("#cocinas_modulares").css("padding-left", "5px");
	  $("#cocinas_modulares").css("width", "100%"); 
	  $("#menu_movil").css("display", "block");
	  $("#menu").css("display", "none");
	  $("#logo").css("display", "none");
	  $("#tenemos_todo").css("display", "none");
	  $("#tenemos_todo_movil").css("display", "block");
	  $("#first").css("display", "none");
	  $("#second").css("display", "none");
	  $("#titulo_deseo").css("font-size","17px");
	  $("#titulo_deseo").css("width","100%");
	  $("#logo2").css("display","none");
	  $("#el_remate_de_tu_cocina").css("display","none");
	  $("#una_familia_modul").css("display","none");
	  $("#modul_recomienda").css("display","block");
	  $("#tecer_parallax").css("height","700px;");
	  $("#modul_recomienda_movil").css("display","block");
	  $("#links_mobile").css("display","block");
	  $("#innovacionydiseno").css("display","none");
	  $("#genera_sensaciones").css("display","none");
	  $("#three").css("display","none");
	  $("#calidad_segurada").css("display","none");

   }
   else {
	   // Pantalla Grande
	   $("#cocinas_modulares").css("padding-left", "25%"); 
	   $("#cocinas_modulares").css("width", "100px");
	   $("#menu_movil").css("display", "none");
	   $("#menu").css("display", "block");
	   $("#logo").css("display", "block");
	   $("#tenemos_todo").css("display", "block");
	   $("#tenemos_todo_movil").css("display", "none");
	   $("#first").css("display", "block");
	   $("#second").css("display", "block");
	   $("#titulo_deseo").css("font-size","18 pt");
	   $("#titulo_deseo").css("width","150px");
	   $("#logo2").css("display","block");
	   $("#el_remate_de_tu_cocina").css("display","block");
	   $("#una_familia_modul").css("display","block");
	   $("#modul_recomienda").css("display","none");
	   $("#tecer_parallax").css("height","100%");
	   $("#modul_recomienda_movil").css("display","none");
	   $("#links_mobile").css("display","none");
	   $("#innovacionydiseno").css("display","block");
	   $("#genera_sensaciones").css("display","block");
	   $("#three").css("display","block");
	   $("#calidad_segurada").css("display","block");
   }
});
</script>
</head>
<body>
<div id="primer_parallax" class="parallax-container big" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="media/images/01-inicio/muebles-modulares.jpg" data-natural-width="1400" data-natural-height="900">


<div id="menu_movil" style=" display:none;font-family:'Lato';font-size:20px; font-weight:500; background-color:#000;" align="right">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" align="left" style="padding-left:10px;"><img src="media/images/icono_modul_mobile.png" name="logo" width="30px" height="50px"/></td>
    <td width="70px" align="right" valign="top" style="text-align:right; padding-top:7px;">
    <span id="mmenu" style="cursor:pointer;text-decoration:none; color:#fff; text-align:right" onclick="toggle()">MENÚ</span>
    <b style="color:#F63;"> | </b>
    </td>
    <td width="140px" align="right" valign="top" style="padding-top:7px;">
    <a href="" style="text-decoration:none; color:#fff; padding-left:0px;">SUCURSALES</a>
    <b style="color:#F63;"> | </b></td>
    <td width="24px" align="right" valign="top" style="padding-right:10px;padding-top:7px;">
    <a href=""><img src="media/images/telefono-icono.png" width="18" height="21" /></a>
    </td>
  </tr>
</table>
</div>
<div id="sub_menu" style="display:none; position:absolute; top:10; left:0; width:100%; z-index:10; height:100%; background-color:#000; padding-left:5px; font-family:'Lato'; font-weight:300; font-size:20px;" align="center">
        
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td class="submenu_movil" align="center">MÖDUL</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">CATALOGO</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">BLOG</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">CREADORES</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">FACEBOOK</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">PINTEREST</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">FRANQUICIAS</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">MODUL RECOMIENDA</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">GLOSARIO</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">IMAGINA TU COCINA AQUI</td>
              </tr>
              <tr>
                <td class="submenu_movil" align="center">UN CAFE CON MODUL</td>
              </tr>
            </table>
</div>

<table id="cocinas_modulares">
	<tr>
    	<td><div><img  id="logo" src="media/images/white.png"/></div></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    	<td></td>
    	<td valign="top">
        <div id="movil_primera_pag">
        	<div id="titulo_cocinas_modulares" class="div-1" style=" font-family:'Lato' !important;font-weight:300; font-size:55 pt; ">COCINAS <br />MODULARES</div>
    		<p id="titulo_deseo" class="espacios-para-cada-deseo" style="font-family:LibreBaskerville Italic; font-size:18 pt">Espacios para cada deseo
    		<hr style="color:#fff" width="50px" align="left"/>
    
            <div  id="tenemos_todo_movil" style="display:none;vertical-align:top;font-family:'Lato'; font-size: 16px;">		
                En Mödul tenemos desde módulos, cubiertas y
                equipamiento para armar a tu medida la cocina
                integral de tus sueños, hasta muebles para
                organizar otros espacios: closets, estudios,
                baños o cuartos de lavado.
            </div>	
            <div id="redes_sociales">
            
            </div>
    		</p>
      </div>
      </td>
        <td style="vertical-align: top;"> <div id="tenemos_todo" class="tenemos-todo" style="font-family:'Lato' !important; font-size: 14 px">
        Tenemos todo: desde
        los muebles y las
        cubiertas hasta los
        accesorios y equipo
        electrodoméstico. Todo
        para armar a tu medida
        la cocina integral
        de tus sueños.
	</div></td>
    </tr>
</table>
	
</div>
<div id="links_mobile" style="display:none;">
    <div id="link_mobile_cafe" style="cursor:pointer;height:20px; width:100%; background-color:#999; color:#fff; font-family:'Lato'; font-size:16px;">
    <table class="links_mob" width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left">AGENDÁ UN CAFÉ CON MÖDUL</td><td style="font-size:20px;" align="right">+</td></tr></table>
    </div>
    
  <div id="link_mobile_franquicias" class="links_mob" style="cursor:pointer;height:20px; width:100%; background-color:#999; color:#fff; font-family:'Lato'; font-size:16px;">
  <table class="links_mob" width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left">FRANQUICIAS</td><td style="font-size:20px;" align="right">+</td></tr></table>
    </div>
  <div id="link_mobile_recomienda" class="links_mob" style="cursor:pointer;height:20px; width:100%; background-color:#999; color:#fff; font-family:'Lato'; font-size:16px;">
  <table class="links_mob" width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left">MÖDUL RECOMIENDA</td><td style="font-size:20px; " align="right">+</td></tr></table></div>
</div>
<nav>
<div id="menu" class="menu"  style="font-family:'Lato';font-weight:300; font-size: 55 pt;top:0px;cursor:pointer; cursor: hand;">
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
            </ul>
        </li>
    </ul>
</div>
</nav>
<div id="first" style="width:100%; position:absolute;">
 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
            <nav class="nav_menu" style="border-bottom: 2px solid black;">
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

<div id="tecer_parallax" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="media/images/01-inicio/Modul-recomienda/Silestone_encimera_blanco-zeus-negro-tao.jpg" data-natural-width="2000" data-natural-height="900" style="width:100%;height:700px;">

<div id="modul_recomienda_movil" style="display:none; height:100%; width:100%; opacity:0.6; background-image:url(media/images/08-modul-recomienda/modul-recomienda-movil.jpg); background-repeat:no-repeat; background-size:100% 100%;color:#000;">
<div style="padding-top:300px; padding-left:10px; padding-right:5px;">
    <span style="font-family:'Lato'; font-size:36px; font-weight:300;">
    PERFECTO<br/>
    PARA TU<br/>
    COCINA<br/></span>
    <span style="font-size:16px; font-family:'LibreBaskerville Italic'; font-size:18 pt">Adaptables a cualquier estilo</span>
    <hr style="color:#000" width="50px" align="left"/>
    <span style="font-size:16px; font-family:'Lato' !important; font-weight:300;">
    Silestone fabrica cubiertas de cuarzo natural con resina de poliéster, conduración garantizada por quince años.<br/><br/>
    · Resistencia a las manchas y al rayado<br/>
    · Amplia gama de texturas y colores<br/>
    · Dureza e higiene.<br/><br/>
    <a href="" style="text-decoration:none; color:#000;"><b>+ CONOCE MÁS</b></a>
    </span>
</div>
</div>
<!--<div id="perfecto_para_tu_cocina_movil" style="height:100%; width:100%; background-color:#fff; color:#000; font-family:'Lato'; opacity:0.6;">

</div>-->

<div style="padding-left:18.5%; padding-top:20px;">
<table>
	<tr>
    	<td id="logo2" valign="top"><img src="media/images/white.png" /></td>
        <td id="el_remate_de_tu_cocina" style="padding-top: 85px;"><div  class="over_map_remate" style="padding-left:30px;font-size:10px;width:317px">
            <p style="font-size:38px;padding-top: 15px; font-family:'Lato' !important; font-weight:100; font-size:55 pt;  font-weight:300;">EL REMATE<br /> PERFECTO<br /> DE TU COCINA</p>
            <p style=" font-size:16px; font-family:'LibreBaskerville Italic'; font-size:18 pt">Adaptables a cualquier estilo</p>
            <strong><hr align="left" width="50px" style="height:1px; color:#000; background-color:#000"/></strong>
            <p></p>
            <p style="padding-right:20px;  font-family:'Lato' !important; font-size: 14 pt">Silestone fabrica cubiertas de cuarzo
            natural con resina de poliéster, con
            duración garantizada por 15 años.</p>
            <p></p>
            <p></p>
            <p>
                <ul style=" font-family:'Lato' !important;font-weight: 400; font-size: 14 pt; padding-left:10px; padding-right:20px;">
                    <li>Resistencia a las manchas y al rayado</li>
                    <li>Amplia gama de texturas y colores</li>
                    <li>Dureza e higiene</li>
                </ul>
            </p>
            <br />
            <br />
            <div style="font-family: 'Lato' !important; font-weight:bold; font-size: 14px;cursor:pointer; cursor: hand;"><strong>+ CONOCE MÁS</strong></div>
            <br />
            <br />
            <br />
   		</div></td>
    </tr>
</table>
</div>

<div id="second"  style="width:100%; padding-top:60px;">

 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
            <nav class="nav_menu" style="border-bottom: 2px solid black;">
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
</div>

<div class="parallax-container big" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="media/images/01-inicio/una-familia-modul.jpg" data-natural-height="1500">
<div id="una_familia_modul" style="padding-top: 105px;padding-left:24%;">
    <table style="width:400px; height:400px;background-color:rgba(0, 0, 0, 0.7);color:#fff; border: solid #fff 1px; padding:20px;  vertical-align:top">
    <tr>
    <td style=" font-size:36px;  font-family:'Lato' !important;font-weight:300;">UNA FAMILIA<br /> MÖDUL</td>
    </tr>
    <tr><td valign="top" style="font-family:LibreBaskerville Italic; font-size:18 pt">Funcionalidad inteligente<hr align="left" width="50px" /></td></tr>
    <tr><td valign="top" style=" font-size:12px; width:100px; font-family:'Lato' !important; font-weight:300;">Además de vestir el corazón de tu
hogar con una cocina, te ofrecemos
muebles modulares para proyectar tu
estudio, cuarto de entretenimiento,
área de lavado, closets y baños.
Todo para que tu familia viva en un
ambiente estético y organizado.<br /><br />
<table style="background-color:rgba(0, 0, 0, 0.7);color:#fff; border: solid #fff 1px; padding:5px;cursor:pointer; cursor: hand;">
  	<tr>
    	<td width="100%">IMAGINA TU COCINA AQUÍ</td>
    </tr>
  </table></td></tr>
<tr><td height="30px"></td></tr>
    </table>

    </div>
</div>

<div class="parallax-container big" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="media/images/01-inicio/innovacion-disenio.jpg" data-natural-height="1500">

<div id="innovacionydiseno" style="padding-top: 105px;padding-left:24%;">
    <table style="width:400px; height:400px;color:#fff; padding-left:20px; padding-top:20px; vertical-align:top">
    <tr>
    <td style="  font-family:'Lato';font-size:36px;  font-weight:300;">INNOVACIÓN<br />Y DISEÑO</td>
    </tr>
    <tr><td style=" font-family:'LibreBaskerville Italic';" valign="top">Tú eliges</td></tr>
    <tr><td><hr align="left" width="50px" /></td></tr>
    <tr><td style="font-family:'Lato'; font-weight:300;" valign="top">¿Alto diseño?, ¿uso continuo y
familiar?, ¿espacio pequeño?, ¿gusto
tradicional o tecnológico? El límite
es tu imaginación. Nuestros muebles
con tecnologías integradas harán del
uso de tu cocina un placer. Acércate
a Mödul Studio; nuestros diseñadores
crearán contigo el espacio que sueñas
disfrutar.</td></tr>
<tr><td height="20px"></td></tr>
<tr>
<td>
  <table style="color:#fff; border: solid #fff 1px; padding:5px;cursor:pointer; cursor: hand;">
  	<tr>
    	<td>¿QUÉ ES MÖDUL?</td>
    </tr>
  </table>
</td>
</tr>
<tr><td height="30px"></td></tr>
    </table>

    </div>
</div>

<div id="genera_sensaciones">
<table cellpadding="0" cellspacing="0" width="100%" height="480px">
<tr>
<td valign="top" style="background-image: url('media/images/01-inicio/textura1.jpg'); padding-top:20px" width="50%" height="480px">
<div>
	<p style="padding-left:65%; font-size:24px; font-family:'Lato';  font-weight:300;">GENERA <Br />SENSACIONES</p>
    <p style="padding-left:65%; font-family:'LibreBaskerville Italic';">Adaptables a cualquier estilo</p>
</div>
<div><hr width="70%" align="left"/></div>
<div><p style="padding-left:65%;font-family:'Lato'; font-weight:300;">Variedad de acabados y texturas
disponibles en cada mueble Mödul.
Personaliza tus espacios con el look
que vaya contigo.</p>
<br />
<div style="padding-left:65%">
<table style="color:#fff; border: solid #fff 1px; padding:5px; cursor:pointer; cursor: hand;">
  	<tr>
    	<td style="font-family:'Lato';  font-weight:300;">APARIENCIAS Y ACABADOS</td>
    </tr>
  </table>
  </div>
</div>
</td>
<td valign="top" width="50%"  height="500px">
	<table width="100%"   height="500px" cellpadding="0" cellspacing="0">
    	<tr>
        <td valign="top" style="background-image: url('media/images/01-inicio/textura2.jpg'); color:#000;" width="100%" height="250px">
        <div style=" padding-left:40px; padding-top:20px">
        	<p style=" font-family:'Lato'; font-size:24px; font-weight:300;">APARIENCIA <br />NATURAL</p>
        	<p style=" font-family:'LibreBaskerville Italic';">Espacios cálidos</p>
        	<p><hr align="left" width="50px"  style=" border-color:#000" /></p>
        </div>
        </td>
        </tr>
        <tr>
      		<td valign="top" style="background-image: url('media/images/01-inicio/textura3.jpg')" width="100%" height="250px">
            <div style=" padding-left:40px; padding-top:20px">
        	<p style=" font-family:'Lato'; font-size:24px; font-weight:300;">ASPECTO<br />INDUSTRIAL</p>
        	<p style=" font-family:'LibreBaskerville Italic';">Espacios contemporáneos</p>
        	<p><hr align="left" width="50px" style=" border-color:#fff"/></p>
        </div>
            </td>
        </tr>
    </table>
</td>
</tr>
</table>
</div>

<div  class="parallax-container big" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="media/images/01-inicio/calidad-asegurada.jpg" data-natural-height="1500px" style="height:780;">
<div id="calidad_segurada" style="padding-top: 105px;padding-left:24%;">
    <table style="width:400px; height:400px;background-color:rgba(255, 255, 255, 0.7);color:#000; padding:20px;  vertical-align:top">
    <tr>
    <td style=" font-family:'Lato';font-size:36px; font-weight:lighter">CALIDAD<br />ASEGURADA</td>
    </tr>
    <tr><td valign="top" style=" font-family:'LibreBaskerville Italic';">Mödul Studio es tranquilidad</td></tr>
    <tr><td><hr align="left" width="50px" /></td></tr>
    <tr><td valign="top" style=" font-size:12px; width:100px; font-family:'Lato';">Diez años de garantía respaldan tu
elección. Nuestros muebles de calidad
profesional significan que están
construidos para uno uso extendido y
repetido durante años, lo que optimiza
tu inversión.<br /><br />
<table style="color:#000; border: solid #000 1px; padding:5px;cursor:pointer; cursor: hand;">
  	<tr>
    	<td width="100%">CONOCE MÁS</td>
    </tr>
  </table></td></tr>
<tr><td height="30px"></td></tr>
    </table>

    </div>
    
<div id="three"  style="width:100%; position:relative;top:100px;">

 <table align="center"  style="width:100%">
 	<tr  style="width:100%">
    	<td  align="center" style="width:100%;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
            <nav class="nav_menu" style="border-bottom: 2px solid black;">
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
<div align="center" style="width: 100%;color:#fff;font-size:12px; padding-top:100px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-left:30px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;">POR</td>
    <td style="text-align:right; padding-right:20%;"><img src="media/images/MIQ-logo/MIQ-white.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
</div>

</body>

</html>