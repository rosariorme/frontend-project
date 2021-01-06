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
/* style settings for Google map */
#map-canvas
{
	width : 100%; 	/* map width */
	height: 200px;	/* map height */
}
</style>
<script>
function toggle(){
	$("#sub_menu").slideToggle();
}
</script>
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
		var img = new google.maps.MarkerImage("../media/images/04-sucursales/sucursal-modul.png");
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
<div id='map-canvas' ></div>
    <div id="contenido" style="width:100%; height:600px; background-color:#fff; color:#000; background-size:100% 100%; background-repeat:no-repeat; padding-top:20px; padding-left:10px; padding-right:10px;">
    
        <div id="movil_primera_pag">
                    <div id="titulo_cocinas_modulares" style=" font-family:'Lato' !important;font-weight:300; font-size:40px; ">
                    SUCURSALES<br />
					CERCANAS A TI</div>
                    <p id="titulo_deseo" class="espacios-para-cada-deseo" style="font-family:'Lato'; font-size:20px;">
                    <hr style="color:#fff" width="50px" align="left"/>
            
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:'Lato'; font-size:20px;">
                      <tr>
                        <td style="padding:10px;">
                        AV. MÉXICO<br />
                        <span style="font-size:14px;">
                        Av. México 3181<br />
                        (33) 3647 9999 / 95<br />
                        gdl-mexico@modulstudio.mx<br />
                        </span>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding:10px;">
                        AV. NIÑOS HÉROES<br />
                         <span style="font-size:14px;">
                        Av. Niños Héroes 2906<br />
                        (33) 3123 2458<br />
                        gdl-ninosheroes@modulstudio.mx<br />
                        </span>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding:10px;">
                        PABLO NERUDA<br />
                         <span style="font-size:14px;">
                        Av. Pablo Neruda 2823<br />
                        (33) 3642 6872<br />
                        gdl-pabloneruda@modulstudio.mx<br />
                        </span>
                        </td>
                      </tr>
                      <tr>
                        <td style="padding:10px;">
                        LA RIOJA<br />
                         <span style="font-size:14px;">
                        Av. López Mateos 6900,<br />
                        Local 4B<br />
                        (33) 1655 1172<br />
                        gdl-larioja@modulstudio.mx<br />
                        </span>
                        </td>
                      </tr>
                    </table>

                    <div id="redes_sociales">
                    
                    </div>
                    </p>
              </div>
        </div>
    
    </div>
    <div style="position:relative;width:100%; height:300px; background-color:#F93; color:#fff; font-family:'Lato'; font-size:20;">
        <div style=" padding:20px;">
        <span style=" font-size:30px;">CORPORATIVO</span><br />
        <span style=" font-size:20px;">
        Calle Parral 2A<br />
        Guadalajara, Jal.<br />
        +52 (33) 3110 1032<br />
        contacto@modulstudio.mx<br />
        </span>
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

