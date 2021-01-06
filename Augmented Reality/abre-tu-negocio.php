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
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/vendor/modernizr-2.7.1.min.js"></script>
<script>
  $(document).ready(function() {
	  loading('menu2','five','footer_top','logo_modul');
	  });
var options={percent: 0 };
function myFunction() {
	if($('#up_down').attr('src')!='media/images/09-franquicias/abajo.jpg'){
		$('#up_down').fadeIn(400, function() {
			$('#up_down').css('bottom','0px');
        $('#up_down').attr('src','media/images/09-franquicias/abajo.jpg');
		});
		/*$('#up_down').attr('src','media/images/09-franquicias/abajo.jpg');
		$('#up_down').css('bottom','0px');*/
		$('#ver_mas_beneficios').toggle( 'blind', options, 500 );
	}else{
		
		$('#up_down').fadeIn(400, function() {
			$('#up_down').css('bottom','5px');
        $('#up_down').attr('src','media/images/09-franquicias/arriba.png');
    });
		
		$('#ver_mas_beneficios').toggle( 'blind', options, 500 );
	}
	}
</script>

</head>
<body class="loading">
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/white.png" />
	<div id="preload">
	       	<img src="media/images/09-franquicias/abre-tu-franquicia-modul.jpg"> 
       	</div>
		<main>
			<section id="slide-6" class="homeSlide">
				<div class="bcg" 
					data-center="background-position: 50% 0px;" 
					data-top-bottom="background-position: 50% -100px;" 
					data-bottom-top="background-position: 50% 100px;" 
					data-anchor-target="#slide-6"
				>
				
<div align="center">
    <table cellpadding="10" style="font-family:'Lato';">
        <tr>
            <td  valign="top" style=" position:relative; top:50px"></td>
            <td valign="top"  style=" position:relative; top:17px">
            <table rules="all" cellspacing="10"><tr><td style=" padding-left:10px; padding-right:10px;">AMF y Entrepreneur</td><td style=" padding-left:10px; padding-right:10px;">Nuestra franquicia en números</td><td style=" padding-left:10px; padding-right:10px;">Preguntas frecuentes</td></tr></table>
            <br />
            <br />
            <div>
            <p align="center" style=" font-family:'Lato'; font-size:36px; font-weight:300">ABRE TU PROPIO <br />NEGOCIO<br />
           <a style=" font-size:14px; font-family:'LibreBaskerville Italic'">Conoce las razones para ser parte de la red de tiendas de Mödul Studio<hr align="center" width="75" color="#FFFFFF" /></a></p>
            </div>
            <div align="center" style=" font-family:'Lato'; font-size:14px">Mödul Studio es una red nacional de franquicias, presente en 18<br /> estados de la República Mexicana a través de <a style=" color:#F2BB84">26 tiendas...</a> <br />
y siguen sumándose. 
            <table cellpadding="20">
                <tr>
                    <td valign="top" width="200">Las franquicias venden en exclusiva cocinas, muebles modulares y closets diseñados y fabricados por Mödul, así como cubiertas, equipo de cocina y accesorios de proveedores calificados.<br /><br />Nuestras tiendas contienen tres elementos principales: atención personalizada y cálida; un showroom, </td>
                    <td valign="top" width="200">donde el comprador ve la exhibición de cocinas montadas y decoradas para que experimente cómo lucirían en su casa o proyecto, y un estudio, donde un diseñador/vendedor le explica a fondo cada material, acabado y le hace un boceto personalizado. En el estudio el cliente tiene acceso al muestrario, puede observar y tocar los materiales y elegir sus favoritos para su proyecto.</td>
                </tr>
            </table>
            </div>
            </td>
            <td valign="top" width="150"><div style="position:relative; top:10px; font-family:'Lato'; font-weight:400;">
            <p>¿TE INTERESA FORMAR UNA FRANQUICIA?</p>
            <label onclick="javascript:window.location = 'liga_de_profesionales.php';" style="cursor:pointer;color:#fff2a1; border:1px solid #fff; padding:5px">REGÍSTRATE</label>
            </div>
            </td>
        </tr>
    </table>
</div>				
				
				
				</div>
				</section>
		</main>

