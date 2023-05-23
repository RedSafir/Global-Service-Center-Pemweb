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

        <form method="POST" action="/simpanstock">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="namapelanggan" name="namapelanggan">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamatpelanggan" name="alamatpelanggan">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="nomortelepon" name="nomortelepon">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Nomor KTP</label>
                <input type="number" class="form-control" id="nomorktp" name="nomorktp">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function resetForm() {
            document.getElementById("namapelanggan").value = "";
            document.getElementById("alamatpelanggan").value = "";
            document.getElementById("jeniskelamin").value = "";
            document.getElementById("nomortelepon").value = "";
            document.getElementById("nomorktp").value = "";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    




</body>
@include('Footer');
</html>
