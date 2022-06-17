<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            @if (Auth::user()->hasRole('mitra'))
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active">
                        @if (Request::is('dashboard'))
                            Dashboard
                        @elseif(Request::is('dashboard/create'))
                            Add Product
                        @elseif(Request::is('dashboard/show'))
                            Product List
                        @elseif(Request::is('list-store'))
                            List Bengkel
                        @elseif(Request::is('profile'))
                            Profile
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
                    @elseif(Request::is('store-register'))
                        Add Bengkel
                    @elseif(Request::is('list-store'))
                        List Bengkel
                    @elseif(Request::is('profile'))
                        Profile
                    @endif
                </h6>
            @elseif (Auth::user()->hasRole('superadmin'))
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
                        @elseif(Request::is('store-register'))
                            Add Bengkel
                        @elseif(Request::is('list-store'))
                            List Bengkel
                        @elseif(Request::is('profile'))
                            Profile
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
                    @elseif(Request::is('store-register'))
                        Add Bengkel
                    @elseif(Request::is('list-store'))
                        List Bengkel
                    @elseif(Request::is('profile'))
                        Profile
                    @endif
                </h6>
            @endif

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
               
        
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
