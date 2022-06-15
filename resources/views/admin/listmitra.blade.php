@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <h1 class="text-white mb-4">LIST MITRA</h1>
        </div>
    </div>

    <div class="row mt-2 ms-3">
        <div class="col-lg-30 mb-lg-0 mb-2">
            <div class="table-responsive">
                <li class="card card-frame vstack gap-2 col-md-8 mx-auto">
                    <div class="d-flex align-items-center">
                        <table class="table align-items-center ">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                <tr class="text-center">
                                    <td class="pt-3">{{$loop->iteration}}</td>
                                    <td class="pt-3">{{$u->name}}</td>
                                    <td class="pt-3">{{$u->roles->first()->display_name}}</td>
                                    <td>

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{$u->id}}">Edit</button>
                                        <a href="{{ url('delete-mitra/'.$u->id.'') }}"><button class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus?')">Delete</button></a>
                                    </td>
                                </tr>
                                <!--Edit Form-->
                                <div class="modal fade" id="edit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <div class="card card-plain">
                                                    <div class="card-header pb-0 text-left">
                                                        <h3 class="font-weight-bolder text-info text-gradient">Edit Data Mitra</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <form role="form text-left" action="/update-mitra" method="post">
                                                            @csrf
                                                            <div class="input-group mb-3">
                                                                <input type="hidden" name="id" class="form-control" placeholder="" value="{{$u->id}}" aria-label="Password" aria-describedby="password-addon">
                                                            </div>
                                                            <label>Nama Mitra</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Mitra" value="{{$u->name}}" aria-label="Password" aria-describedby="password-addon" autofocus>
                                                                @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <label>Email</label>
                                                            <div class="input-group mb-3">
                                                                <input type="email" name="email" class="form-control" value="{{$u->email}}" aria-label="Email" aria-describedby="email-addon" readonly>
                                                            </div>
                                                            <label>NIK</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="nik" class="form-control  @error('nik') is-invalid @enderror" value="{{$u->nik}}" placeholder="Nomor Induk Kependudukan">
                                                                @error('nik')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <label>NPWP</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" value="{{$u->npwp}}" placeholder="Masukkan NPWP">
                                                                @error('npwp')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            {{-- <label>Password</label>
                                                                <div class="input-group mb-3">
                                                                  <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                                                </div>
                                                                <label>Password Confirmation</label>
                                                                <div class="input-group mb-3">
                                                                  <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" aria-label="Password" aria-describedby="password-addon">
                                                                </div> --}}
                                                            <div class="text-center">
                                                                <button type="submit" class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Update Data</button>
                                                            </div>
                                                        </form>
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
                </li>

            </div>

        </div>
    </div>
</main>

@endsection