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

        <form method="POST" action="/Stock/UpdateStock/{{ $barang->id }}">
            @method("put")
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama_barang }}">
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $barang->keterangan }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Satuan</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $barang->stock }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
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