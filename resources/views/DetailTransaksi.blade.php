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
    <h2>Detail Transaksi</h2>
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="fas fa-arrow-left"></i> Kembali
    </button>

    <form method="POST" action="/Transaksi/Detail/{{ $transaksi->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="kode_invoice" class="form-label">Kode Invoice</label>
            <input type="text" class="form-control" id="kode_invoice" name="kode_invoice" value="{{ $transaksi->invoice }} " readonly>
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $transaksi->perbaikan->barang_pelanggan->nama_barang }}" readonly>
        </div>
        <div class="mb-3">
            <label for="pelanggan" class="form-label">Pelanggan</label>
            <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="{{ $transaksi->pelanggan->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label for="kerusakan" class="form-label">Kerusakan</label>
            <input class="form-control" id="kerusakan" name="kerusakan" value="{{ $transaksi->perbaikan->kerusakan }}" readonly>
        </div>
        <div class="mb-3">
            <label for="jumlah_item" class="form-label">Item yang di perlukan</label>
            <input type="text" class="form-control" id="jumlah_item" name="jumlah_item" value="{{ $transaksi->perbaikan->barang_pelanggan->nama_barang}}" readonly>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $transaksi->perbaikan->jumlah_butuh }}" readonly>
        </div>
        <div class="mb-3">
            <label for="biaya_service" class="form-label">Biaya Service</label>
            <input type="number" class="form-control" id="biaya_service" name="biaya_service" value="{{ $transaksi->tot_harga }}" readonly>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status Proses</label>
            <select class="form-control" id="option" name="status">
                <option value="True" {{ ($transaksi->perbaikan->status)? "": "Default" }}>Diproses  </option>
                <option value="False" {{ ($transaksi->perbaikan->status)? "Default": "" }}>Selesai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gambarLama" class="form-label">Sebelum di perbaiki</label>
            <br>
            <img src="{{ asset('barang/' . $transaksi->perbaikan->barang_pelanggan->foto_barang) }}" alt="err" width="400" height="400">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Setelah di perbaiki</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
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