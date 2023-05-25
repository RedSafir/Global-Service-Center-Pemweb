@extends('layout.main')

@pushOnce('style')
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
@endPushOnce

@section('container')
<div class="container mt-5">
    <h2>Form Tambah Stock</h2>
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="fas fa-arrow-left"></i> Kembali
    </button>

    <form method="POST" action="/submit-service" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="kode_invoice" class="form-label">Kode Invoice</label>
            <input type="text" class="form-control" id="kode_invoice" name="kode_invoice" value="{{ $transaksi->invoice }}">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $transaksi->nama_barang }}">
        </div>
        <div class="mb-3">
            <label for="pelanggan" class="form-label">Pelanggan</label>
            <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="{{ $transaksi->pelanggan_id }}">
        </div>
        <div class="mb-3">
            <label for="kerusakan" class="form-label">Kerusakan</label>
            <input class="form-control" id="kerusakan" name="kerusakan" value="{{ $transaksi->kerusakan }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_item" class="form-label">Jumlah Item</label>
            <input type="number" class="form-control" id="jumlah_item" name="jumlah_item" value="{{ $transaksi->jumlah_butuh }}">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $transaksi->jumlah_butuh }}">
        </div>
        <div class="mb-3">
            <label for="biaya_service" class="form-label">Biaya Service</label>
            <input type="number" class="form-control" id="biaya_service" name="biaya_service" value="{{ $transaksi->tot_harga }}">
        </div>
        <div class="mb-3">
            <label for="batas_waktupem" class="form-label">StatusTransaksi</label>
            <input type="text" class="form-control" id="batas_waktupem" name="batas_waktupem" value="{{ ($transaksi->status)? "selesai": "Proses" }}">
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
    </form>
</div>
@endsection

@pushOnce('scripts')
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
@endPushOnce