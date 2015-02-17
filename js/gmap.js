var map;
var marker;
var geocoder;
var infowindow = new google.maps.InfoWindow();
var i=0;
var markersArray = [];
var d1;

function addNewPoint(e)
{
    var data="";

    if(i>0)
    {
        for (i in markersArray)
        {
            markersArray[i].setMap(null);
        }
        markersArray.length = 0;
    }

    marker = new google.maps.Marker({
        map: map,
        position: e.latLng
    });
    
    latitude_shop=e.latLng.lat();
    longitude_shop=e.latLng.lng();
    geocoder.geocode({'latLng': e.latLng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            if (results[2]) {
                var str=results[0].formatted_address;
                str = str.substring(0, str.indexOf(','));
                infowindow.setContent(str);
                data=str;

                dataaddress=results[0].formatted_address;

                infowindow.open(map, marker);
            }
            
            /* Aqui es donde va a colocar la informacion */
            document.getElementById('text_form_loc').value=data;
            document.getElementById('address').value=dataaddress;
            document.getElementById('latitude').value=latitude_shop;
            document.getElementById('longitude').value=longitude_shop;
        } else {
            alert("Geocoder failed due to: " + status);
        }
    });
    markersArray.push(marker);
    i++;
}