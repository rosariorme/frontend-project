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
	{lat:31.693562,lon:-106.372032,place:"M�dul Studio Cd. Ju�rez Cocinas y Closets"},
	{lat:17.995260,lon:-92.929092,place:"M�dul Studio Villahermosa, Cocinas y Closets"},
	{lat:18.933414,lon:-99.224373,place:"M�dul Studio Cuernavaca, Cocinas y Closets"},
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
            ClosestLocation( 31.693562, -106.372032, "M�dul Studio Cd. Ju�rez Cocinas y Closets <br/>Cocinas Integrales en Cd. Ju�rez<br/>Av. Balle del Sol #1952 Local E-1<br/>Plaza del Sol<br/>CP: 32546<br/>Tel: (656) 1227350" );
    }

    function errorCallback( error )
    {
    }

    // Callback function for asynchronous call to HTML5 geolocation
    function UserLocation( position )
    {
		alert(position.coords.latitude); alert(position.coords.longitude);
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
    // First published by Roger Sinnott in Sky & Telescope magazine in 1984 (�Virtues of the Haversine�)
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
	<style>
	/* style settings for Google map */
	#map-canvas
	{
		width : 100%; 	/* map width */
		height: 500px;	/* map height */
	}
	</style>
</head>
<body> 
	<!-- Dislay Google map here -->
	<div id='map-canvas' ></div><br/>
	<div>
		<label for="address"> Address:</label>
		<input type="text" id="address"/>
		<button onClick="UpdateMap()">Locate</button>
	</div>
</body>
</html>