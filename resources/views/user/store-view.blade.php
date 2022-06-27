<x-app-layout>
<!-- Navbar -->
<section id="banner" class="bg-gradient-to-r from-green-100 to-green-400 ">
    <div class="px-5 lg:px-36 py-10 flex justify-around items-center">
            <p class="font-semibold text-3xl hidden md:block">BengkelAe</p>
                        <livewire:search-item />
            <div class="flex justify-center">
                <div>
                <button class="inline-block px-6 py-2.5 bg-white text-green-300 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-1  00 hover:shadow-lg focus:bg-green-700 focus:shadow-lg  focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out mr-1.5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Nama Toko</button>

                <!-- Off canva kanan -->
                    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 right-0 border-none w-3/5 md:1/2 lg:w-1/4" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header flex items-center justify-between p-4">
                            <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasRightLabel">Profil Toko</h5>
                            <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                            <!-- Profil toko dalam off canva -->

                            <div class="flex flex-col shadow-xl">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class=" text-center">
                                <img src="{{ asset('store_data/'.$data->id.'/image/'.$data->store_image) }}" class="rounded-full w-32 mb-4 mx-auto" alt="Avatar"/>
                                <h5 class="text-3xl font-semibold leading-tight mb-2">{{$data->users->name}}</h5>
                                <p class="text-gray-500 text-xl"> {{$data->store_name}}</p>
                            </div>
                            <hr class="m-5">
                            <div>
                                <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Telephone :</span>{{$data->phone_store}}</p>
                                <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Address :</span>{{$data->address}}</p>
                                <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Kecamatan :</span>{{$data->kecamatan->name}}</p>
                                <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Kota :</span>{{$data->kecamatan->kota->name}}</p>
                            </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>



<!-- Tabel Barang -->
<div class="container mx-auto lg:hidden">
    <p class="bg-ijo w-1/2 mx-auto text-center rounded-xl shadow-inner mt-10">Data Item Bengkel</p>
    <div class="flex flex-col ">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                    <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Nama Item
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Brand
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Harga
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Category
                    </th>
                    </tr>
                </thead class="border-b">
                <tbody>
                @foreach($data->item as $i)
                    <tr class="bg-white border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->brand}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->price}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->category->name}}
                        </td>
                    </tr class="bg-white border-b">
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

    <br>
    <div class="container mx-auto" >
        <div class="items-center">
            <div class=" w-full shadow-xl">
                <div id = "map" style = "width:100%; height:580px;" ></div>
            </div>
            <div class="hidden lg:block ml-5 pb-10">
                <div class="flex flex-col shadow-xl">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Nama Item
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Brand
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Harga
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Category
                                </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                            @foreach($data->item as $i)
                                <tr class="bg-white border-b">
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->name}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->brand}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->price}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->category->name}}
                                    </td>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        var data= {!! json_encode($latlong) !!}
        //Baru
        var map_init = L.map('map', {
            center: [data[0], data[1]],
            zoom: 8
        });
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map_init);
        L.Control.geocoder().addTo(map_init);
        if (!navigator.geolocation) {
            console.log("Your browser doesn't support geolocation feature!")
        } else {
            navigator.geolocation.getCurrentPosition(mapRoute);
            setInterval(() => {
                navigator.geolocation.getCurrentPosition(getPosition)
            }, 5000);
        };
        var marker, circle, lat, long, accuracy;

        function getPosition(position) {
            lat = position.coords.latitude
            long = position.coords.longitude
            accuracy = position.coords.accuracy

            if (marker) {
                map_init.removeLayer(marker)
            }

            if (circle) {
                map_init.removeLayer(circle)
            }

            marker = L.marker([lat, long])
            circle = L.circle([lat, long], { radius: accuracy })

            var featureGroup = L.featureGroup([marker, circle]).addTo(map_init)

            map_init.fitBounds(featureGroup.getBounds())

            console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)
        }
        function mapRoute(){
            navigator.geolocation.getCurrentPosition(cekFunction);
            function cekFunction(position){
                L.Routing.control({
                waypoints: [
                    L.latLng(position.coords.latitude, position.coords.longitude),
                    L.latLng(data[0], data[1]),
                ],
                routeWhileDragging: false,
                missingRouteTolerance: 10
                }).addTo(map_init);
            }
        }
    </script>
</x-app-layout>

