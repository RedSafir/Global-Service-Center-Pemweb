<style>
    .navbar {
            background-color: #343A40;
        }

        .navbar-brand {
            color: #FFFFFF;
        }

        .navbar-toggler {
            border-color: #FFFFFF;
        }

        .offcanvas-header {
            background-color: #343A40;
            color: #FFFFFF;
        }

        .offcanvas-body {
            background-color: #AAAAAA;
            color: #FFFFFF;
        }

        .list-group-item {
            background-color: #AAAAAA;
            color: #FFFFFF;
            border-color: #343A40;
        }

        .list-group-item:hover {
            background-color: #343A40;
        }
</style>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->



    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-center mx-auto" href="/home">Global Service Center </a>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="profileOffcanvasLabel">
                        <img src="{{ asset('images\image1.jpg') }}" alt="Logo Profil" width="40" height="40">

                    </h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/home">Dashboard</a></li>
                        <li class="list-group-item"><a href="/Stock">Stock</a></li>
                        <li class="list-group-item"><a href="/Pelanggan">Pelanggan</a></li>
                        <li class="list-group-item"><a href="/Transaksi">Transaksi</a></li>
                    </ul>
                    <div class="mt-3">
                        <ul class="list-group">

                            <li class="list-group-item"><a href="/logout">Logout</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
</body>
