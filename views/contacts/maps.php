<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maps</title>
        <style>
            #map {
                width: 100%;
                height: 400px;
            }
        </style>
    </head>
    <body>

        <div id="map">

        </div>

        <script type="text/javascript">
            function initMap() {
                var element = document.getElementById('map');
                var options = {
                    zoom: 13.3,
                    center: {
                        lat: 48.450000,
                        lng: 34.9833300
                    }
                };

                var myMap = new google.maps.Map(element, options);

                var marker = new google.maps.Marker({
                    position: {
                        lat: 48.450000,
                        lng: 34.9845100
                    },
                    map: myMap,
                    icon: ''
                });

                var InfoWindow = new google.maps.InfoWindow({
                    content: '<h4>Офис Test-Shop</h4>'
                });

                marker.addListener('click', function () {
                    InfoWindow.open(myMap, marker);
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkJHte_cu4fHcTu6zL4j5MTbpt02Gt03s&callback=initMap"
               type="text/javascript">

        </script>
    </body>
</html>

