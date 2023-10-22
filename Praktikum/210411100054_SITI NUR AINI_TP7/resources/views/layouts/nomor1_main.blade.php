<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body>

        <!---NAVBAR -->
        <!-- Navbar top START -->
        <div class="navbar-top px-3 px-sm-4 px-md-5" style="background-color:#052c65">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Logo START -->
                    <a class="navbar-brand py-3" href="/mahasiswa">
                        <h4 class="navbar-brand-item text-white">Simple Siakad</h4>
                    </a>
                    <!-- Logo END -->

                <!-- Navbar right -->
                <div>
                    <ul class="text-end list-inline m-0">
                        <li class="list-inline-item me-2 me-md-4"> <a class="text-white" href="/mahasiswa">Data Mahasiswa</a> </li>
                        <li class="list-inline-item me-2 me-md-4"> <a class="text-white" href="/mahasiswa/create">Input Data</a> </li>
                        <li class="list-inline-item me-2 me-md-4"> <a class="text-white" href="/mahasiswa/about">About Me</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navbar top END -->

        {{-- menambahkan isi web dari masing-masing page --}}
        <div class="container mt-3">
            @yield('content')
        </div>

        <!---FOOTER -->
        <!-- ======================= Footer START -->
        <br><br>
        <footer class=" text-white pt-4" style="background-color:#052c65">
            <div class="container">
                <!-- Row START -->
                <div class="row g-4">

                    <!-- Widget 1 START -->
                    <div class="col-lg-4">
                        <!-- logo -->
                            <img width="60px"  src="/img/logo.png" alt="logo"><br><br>
                            <ul class="nav flex-column">
                                <li class="text-white"><strong>Jurusan Teknik Informatika</strong> </li>
                                <li class="text-white"><strong>Universitas Trunojoyo Madura</strong></li>
                                <li class="text-white">Jl. Raya Telang, Kecamatan Kamal, Bangkalan </li>
                                <li class="text-white"> 69162 Indonesia</li>
                                <li class="text-white">Kampus Universitas Trunojoyo Madura</li>
                            </ul>
                    </div>
                    <!-- Widget 1 END -->

                    <!-- Widget 2 START -->
                    <div class="col-lg-8">
                        <div class="row g-4">
                            <!-- Link block -->
                            <div class="col-6 col-md-4">
                                <h5 class="mb-2 mb-md-4 text-white">Contact</h5>
                                <ul class="nav flex-column">
                                    <li>Telp : 031-3011146</li>
                                    <li>Fax : 031-3011506</li>
                                    <li>email : if.ft@trunojoyo.ac.id</li>
                                </ul>
                            </div>

                            <!-- Link block -->
                            <div class="col-6 col-md-4">
                                <h5 class="mb-2 mb-md-4 text-white">Layanan</h5>
                                <ul class="nav flex-column">
                                    <li>Pembayaran UKT</li>
                                    <li>Pendaftaran KP</li>
                                    <li>Pendaftaran Wisuda</li>
                                    <li>Administrasi</li>
                                </ul>
                            </div>

                            <!-- Link block -->
                            <div class="col-6 col-md-4">
                                <h5 class="mb-2 mb-md-4 text-white">Resource</h5>
                                <ul class="nav flex-column">
                                    <li>e-Journal</li>
                                    <li>Portal Tugas Akhir</li>
                                    <li>Website Resmi Kampus</li>
                                    <li>Download Administrasi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Grid container -->
                <!-- Divider -->
                <hr class="mt-4 mb-0">

                <!-- Bottom footer -->
            </div>
        </footer>
        <!-- ======================= Footer END --> 
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>