<div align="center" onclick="myFunction()" style=" padding:5px;background:#F0F0F0; color:#999; font-family:'Lato'; font-size:24px; font-weight:300;">
<p style=" vertical-align:middle;">BENEFICIOS DE TENER UNA FRANQUICIA MÖDUL&nbsp;&nbsp;&nbsp;<img id="up_down" style="cursor:pointer; position:relative;vertical-align:middle;padding-left:5px" src="media/images/09-franquicias/abajo.jpg" /></p>
<div id="ver_mas_beneficios" style="display:none">
<table align="center" style=" font-size:14px">
    <tr>
        <td valign="top">
            <ul>
                <li class="ss" style=" padding-bottom:10px; width:200px"><strong>Pertenecer a la red</strong> de tiendas de cocinas más grande de <br />México</li>
                <li style=" padding-bottom:10px; width:200px"><strong> Precio de fábrica</strong> que permite competir en el mercado<br /> nacional de cocinas integrales</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Certeza de calidad</strong> en nuestro servicio y productos</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Asesoría constante</strong>en la operación del negocio: estrategias comerciales, herramientas de venta, estructura de trabajo</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Garantía total</strong>de nuestro producto para el <br />franquiciatario y consumidor final </li>
            </ul>
        </td>
        <td valign="top">
           <ul>
                <li style=" padding-bottom:10px; width:200px"><strong> Atractiva Imagen </strong>corporativa</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Asistencia técnica</strong> en preapertura: en sitio y remota</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Asistencia técnica</strong> continua</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Certificación</strong> constante en productos y aplicaciones constante en productos y aplicaciones</li>
                <li style=" padding-bottom:10px; width:200px"><strong> Sistema</strong> de pedidos en línea</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Software de diseño</strong> con librerías propias</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Catálogo de productos </strong>vanguardistas con innovación constante</li>
                <li style=" padding-bottom:10px; width:200px"><strong> Posicionamiento</strong> creciente de la marca</li>
            </ul>
        </td>
        <td valign="top">
           <ul>
                <li style=" padding-bottom:10px; width:200px"><strong>Coaching</strong> de buenas prácticas comerciales</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Store concept</strong> probado</li>
                <li style=" padding-bottom:10px; width:200px"><strong> Desarrollo de negocio formal</strong>, generador de utilidad</li>
                <li style=" padding-bottom:10px; width:200px"><strong>Alianzas</strong> estratégicas con proveedores de equipos, accesorios y cubiertas</li>
                <li style=" padding-bottom:10px; width:200px"><strong> Derecho de uso</strong> de la marca bajo contrato registrado ante el Instituto Mexicano de la Propiedad Industrial (IMPI) Territorio</li>
            </ul>
        </td>
    </tr>
</table>
</div>
</div>
<div style=" background:#fff; font-family:'Lato'; color:#000">
<table width="100%">
	<tr width="100%">
        <td width="50%" valign="top" align="right">
        	<div align="left" style="width:300px">
            <p>
            <a style=" font-size:24px; font-weight:300; text-transform:uppercase;">Asociaciones a las<br /> que pertenecemos</a><br />
            <a style=" font-size:14px; font-family:'LibreBaskerville Italic'; font-weight:300;">Membresías que respaldan Mödul Studio<hr align="left" width="50" color="#000"/></a>
            </p>
            <p style=" font-size:14px; font-weight:300; width:200px">
            Mödul Studio está afiliado a la Asociación Mexicana de Franquicias (AMF) y a National Kitchen & Bath Association (NKBA).<br /><br />Esto nos refrenda como una empresa profesional que cumple requisitos, normas y estándares nacionales e internacionales, se capacita continuamente, apoya el fortalecimiento de este sistema de negocios en México y genera seguridad y credibilidad ante los inversionistas. 
            </p>
            <p><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/logos.png" /></p>
            </div>
        </td>
        <td width="50%"><img src="media/images/09-franquicias/modul-empresa-profesional.jpg"  width="100%"/>
        	<hr color="#CCC" />
            <img  src="media/images/09-franquicias/inversiones-modul.jpg" width="100%"/>
        </td>
    </tr>
