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
<style>
body {
	background-color:#000;
}
.ab {
	text-decoration:none;
	color:#333;
}
.ab:hover {
	color:#933;
	text-decoration:underline;
}
/* style settings for Google map */
#map-canvas
{
	width : 100%; 	/* map width */
	height: 500px;	/* map height */
}
.css-input { background-color:transparent; border-color:#cccccc; border-style:solid; padding:11px;font-size:12px; color:#616061; border-width:1px; font-family:'Lato';  } 
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
    border:solid #ccc
	background: url('media/images/03-catalogo/cocinas/abajo.jpg') no-repeat right #fff;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
.miselect {
	font-family:'Lato';
	font-size:12px;
	width: 160px; /* Set width. Do not set height else it will fail in IE8-10. Use padding for height. */
	color:#ADADAD;
	font-weight: normal;
	line-height:1.2em;
	margin: 0 0 10px;
	padding: 9px; /* use this to set a specific height for your dropdown (DO NOT use the attribute 'height') */
	border: solid #ccc thin;
	cursor: pointer;
	text-indent: 0.01px;
	text-overflow: "";
	background:url(media/images/arrow.png) no-repeat 100% 4px #fff; /* add your own arrow image */
	*background-image:none; /* turn bg image for IE7 */
	background:url(media/images/arrow_white.png) no-repeat 100% 0px #fff; /* fallback bg image*/
	background:url(media/images/arrow_white.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow_white.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow_white.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow_white.png) no-repeat 100% 0px, transparent;
	background:url(media/images/arrow_white.png) no-repeat 100% 0px, transparent;
	-webkit-appearance: none; /* gets rid of default appearance in Webkit browsers*/
	-moz-appearance: none; /* Get rid of default appearance for older Firefox browsers */
	-ms-appearance: none; /* get rid of default appearance for IE8, 9 and 10*/
	appearance: none;
}
.miselect option {
	background:#F0F0F0; /* style the dropdown bg color */
	color:#666;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>	
	<!-- Google Maps API -->
<script>
  $(document).ready(function() {
	  loading('menu2','five','footer_top','logo_modul');
	  });
	// set of locations represented by lat/lon pairs
    var locations_n = [
	{lat:47.6, lon:-122.3, place:"Seattle, WA"}, 
	{lat:34, lon:-118.2, place:"Los Angeles, CA"},
	{lat:30.2, lon:-97.7, place:"Austin, TX"}, 
	{lat:40, lon:-83, place:"Columbus,OH"}
	];
	
	var locations = [
	{lat:31.693562,lon:-106.372032,place:""},
	];

    var map; 
	jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});
function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
	
	 map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    map.setTilt(45);
var markers = [
        ['Mödul Studio Cd. Juárez Cocinas y Closets', 31.693562,-106.372032],
        ['Mödul Studio Villahermosa, Cocinas y Closets', 17.995260,-92.929092],
        ['Mödul Studio Guadalajara Av.Mexico , Cocinas y Closets', 20.67858,-103.39523],
        ['Mödul Studio Guadalajara Av. Niños Héroes, Cocinas y Closets',20.66675,-103.38702],
        ['Mödul Studio Guadalajara Av. Pablo Neruda, Cocinas y Closets',20.69759,-103.38385],
        ['Mödul Studio Guadalajara Av. López Mateos, Cocinas y Closets',20.65506,-103.40036],
        ['Mödul Studio Aguascalientes Blvd. Luis Donaldo Colosio, Cocinas y Closets',21.92488,-102.29926],
        ['Mödul Studio Juarez Av. Valle del Sol, Cocinas y Closets',31.74659,-106.42493],
        ['Mödul Studio Torreón Blvd. Independencia, Cocinas y Closets',25.56393,-103.42834],
        ['Mödul Studio Durango Blvd. Felipe Pescador, Cocinas y Closets',24.03437,-104.67529],
        ['Mödul Studio Edo. de México Av. Tecnológico, Cocinas y Closets',19.26185,-99.57690],
        ['Mödul Studio Michoacán Av. Melchor Ocampo, Cocinas y Closets',32.54731,-116.89078],
        ['Mödul Studio Michoacán Artilleros, Cocinas y Closets',19.69012,-101.16021],
        ['Mödul Studio Morelos Av. Río Mayo, Cocinas y Closets',19.38616,-99.08076],
        ['Mödul Studio Nuevo León Rio Grijalva, Cocinas y Closets',26.00511,-98.06543],
        ['Mödul Studio Nuevo León Av. Lázaro Cárdenas, Cocinas y Closets',25.97587, -98.06892],
        ['Mödul Studio Quintana Roo Chetumal, Cocinas y Closets',18.52299, -88.26986],
        ['Mödul Studio Quintana Roo Chetumal, Cocinas y Closets',18.52299, -88.26986],
        ['Mödul Studio San Luis Potosí Montes Blancos, Cocinas y Closets',22.14287, -101.02230],
        ['Mödul Studio Sinaloa Plaza fiesta, Cocinas y Closets',25.84059, -97.51240],
        ['Mödul Studio Sonora Sinaloa, Cocinas y Closets',32.46498,-114.79834],
        ['Mödul Studio Sonora Blvd. Morelos, Cocinas y Closets',32.62981,-114.85051],
        ['Mödul Studio Tabasco Av. Ruiz Cortines, Cocinas y Closets',18.06815,-93.17226],
        ['Mödul Studio Veracruz Lázaro Cárdenas, Cocinas y Closets',19.16993,-96.14928],
        ['Mödul Studio Veracruz Urano, Cocinas y Closets',19.15281,-96.11436],
        ['Mödul Studio Calle 1-C Yucatán Cocinas y Closets',19.31560,-99.22368]
    ];
	 var infoWindowContent = [
        [''],
        [''],
        [''],
        [''],
        [''],
        [''],
        [''],
        [''],
        [''],
        [''],
        ['']
    ];
	// Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    var img = new google.maps.MarkerImage("media/images/04-sucursales/sucursal-modul.png");
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
			icon: img, 
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
}
	</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
