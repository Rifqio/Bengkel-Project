<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/argon/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/argon/img/favicon.png">
    <title>
        User Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/argon/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!--Map-->
        <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/argon/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    {{-- @include('SuperAdmin.adminsidebar') --}}
    @yield('content')

    <script src="/argon/js/core/popper.min.js"></script>
    <script src="/argon/js/core/bootstrap.min.js"></script>
    <script src="/argon/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/argon/js/plugins/smooth-scrollbar.min.js"></script>
</body>
</html>