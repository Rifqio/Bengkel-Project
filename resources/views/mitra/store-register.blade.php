@extends('mitra.layout.template')
@section('content')
<div class="main-content position-relative max-height-vh-100 h-100">
    {{-- Navbar --}}
    @include('mitra.layout.navbar')
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

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <!--Notification-->
       
        <form action="{{url('store-register')}}" method="POST" enctype="multipart/form-data">
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
                            <h6>BENGKEL INFORMATION</h6>
                            <div class="row">
                                <div class="col-md-15">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label  @error('name') is-invalid @enderror">Nama Bengkel</label>
                                        <input class="form-control" type="text" name="store_name" placeholder="Nama Bengkel">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <h6>CREDENTIALS</h6>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand"
                                            class="form-control-label @error('brand') is-invalid @enderror">Jam Buka</label>
                                        <input class="form-control" name="brand" type="text" value="{{ old('brand') }}">
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price"
                                            class="form-control-label @error('price') is-invalid @enderror">Jam Tutup</label>
                                        <input class="form-control" id="price" name="price" type="text"
                                            value="{{ old('price') }}">
                                        @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand"
                                            class="form-control-label @error('brand') is-invalid @enderror">Kecamatan</label>
                                        <input class="form-control" name="brand" type="text" value="{{ old('brand') }}">
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price"
                                            class="form-control-label @error('price') is-invalid @enderror">Kelurahan</label>
                                        <input class="form-control" id="price" name="price" type="text"
                                            value="{{ old('price') }}">
                                        @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Toko</label>
                                    <input class="form-control" type="file" id="formFile">
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






{{-- <!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Form Store Register</title>
</head>

<body>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
    <!--Notification-->
    @if (auth()->user()->unreadnotifications)
        <a href="{{url('mark-read')}}">tandai sudah dibaca</a><br>
    @endif
    @forelse ($user->unreadnotifications as $n)
        {{$n->data['notif']}}
    @empty
        <h5>Belum Ada Notifikasi</h5>
    @endforelse
    <!--Kurang Form Input File-->
    <form action="{{url('store-register')}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="text" name="store_name" placeholder="Nama Bengkel"><br>
        <input type="time" name="open" placeholder="Jam Buka"><br>
        <input type="time" name="close" placeholder="Jam Tutup"><br>
        <input type="number" name="phone_store" placeholder="No Telp Bengkel"><br>
        <textarea name="address" cols="30" rows="10" placeholder="Alamat Bengkel"></textarea>
        <input type="hidden" name="store_image" value="Dummy"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html> --}}