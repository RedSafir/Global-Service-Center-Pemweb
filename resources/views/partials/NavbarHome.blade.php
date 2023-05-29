<style>
     body {
            background-color: #AAAAAA;
        }
    .navbar {
        background-color: #343A40;
        border-bottom: 4px solid #FFC107;
    }

    .navbar-brand {
        color: #FFFFFF;
        font-weight: bold;
        font-size: 20px;
    }

    .navbar-toggler {
        border-color: #FFFFFF;
    }

    .offcanvas-header {
        background-color: #343A40;
        color: #FFFFFF;
        border-bottom: 1px solid #FFFFFF;
    }

    .offcanvas-body {
        background-color: #343A40;
        color: #FFFFFF;
        border-right: 4px solid #FFC107;
    }

    .list-group-item {
        background-color: #AAAAAA;
        color: #FFFFFF;
        border-color: #343A40;
    }
    .table {
    background-color: #343A40;
    color: #FFFFFF;
}
    .btn-primary {
        background-color: #007BFF;
        border-color: #FFFFFF;
    }
    .btn-warning {
        background-color: #FFC107;
        border-color: #343A40;
    }
    .btn-danger {
        background-color: #DC3545;
        border-color: #FFFFFF;
    }

.table tbody tr:hover {
    background-color: rgba(52, 58, 64, 0.8);
}
    .list-group-item:hover {
        background-color: #222222;
    }
    a {
        color: #FFFFFF;
    }
    
</style>
<body class="fix-header">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-center mx-auto" href="/awal">
                <img src="{{ asset('images\image1.jpg') }}" alt="Logo" width="40" height="40" class="me-2">
                Global Service Center
            </a>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="profileOffcanvasLabel">
                        <img src="{{ asset('images\image1.jpg') }}" alt="Logo Profil" width="40" height="40" class="me-2">
                        Admin
                    </h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="/home"    onMouseOver="this.style.color='#FFFFFF'"
                            onMouseOut="this.style.color='#434242'">Dashboard</a></li>
                    </ul>
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="/Stock" onMouseOver="this.style.color='#FFFFFF'"
                            onMouseOut="this.style.color='#434242'">Stock</a></li>
                    </ul>
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="/Pelanggan" onMouseOver="this.style.color='#FFFFFF'"
                            onMouseOut="this.style.color='#434242'">Pelanggan</a></li>
                    </ul>
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="/Transaksi" onMouseOver="this.style.color='#FFFFFF'"
                            onMouseOut="this.style.color='#434242'">Transaksi</a></li>
                    </ul>
                    <div class="mt-5">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="/logout" onMouseOver="this.style.color='#FFFFFF'"
                                onMouseOut="this.style.color='#434242'">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
