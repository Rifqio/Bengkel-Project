@extends('SuperAdmin.adminlayout')
@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        @include('SuperAdmin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <form action="/newdashboard/employee-list" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Add Superadmin</p>
                                    <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">User Information</p>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">Name</label>
                                            <input class="form-control" name="name" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik" class="form-control-label">NIK</label>
                                            <input class="form-control" name="nik" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Credentials</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email address</label>
                                            <input class="form-control" name="email" type="email" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Role</label>
                                            <select class="form-control" id="exampleFormControlSelect2">
                                                <option>Superadmin</option>
                                                <option>Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" name="password" required
                                                autocomplete="new-password" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Repeat
                                                Password</label>
                                            <input class="form-control" type="password" name="password_confirmation"
                                                required autocomplete="new-password" value="">
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
