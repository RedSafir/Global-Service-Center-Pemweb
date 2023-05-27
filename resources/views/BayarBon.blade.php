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
    @include('partials.NavbarHome');
    <div class="container mt-5">
        <div class="row">
            <div class="col text-start">
                <h2>Data Transaksi</h2>
            </div>
            <div class="col text-end">
                <h2>Transaksi</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-divider mt-2">
            <button class="btn btn-secondary" onclick="window.history.back();">
                <i class="fas fa-arrow-left"></i> Kembali
            </button>
            <div class="container text-center">
                <h2>Hasil Pembayaran</h2>
                <p>Pesanan atas nama {{ $invoice->pelanggan->nama }}</p>
                <p>Kode Invoice: {{ $invoice->invoice }}</p>
                <p>Nama Barang : {{ $invoice->perbaikan->barang_pelanggan->nama_barang }}</p>
                <p>Gambar barang saat ini</p>
                <img src="{{ asset("barang/" . $invoice->perbaikan->barang_pelanggan->foto_barang) }}" alt="error" width=400 height=400>
                <hr>
                <p>Total Bayar: {{ $invoice->tot_harga }}</p>
                <hr>
            </div>
        </div>
    </div>






</body>
@include('partials.Footer');

</html>