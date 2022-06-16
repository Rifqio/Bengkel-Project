@extends('admin.adminlayout')
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <h1 class="text-white mb-4">Welcome, {{ auth()->user()->name }}</h1>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">

                </div>
            </div>

        </div>
    </main>
@endsection