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
                                    @if($s->lat == NULL || $s->long == NULL)
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
                                        <button type="button" class="btn btn-block bg-gradient-info mb-3" data-bs-toggle="modal" data-bs-target="#detail{{$s->id}}">
                                            Detail
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