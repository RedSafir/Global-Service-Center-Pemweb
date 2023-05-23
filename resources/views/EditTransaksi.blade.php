<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <div class="container">
        <h2>Form Tambah Stock</h2>
        <button class="btn btn-secondary" onclick="window.history.back();">
            <i class="fas fa-arrow-left"></i> Kembali
        </button>

        <form method="POST" action="/submit-service" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="kode_invoice" class="form-label">Kode Invoice</label>
                <input type="text" class="form-control" id="kode_invoice" name="kode_invoice">
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="mb-3">
                <label for="pelanggan" class="form-label">Pelanggan</label>
                <input type="text" class="form-control" id="pelanggan" name="pelanggan">
            </div>
            <div class="mb-3">
                <label for="kerusakan" class="form-label">Kerusakan</label>
                <textarea class="form-control" id="kerusakan" name="kerusakan"></textarea>
            </div>
            <div class="mb-3">
                <label for="jumlah_item" class="form-label">Jumlah Item</label>
                <input type="number" class="form-control" id="jumlah_item" name="jumlah_item">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="mb-3">
                <label for="biaya_service" class="form-label">Biaya Service</label>
                <input type="number" class="form-control" id="biaya_service" name="biaya_service">
            </div>
            <div class="mb-3">
                <label for="batas_waktupem" class="form-label">Biaya Service</label>
                <input type="number" class="form-control" id="batas_waktupem" name="batas_waktupem">
            </div>
            <div class="mb-3">
                <label for="batas_waktupem" class="form-label">StatusTransaksi</label>
                <input type="number" class="form-control" id="batas_waktupem" name="batas_waktupem">
            </div>
            <div class="form-group">
                <label for="option">Pilihan:</label>
                <select class="form-control" id="option" name="option">
                    <option value="">Pilih</option>
                    <option value="option1">Baru</option>
                    <option value="option2">Lama</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function resetForm() {
            document.getElementById("nama").value = "";
            document.getElementById("jenis").value = "";
            document.getElementById("harga").value = "";
            document.getElementById("stock").value = "";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    




</body>
@include('Footer');
</html>
