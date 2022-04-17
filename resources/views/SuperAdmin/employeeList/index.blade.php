@extends('SuperAdmin.adminlayout')
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('SuperAdmin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>User List</h6>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-text"><strong>Success!</strong> {{ session('success') }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Role</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="/argon/img/team-3.jpg" class="avatar avatar-sm me-3"
                                                                alt="user2">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $user->roles->first()->name }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a class="btn btn-link text-dark px-3 mb-0"
                                                        href="/newdashboard/{{ $user->id }}/edit"><i
                                                            class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
                                                    <form action="{{url('delete-employee').'/'.$user->id}}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                            onclick="return confirm('Are you sure you want to delete this user?')"><i
                                                                class="far fa-trash-alt me-2"></i>Delete</button>
                                                    </form>

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

        </div>
    </main>
@endsection
