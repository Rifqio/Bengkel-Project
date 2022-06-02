@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">

    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">
            <h1 class="text-white mb-4">VALIDASI BENGKEL</h1>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2"></h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Store Name</th>
                                <th>owner</th>
                                <th>email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            @foreach($stores as $s)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$s->store_name}}
                                </td>
                                <td>
                                    {{$s->users->name}}
                                </td>
                                <td>
                                    {{$s->users->email}}
                                </td>
                                <td>
                                    {{$s->phone_store}}
                                </td>
                                <td class="align-middle text-sm">
                                    {{$s->address}}
                                </td>
                                <td class="align-middle text-sm">
                                    @if($s->lat || $s->long == NULL)
                                    <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#conf{{$s->id}}">
                                        Konfirm
                                    </button>
                                    @else
                                    <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal" data-bs-target="#act{{$s->id}}">
                                        Aktifkan
                                    </button>
                                    @endif
                                    <button class="btn text-white" style="background-color: red">
                                        Delete
                                    </button>
                                </td>
                                <!--Modal Konfirmasi-->
                                <div class="modal fade" id="conf{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card card-plain">
                                                    <div class="card-header pb-0 text-left">
                                                        <h3 class="font-weight-bolder text-info text-gradient">Konfirmasi Bengkel</h3>
                                                        <p class="mb-0">{{$s->store_name}}</p>
                                                        <div class="alert alert-danger" role="alert">
                                                            <strong>Perhatian!</strong> Pastikan Konfimasi Saat Dilokasi Bengkel
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <form role="form text-left" method="post" action="{{url('validasi-bengkel')}}">
                                                            @csrf
                                                            <label>Lattitude</label>
                                                            <div class="input-group mb-3">
                                                                <input type="email" name="lat" class="form-control" id="lat" readonly>
                                                                <input type="hidden" name="id" class="form-control" value="{{$s->id}}">
                                                                <input type="hidden" name="status_activation" class="form-control" value="1">
                                                            </div>
                                                            <label>Longtitude</label>
                                                            <div class="input-group mb-3">
                                                                <input type="email" name="long" class="form-control" id="long" readonly>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Konfirmasi</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <!--Modal Aktivasi-->
                <div class="modal fade" id="act{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Non Aktivasi Bengkel</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin untuk aktifkan Bengkel "{{$s->store_name}}"</p>
                                <p>Pemilik : {{$s->users->name}}</p>
                                <p>Email : {{$s->users->email}}</p>
                                <p>NIK : {{$s->users->nik}}</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{url('non-aktif')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$s->id}}">
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn bg-gradient-danger">Save changes</button>
                                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex my-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    navigator.geolocation.getCurrentPosition(getLatLon);

    function getLatLon(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var input1 = document.getElementById('lat');
        var input2 = document.getElementById('long');
        input1.value = latitude;
        input2.value = longitude;
    }
</script>
@endsection