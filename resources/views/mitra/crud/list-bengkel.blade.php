<div class="row mt-4 ms-3">
    <div class="">
        <div class="card">
            <div class="card-header pb-0 p-3">
                {{-- Notifikasi Update --}}
                    @if (session('success_update'))
                         <div class="alert alert-success col-lg-8`">
                         {{ session('success_update') }}
                        </div>
                    @endif
                <h6 class="mb-0">List Bengkel</h6>
                <a href="/store-register" class="btn btn-danger"><button type="button" class="">+ Tambah</button></a>
            </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <table class="table  table-striped border ">
                                                <thead>
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
                                                </thead>
                                                <tbody>
                                                    @foreach ($stores as $s)
                                                        <tr>
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
                                    
                                                                <a href="{{ url('') }}" class=""><button type="button" class="btn btn-warning" >Edit</button></a>
                                                                {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{$s->id}}">Edit</button> --}}
                                                                <a href="{{ url('delete-mitra/'.$s->id.'') }}"><button class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus?')">Delete</button></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach