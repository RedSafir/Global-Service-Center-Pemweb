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
<div class="container">
    <h2>Form Tambah Stock</h2>
    <button class="btn btn-secondary" onclick="window.history.back();">
        <i class="fas fa-arrow-left"></i> Kembali
    </button>

    <form method="POST" action="/Transaksi" enctype="multipart/form-data">
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
            <select name="pelanggan" id="pelanggan">
                @foreach ($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="kerusakan" class="form-label">Kerusakan</label>
            <textarea class="form-control" id="kerusakan" name="kerusakan"></textarea>
        </div>
        <div class="mb-3">
            <label for="item_perlu" class="form-label">Item yang di perlukan</label>
            <select name="item_perlu" id="item_perlu">
                @foreach ($items as $item)
                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                @endforeach
            </select>
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
            <label for="gambar" class="form-label">Gambar</label>
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