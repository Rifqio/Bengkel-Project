@extends('mitra.layout.template')
@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        @include('mitra.layout.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <form action="{{ url('store-register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Add Bengkel</p>
                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">Bengkel Information</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="store_name"
                                                class="form-control-label  @error('store_name') is-invalid @enderror">Nama
                                                Bengkel</label>
                                            <input class="form-control" name="store_name" type="text"
                                                value="{{ old('store_name') }}">
                                            @error('store_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_store"
                                                class="form-control-label @error('phone_store') is-invalid @enderror">No
                                                Telepon Bengkel</label>
                                            <input class="form-control" name="phone_store" type="text"
                                                value="{{ old('phone_store') }}">
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address"
                                                class="form-control-label @error('address') is-invalid @enderror">Alamat</label>
                                            <textarea name="address" class="form-control" cols="30" rows="3"></textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Informasi Jam Kerja</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="open" class="form-control-label">Jam Buka</label>
                                            <input class="form-control @error('open') is-invalid @enderror" name="open"
                                                type="time" value="{{ old('open') }}">
                                            @error('open')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input"
                                                class="form-control-label  @error('close') is-invalid @enderror">Jam
                                                Tutup</label>
                                            <input class="form-control" type="time" name="close" required
                                                value="{{ old('close') }}">
                                            @error('close')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Foto Thumbnail</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label  @error('store_name') is-invalid @enderror">Thumbnail Bengkel</label>
                                            <input class="form-control" type="file" name="store_image" >
                                            @error('store_image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
