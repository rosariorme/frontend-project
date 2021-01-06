<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Modül Mobile</title>
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'/>
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<style>
@import url("../css/fonts/LibreBaskerville_Bold/stylesheet.css");
@import url("../css/fonts/LibreBaskerville_Italic/stylesheet.css");
body {
	background-color:#000;
	/*background-image:url(../media/images/01-inicio/muebles-modulares.jpg);
	background-size:100% 100%;
	background-repeat:no-repeat;*/
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
*::-moz-selection{
   background: #fbdbe8;
   color: #F55B99;
}

*::selection {
   background: #fbdbe8;
   color: #F55B99;
}
.menu {
	padding-top:10px;
	padding-bottom:10px;
}
.menu:hover {
	background-color:#FF6;
	color:#333;
}
</style>
<script>
function toggle(){
	$("#sub_menu").slideToggle();
}
</script>
</head>
<body>

<div id="menu_movil" style="font-family:'Lato';font-size:20px; font-weight:500; background-color:#000;" align="right">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" align="left" style="padding-left:5px;"><img src="../media/images/icono_modul_mobile.png" name="logo" width="30px" height="50px"/></td>
    <td align="right" valign="top" style="text-align:right; padding-top:7px;">
    <span id="mmenu" style="cursor:pointer;text-decoration:none; color:#fff; text-align:right" onclick="toggle()">MENÚ</span>
    <b style="color:#F63;"> | </b>
    </td>
    <td align="right" valign="top" style="padding-top:7px;">
    <a href="" style="text-decoration:none; color:#fff; padding-left:0px;">SUCURSALES</a>
    <b style="color:#F63;"> | </b></td>
    <td align="right" valign="top" style="padding-right:5px;padding-top:7px;">
    <a href=""><img src="../media/images/telefono-icono.png" width="18" height="21" /></a>
    </td>
  </tr>
</table>
</div>
<div id="sub_menu" style="display:none;position:absolute; top:10; left:0; width:100%; z-index:10; height:100%; color:#fff; background-color:#000; font-family:'Lato'; font-weight:300; font-size:20px;" align="center">
        
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

    <div id="contenido" style="width:100%; height:500px; background-image:url(../media/images/01-inicio/muebles-modulares.jpg); color:#fff; background-size:100% 100%; background-repeat:no-repeat; padding-top:20px; padding-left:10px; padding-right:10px;">
    
        <div id="movil_primera_pag">
                    <div id="titulo_cocinas_modulares" style=" font-family:'Lato' !important;font-weight:300; font-size:40px; ">COCINAS <br />
                    Y MUEBLES <br/>
                    MODULARES</div>
                    <p id="titulo_deseo" class="espacios-para-cada-deseo" style="font-family:'LibreBaskerville Italic'; font-size:20px;">Espacios para cada deseo
                    <hr style="color:#fff" width="50px" align="left"/>
            
                    <div  id="tenemos_todo_movil" style="vertical-align:top;font-family:'Lato'; font-size: 20px; padding-right:10px;">		
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
        </div>
    
    </div>
    <img src="../media/images/08-modul-recomienda/modul-recomienda-movil2.jpg" width="100%" height="auto" />
<div id="modul_recomienda" style="font-family:'Lato' !important; padding:0px; margin:0px; background-image:url(../media/images/08-modul-recomienda/modul-recomienda-movil5.jpg); position:relative; background-size:100% 100%; background-repeat:no-repeat; background-color:#fff;  height:600px; width:100%; color:#000;">
    
   	<div id="contenido_modul_recomienda" style="padding-top:20px; padding-left:10px; padding-right:10px; padding-bottom:30px;">
        <div id="titulo_cocinas_modulares" style=" font-family:'Lato' !important;font-weight:300; font-size:40px;">
                    PERFECTO<br />
                    PARA TU<br/>
                    COCINA</div>
                    <p id="titulo_recomienda" class="espacios-para-cada-deseo" style="font-family:'LibreBaskerville Italic'; font-size:20px;">Adaptables a cualquier estilo
                    <hr style="color:#fff" width="50px" align="left"/>
            
                    <div  id="recomienda_movil" style="vertical-align:top;font-family:'Lato'; font-size: 18px;">		
                        Silestone fabrica cubiertas de
                        cuarzo natural con resina de
                        poliéster, conduración garantizada
                        por quince años.<br/><br/>
                        · Resistencia a las manchas y al rayado<br/>
                        · Amplia gama de texturas y colores<br/>
                        · Dureza e higiene.<br/><br/>
                        <div style="padding-top:10px;"><a style="text-decoration:none; color:#000;"  href="">+ CONOCE MÁS</a></div>
                    </div>	
                    <div id="redes_sociales">
                    
                    </div>
                    </p>     
    	</div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="position:absolute; bottom:0; cursor:pointer;vertical-align:bottom; background-color:#999; color:#fff;">
                      <tr class="menu" height="30px">
                        <td align="left" style="padding-left:10px;">AGENDA UN CAFÉ CON MÖDUL</td>
                        <td align="right">+</td>
                      </tr>
                      <tr height="1px" style="background-color:#fff;">
                      <td></td>
                      <td></td>
                      </tr>
                      <tr class="menu"  height="30px">
                        <td align="left" style="padding-left:10px;">FRANQUICIAS</td>
                        <td align="right">+</td>
                      </tr>
                      <tr height="1px" style="background-color:#fff;">
                      <td></td>
                      <td></td>
                      </tr>
                      <tr class="menu" height="30px">
                        <td align="left" style="padding-left:10px;">MÖDUL RECOMIENDA</td>
                        <td align="right">+</td>
                      </tr>
                      
                    </table>
 </div>
 
<div id="bbbg" style="position:relative;">
    <div id="buscanos" style=" background-image:url(../media/images/01-inicio/calidad-asegurada.jpg); background-size:100% auto; height:100px; background-color:#000; opacity:0.6;">
    
    </div>
    <div align="center" style="position:absolute;top:0;left:20%;">
      <img src="../media/images/08-modul-recomienda/f-red-social.png" width="50" height="50" />&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="../media/images/08-modul-recomienda/p-red-social.png" width="50" height="50" />&nbsp;&nbsp;&nbsp;&nbsp;
      <img style="padding-top:20px;" src="../media/images/07-imagina-tu-cocina/icons/modul_blanco.png" width="55" height="55" />
    </div>
</div>

<div id="footer" style="background-color:#fff; height:auto; font-family:'Lato'; font-size:14px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" style="padding-bottom:10px; padding-top:10px; padding-left:10px;">Política de privacidad</td>
    <td align="right" style="color:#F60; padding-bottom:10px; padding-top:10px; padding-right:10px;">Llámanos 01-800-00-MODUL</td>
  </tr>
  <tr height="1px" style="background-color:#000;">
   <td></td>
   <td></td>
  </tr>
  <tr>
    <td align="left" width="70%"  style=" padding-top:5px; padding-left:10px; font-size:14px;">Mödul Studio © 2015.<br/>
Todos los derechos reservados.</td>
    <td align="right" width="30%" valign="middle" style="vertical-align:middle;">POR&nbsp;&nbsp;&nbsp;<img src="../media/images/powered-by-marketing-iq.png" width="70" height="70" /></td>
  </tr>
</table>
</div>
</body>
</html>