</table>
</div>
<div style=" padding:10px;background:#7D7B7B; color:#fff; text-transform:uppercase; font-family:'Lato'; font-weight:300">
<div>
<p align="center" style=" font-size:24px">Nuestra franquicia en <a style="color:#fff2a1">números</a></p>
<p align="center" style=" font-size:24px; text-transform:uppercase">
<table align="center">
    <tr>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/findacion-empresa.png" /></td></tr>
            <tr><td width="150" align="center">FUNDACIÓN DE EMPRESA<br />1997</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/inicio-franquicia.png" /></td></tr>
            <tr><td width="150" align="center"> Inicio de la franquicia<br />2012</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/inversion-inicial.png" /></td></tr>
            <tr><td width="150" align="center">Inversión iniciaL<br />$1,020,385 MXN</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/cuota-franquicia.png" /></td></tr>
            <tr><td width="150" align="center">Cuota de franquicia<br />$220,000 MXN</td></tr>
            </table>
        </td>
    </tr>
</table>
<hr align="left" width="72%" color="#fff"/>
<table align="center">
    <tr>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/inversion-inicial.png" /></td></tr>
            <tr><td width="150" align="center">INVERSIÓN total<br />$1,240,385 MXN</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/fondo-publicidad.png" /></td></tr>
            <tr><td width="150" align="center">FONDO<br />PUBLICIDAD <br /><a style=" text-transform:none; font-size:12px;"> 0.5% de ventas totales y 5%<br />de compras a Mödul</a></td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/Cuota-regalias.png" /></td></tr>
            <tr><td width="150" align="center">Cuota de regalías<br />N/A</td></tr>
            </table>
        </td>
    </tr>
</table>
<hr align="right" width="70%" color="#fff"/>
<table align="center">
    <tr>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/recuperacion-inversion.png" /></td></tr>
            <tr><td width="150" align="center">Recuperación de la inversión<br /><a style=" text-transform:none">23 meses</a></td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/unidades-totales.png" /></td></tr>
            <tr><td width="150" align="center">Unidades totales<br />26</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/telefono.png" /></td></tr>
            <tr><td width="150" align="center">Teléfono<br />(33) 3110-1032</td></tr>
            </table>
        </td>
        <td>
            <table align="center">
            <tr><td align="center"><img src="media/images/09-franquicias/Iconos-franquicias/Iconos-franquicias/oficinas-corporativas.png" /></td></tr>
            <tr><td width="150" align="center">Oficinas corporativas<br /><a style=" text-transform:none">Guadalajara, Jal.</a></td></tr>
            </table>
        </td>
    </tr>
