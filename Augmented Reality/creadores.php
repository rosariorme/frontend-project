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
/* style settings for Google map */
#map-canvas
{
	width : 100%; 	/* map width */
	height: 400px;	/* map height */
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
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>	
<script>
$( document ).ready(function() {
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
	{lat:31.693562,lon:-106.372032,place:"Mödul Studio Cd. Juárez Cocinas y Closets"},
	{lat:17.995260,lon:-92.929092,place:"Mödul Studio Villahermosa, Cocinas y Closets"},
	{lat:18.933414,lon:-99.224373,place:"Mödul Studio Cuernavaca, Cocinas y Closets"},
	];

    var map;    // Google map object

    // Initialize and display a google map
    function Init()
    {
        // HTML5/W3C Geolocation
        /*if ( navigator.geolocation )
        {
			
            navigator.geolocation.getCurrentPosition( UserLocation, errorCallback,{maximumAge:60000,timeout:10000});
        }
        // Default to Washington, DC
        else*/
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
        var contentString = "" + "Closest Location to User: " + locations[ closest ].place + "";    // HTML text to display in the InfoWindow
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
	
	</script>
</head>
<body>
<img width="81" height="130" id="logo_modul" style="z-index: 10;position: absolute;top: 30px;left: 1%;" src="media/images/logo-black.png" />
<div></div>
<div id="menu2" class="menu" style=" background:rgba(0,0,0,0.4); top:0px;cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt; z-index:10;">
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

<div style="height:600px; width:100%;background-image:url(media/images/06-profesional/modul-profesionales.jpg); background-size: 100% 600px; position:relative;" >
	<div id="texto" align="center">
        <table style="font-family:'Lato'; font-size: 14 pt;cursor:pointer; cursor: hand; padding-top:30px; color:#666;" align="center">
        <tr style="padding-left:10px; padding-right:10px">
            <td style="padding-left:10px; padding-right:10px;font-family:'Lato';">Proyectos realizados</td>
            <td> | </td>
            <td style="padding-left:10px; padding-right:10px;font-family:'Lato';">Pláticanos tu proyecto</td>
        </tr>
    </table>

    <table border="0" cellspacing="0" cellpadding="0" style="color:#000; padding-top:50px;">
      <tr>
        <td>
        <div style="font-family:'Lato' !important; font-weight:300; font-size:40px;">
        CREADORES
        </div>
        <div style="font-family:'LibreBaskerville Italic'; font-weight:100; font-size:16px;">De profesional a profesional</div>
        <hr style="width:50px; border-color:#000;" align="left"/>
        <div style="font-family:'Lato'; font-size: 12px;">
        Resolvemos las necesidades de<br/>
        arquitectos, interioristas, constructoras<br/>
        o inmobiliarias al ofrecerles entregas<br/>
        y precios de mayoreo de cocinas,<br/>
        closets y muebles modulares para<br/>
        cualquier tipo de proyecto: desde casas<br/>
        modelo, departamentos y viviendas<br/>
        multifamiliares hasta residencias y torres<br/>
        de alto nivel en todo el país.<br/>
        </div>
        </td>
      </tr>
    </table>
    </div>
    <div id="boxs" style="position:absolute; top:0px; bottom:0px; right:100px;">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
        <div style="position:absolute; top:0px; right:200px; background-color:#000; opacity: 0.6; height:600px; width:150px; z-index:5; font-family:'Lato';color:#fff;">
            <div align="center" style=" padding-top:50px; width:150px; color:#000; opacity:1; font-size:11px;color:#fff;">
            	<img src="media/images/06-profesional/medida.png" width="45" height="40" />
			  <p><b>A LA MEDIDA</b><br/>
               Para cualquier<br/>
                presupuesto y tipo<br/>
              de proyecto</p>
              <div style="height:30px;"></div>
              <img src="media/images/06-profesional/mayoristas.png" width="56" height="38" />
			  <p><b>PRECIO DE<br/>
				MAYORISTA</b><br/>
                Aprovecha las<br/>
                ventajas de la<br/>
                compra por volumen.</p>
              <div style="height:30px;"></div>
              <img src="media/images/06-profesional/proveedores.png" width="51" height="38" />
				<p><b>A LA MEDIDA</b><br/>
               Para cualquier<br/>
                presupuesto y tipo<br/>
              de proyecto</p>
            </div>
        </div>
        
        </td>
        <td>
        <div style="position:absolute; top:0px; right:10px; background-color:#000; opacity: 0.6; height:600px; width:150px; z-index:5; font-family:'Lato'; color:#fff;">
            <div align="center" style="padding-top:50px; width:150px; color:#000; opacity:1; font-size:11px;color:#fff;">
             <img src="media/images/06-profesional/trato-especial.png" width="58" height="39" />
			 <p><b>TRATO ESPECIAL</b><br/>
               Sin intermediarios,<br/>
                de la fábrica a tu<br/>
              proyecto</p>
              <div style="height:30px;"></div>
              <img src="media/images/06-profesional/lineas-especiales.png" width="46" height="46" />
			  <p><b>LÍNEAS<br/>
				ESPECIALES</b><br/>
               Práctika y<br/>
               Constructa, ideales<br/>
               para constructores.</p>
              <div style="height:30px;"></div>
              <img src="media/images/06-profesional/privilegios.png" width="47" height="49" />
			  <p><b>PRIVILEGIOS</b><br/>
                Regístrate en nuestra<br/>
                lista de correos y<br/>
                recibe invitación a<br/>
                eventos y recepción<br/>
                de información<br/>
                especial sobre<br/>
                novedades.</p>
            </div>
        </div>
        
        </td>
      </tr>
    </table>
    </div>
    
</div>

<div align="center" id="ubica_tu_secursal" style="height:50px; width:100%; background-color:#fff; color:#666;font-family:'Lato' !important;font-weight:300; font-size: 30px;">
<table border="0" cellspacing="0" cellpadding="0" style="padding-top:5px; border-color:#fff;">
  <tr>
    <td style="padding-right:20px;">PROYECTOS REALIZADOS</td>
    <td>|</td>
    <td style="font-size:14px; padding-left:20px; padding-right:30px;">Proyectos inmobiliarios que han confiado en Mödul.</td>
    <td style="padding-top:5px; cursor:pointer;">
    <img style="cursor:pointer;" onclick="javascript:window.location = 'https://www.facebook.com/cocinasintegralesmodul/photos_stream?ref=page_internal';" src="media/images/06-profesional/proyectos-modul/facebook.png" width="30" height="30" />
    <img style="cursor:pointer;" onclick="javascript:window.location = 'https://www.pinterest.com/modulstudio/';" src="media/images/06-profesional/proyectos-modul/pinterest.png" width="30" height="30" />
    </td>
  </tr>
</table>
</div>
<div style="background-color:#CCC;">
<table border="0" cellspacing="0" cellpadding="0" align="center" style="position:relative;">
  <tr>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/Retro-Concept-Contemporary-Kitchen.jpg); background-size:300px 300px; width:300px; height:300px;">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6; font-family:'Lato';" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img onclick="javascript:window.location='proyecto.php';" style="cursor:pointer;" src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/shutterstock_130677524.jpg); background-size:300px 300px; width:300px; height:300px;font-family:'Lato';">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6;" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/11-modul.jpg); background-size:300px 300px; width:300px; height:300px;font-family:'Lato';">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6;" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
  </tr>
  <tr>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/best-decoration-modern-kitchens-interior-for-sample.jpg); background-size:300px 300px; width:300px; height:300px;font-family:'Lato';">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6;" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/IMG_0131.jpg); background-size:300px 300px; width:300px; height:300px;font-family:'Lato';">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6;" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
    <td style="position:relative; background-image:url(media/images/06-profesional/proyectos-modul/VER-BEST-BATHROOMS-VERANDA-22.jpg); background-size:300px 300px; width:300px; height:300px;font-family:'Lato';">
    <div style="width:100%; position:absolute; left:0; bottom:0;background-color:#000; color:#fff; height:40px; opacity:0.6;" >
    <div style="padding-top:10px; padding-left:10px;"><b>NOMBRE DEL PROYECTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="media/images/06-profesional/proyectos-modul/ver-mas.png" width="20" height="20" /></div>
    </div>
    </td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td style="font-family:'Lato'; color:#666; padding-right:10px; padding-top:5px; padding-bottom:30px;" align="right">VER MÁS < 123</td>
  </tr>
