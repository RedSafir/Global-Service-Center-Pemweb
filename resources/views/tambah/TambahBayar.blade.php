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

        <form method="POST" action="/Bayar/Pembayaran/{{ $bayar->id }}">
            @method("put")
            @csrf
            <div class="mb-3">
                <label for="kode_invoice" class="form-label">Kode Invoice</label>
                <input type="text" class="form-control" id="kode_invoice" name="kode_invoice" value="{{ $bayar->invoice }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_member" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="nama_member" name="nama_member" value="{{ $pelanggan }}" readonly>
            </div>
            <div class="mb-3">
                <label for="total_bayar" class="form-label">Total yang Harus Dibayar</label>
                <input type="number" class="form-control" id="total_bayar" name="total_bayar" value="{{ $bayar->tot_harga }}" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
                <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran">
            </div>
            <button type="submit" class="btn btn-primary">Bayar</button>
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