</head>
<body style="margin:0px; padding:0px">
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/logo-black.png" />
<div style="position:absolute; left:20%; top:50px; z-index:10;"></div>
<div id="menu2" class="menu2" style=" background:rgba(0,0,0,0.4);top: 0px;cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt; z-index:10;">
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
<div id="seucursales_box" style="position:absolute; top:0; left:70%; background-color:#fff; opacity: 0.6; height:500px; width:200px; z-index:5; font-family:'Lato';">
	<div style="font-size:22px; font-weight:300; color:#000; padding-top:40px;padding-left:10px;">SUCURSALES<br/>
    CERCANAS A TI<br/>
    <hr style="width:50px; padding-left:10px; border-color:#000;" align="left">
    </div>
    
    <div style="padding-left:10px; padding-right:5px; padding-top:5px; width:200px; color:#000; opacity:1; font-size:11px;">
      <p><b>+ GUADALAJARA - AV. MÉXICO</b><br/>
        Av. México 3181<br/>
        +52 (33) 3647 9999, 3647 9995<br/>
      gdl-mexico@modulstudio.mx</p>
      <p><br/>
        <b>+ GUADALAJARA - NIÑOS HÉROES</b><br/>
        Av. Niños Héroes 2906<br/>
        +52 (33) 3123 2458<br/>
      gdl-niñosheroes@modulstudio.mx</p>
      <p><br/>
        <b>+ GUADALAJARA - PABLO NERUDA</b><br/>
        Av. Pablo Neruda 2823<br/>
        +52 (33) 3642 6877<br/>
      gdl-pabloneruda@modulstudio.mx</p>
      <p><br/>
        <b>+ GUADALAJARA - LA RIOJA</b><br/>
        Av. López Mateos 69000, local 4B<br/>
        +52 (33) 1655 1172<br/>
        gdl-larioja@modulstudio.mx<br/>
      </p>
    </div>
</div>
<!-- Dislay Google map here -->
	<div id='map-canvas' ></div><br/>
<!--	<div>
		<label for="address"> Address:</label>
		<input type="text" id="address"/>
		<button onClick="UpdateMap()">Locate</button>
	</div> -->
<!-- Ubica tu sucursal en Modul Studio -->
<div align="center" id="ubica_tu_secursal" style="height:30px; width:100%; color:#fff;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
<b>UBICA TU SUCURSAL MÖDUL STUDIO</b>
</div>
<div id="sucursales" style="background-image:url(media/images/04-sucursales/fondo-cemento.jpg); height:100%; width:100%;" align="center">
<table border="0" cellspacing="0" cellpadding="0" style="color:#000;" align="center">
  <tr>
    <td style="font-family:'Lato' !important;font-weight:300; font-size: 14px; padding-top:40px; vertical-align:top;">
