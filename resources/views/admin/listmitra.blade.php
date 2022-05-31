@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-camera-compact text-dark opacity-10"></i>
            </div>
            <h5 class="text-white mb-1">Get started with Argon</h5>
            <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.
            </p>
        </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('/argon/img/carousel-2.jpg');
      background-size: cover;">
        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-bulb-61 text-dark opacity-10"></i>
            </div>
            <h5 class="text-white mb-1">Faster way to create web pages</h5>
            <p>That’s my skill. I’m not really specifically talented at anything except for the
                ability to learn.</p>
        </div>
    </div>
    <div class="carousel-item h-100" style="background-image: url('/argon/img/carousel-3.jpg');
      background-size: cover;">
        <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                <i class="ni ni-trophy text-dark opacity-10"></i>
            </div>
            <h5 class="text-white mb-1">Share with us your design tips!</h5>
            <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.
            </p>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt-4 ms-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    {{-- Notifikasi Update --}}
                        @if (session('success_update'))
                             <div class="alert alert-success col-lg-8`">
                             {{ session('success_update') }}
                            </div>
                        @endif
                    <h6 class="mb-0">List Mitra</h6>
                    <button type="button" class="btn btn-danger">+ Tambah</button>
                </div>
                <div class="table-responsive">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="table-responsive">
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
                                                <tr>
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
                                                                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                                                  placeholder="Nama Mitra" value="{{$u->name}}" aria-label="Password" aria-describedby="password-addon" autofocus>
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
                            </div>
                        </li>
                    
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