@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col text-start">
            <h2>Konfimasi Transaksi</h2>
        </div>
        <div class="col text-end">
            <h2>Transaksi</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="bottom-divider mt-2">
        <div class="row mt-3">
            <div class="col text-start">
                <button class="btn btn-success" type="button"><a href="#">kembali</a></button>
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
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Member</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($bayars as $bayar):
                        <tr>
                            <td>{{ $i++ }}</td> 
                            <td>{{ $bayar->nama_barang }}</td>
                            <td>{{ $bayar->pelanggan->nama }}</td>
                            <td>{{ ($bayar->status)?"Selesai":"Process" }}</td>
                            <td>{{ $bayar->tot_harga }}</td>
                            <td>
                                <button class="btn btn-primary"><a href="/Bayar/Pembayaran/{{ $bayar->id }}/Bayar">Pilih</a></button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Tambahkan baris lainnya sesuai dengan data yang dimiliki -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection