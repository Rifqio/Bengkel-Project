@extends('mitra.layout.template')
@section('content')

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('mitra.layout.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        {{-- Notifikasi Update --}}
                        @if (session('success_update'))
                        <div class="alert alert-success col-lg-8`">
                            {{ session('success_update') }}
                        </div>
                        @endif

                        <div class="position-relative">
                            <h4 class="mb-0">List Bengkel</h4>
                            <div class="position-absolute top-0 top-0 end-0">
                                <a href="/store-register" class="btn btn-success">Tambah</a>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <tbody>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Bengkel</th>
                                    <th>Jam Buka</th>
                                    <th>Jam Tutup</th>
                                    <th>Alamat Bengkel</th>
                                    <th>No. Telpon</th>
                                    <th>Status Aktivasi</th>
                                    <th>Gambar Bengkel</th>
                                    <th>Latitude</th>
                                    <th>Longtiude</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($stores as $s)
                                <tr class="text-center">
                                    <td class="pt-3">{{$loop->iteration}}</td>
                                    <td class="pt-3">{{$s->store_name}}</td>
                                    <td class="pt-3">{{$s->open}}</td>
                                    <td class="pt-3">{{$s->close}}</td>
                                    <td class="pt-3">{{$s->address}}</td>
                                    <td class="pt-3">{{$s->phone_store}}</td>
                                    <td class="pt-3">{{$s->status_activation}}</td>
                                    <td class="pt-3">{{$s->store_image}}</td>
                                    <td class="pt-3">{{$s->lat}}</td>
                                    <td class="pt-3">{{$s->long}}</td>
                                    <td>

                                        <a href="/store-edit/{{ $s->id }}" class=""><button type="button" class="btn btn-warning">Edit</button></a>
                                        {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{$s->id}}">Edit</button> --}}
                                        <a href="{{ url('delete-bengkel/'.$s->id.'') }}"><button class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus?')">Delete</button></a>
                                    </td>
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
@endsection