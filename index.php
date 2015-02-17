<html>
    <head>
    </head>
    <body>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrP_EzhR9zgmjVe7sHBDDYDDtce8deQO8&sensor=false"></script>
        <script type="text/javascript" src="js/gmap.js"></script>
        <script type="text/javascript">    
            function initialize(){
                geocoder = new google.maps.Geocoder();
                var mapDiv = document.getElementById('map_canvas');
                map = new google.maps.Map(mapDiv,
                    {
                        center: new google.maps.LatLng(-34.5248239,-58.4730149),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                google.maps.event.addListener(map, 'click', addNewPoint)
                geocoder = new google.maps.Geocoder();
            }
            
            /* Aqui se inicializa el mapa */
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div id="map_canvas" style="width:605px;height:515px;"></div>
        <input style="width:508px;" readonly="readonly" type="text" name="street" class="text_form_loc" id="text_form_loc" placeholder="Seleccionar ubicacion desde el mapa">
        <input style="width:508px;" readonly="readonly" type="text" name="street" class="address" id="address">
        <input style="width:508px;" readonly="readonly" type="text" name="street" class="latitude" id="latitude">
        <input style="width:508px;" readonly="readonly" type="text" name="street" class="longitude" id="longitude">
    </body>
</html>