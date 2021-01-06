<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modul</title>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script_menu.js"></script>
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body {
	background-color: #000;
}
  </style>
  <script>
  $(document).ready(function() {
	  loading('menu','five','footer_top','logo_modul');
	  });
  function change_over(cuadro)
  {
	  $('.cuadros').each(function(index, element) {
        if($(this).attr('id') == cuadro){
			$(this).css('background-color','rgba(0,0,0,0.5)');
			$(this).css('color','#FFF');
		}else{
			 $(this).css('background-color','rgba(225,225,225,0.7)');
			 $(this).css('color','#000');
			}
    });
 /*
  
   $('#'+cuadro)
   $('#'+cuadro)*/
  }
 // var cuadro = $$cuadro_banios).css('background-color','rgba(0,0,0,0.5)');
  function thank_you(){
  alert('a');
  }
  
  </script>
</head>
<body>
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/logo-black.png" />
<div id="menu" class="menu" style="position:absolute; top:0px; background:rgba(0,0,0,0.4); z-index:100;cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
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

<div align="center" style="background-image: url('media/images/01-inicio/melamina-modul.jpg'); color:#000;width:100%; height:250px; padding-top:10px;"><br />
<table rules="cols" style="font-family:'Lato' !important; font-size: 14 pt;cursor:pointer; cursor: hand;">
	<tr style="padding-left:10px; padding-right:10px; ">
    	<td style="padding-left:10px; padding-right:10px"><strong>Disfruta con calidad</strong></td>
    	<td style="padding-left:10px; padding-right:10px">Solidex®</td>
    	<td style="padding-left:10px; padding-right:10px">Originalidad</td>
    </tr>
</table>
<table>
	<tr>
    	<td valign="top"></td>
        <td width="150px"></td>
    	<td valign="bottom">
        	<table align="center">
            	<tr>
                <td align="center" style="font-family:'Lato' !important; font-size: 40px; font-weight:300;vertical-align:top; height:30px">
                CATÁLOGO
                </td>
                </tr>
            	<tr>
                	<td align="center" style="  font-family:'LibreBaskerville Italic'; color:#999">Soluciones modulares para cada espacio

                    <hr width="50px" />
                    <p style=" font-family:'Lato'; font-size:14px">Imagina tu ambiente soñado, deséalo y hazlo realidad con<br /> nuestras cocinas inttosets y muebles modulares. <br />
Conoce aquí las opciones que tienes para crearlo.</p>
                    </td>
                </tr>
            </table>
        </td>
                <td width="300px"></td>
    </tr>
</table>
</div>
<div style="background:#fff; width:100%">
<center>
<table cellpadding="0" cellspacing="0" style=" cursor:pointer; cursor:hand">
<tr>
<td align="center" style="background:url(media/images/03-catalogo/01-cocinas.jpg);" onclick="window.location.href='catalog-cocinas.php';">
<div id="cuadro_cocinas" class="cuadros" align="center" style=" width:200px; height:200px; background-color:rgba(0,0,0,0.5); font-family:'Lato'; font-size:24px; font-weight:300" onmouseover="javascript:change_over('cuadro_cocinas')">
<br />
<br />
<br />
COCINAS
</div>
</td>
<td align="center" style="background:url(media/images/03-catalogo/02-closet-modular.jpg);" onclick="window.location.href='catalog-closets.php';" >
<div id="cuadro_closets" class="cuadros"  align="center" style="background:rgba(255,255,255,0.7); width:200px; height:200px; color:#000;font-family:'Lato'; font-size:24px; font-weight:300" onmouseover="javascript:change_over('cuadro_closets')">
<br />
<br />
<br />
CLOSETS
</div>
</td>
<td align="center" style="background:url(media/images/03-catalogo/03-modulos.jpg);"  onclick="window.location.href='catalog-modulos.php';">
<div id="cuadro_modulos" class="cuadros" align="center" style="background:rgba(255,255,255,0.7); width:200px; height:200px; color:#000;font-family:'Lato'; font-size:24px; font-weight:300" onmouseover="javascript:change_over('cuadro_modulos')">
<br />
<br />
<br />
MÓDULOS
</div>
</td>
<td align="center" style="background:url(media/images/03-catalogo/04-banio-modular.jpg);"  onclick="window.location.href='catalog-banos.php';" >
<div id="cuadro_banios" class="cuadros" align="center" style="background:rgba(255,255,255,0.7); width:200px; height:200px; color:#000;font-family:'Lato'; font-size:24px; font-weight:300" onmouseover="javascript:change_over('cuadro_banios')">
<br />
<br />
<br />
BAÑOS
</div>
</td>
</tr>
</table>
<p style="width:100px"></p>
<table cellpadding="0" cellspacing="0">
	<tr>
    	<td style="background:url(media/images/03-catalogo/garantia-modul.jpg); vertical-align:top; font-family:'Lato';" width="450" height="330">
        <p style=" color:#fff2a1; font-family:'Lato'; font-size:40px; font-weight:300; padding-left:20px;">DISFRUTA CON TRANQUILIDAD</p>
        <p style=" padding-left:20px;">Estamos tan seguros de la calidad de los muebles que fabricamos, que garantizamos una larga duración y respondemos por ellos en caso necesario: te damos 10 años de garantía para cocinas y clóset Modular, y 5 años para clóset Light. <strong style=" cursor:hand; cursor:pointer;">+ VER MÁS</strong></p>
        </td>
        <td style=" background:url(media/images/03-catalogo/modulos.jpg)" width="350" height="330" ></td>
    </tr>
</table>
<div style="background:url(media/images/03-catalogo/aspecto-industrial-solidex.jpg); background-size:800px 200px; width:800px; height:200px; font-weight:300">
<div style="font-family:'Lato'; font-size:24px; position:relative; top:40%;"><a style=" vertical-align:middle">SOLIDEX</a><a style="font-size:15px; vertical-align:text-top;">®</a><label style=" width:1px;color:#FFF; padding-left:20px; padding-right:20px; font-size:50px; vertical-align:middle;">|</label><label style=" font-size:14px;">Sistema de construcción exclusivo de Mödul.<label></div>
</div>
<div align="right" style="background:url(media/images/03-catalogo/originalidad.jpg); width:800px; height:200px">
<div style="width:320px; font-family:'Lato'; font-weight:300; padding-top:20px;">
<div align="left" style="font-size:34px">
ORIGINALIDAD
<hr align="left" width="75px" style="border-color:#fff; color:#fff; background-color:#fff;"/>
<p style=" font-size:14px">
Tus muebles están revestidos en su<br /> interior con el acabado Gris Geometric,<br /> una señal más de su exclusividad.
</p>
</div>

</div>
</div>
<div align="center" style="background:#000; width:800px; color:#fff; font-family:'Lato'; height:50px; cursor:pointer; cursor:hand">
<div style=" padding-top:12px;"><strong>+  RECORRIDO VIRTUAL A LA TIENDA </strong></div>
</div>
<div style=" width:800px; height:50px;"></div>
</center>
<!-- Menu -->
 <div align="left" style="background-color:#fff;">
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
</div>
<!-- Menu -->

</div>
</body>
<footer id="footer_top" style="background:#fff; color:#000;">
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
</html>