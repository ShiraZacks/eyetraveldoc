<!DOCTYPE html>
<html>

<body>

    <h1>My First Google Map</h1>

    <div id="map" style="width:100%;height:400px;"></div>

    <script>
        // This example creates a simple polygon representing the Bermuda Triangle.
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: {
                    lat: 24.886,
                    lng: -70.268
                },
                mapTypeId: "terrain",
            });
            // Define the LatLng coordinates for the polygon's path.
            const triangleCoords = [{
                    lat: 42.38,//detroit
                    lng: -83.1
                },
                {
                    lat: 42.99,	
                    lng: -82.43//port huron
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
                    lat: 42.71, //lansing
                    lng: -84.56
                },
                {
                    lat: 42.38,//detroit
                    lng: -83.1
                }
            ];
            // Construct the polygon.
            const bermudaTriangle = new google.maps.Polygon({
                paths: triangleCoords,
                strokeColor: "#FF0000",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#FF0000",
                fillOpacity: 0.35,
            });

            bermudaTriangle.setMap(map);
        }

        window.initMap = initMap;
    </script>

    <    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVL3o1VE9oI0tih1Vlh2-gvS0ShlFpvDU&callback=initMap"></script></script>

</body>

</html>