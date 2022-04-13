<x-app-layout>

    <div class="py-12">
        <div class="max-w-5xl px-2 md:px-0 mx-auto text-center md:max-w-7xl">
            <h1 class="text-xl font-semibold capitalize pb-4">Hi how can we help you today?</h1>
            {{-- Menu dalam dashboard --}}
            @livewire('menu')
        </div>
        <center>
            <div id = "show" style = "width:100%; height:580px;"><!--Content--></div>
        </center>
    </div>
    <script>
        //Option
        var userOptions = {
            title: "Lokasi Anda",
            clickable: false,
            draggable: false
        }
        var markerOptions = {
            title: "Lokasi Bengkel",
            clickable: true,
            draggable: false,
        }
    </script>
    <script>
        var loadMap = function (id) {
            var data= {!! json_encode($location) !!}
            var map = L.map(id);
            var tile_url = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
            var layer = L.tileLayer(tile_url, {
                attribution: 'OSM'
            });
            map.addLayer(layer);
    
            map.locate({setView: true, watch: true}) /* This will return map so you can do chaining */
                .on('locationfound', function(e){
                    var circle = L.circle([e.latitude, e.longitude], e.accuracy/2, {
                        weight: 1,
                        color: 'red',
                        fillColor: '#cacaca',
                        fillOpacity: 0.2
                    });
                    L.marker([e.latitude, e.longitude], userOptions).addTo(map);
                    map.addLayer(circle);
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
        loadMap('show');
    </script>
</x-app-layout>
