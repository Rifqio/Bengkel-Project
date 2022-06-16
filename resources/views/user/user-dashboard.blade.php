@extends('user.layout.user-layout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="false" style="z-index:10; top: 0px; position:fixed; width:100%">
        <div class="container-fluid" style="padding-left: 100px; padding-right: 100px;">
            <div class="input-group" style="width:100%;">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here...">
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid" style="padding:0;">
        <center>
            <div id="show">
                <!--Content-->
            </div>
        </center>
    </div>
    <div class="container-fluid bg-success">
        <div class="container" style="padding-top: 8%; padding-bottom: 50px; margin-bottom: 30px;">
            {{-- Mobile --}}
            <div class="row mobile-menu">
                <div class="col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#terdekat" style="width:100%;">Bengkel Terdekat</button>
                    <br><br>
                    <button type="button" class="btn bg-gradient-danger" style="width:100%;">Gabung Menjadi Mitra</button>
                </div>
            </div>
            {{-- Web --}}
            <div class="row web-menu">
                <div class="col-md-3 col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card card-background move-on-hover">
                        <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
                        <div class="card-body pt-5">
                            <h4 class="text-white">Search and Discovery</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white" id="mobile-nav">
        <div class="container">
            <center>
            <div class="row">
                <div class="col-4" style="padding-top: 10px; padding-bottom: 10px;">
                    <i class="fas fa-home fa-3x"></i>
                </div>
                <div class="col-4" style="padding-top: 10px; padding-bottom: 10px;">
                    <i class="fas fa-info fa-3x"></i>
                </div>
                <div class="col-4" style="padding-top: 10px; padding-bottom: 10px;">
                    <i class="fas fa-map-marked-alt fa-3x"></i>
                </div>
            </div>
            </center>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="terdekat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Bengkel Terdekat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid mb-2" id='rekomen'>
                    <!--Content-->
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- Modal --}}
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
                            var button = document.createElement("a");
                            button.type = 'button';
                            button.innerHTML = '<b>' + namestore[i] + '</b><br>' + distance[i] + 'Km';
                            button.style.cssText += 'margin:3px; margin-bottom:10px;';
                            button.href = '{{ url('store-view') }}/' + idstore[i] + '/show';
                            button.className += "btn btn-primary"
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
</main>
@endsection
