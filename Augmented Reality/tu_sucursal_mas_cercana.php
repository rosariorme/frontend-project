<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Modul, Imagina tu Cocina." />
<meta property="og:description" content="El limite es tu imaginacion" /> 
<meta property="og:image" content="media/images/07-imagina-tu-cocina/miniatura.jpg" />
<link rel="icon" type="image/gif" href="media/images/animated_favicon1.gif" />
<title>Modul</title>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/script_menu.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/colpick.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
	  loading('menu_visualiza','five','footer_top','logoo3');
	  	  change_arrow(1);
	  });
  </script>

<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic|Open+Sans:400normal|Roboto:400normal|Oswald:400normal|Open+Sans:400normal|Source+Sans+Pro:400normal|Indie+Flower:400normal|Gloria+Hallelujah:400normal|Raleway:400normal|PT+Sans:400normal|Droid+Sans:400normal&subset=all' rel='stylesheet' type='text/css'>
<style>
.css-input { border-color:#000; border-style:solid; padding:11px;font-size:12px; color:#000; border-width:1px; font-family:'Lato';  background-color: transparent;  } 
.css-input:focus { outline:none; }
input[type=checkbox].css-checkbox { position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0; }
input[type=checkbox].css-checkbox + label.css-label {
padding-left:31px;
height:62px; 
width:50px;
display:inline-block;
line-height:62px;
background-repeat:no-repeat;
background-position: 0 0;
font-size:26px;
vertical-align:middle;
cursor:pointer; } /*http://csscheckbox.com/checkboxes/u/csscheckbox_7dd90aff35ddb38fdc7cb1f8b325cea0.png*/
input[type=checkbox].css-checkbox:checked + label.css-label {background-position: 0 -62px;}
						label.css-label {
				background-image:url(media/images/cuadro2.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
}
select {
	inset;
    border:solid #000
	background: url('media/images/03-catalogo/cocinas/abajo.jpg') no-repeat right #fff;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
.color-box {
	float:left;
	width:30px;
	height:30px;
	margin:5px;
	border: 1px solid white;
}
.hvr-bubble-bottom {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}
.hvr-bubble-bottom-active {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateY(15px);
  transform: translateY(15px);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}

.hvr-bubble-bottom:before, .hvr-bubble-bottom-active2:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  border-style: solid;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  left: calc(50% - 10px);
  bottom: 0;
  border-width: 10px 10px 0 10px;
  border-color: #000 transparent transparent transparent;
}
.hvr-bubble-bottom:hover:before, .hvr-bubble-bottom:focus:before, .hvr-bubble-bottom:active:before, .hvr-bubble-bottom-active2:before{
  -webkit-transform: translateY(15px);
  transform: translateY(15px);
}
.hvr-bubble-bottom3:hover:before, .hvr-bubble-bottom3:focus:before, .hvr-bubble-bottom3:active:before, .hvr-bubble-bottom-active3:before{
  -webkit-transform: translateY(8px);
  transform: translateY(8px);
}

@-moz-keyframes tooltippulse {       
	0% {-moz-transform: scale(0); opacity: 0;}
	8% {-moz-transform: scale(0); opacity: 0;}
	15% {-moz-transform: scale(0.1); opacity: 1;}
	30% {-moz-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -moz-transform: scale(1);}
}

@-webkit-keyframes tooltippulse{
    0% {-webkit-transform: scale(0); opacity: 0;}
	8% {-webkit-transform: scale(0); opacity: 0;}
	15% {-webkit-transform: scale(0.1); opacity: 1;}
	30% {-webkit-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -webkit-transform: scale(1);}
}
@-o-keyframes tooltippulse{
    0% {-o-transform: scale(0); opacity: 0;}
	8% {-o-transform: scale(0); opacity: 0;}
	15% {-o-transform: scale(0.1); opacity: 1;}
	30% {-o-transform: scale(0.5); opacity: 1;}
	100% {opacity: 0; -o-transform: scale(1);}
}
.to-pulse-holder .to-pulse-marker {
	position: relative;
	display: block;
	width: 23px;/*imagen width*/
	height: 23px;/*imagen height*/
	background: url(media/images/plus_icon.png) no-repeat;/* imagen*/
	border-radius: 10px;
}
.to-pulse-holder .to-pulse-rays {
	position: absolute;
	left: -10px;
	top: -10px;
	margin: 0 auto;
	border-radius: 100px;
	background-color: transparent;
	opacity: 0.1;
	width: 40px;/*agrandar circulo*/
	height: 40px;/*agrandar circulo*/
	border: 2px solid #fff;
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	-o-border-radius: 100px;
	-ms-border-radius: 100px;
	border-radius: 100px;
	-webkit-animation: tooltippulse 1.4s linear infinite;
	-moz-animation: tooltippulse 1.4s linear infinite; 
	-ms-animation: tooltippulse 1.4s linear infinite;
	-o-animation: tooltippulse 1.4s linear infinite;
    animation: tooltippulse 1.4s linear infinite;
	border-image: initial;
}
.hvr-grow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}
.hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
  position:relative;
  z-index:10;
}
.grey { color:#666;}
.grey img{
	opacity:0.5;
}
.black22 {opacity:0;}
.black22 img{
	opacity:0;
	/*height:50px;*/
}
#cab {
	text-align: -moz-center;
}
#cabecera {
	width:100%; 
	background-color:#FBFBFB; 
	text-align: -moz-center;
	
	margin-left:auto;
	margin-right:auto;
	
    /* WebKit (Chrome & Safari) */
    display: -webkit-box;
    -webkit-box-pack: center;
    -webkit-box-align: center;
    
    /* Firefox */
    display: -moz-box;
    -moz-box-pack: center;
    -moz-box-align: center;
    
    /* IE */
    display: -ms-box;
    -ms-box-pack: center;
    -ms-box-align: center;
    
     /* Native CSS */
    display: box;
    box-pack: center;
    box-align: center;

}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>	
<script>
var texto_google = 'Av. NIÑOS HÉROES 2906<br />(33) 3123 2458 <br />Col. Jardines del Bosque<br />xxxmodulstudio@xxxx.com<br />';

	var locations = [
	{lat:31.693562,lon:-106.372032,place:"Mödul Studio Cd. Juárez Cocinas y Closets"},
	{lat:17.995260,lon:-92.929092,place:"Mödul Studio Villahermosa, Cocinas y Closets"},
	{lat:18.933414,lon:-99.224373,place:"Mödul Studio Cuernavaca, Cocinas y Closets"},
	{lat:20.67858,lon:-103.39523,place:'Mödul Studio Guadalajara Av.Mexico , Cocinas y Closets'},
	{lat:20.66675,lon:-103.38702,place:'Mödul Studio Guadalajara Av. Niños Héroes, Cocinas y Closets'},
	{lat:20.69759,lon:-103.38385,place:'Mödul Studio Guadalajara Av. Pablo Neruda, Cocinas y Closets'},
	{lat:20.65506,lon:-103.40036,place:'Mödul Studio Guadalajara Av. López Mateos, Cocinas y Closets'},
	{lat:21.92488,lon:-102.29926,place:'Mödul Studio Aguascalientes Blvd. Luis Donaldo Colosio, Cocinas y Closets'},
	{lat:31.74659,lon:-106.42493,place:'Mödul Studio Juarez Av. Valle del Sol, Cocinas y Closets'},
	{lat:25.56393,lon:-103.42834,place:'Mödul Studio Torreón Blvd. Independencia, Cocinas y Closets'},
	{lat:24.03437,lon:-104.67529,place:'Mödul Studio Durango Blvd. Felipe Pescador, Cocinas y Closets'},
	{lat:19.26185,lon:-99.57690,place:'Mödul Studio Edo. de México Av. Tecnológico, Cocinas y Closets'},
	{lat:32.54731,lon:-116.89078,place:'Mödul Studio Michoacán Av. Melchor Ocampo, Cocinas y Closets'},
	{lat:19.69012,lon:-101.16021,place:'Mödul Studio Michoacán Artilleros, Cocinas y Closets'},
	{lat:19.38616,lon:-99.08076,place:'Mödul Studio Morelos Av. Río Mayo, Cocinas y Closets'},
	{lat:26.00511,lon:-98.06543,place:'Mödul Studio Nuevo León Rio Grijalva, Cocinas y Closets'},
	{lat:25.97587, lon:-98.06892,place:'Mödul Studio Nuevo León Av. Lázaro Cárdenas, Cocinas y Closets'},
	{lat:18.52299, lon:-88.26986,place:'Mödul Studio Quintana Roo Chetumal, Cocinas y Closets'},
	{lat:22.14287, lon:-101.02230,place:'Mödul Studio San Luis Potosí Montes Blancos, Cocinas y Closets'},
	{lat:25.84059, lon:-97.51240,place:'Mödul Studio Sinaloa Plaza fiesta, Cocinas y Closets'},
	{lat:32.46498,lon:-114.79834,place:'Mödul Studio Sonora Sinaloa, Cocinas y Closets'},
	{lat:32.62981,lon:-114.85051,place:'Mödul Studio Sonora Blvd. Morelos, Cocinas y Closets'},
	{lat:18.06815,lon:-93.17226,place:'Mödul Studio Tabasco Av. Ruiz Cortines, Cocinas y Closets'},
	{lat:19.16993,lon:-96.14928,place:'Mödul Studio Veracruz Lázaro Cárdenas, Cocinas y Closets'},
	{lat:19.15281,lon:-96.11436,place:'Mödul Studio Veracruz Urano, Cocinas y Closets'},
	{lat:19.31560,lon:-99.22368,place:'Mödul Studio Calle 1-C Yucatán Cocinas y Closets'}
	];

    var map; 
    function Init()
    {
        if ( navigator.geolocation )
        {
            navigator.geolocation.getCurrentPosition( UserLocation, errorCallback,{maximumAge:60000,timeout:10000});
        }
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
        //ClosestLocation( position.coords.latitude, position.coords.longitude, "This is my Location" );
		//alert(position.coords.latitude);
		
		ClosestLocation( '20.6799241', '-103.3801414', "This is my Location" );
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
		//alert(locations[ closest].lat);
		switch(locations[ closest].lat)
		{
			case 31.693562:
			texto_google = 'Av. Valle del Sol # 1952 Local E-1<br/>Plaza del Sol<br/>C.P. 32546<br/>+52 (656) 122 73 50<br/>miguel.sarmiento@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 17.995260:
			texto_google = 'Av. Ruiz Cortines, esquina Usumacinta<br/>Andador Perú, local I11-I12<br/>Plaza City Center<br/>C.P. 86035<br/>+52 (993) 316 5839<br/>anayatzi.morales@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.933414:
			texto_google = 'Av. Río Mayo No. 109 Local 1-A<br/>Col. Vista Hermosa<br/>C.P. 62290<br/>+52 (777) 228 91 48<br/>alejandra.bernal@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.67858:
			texto_google = 'Av. Mexico 3181<br/>Col. Vallarta San Jorge<br/>C.P. 44690<br/>+52 (33) 3647 9999<br/>+52 (33) 3647 9995<br/>daniel.sada@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.66675:
			texto_google = 'Av. Niños Héroes 2906<br/>Col. Jardines del Bosque<br/>C.P. 44520<br/>+52 (33) 3123 2458<br/>gerencia.estudio@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.69759:
			texto_google = 'Av. Pablo Neruda 2823<br/>Col. Providencia<br/>C.P. 44639<br/>+52 (33) 3642 8629<br/>elena.suarez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 20.65506:
			texto_google = 'Av. Pablo Neruda 2823<br/>Col. Providencia<br/>C.P. 44639<br/>+52 (33) 3642 8629<br/>elena.suarez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 21.92488:
			texto_google = 'Blvd. Luis Donaldo Colosio No. 633<br/>Col. Jardines de la Concepción, 2da. Sección<br/>C.P. 20120<br/>+52 (449) 251 4266<br/>hector.gonzalez@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 31.74659:
			texto_google = 'Av. Valle del Sol # 1952 Local E-1<br/>Plaza del Sol<br/>C.P. 32546<br/>+52 (656) 122 73 50<br/>miguel.sarmiento@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.56393:
			texto_google = 'Blvd. Independencia 2600 local 12<br/>Plaza San Luciano<br/>Col. La Estrella<br/>C.P. 27010<br/>+52 (871) 747 9696<br/>ventas.torreon@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 24.03437:
			texto_google = 'Blvd. Felipe Pescador 1008 Ote.<br/>Col. Fátima.<br/>C.P. 34060<br/>+52 (618) 811 0977<br/>fernando.toulet@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.26185:
			texto_google = 'Av. Tecnológico No. 715 planta alta<br/>Col. Bellavista<br/>C.P. 52172<br/>+52 (722) 624 8895';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.54731:
			texto_google = 'Av. Melchor Ocampo No. 2382<br/>Col. Lomas de Bellavista<br/>C.P. 60950<br/>+52 (753) 532 9600<br/>robert.dillon@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.69012:
			texto_google = 'Artilleros de 1847 #1520-8<br/>Col. Chapultepec Oriente<br/>C.P. 58260<br/>+52 (443) 204 4606<br/>adriana.aquino@mor.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.38616:
			texto_google = 'Av. Río Mayo No. 109 Local 1-A<br/>Col. Vista Hermosa<br/>C.P. 62290<br/>+52 (777) 228 91 48<br/>alejandra.bernal@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 26.00511:
			texto_google = 'Rio Grijalva #217 nte, Local 5<br/>entre Amazonas y Orinoco<br/>Col. Del Valle<br/>C.P. 64346<br/>+52 (81) 8143 8003<br/>gloria.trujillo@mty.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.97587:
			texto_google = 'Av. Lázaro Cárdenas #2510, Local E<br/>Col. Residencial San Agustín<br/>C.P. 66260<br/>+52 (81) 2089 0228<br/>diego.sanchez@modulstudio.mx'; document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.52299:
			texto_google = 'Calle 2 No. 590-B<br/>Col. Zona Industrial<br/>C.P. 77049<br/>karelia.razo@ctm.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 22.14287:
			texto_google = 'Montes Blancos No. 180, Local 6<br/>Esq. Montes Apalaches<br/>Col. Lomas 2da. Sección<br/>C.P. 78210<br/>+52 (444) 243 0003<br/>dirección.slp@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 25.84059:
			texto_google = 'Plaza fiesta Locales 6,7 y 8<br/>Col. Centro<br/>C.P. 80120<br/>+52 (667) 714 74 10<br/>luisgerardo.garcia@modulstudio.mx ';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.46498:
			texto_google = 'Sinaloa 576 Local 4 esq. con Mayo<br/>Col. Centro<br/>C.P. 8500<br/>+52 (644) 415 0707<br/>rafael.zunigacoronado@obr.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 32.62981:
			texto_google = 'Blvd. Morelos 726 Local D<br/>Col. Cucurpe Residencial<br/>C.P. 83105<br/>+52 (662) 284 7776<br/>dulce.peralta@hmo.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 18.06815:
			texto_google = 'Av. Ruiz Cortines, esquina Usumacinta<br/>Andador Perú, local I11-I12<br/>Plaza City Center<br/>C.P. 86035<br/>+52 (993) 316 5839<br/>anayatzi.morales@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.16993:
			texto_google = 'Lázaro Cárdenas No. 115<br/>Col. Centro<br/>C.P. 96400<br/>+52 (921) 212 77 26<br/>gabriela.colorado@coa.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.15281:
			texto_google = 'Urano No. 766<br/>Fracc. Jardines de Virginia<br/>C.P. 94294<br/>+52 (229)130 42 14<br/>sofia.garcia@coa.modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
			case 19.31560:
			texto_google = 'Calle 1-C, local 1<br/>Plaza Campestre<br/>Fracc. Campestre<br/>C.P. 97120<br/>+52 (999) 254 0012<br/>gerardo.rosas@modulstudio.mx';
			document.getElementById("texto_mapa").innerHTML = texto_google;
			break;
		}
		 
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
        var contentString = "" + "<img src='media/images/animated_favicon1.gif' width='14' height='14' />&nbsp;<span style='text-decoration:underline;'>Sucursal m&aacute;s cercana M&ouml;dul:</span><br/><br/><strong>" + locations[ closest ].place + "</strong><br/>" + texto_google;    // HTML text to display in the InfoWindow
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
<body style="background-color:#fff; color:#000; width:100%; height:100%; padding:0; margin:0;">
<img id="logoo3" src="media/images/logo-black.png" width="81" height="130" style="z-index:10;position:absolute; top:50px; left:1%; cursor:pointer;" onclick="javascript:window.location = 'http://www.modulstudio.mx/';" />

<div id="parte_abajo">
<style>
   #wrapper { position: relative; }
   #over_map { 
   position: absolute;
   top: 1px;
   left: 24%;
   z-index: 100;
   height:84%;
   padding-top:51px;
   padding-left:20px;
   padding-right:20px;
   background-color:rgba(255, 255, 255, 0.7);
   color:#000;
    }
	#map-canvas
{
	width : 100%; 	/* map width */
	height: 1000px;	/* map height */
}
</style>