</table>
</div>
<div style=" position:relative; background-image:url(media/images/06-profesional/proyectos-modul.jpg); background-size:100% 800px; height:800px; width:100%; color:#000;">
<div style="width:200px; height:800px; background-color:#fff; position:absolute; right:200px; color:#000; opacity:0.6;"></div>

		
        <table border="0" cellspacing="0" cellpadding="0" align="center" style="padding-top:40px; width:500px;">
          <tr>
            <td>
                <div style="font-family:'Lato' !important; font-weight:300; font-size:30px; padding-bottom:5px;">
                PLATÍCANOS <br/>
                TU PROYECTO<br/>
                </div>
                <div style="font-family:'Lato'; font-size: 12px; opacity:1;">
                   Haz una cita y juntos veremos las mejores opciones para <br/>
                    que tus clientes obtengan lo mejor de su inversión y tú <br/>
                    aproveches los beneficios de nuestro trato especial a <br/>
                    profesionales del diseño y la construcción. <br/>
                </div>
            </td>
          </tr>
          <tr>
            <td style="width:500px;">
            <div style="height:30px; width:500px;"></div>
            <form action="" method="post">
            <input class="css-input" name="nombre" type="text" placeholder="NOMBRE *" style="width:40%;"/>
            &nbsp;<input class="css-input" style="width:40%;" name="apellido" type="text" placeholder="APELLIDO *" /><br/>
            <div style="height:10px;"></div>
            <input class="css-input" name="nombre" type="text" placeholder="PROFESION *" style="width:40%;"/>
            &nbsp;<input class="css-input" style="width:40%;" name="apellido" type="text" placeholder="EMPRESA *" /><br/>
            <div style="height:10px;"></div>
            <select class="miselect" name="ciudad" style="width:40%;">
            <option>CIUDAD *</option>
            <option>OTRAS *</option>
            </select>
            &nbsp;<input class="css-input" style="width:45%;" name="apellido" type="text" placeholder="EMAIL *" /><br/>
             <div style="height:10px;"></div>
            <input class="css-input" name="telefono" type="text" placeholder="TELEFONO (10 DIGITOS) *" style="width:65%;" />
            
            <input class="css-input" style="background-color:#999; width:100px; color:#fff;" name="" type="submit" value="ENVIAR"/>
            </form>
            
            </td>
          </tr>
        </table>
