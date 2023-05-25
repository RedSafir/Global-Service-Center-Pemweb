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

    <form method="POST" action="/Pelanggan/EditPelanggan/{{ $pelanggan->id }}">
        @method("put")
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="namapelanggan" name="namapelanggan" value="{{ $pelanggan->nama}}">
        </div>
        <div class="mb-3">
            <label for="alamatpelanggan" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamatpelanggan" name="alamatpelanggan" value="{{ $pelanggan->alamat }}">
        </div>
        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <br>
            <select name="jeniskelamin" id="jeniskelamin">
                <option value="L" {{ ($pelanggan->kelamin == "L")?"selected":"" }}>Laki-Laki</option>
                <option value="P" {{ ($pelanggan->kelamin == "P")?"selected":"" }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nomortelepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="nomortelepon" name="nomorTelphone" value="{{ $pelanggan->no_telp }}">
        </div>
        <div class="mb-3">
            <label for="nomerKTP" class="form-label">Nomor KTP</label>
            <input type="number" class="form-control" id="nomerKTP" name="nomerKTP" value="{{ $pelanggan->no_ktp }}">
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
        document.getElementById("namapelanggan").value = "";
        document.getElementById("alamatpelanggan").value = "";
        document.getElementById("jeniskelamin").value = "";
        document.getElementById("nomortelepon").value = "";
        document.getElementById("nomorktp").value = "";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endPushOnce