</table>
</p>
</div>
</div>
<div id="menu2" class="menu" style=" background:rgba(0,0,0,0.4);z-index:99;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;top:0px;cursor:pointer; cursor: hand;">
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
<div style=" background:#FFF; color:#000; font-family:'Lato'; font-weight:300">
<table align="center" width="100%">
<tr>
<td align="right" width="55%" valign="top">
<div align="left" style="width:60%">
<p style=" font-size:24px">PREGUNTAS FRECUENTES</p> 
<p style=" font-size:14px; font-family:'LibreBaskerville Italic'">Entérate de los temas que deben conocer quienes están<br /> interesados en adquirir una franquicia Mödul Studio.
<hr width="50px" color="#7D7B7B" align="left" />
<div align="left">
<ul style=" padding-left:10px;font-family:'Lato'; font-size:14px; color:#5A5A5A">
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿Debo tener experiencia en el ramo?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿Cuántas franquicias hay?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿Qué tipo de clientes puedo atender?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿Qué le voy a comprar a Mödul y dónde compro el <br /><a style="padding-right:15px">&nbsp;&nbsp;&nbsp;</a>resto de los elementos?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿En cuánto tiempo se entrega una cocina integral?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿Existe un respaldo de fábrica en garantías y asesoría?</p></li>
<li style="list-style:none"><p><a style="padding-right:10px"> ></a>¿La fábrica ofrece alguna capacitación?</p></li>
</ul></div>
</p>
</div>
<div style="font-family:'Lato'; font-size:14px; color:#5A5A5A;width:60%; padding-top:50px; padding-bottom:100px;" align="left">
¿DEBO TENER EXPERIENCIA EN EL RAMO?<br/>
<span style="color:#000;">
No es necesario saber sobre el negocio de cocinas integrales; contamos con<br/>
un sistema de capacitación que te dará inducción en esta industria.<br/></span>
<br/><br/>
¿CUÁNTAS FRANQUICIAS EXISTEN EN LA REPÚBLICA?<br/>
<span style="color:#000;">
En esta liga encontrarás la ubicación de cada una de las tiendas de cocinas<br/>
que pertenecen a nuestra Red de Tiendas Asociadas.<br/></span>
<br/><br/>
¿QUÉ TIPO DE CLIENTES PUEDO ATENDER?<br/>
<span style="color:#000;">
El mercado natural de las cocinas integrales de Mödul Studio es la vivienda de<br/>
interés medio y medio alto, al través de:<br/>
· Las constructoras de conjuntos de casas o departamentos de esas categorías<br/>
que necesitan cocinas integrales.<br/>
· Familias jóvenes que están construyendo o han adquirido una casa sin<br/>
cocina integral.<br/>
· Amas de casa que planean remodelar su cocina integral.<br/>
· Arquitectos, ingenieros, interioristas, etc.<br/></span>
<br/><br/>
¿QUÉ LE VOY A COMPRAR A MÖDUL Y DÓNDE COMPRO EL RESTO DE LOS<br/>
ELEMENTOS?<br/>
<span style="color:#000;">
Mödul se dedica sólo a la fabricación de muebles para cocinas integrales<br/>
y a la comercialización de algunos accesorios. Los equipos como estufas,<br/>
campanas, cubiertas, tarjas, etc. se compran por separado con algún<br/>
distribuidor local.<br/>
La fábrica puede ayudarte a encontrar un proveedor confiable cercano a tu<br/>
localidad.<br/></span>
<br/><br/>
¿EN CUÁNTO TIEMPO SE ENTREGA UNA COCINA INTEGRAL?<br/>
<span style="color:#000;">
El tiempo de entrega de cada cocina integral es menor al promedio nacional,<br/>
esto es entre cuatro y cinco semanas, según la temporada del año.<br/>
Para proyectos especiales donde se necesita una cocina integral en menor<br/>
tiempo para una casa-modelo, se puede negociar un plazo menor.<br/></span>
<br/><br/>
¿EXISTE UN RESPALDO DE FÁBRICA EN GARANTÍAS Y ASESORÍA?<br/>
<span style="color:#000;">
Los muebles fabricados por Mödul para cocinas integrales y closets versión<br/>
Modular cuentan con una garantía total por 10 años contra defectos de<br/>
fábrica o vicios ocultos. El clóset Light tiene garantía por 5 años.<br/>
Nos comprometemos a entregar el repuesto a la tienda asociada para que su<br/>
instalador haga extensiva la garantía al cliente final.<br/></span>
<br/><br/>
¿LA FÁBRICA OFRECE ALGUNA CAPACITACIÓN?<br/>
<span style="color:#000;">
Mödul cuenta con un programa de Inducción y Capacitación que imparte<br/>
todo lo referente a nuestro producto, forma de operar y administrar la tienda<br/>
y estrategias de venta.<br/></span>
<br/><br/>
<span style="color:#000;">
Última fecha de modificación: 21 de noviembre 2014<br/></span>
</div>
</td>
<td width="45%" height="745" style=" position:relative;background:url(media/images/09-franquicias/franquicia-modul.jpg); background-size:100% 520px; background-repeat:no-repeat;"><div style="width:200px; height:200px; background-color:#900; opacity:0.6; position:absolute; top:0; left:0; color:#fff;">
<div style="padding-left:10px; padding-top:5px;">
<div style="font-family:'Lato'; font-size:26px;">
¿TE INTERESA<br/>
FORMAR UNA<br/>
FRANQUICIA?<br/></div>
<div style="font-family:'LibreBaskerville Italic'; font-size:14px; padding-top:10px;">
Formas parte de nuestra....
</div>
<div align="center" style="padding-top:20px;">
<label onclick="javascript:window.location = 'liga_de_profesionales.php';" style="cursor:pointer;color:#fff; border:1px solid #fff; padding:5px">REGÍSTRATE</label></div>
</div>
</div>
</td>
</tr>
</table>
</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/imagesloaded.js"></script>
        <script src="js/skrollr.js"></script>
        <script src="js/_main.js"></script>
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
<!--footer  style="width:100%; position:relative; background:#fff; vertical-align:text-bottom">
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