</div>

<div>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td style="width:30%; vertical-align:top" align="right">
    <div style="width:200px; padding-right:50px;">
        <div align="left" style="font-size:22px; font-weight:300; color:#fff; padding-top:50px;padding-left:10px;">SUCURSALES<br/>
        CERCANAS A TI<br/>
        <hr style="width:50px; padding-left:10px; border-color:#fff;" align="left">
        </div>
        <div align="left" style="padding-left:10px; padding-right:5px; padding-top:5px; width:200px; color:#fff; opacity:1; font-size:11px;">
          <p><b>+ GUADALAJARA - AV. MÉXICO</b><br/>
            Av. México 3181<br/>
            +52 (33) 3647 9999, 3647 9995<br/>
          gdl-mexico@modulstudio.mx</p>
         </div>
    </div>
    </td>
    <td style="width:70%;">
    <div id='map-canvas' ></div>
	</td>
  </tr>
</table>
</div>

<div style="background-image:url(media/images/06-profesional/franquicia-modul.jpg); background-size:100% 550px; height:550px; width:100%; color:#000;" align="center">
<div style="font-family:'Lato' !important; font-weight:300; font-size:34px; padding-top:200px;">FRANQUICIAS DISPONIBLES</div>
<div style="font-family:'LibreBaskerville Italic'; font-size:16px; padding-top:10px;">¿No hay Mödul Studio en tu ciudad?</div>
<hr style="width:50px; border-color:#000;" align="center">
<div style="font-family:'Lato'; font-size: 14px; padding-bottom:100px;">
Conviértete en franquiciatario y amplía los alcances de tu negocio.<br/>
<div style="height:10px;"></div>
<a href="abre-tu-negocio.php" style="text-decoration:none; color:#000;">+ FORMA UNA FRANQUICIA</a>
</div>
<div style=" height:100px;"></div>
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
</html>