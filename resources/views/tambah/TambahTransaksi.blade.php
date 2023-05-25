<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
    <style>
        .bottom-divider {
            border-top: 5px solid #CCCCCC;
            padding-top: 10px;
            margin-top: 10px;
        }

        .search-add-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .search-add-container {
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>
    @include('NavbarHome');




    <div class="container mt-5">
        <div class=" mt-2">
            <div class="row mt-3">
                <div class="col text-start">
                    <button class="btn btn-secondary" onclick="window.history.back();">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                </div>
                <div class="col text-end">
                    <div class="search-add-container">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari...">
                            <button class="btn btn-primary" type="button">Cari</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="card mt-5 me-5 ms-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <!-- Isi tabel disini -->
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">JK</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">No KTP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>INV001</td>
                                <td>John Doe</td>
                                <td>Paid</td>
                                <td>Completed</td>
                                <td>$100</td>
                                <td>$100</td>
                                <td>
                                    <button class="btn btn-primary"><a href="/pilih">Pilih</a></button>

                                </td>
                            </tr>

                            <!-- Tambahkan baris lainnya sesuai dengan data yang dimiliki -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






</body>
@include('Footer');

</html>