<div id="isla7">
    <div id="wrapper">
       <div id="google_map">
       		<div id='map-canvas' ></div>
       </div>
    <table style="display:none;">
        <tr id="over_map">
            <td onclick="javascript:window.location = 'mailto:daniel.sada@modulstudio.mx';"><div style="font-family:'Lato'; cursor:pointer; font-weight:300; font-size:24px;">
            VISITA TU MÖDUL<br/> MÁS CERCANO
    <hr align="left" width="50px" color="#999999" style="border-color:#999;" />
    <p id="texto_mapa" style="font-size:12px;">
    <script>
    document.write(texto_google);
    </script>
    </p>
    <div style="font-size:12px;cursor:pointer; cursor: hand; padding-top:30px;">
    <a style="color:#000; text-decoration:none;" href="https://www.google.com/maps/d/viewer?mid=zNq46-wvOahM.k7307HOL18xQ">+ Ver mapa en Google maps</a>
    </div>
    <div  style="font-size:12px; padding-top:10px;">
    <a id="agenda_tu_cita" onclick="agenda_tu_citaClick()" style="cursor:pointer; cursor: hand;">+ Agenda tu cita</a>
    </div>
       </div></td>
            <td valign="top">
            <div id="agenda_tu_cita_div" style=" display:none;padding-left:20px;">
            <form name="form_agenda" action="" method="post">
            <p><input class="nombre" name="nombre" type="text" placeholder="NOMBRE COMPLETO*" required /></p>
            <p><input class="telefono" name="telefono" type="tel" placeholder="TELÉFONO*" required /></p>
    <p><input class="hora" name="hora" type="text" placeholder="HORA DESEADA*" required />&nbsp;&nbsp;
    <!--<inputtype="text"/>-->
    <label class="arrow">
    <select class="fecha" name="fecha"  placeholder="FECHA DESEADA*" required>
    <option value="">FECHA DESEADA*</option>
    <option value="ESTA SEMANA">ESTA SEMANA</option>
    <option value="EN UN MES">EN UN MES</option>
    <option value="INDEFINIDO">INDEFINIDO</option>
    </select>
    </label>
    </p>
    <p><input class="email" name="email"  type="email" placeholder="E-MAIL*" required /></p>
    <p><input type="submit" name="submit" value="Enviar" style="background-color:#999; color:#fff; padding:20px; padding-left:30px; padding-right:30px; border:none;"/></p>
            </form>
            </div>
            </td>
        </tr>
    </table>
  </div>
</div>

</div>

<div style="width:100%;">
   
<map name="Map" id="Map">
  <area shape="rect" coords="411,5,482,141" href="#" onclick="javascript:change_menu('piso')" />
  <area shape="rect" coords="273,3,328,65" href="#" onclick="javascript:change_menu('pared')" />
  <area shape="rect" coords="138,1,188,63" href="#" onclick="javascript:change_menu('acabados')" />
  <area shape="rect" coords="3,0,48,58" href="#" onclick="javascript:change_menu('espacio')" />
</map>
<div style=" height:50px;"></div>
</body>
</html>