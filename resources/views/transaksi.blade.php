@extends('layout.main')

@section('container')
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
    <div class="row mt-3">
      <div class="col text-start">
        <button class="btn btn-success" type="button"><a href="/Transaksi/TambahTransaksi">Tambah</a></button>
        <button class="btn btn-success" type="button"><a href="/Transaksi/Konfirmasi">Konfirmasi Transaksi</a></button>
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
              <th scope="col">Foto Barang</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i = 1;
            @endphp
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $transaksi->nama_barang }}</td>
                <td>{{ $transaksi->pelanggan->nama }}</td>
                <td>{{ ($transaksi->status)? "selesai": "Proses" }}</td>
                <td>{{ $transaksi->Foto }}</td>
                <td>{{ $transaksi->tot_harga }}</td>
                <td><button class="btn btn-primary"><a href="/Transaksi/Detail/{{ $transaksi->id }}">Detail</a></button></td>
            </tr>
            @endforeach

            <!-- Tambahkan baris lainnya sesuai dengan data yang dimiliki -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection