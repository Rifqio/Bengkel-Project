<!--Masih Dumy Bisa Dikasi Template Untuk Tampilan Bengkel-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <title>Bengkel</title>
    <style>
        path.leaflet-interactive.animate {
            stroke-dasharray: 1920;
            stroke-dashoffset: 1920;
            animation: dash 20s linear 3s forwards;
        }

        @keyframes dash {
            to {
                stroke-dashoffset: 0;
            }
        }
    </style>
  </head>
  <body>
    <!--Profile Bengkel-->
    <div class="container">  
        <br><br>
        <h3>Profile Bengkel</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pemilik</th>
                <th scope="col">Nama Bengkel</th>
                <th scope="col">Telefon Bengkel</th>
                <th scope="col">Alamat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$data->users->name}}</td>
                <td>{{$data->store_name}}</td>
                <td>{{$data->phone_store}}</td>
                <td>{{$data->address}}</td>
            </tr>
            </tbody>
        </table>
        <br><br>
        <h3>Data Item Bengkel</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nama Item</th>
                <th scope="col">Brand</th>
                <th scope="col">Harga</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data->item as $i)
                    <tr>
                        <td>{{$i->name}}</td>
                        <td>{{$i->brand}}</td>
                        <td>{{$i->price}}</td>
                        <td>{{$i->category->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <h2>Maps Directions</h2>
    <button class="btn btn-primary" onclick="goMaps()">Buka Rute (Gmaps)</button>
    <div id = "map" style = "width:100%; height:580px;"></div> 
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

        var map = L.map('map');

        L.tileLayer('https://api.mapbox.com/styles/v1/nathansoetopo/cl27uglwc009q14lnw7oiv50v/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibmF0aGFuc29ldG9wbyIsImEiOiJjbDI3dWFhNWUwMWJmM2lzejAxZXRrbncxIn0.sd9zf5aYlRhrFf5Bxp6ySQ', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        map.locate({setView: true, watch: true})
            .on('locationfound', function(e){
                lat = e.latitude;
                long = e.longitude;
                L.Routing.control({
                waypoints: [
                    L.latLng(lat, long),
                    L.latLng(data[0], data[1])
                ],
                    lineOptions: {
                    styles: [{className: 'animate'}]
                },
                    routeWhileDragging: true
                }).addTo(map);
            })
        .on('locationerror', function(e){
            console.log(e);
            alert("Location access denied.");
        });
    function goMaps(){
        window.location = "http://maps.google.com/?ll="+data[0]+','+data[1];
    }
    </script>
  </body>
</html>