<x-app-layout>
    <div class=" relative pt-6 px-4 sm:px-6 lg:px-8 bg-white shadow-2xl">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start top-0 left-0 right-0" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <h1 class=" text-2xl font-bold">BAE</h1>
                    </a>

                </div>
            </div>
            <div class=" md:block md:ml-10 md:pr-4 md:space-x-8 sm:space-x-8 space-x-10">
                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Home</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Categories</a>

                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">About Us</a>
            </div>

        </nav>
    </div>
    <div class="relative bg-white overflow-hidden">
        <div class="2xl:max-w-full 2xl:mx-10 xl:max-w-7xl mx-auto ">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
                <div class="bg-white w-full text-white">Bengkel </div>


                <main class="mt-10 mx-auto max-w-7xl 2xl:max-w-max px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="text-green-500 xl:inline">BengkelAE</span>

                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            BengelAE atau juga di sebut BAE menyediakan fitur-fitur yang membantu Customer untuk mencari bengkel terdekat yang secara online</p>
                        @auth
                        @else
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="/login" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                    Login </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-500 bg-gray-100 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                                    Register </a>
                            </div>
                        </div>
                        @endauth
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 2xl:w-3/4">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/img/bengkel2.jpg" alt="">
        </div>
    </div>

    <div class="py-12">
        <center>
            <center>
                <h1 class="text-xl font-semibold capitalize pb-4">Rekomendasi Bengkel Terdekat</h1>
            </center>
            <div class="container" id='rekomen'>
                <!--Content-->
            </div>
            <div id="show" style="width:100%; height:580px;">
                <!--Content-->
            </div>
        </center>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script>
        //Option
        const User = L.divIcon({
            html: '<i class="fa fa-crosshairs fa-3x"></i>',
            iconSize: [20, 20],
            className: 'myDivIcon'
        });
        const fontAwesomeIcon = L.divIcon({
            html: '<i class="fa fa-map-marker-alt fa-3x"></i>',
            iconSize: [20, 20],
            className: 'myDivIcon'
        });
    </script>
    <script>
        var loadMap = function(id) {
            var data = {
                !!json_encode($location) !!
            }
            var map = L.map(id, {
                wheelPxPerZoomLevel: 150
            });
            var tile_url = 'https://api.mapbox.com/styles/v1/nathansoetopo/cl27uglwc009q14lnw7oiv50v/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibmF0aGFuc29ldG9wbyIsImEiOiJjbDI3dWFhNWUwMWJmM2lzejAxZXRrbncxIn0.sd9zf5aYlRhrFf5Bxp6ySQ';
            var layer = L.tileLayer(tile_url, {
                attribution: 'BengkelAE',
                maxZoom: 18,
            });
            map.addLayer(layer);
            map.locate({
                    setView: true,
                    watch: false
                })
                .on('locationfound', function(e) {
                    var marker = [];
                    var distance = [];
                    var namestore = [];
                    var idstore = [];
                    var i;
                    user = L.marker([e.latitude, e.longitude], {
                        icon: User,
                    }).addTo(map);
                    var circle = L.circle([e.latitude, e.longitude], e.accuracy / 10, {
                        weight: 1,
                        color: 'blue',
                        fillColor: '#cacaca',
                        fillOpacity: 0.2
                    });
                    map.addLayer(circle);
                    for (var i = 0; i < data.length; i++) {
                        marker[i] = new L.marker([data[i][1], data[i][2]], {
                            win_url: data[i][3],
                            icon: fontAwesomeIcon,
                        }).bindPopup("Bengkel " + data[i][0]);
                        from = marker[i].getLatLng();
                        to = user.getLatLng();
                        marker[i].addTo(map);
                        marker[i].on('click', onClick);
                        distance[i] = from.distanceTo(to).toFixed(0) / 1000;
                        namestore[i] = data[i][0];
                        idstore[i] = data[i][3];
                    }
                    for (var i = 0; i < marker.length; i++) {
                        if (distance[i] <= 1) {
                            console.log(distance[i]);
                            console.log(namestore[i]);
                            var button = document.createElement("a");
                            button.type = 'button';
                            button.innerHTML = '<b>' + namestore[i] + '</b><br>' + distance[i] + 'Km';
                            button.style.cssText += 'color:black;background-color:yellow;margin:3px; margin-bottom:10px;';
                            button.href = '{{ url('
                            store - view ') }}/' + idstore[i] + '/show';
                            button.className += " inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            document.getElementById("rekomen").appendChild(button);
                        }
                    }

                    function onClick(e) {
                        window.location.href = '{{ url('
                        store - view ') }}/' + this.options.win_url + '/show';
                    }
                })
                .on('locationerror', function(e) {
                    console.log(e);
                    alert("Location access denied.");
                });
        };
        loadMap('show');
    </script>
</x-app-layout>