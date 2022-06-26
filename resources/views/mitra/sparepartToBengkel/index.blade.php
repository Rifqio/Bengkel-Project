@extends('mitra.layout.template')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('mitra.layout.navbar')
    <!-- End Navbar -->
    {{-- Test Merge --}}
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        {{-- Notifikasi Update --}}
                        @if (session('success_update'))
                        <div class="alert alert-success text-center mx-auto alert-dismissible fade show" role="alert">
                            {{ session('success_update') }}
                            <strong>Success!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div class="position-relative">
                          <h5>Pilih Bengkel</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Bengkel</th>
                                        <th>Alamat Bengkel</th>
                                        <th>Kota</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($stores as $s)



                                    <tr class="text-center">
                                        <td class="pt-3">{{ $loop->iteration }}</td>
                                        <td class="pt-3">{{ $s->store_name }}</td>
                                        <td class="pt-3">{{ $s->address }}</td>
                                        <td class="pt-3">{{ $s->kecamatan->kota->name }}</td>
                                        <td>
                                            <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit-bengkel{{ $s->id }}">Pilih</button>
                                        </td>
                                    </tr>
                        </div>
                        <div class="modal fade" id="edit-bengkel{{ $s->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="card card-plain">
                                            <div class="card-header pb-0 text-left">
                                                <h3 class="font-weight-bolder text-info text-gradient">Tambah Item Ke Bengkel</h3>
                                            </div>
                                            <div class="card-body">
                                                @if ($s->status_activation == 1)
                                                    <form role="form text-left" action="/store-update/{{$s->id}}"
                                                    method="post" enctype="multipart/form-data">
                                                @elseif($s->status_activation == 2)
                                                    <form role="form text-left"
                                                    action="/store-banding" method="post"
                                                    enctype="multipart/form-data">
                                                @endif
                                                @csrf
                                                <input type="hidden" name="id" class="form-control"
                                                    placeholder="Id Bengkel" value="{{ $s->id }}">
                                                <label>Nama Bengkel</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="store_name" readonly
                                                        class="form-control @error('store_name') is-invalid @enderror"
                                                        placeholder="Nama Bengkel"
                                                        value="{{ $s->store_name }}"
                                                        class="form-control @error('store_name') is-invalid @enderror">
                                                    @error('store_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <label>List Item Tersedia</label>

                                                <div class="input-group mb-3">
                                                    @foreach ($s->item as $data)
                                                    @if (old('item[]', $data->id) == $data->id)
                                                        <input type="checkbox" name="item[]" value="{{ $data->id }}" checked>{{ $data->name }} <br>
                                                    @else
                                                        <input type="checkbox" name="item[]" value="{{ $data->id }}">{{ $data->name }} <br>
                                                    @endif
                                                    @endforeach
                                                </div>

                                                <button type="submit"
                                                    class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Update
                                                    Data
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>




</main>
@endsection
