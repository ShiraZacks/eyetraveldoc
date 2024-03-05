<?php
echo '

    <div id="map"></div>

    <script>
        // This gets the area. the center point of the map comes first, then the points to enclose the circle.
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: {
                    lat:42.52, //wixom 		
                    lng: -83.53
                },
                mapTypeId: "terrain",
            });
            // Define the latitude and longitude coordinates for the polygon path.
            const triangleCoords = [{
                    lat:42.334185,//detroit
                    lng: -83.041567
                },
                {
                    lat: 41.75, //lambertville  			
                    lng: -83.63 
                },
                {
                    lat: 42.01,	//tecumsah 	
                    lng: -83.95
                },
                {
                    lat: 42.24,  //jackson 		
                    lng: -84.4
                },
                {
                    lat: 42.62, //potterville
                    lng: -84.74
                },
                {
                    lat: 42.84, //dewitt
                    lng: -84.57
                },
                {
                    lat: 43.02, //flint  		
                    lng: -83.69
                },
                {
                    lat: 42.99,	
                    lng: -82.43//port huron
                },
                {
                    lat:42.334185,//detroit
                    lng: -83.0415
                }
            ];
            // Construct the polygon.
            const bermudaTriangle = new google.maps.Polygon({
                paths: triangleCoords,
                strokeColor: "#0191d7",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#0191d7",
                fillOpacity: 0.35,
            });

            bermudaTriangle.setMap(map);
        }

        window.initMap = initMap;
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVL3o1VE9oI0tih1Vlh2-gvS0ShlFpvDU&callback=initMap"></script>
';
