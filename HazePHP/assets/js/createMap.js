/**
 * Created by lukacrnjakovic on 4/17/16.
 */
var map = function()
{
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('#gmap_marker44'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }  
};