@extends('SuperAdmin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('SuperAdmin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            @if(Request::is('list-bengkel'))
            <h1 class="text-white mb-4">LIST BENGKEL AKTIF</h1>
            @elseif(Request::is('reject-bengkel'))
            <h1 class="text-white mb-4">REJECT BENGKEL</h1>
            @elseif(Request::is('banding-bengkel'))
            <h1 class="text-white mb-4">BANDING BENGKEL</h1>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2"></h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Store Name</th>
                                <th>owner</th>
                                <th>email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            @foreach($stores as $s)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $s->store_name }}
                                    </td>
                                    <td>
                                        {{ $s->users->name }}
                                    </td>
                                    <td>
                                        {{ $s->users->email }}
                                    </td>
                                    <td>
                                        {{ $s->phone_store }}
                                    </td>
                                    <td class="align-middle text-sm">
                                        {{ $s->address }}
                                    </td>
                                    <td class="align-middle text-sm">
                                        <button type="button" class="btn btn-block bg-gradient-danger mb-3"
                                            data-bs-toggle="modal" data-bs-target="#deactive{{ $s->id }}">
                                            Nonaktif
                                        </button>
                                        <button type="button" class="btn btn-block bg-gradient-info mb-3"
                                            data-bs-toggle="modal" data-bs-target="#detail{{ $s->id }}">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                                {{-- Deactive --}}
                                <div class="modal fade" id="deactive{{ $s->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="modal-title-default">Non Aktivasi Bengkel
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda yakin untuk nonaktifkan Bengkel "{{ $s->store_name }}"
                                                </p>
                                                <p>Pemilik : {{ $s->users->name }}</p>
                                                <p>Email : {{ $s->users->email }}</p>
                                                <p>NIK : {{ $s->users->nik }}</p>
                                                <br>
                                                <p>Bengkel Dapat Diaktifkan Melalui Tab Validasi Bengkel atau SuperAdmin
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ url('non-aktif') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $s->id }}">
                                                    <input type="hidden" name="status" value="0">
                                                    <button type="submit" class="btn bg-gradient-danger">Save
                                                        changes</button>
                                                    <button type="button" class="btn btn-link  ml-auto"
                                                        data-bs-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Detail -->
                                <div class="modal fade" id="detail{{ $s->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Nama
                                                            Bengkel:</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $s->store_name }}" id="recipient-name" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Pemilik:</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $s->users->name }}" id="recipient-name"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Telefon
                                                            Bengkel:</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $s->phone_store }}" id="recipient-name"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Tanggal
                                                            Diajukan:</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $s->updated_at }}" id="recipient-name" readonly>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary"
                                                    data-bs-dismiss="modal">Close</button>
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
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Argon Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0 overflow-auto">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="d-flex my-3">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <div class="mt-2 mb-5 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                </div>
            </div>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
                Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
