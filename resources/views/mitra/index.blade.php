@extends('mitra.layout.template')
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('mitra.layout.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <h1 class="text-white mb-4">Welcome, {{ auth()->user()->name }}</h1>

                @if ($mitra->nik == null)
                    <div class="alert alert-danger" role="alert">
                        Anda Belum Isi NIK
                    </div>
                @endif
                @if ($mitra->npwp == null)
                    <div class="alert alert-warning" role="alert">
                        Isi NPWP Jika Ada
                    </div>
                @endif
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Products</p>
                                        <h5 class="font-weight-bolder">
                                            {{ $data }}
                                            
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                    class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </main>
@endsection
