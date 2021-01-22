<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <div class="d-flex px-4">
                            <h3 class="font-weight-bold text-warning px-2">BOOKING</h3>
                        </div>
                    <!-- Left Side Of Navbar -->
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('task.home.index')}}" class="nav-link text-dark">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('petugas')}}" class="nav-link text-dark">Petugas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('task.lapangan.index')}}" class="nav-link text-dark">Master Lapangan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('task.pelanggan.index')}}" class="nav-link text-dark">Master Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('task.transaksi.index')}}" class="nav-link text-dark">Transaksi</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-dark">Laporan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-md-8">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
