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
<style>
body {
	background-color:#fff;
}
/* style settings for Google map */
#map-canvas
{
	width : 100%; 	/* map width */
	height: 500px;	/* map height */
}
.css-input { border-color:#cccccc; border-style:solid; padding:11px;font-size:12px; color:#616061; border-width:1px; font-family:'Lato';  } 
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
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>	
	<!-- Google Maps API -->
	<script>
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
        if ( navigator.geolocation )
        {
			
            navigator.geolocation.getCurrentPosition( UserLocation, errorCallback,{maximumAge:60000,timeout:10000});
        }
        // Default to Washington, DC
        else
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
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
</head>
<body>
<div style="position:absolute; left:20%; top:50px; z-index:10;"><img src="media/images/logo-black.png" /></div>
<div id="menu2" class="menu" style="cursor:pointer; cursor: hand;font-family:'Lato' !important;font-weight:300; font-size: 55 pt; z-index:10;">
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
<div id="seucursales_box" style="position:absolute; top:10%; left:30%; background-color:#000; opacity: 0.6; height:200px; width:200px; z-index:5; font-family:'Lato';">
	<div style="font-size:22px; font-weight:300; color:#fff; padding-top:20px;padding-left:10px;">
    MÖDUL STUDIO<br/>
    GUADALAJARA<br/>
    <hr style="width:50px; padding-left:10px; border-color:#fff;" align="left">
    </div>
    
    <div style="padding-left:10px; padding-right:5px; padding-top:5px; width:200px; color:#fff; opacity:1; font-size:11px;">
      <p><b>+ GUADALAJARA - AV. MÉXICO</b><br/>
        Av. México 3181<br/>
        +52 (33) 3647 9999, 3647 9995<br/>
      gdl-mexico@modulstudio.mx</p>
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
<div align="center" id="ubica_tu_secursal" style="width:100%; color:#fff;font-family:'Lato' !important;font-weight:300; font-size: 55 pt;">
<table cellpadding="0" cellspacing="0" width="100%" style=" background-color:#999">
<tr>
<td width="20%" height="350px"><img src="media/images/04-sucursales/estados/jalisco/pablo-neruda/01-cocina-xuni.jpg" width="100%" height="100%" /></td>
<td width="20%" height="350px"><img src="media/images/04-sucursales/estados/jalisco/pablo-neruda/02-exterior-pablo-neruda.jpg" width="100%" height="100%" /></td>
<td width="20%" height="350px"><img src="media/images/04-sucursales/estados/jalisco/pablo-neruda/03-cocina-xuni.jpg" width="100%" height="100%" /></td>
</tr>
</table>
</div>
<div style="height:10px;"></div>
<div id="blog">
<img src="media/images/04-sucursales/estados/jalisco/pablo-neruda/modul-studio-pablo-neruda.jpg" width="100%" height="790" /> 
    <div style="background-color:#F30; color:#fff;opacity: 0.3; position:absolute; top:950px; left:20%; width:200px; height:200px; z-index:10;">
    </div>
        <div style="font-size:22px; font-family:'Lato';font-weight:300; color:#fff; position:absolute; top:950px; left:20%;padding-top:20px;padding-left:30px; opacity:1; z-index:11;">
        BLOG DE <br />NUESTRA<br />SUCURSAL</div>
        
        <div style="font-family:'LibreBaskerville Italic'; position:absolute; top:1060px; left:20%; font-weight:100; font-size:12px; padding-left:30px; color:#fff; opacity:1;z-index:11;">
        Lee las últimas noticias
        </div>
    <div id="blanco_blog" style="height:790px; width:200px; z-index:10; position:absolute; left: 50%; top:890px; background-color:#fff; opacity:0.6;">
    <div style="font-size:22px; font-weight:300; color:#000; font-family:'Lato'; padding-left:10px; padding-top:10px;">
    NOTICIAS<br/>
    RECIENTES<br/>
    <hr style="width:50px; padding-left:10px; border-color:#000;" align="left">
    </div>
    <div style="font-size:12px; font-family:'Lato'; padding-left:10px; text-transform:uppercase; color:#000; text-decoration:none;">
    <?php
	/*require( '/wordpress/wp-load.php' ); //ruta a wp-load.php
	  // Asegurate que la ruta sea la correcta
	  $number = 6; // cantidad de entradas a mostrar
	  $recent_posts = wp_get_recent_posts($number); // obtener los post por ID y ordenar de manera descendente
	  
	  foreach($recent_posts as $post)
	  {
		echo '<a style="color:#000; text-decoration:none;" href="'.get_permalink($post['ID']).'">'.$post['post_title'].'</a> '.$post['post_excerpt'].'<br/>
		<a style="color:#000; text-decoration:none;" href="'.get_permalink($post['ID']).'"><b>+ LEER MAS</b></a> <br/><br/>';
	  }
	  echo '';*/
	?>
    </div>
    </div>
</div>
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

</body>
</html>