<span style="font-size:14px; padding-bottom:10px;"><b>BÚSCANOS POR<br/>
ESTADO</b></span><br/><br/>
<a class="ab" href="sucursal.php?name=aguascalientes">+ AGUASCALIENTES</a><br/>
<a class="ab" href="sucursal.php?name=chihuahua">+ CHIHUAHUA</a><br/>
<a class="ab" href="sucursal.php?name=coahuila">+ COAHUILA</a><br/>
<a class="ab" href="sucursal.php?name=durango">+ DURANGO</a><br/>
<a class="ab" href="sucursal.php?name=edo_mexico">+ EDO. DE MÉXICO</a><br/>
<a class="ab" href="sucursal.php?name=guanajato">+ GUANAJUATO</a><br/>
<a class="ab" href="sucursal.php?name=jalisco">+ JALISCO</a><br/>
<a class="ab" href="sucursal.php?name=av_mexico">AV. MÉXICO</a><br/>
<a class="ab" href="sucursal.php?name=ninos_heroes">NIÑOS HERÓES</a><br/>
<a class="ab" href="sucursal.php?name=pablo_neruda">PABLO NERUDA</a><br/>
<a class="ab" href="sucursal.php?name=larioja">LA RIOJA</a><br/>
<a class="ab" href="sucursal.php?name=michoacan">+ MICHOACÁN</a><br/>
<a class="ab" href="sucursal.php?name=morelos">+ MORELOS</a><br/>
<a class="ab" href="sucursal.php?name=nuevoleon">+ NUEVO LEÓN</a><br/>
<a class="ab" href="sucursal.php?name=queretaro">+ QUERÉTARO</a><br/>
<a class="ab" href="sucursal.php?name=quitanaroo">+ QUINTANA ROO</a><br/>
<a class="ab" href="sucursal.php?name=sanluispotosi">+ SAN LUIS POTOSÍ</a><br/>
<a class="ab" href="sucursal.php?name=sinaloa">+ SINALOA</a><br/>
<a class="ab" href="sucursal.php?name=sonora">+ SONORA</a><br/>
<a class="ab" href="sucursal.php?name=tabasco">+ TABASCO</a><br/>
<a class="ab" href="sucursal.php?name=veracruz">+ VERACRUZ</a><br/>
<a class="ab" href="sucursal.php?name=yucatan">+ YUCATÁN</a><br/>
    </td>
    <td>
    <div style="padding:30px;">
        <div style="font-family:'Lato' !important; font-weight:300; font-size:40px;">SUCURSALES</div>
        <div style="font-family:'LibreBaskerville Italic'; font-size:14px;">Juntos haremos realidad tu proyecto</div>
        <hr style="width:50px; border-color:#FFF;" align="left">
        <div style="font-family:'Lato'; font-size: 12px;">
        Mödul Studio cuenta con más de 25 franquicias en 18 estados<br/>
        de la República Mexicana que comercializan cocinas integrales,<br/>
        closets y muebles modulares. Si vas a remodelar, estás<br/>
        construyendo o compraste casa, visita tu Mödul Studio más<br/>
        cercano, y nuestros diseñadores asesorarán tu proyecto de<br/>
        acuerdo con tus necesidades, espacio, gustos y estilo de vida.
        </div>
    </div>
	<div style="font-family:'Lato' !important; font-weight:300; font-size: 14px; padding-top:30px;padding-left:30px;">
    <b><span style="color:#666;">¿NO HAY MÖDUL STUDIO EN TU CIUDAD?</span> </b><br/>
	<span style="color:#DD6235; font-size:13px;"><b>Llena esta forma y te pondremos en contacto con un distribuidor autorizado.</b></span>
    <div style="height:10px;"></div>
    <form action="" method="post" style="width:500px;">
    <input class="css-input" name="nombre" type="text" placeholder="NOMBRE" style="width:217px;"/>
    &nbsp;<input class="css-input" style="width:216px;" name="apellido" type="text" placeholder="APELLIDO" /><br/>
    <div style="height:10px;"></div>
    <input class="css-input" name="correo" type="text" placeholder="CORREO ELECTRONICO" style="width:465px;" /><br/>
     <div style="height:10px;"></div>
    <input class="css-input" name="telefono" type="text" placeholder="TELEFONO (10 DIGITOS)" style="width:150px;" />
    &nbsp;
    <select class="miselect" name="" style="width:150px;">
    <option>GUARDALAJARA *</option>
    <option>OTRAS *</option>
    </select>
    &nbsp;
    <select class="miselect" name="" style="width:150px;">
    <option>EDO.</option>
    <option>NNN.</option>
    </select>

    <div style="height:10px;"></div>
    <textarea class="css-input" name="comentarios" style="width:465px; height:200px; padding-bottom:30px;">
    </textarea>
    <div style="height:10px;"></div>
    <input type="checkbox" name="checkboxG4" id="checkboxG4" class="css-checkbox" />
    <label for="checkboxG4" class="css-label" checked></label><span style="font-size:12px; color:#666;">&nbsp;Envíenme información relacionada con Mödul, como promociones y lanzamientos.</span>
    <div style="height:10px;"></div>
    <input class="css-input" style="background-color:#999; width:100px; color:#fff;" name="" type="submit" value="ENVIAR"/>
    </form>
    <div style="height:30px;"></div>
    </div>
    
    </td>
  </tr>
</table>
<div style=" height:100px"></div>
<!--div style="width:100%; position:relative;">
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
</div-->

<!--div id="footer_top" align="center" style="background-color:#fff; width: 100%;color:#000;font-size:12px;">
<table  align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="text-align:center; padding-right:100px; font-family:'Lato';font-size:16px;">Mödul Studio © 2015. Todos los derechos reservados · Política de privacidad</td>
    <td style="font-family:'Lato'; font-size:16px;padding-right:30px;">POR</td>
    <td style="text-align:right;"><img src="media/images/MIQ-logo/MIQ-black.png" width="70" height="70" /></td>
  </tr>
</table>
</div>

</div-->
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
<footer id="footer_top" style=" color:#000;">
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