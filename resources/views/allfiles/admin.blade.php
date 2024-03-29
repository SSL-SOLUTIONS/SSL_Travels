<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SSL Travels & Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 bg-light" href=""><img width="70px" src="{{asset('admin/assets/images/logo-01 (2).png')}}" alt=""></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href=""><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li>
                            <a class="dropdown-item" href="" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </li>
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <br><br>
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{url('locals')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Local Tours
                        </a>
                        <a class="nav-link" href="{{url('internationals')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            International Tours
                        </a>
                        <a class="nav-link" href="{{url('internationalspackages')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            International Packages
                        </a>

                        <a class="nav-link" href="{{url('localpackages')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Local Packages
                        </a>
                        <a class="nav-link" href="{{url('contactus')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Messages
                        </a>
                        <a class="nav-link" href="{{url('cars')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                            rent a Car
                        </a>
                        <a class="nav-link" href="{{url('apartments')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                            Apartments
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('admin/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/datatables-simple-demo.js')}}"></script>
</body>

</html>