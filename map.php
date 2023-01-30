<div id="map" style="width:100%;height:400px;"></div>

<script>
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(11.3788424, 106.118717), zoom: 18
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
</script>
<script src="public/js/jsMap.js" type="text/javascript"></script>
