@extends('admin.adminlayout')
@section('content')

                                    </div>
                                </div>
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
                                <h6 class="modal-title" id="modal-title-default">Aktivasi Bengkel</h6>
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
                                <form action="{{url('aktif-bengkel')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$s->id}}">
                                    <input type="hidden" name="status" value="{{ $s->status_activation }}">
                                    <input type="hidden" name="email" value="{{ $s->users->email }}">
                                    <button type="submit" class="btn bg-gradient-danger">Save changes</button>
                                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Detail -->
                <div class="modal fade" id="detail{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nama Bengkel:</label>
                                        <input type="text" class="form-control" value="{{$s->store_name}}" id="recipient-name" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Pemilik:</label>
                                        <input type="text" class="form-control" value="{{$s->users->name}}" id="recipient-name" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control" value="{{$s->users->email}}" id="recipient-name" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Telefon Bengkel:</label>
                                        <input type="text" class="form-control" value="{{$s->phone_store}}" id="recipient-name" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Tanggal Diajukan:</label>
                                        <input type="text" class="form-control" value="{{$s->updated_at}}" id="recipient-name" readonly>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
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
