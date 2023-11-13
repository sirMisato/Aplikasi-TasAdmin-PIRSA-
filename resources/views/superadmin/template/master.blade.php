<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASK ADMIN</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{asset('public/template-admin/assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{asset('public/template-admin/assets/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{asset('public/toastr/toastr.min.css') }}">
    <style>
        #navbarNav ul li a span{
            font-size: 15px;
            margin-right: 10px;
        }
    </style>
    @stack('css')
    <style>
        .containers {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto;
            gap: 10px;
        }
        .cards {
            width: 200px;
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Rata tengah vertikal */
            align-items: center; /* Rata tengah horizontal */
            color: white;
        }
        .yellow {
            background-color: #fcbf49; /* Warna kuning */
        }
        .red {
            background-color: #ef476f; /* Warna merah */
        }
        .blue {
            background-color: #0077b6; 
        }
        @media (max-width: 768px) {
            .containers {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .containers {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('superadmin.template.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('superadmin.template.navbar')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                @yield('content')

                <!-- <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a
                            href="https://themewagon.com">ThemeWagon</a></p>
                </div> -->
            </div>
        </div>
    </div>
   
    @include('superadmin.template.js')
</body>

</html>