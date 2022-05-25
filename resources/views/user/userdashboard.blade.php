<x-app-layout>
    
    <!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <p class="text-2xl text-black xl:inline"> BengkelAE </p>

          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
  
              <a href="/" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
  
              <a href="#our_features" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Feature</a>
  
              <a href="#gabung_mitra" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Gabung menjadi mitra</a>
            
              <a href="#About_us" class="text-black hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>

            </div>
          </div>
          
        </div>
        <a href="/register"><img src="/img/button_login.png"  alt=""></a>
  
         
            <!--
              Dropdown menu, show/hide based on menu state.
  
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
        
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
   
  </nav>
  


   

                    <!--
                Mobile menu, show/hide based on menu open state.
                Entering: "duration-150 ease-out"
                  From: "opacity-0 scale-95"
                  To: "opacity-100 scale-100"
                Leaving: "duration-100 ease-in"
                  From: "opacity-100 scale-100"
                  To: "opacity-0 scale-95"
              -->

                <main class=" bg-white  mx-auto max-w-7xl 2xl:max-w-max px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="text-black xl:inline ">Make Your Problem Easier With BengkelAE </span>

                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                            Elit
                            sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                        @auth
                        @else
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="/login" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                    Login </a>
                            </div>
                            
                        </div>
                        @endauth
                    </div>
                    
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 2xl:w-3/4">
            <img class="h-40  object-cover  md:w-40 " src="/img/logo_landing.png" alt="">
        </div>
 
    </div>

    <center>
        <img class="mt-5 sm:mt-8 h-6  object-cover  md:w-40 " src="/img/titik_pemisah.svg" alt="">
    </center>
    <div class="py-12">
        <!-- FEATURES -->
        <div class="max-w-5xl px-2 md:px-0 mx-auto text-center md:max-w-7xl">
            <h5 ID="our_features" class="text-green-500 mt-5 font-semibold capitalize pb-2 ">Our Features</h5>
            <h1 class="text-xl font-semibold capitalize pb-4">Hi how can we help you today?</h1>
        </div>
        <center>
            <center>
                <img class="mt-5 h-6  object-cover  md:w-40 " src="/img/titik_pemisah.svg" alt="">
            </center>

            <!-- BERGABUNG MENJADI MITRA -->
            <div class="max-w-5xl px-2 md:px-0 mx-auto text-center md:max-w-7xl">
                <h5 id="gabung_mitra" class="text-green-500 mt-5 font-semibold capitalize pb-2 ">MITRA</h5>
                <h1 class="text-xl font-semibold capitalize pb-4">MARI BERGABUNG MENJADI MITRA KAMI</h1>
            </div>
            <div class="mt-5 sm:mt-8 mt-3 sm:mt-0 sm:ml-3">
                <a href="/register" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                    Register 
                </a>
            </div>
            <center>
                <img class=" mt-5 sm:mt-8 h-6  object-cover  md:w-40 " src="/img/titik_pemisah.svg" alt="">
            </center>
        </center>
            <!-- ABOUT -->
            <div class="max-w-5xl px-2 md:px-0 mx-auto text-center md:max-w-7xl">
                <h5 id="About_us" class="text-green-500 mt-5 font-semibold capitalize pb-2 ">ABOUT US</h5>
            </div>
            <p class="text-xl text-left font-semibold capitalize pb-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro animi libero non tempora minus, quasi, quisquam consectetur eos sapiente expedita quibusdam earum id cumque sunt? At quaerat quo ullam quas.
            </p>
            <div class="container px-10">
                <div class="border rounded-lg shadow-lg p-10">
                    <img src="/img/logo_telpon.png" alt="telepon" width="35" class="float-right">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quas illum, neque corrupti sequi ullam distinctio nisi ex! Architecto \
                        ratione sed, dolore quaerat nesciunt tenetur temporibus unde aut fuga aspernatur.
                    </p>
                </div>
            </div>
            <div class="card bg-success p-2 text-dark bg-opacity-25" 
            style="width: 20rem; height:250px; background:rgba(196, 196, 196, 1);">
                <div class="card-body" >
                    <div class="login100-form-social flex-c-m">
                        <p href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <img class="mt-4 h-6  object-cover  md:w-20 "zsrc="/img/logo_telpon.png" alt="">
                            (+62)81225967157
                        </p>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <img class="mt-5 h-6  object-cover  md:w-20 " src="/img/logo_telpon.png" alt="">
                        </a>
                    </div>
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        <center>
            <center>
                <img class=" mt-5 sm:mt-8 h-6  object-cover  md:w-40 " src="/img/titik_pemisah.svg" alt="">
            </center>
            <center>
                <h1 class="mt-5 sm:mt-8 text-xl font-semibold capitalize pb-4">Rekomendasi Bengkel Terdekat</h1>
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
            var data = {!!json_encode($location)!!}
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
                            button.href = '{{ url('store-view') }}/' + idstore[i] + '/show';
                            button.className += " inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                            document.getElementById("rekomen").appendChild(button);
                        }
                    }

                    function onClick(e) {
                        window.location.href = '{{ url('store-view') }}/' + this.options.win_url + '/show';
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