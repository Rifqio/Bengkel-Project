<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <title>Test Page</title>
</head>

<body>
    @foreach ($items as $item)
        {{ $item->name }}<br>
        {{ $item->category->name }}<br>
    @endforeach

    <div id = "map" style = "width:900px; height:580px;"></div>
</body>
<script>
    //Option
    var markerOptions = {
        title: "Lokasi Bengkel",
        clickable: true,
        draggable: false
    }
</script>
<script>
    var loadMap = function (id) {
        var data= {!! json_encode($location) !!}
        var map = L.map(id, { zoomControl: false });
        var tile_url = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
        var layer = L.tileLayer(tile_url, {
            attribution: 'OSM'
        });
        map.addLayer(layer);

        map.locate({setView: true, watch: true}) /* This will return map so you can do chaining */
            .on('locationfound', function(e){
                L.marker([e.latitude, e.longitude], markerOptions).addTo(map);
                var circle = L.circle([e.latitude, e.longitude], e.accuracy/20, {
                    weight: 1,
                    color: 'blue',
                    fillColor: '#cacaca',
                    fillOpacity: 0.2
                });
                map.addLayer(circle);
                //coba
                for (var i = 0; i < data.length; i++){
                    console.log(data[i][0]);
                    L.marker([data[i][1],data[i][2]], markerOptions).addTo(map);
                }
            })
        .on('locationerror', function(e){
                console.log(e);
                alert("Location access denied.");
        });
    };
    loadMap('map');
</script>
</html>
