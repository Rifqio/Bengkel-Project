<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a>
                </li>
                <li class="breadcrumb-item text-sm text-white active">
                    @if (Request::is('dashboard'))
                        Dashboard
                    @elseif(Request::is('dashboard/create'))
                        Create Employee
                    @elseif(Request::is('dashboard/show'))
                        User List
                    @endif
                </li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">
                @if (Request::is('dashboard'))
                    Dashboard
                @elseif(Request::is('dashboard/create'))
                    Add Product
                @elseif(Request::is('dashboard/show'))
                    Product List
                @endif
            </h6>


        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                @if ($mitra->ktp || $mitra->npwp || $mitra->nik == null)
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4">
                            @if ($mitra->ktp == null)
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Anda belum upload KTP</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                            @if ($mitra->npwp == null)
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                {{-- Icon --}}
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Anda belum upload NPWP</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                            @if ($mitra->nik == null)
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                {{-- Icon --}}
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Anda belum input NIK</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if ($mitra->ktp != null && $mitra->nik != null)
                    <a href="{{ url('store-register') }}"><button class="btn btn-primary">Daftarkan Bengkel</button></a>
                @endif
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav justify-content-end">
                <form action="/logout" method="post">
                    <button type="submit" class="btn btn-danger m-auto"> Logout </button>
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>
