@extends('layout.main')

@pushOnce('style')
    <style>
    a {
        color: white;
    }
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
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col text-start">
                <h2>Data Paket</h2>
            </div>
            <div class="col text-end">
                <h2>Paket</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-divider mt-2">
            <div class="row mt-3">
                <div class="col text-start">
                    <button class="btn btn-success" type="button"><a href="/Stock/TambahStock">Tambah</a></button>
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
                                <th scope="col">Item</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Harga(satuan)</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($stocks as $stock):
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $stock->nama_barang }}</td>
                                <td>{{ $stock->keterangan }}</td>
                                <td>{{ $stock->harga }}</td>
                                <td>{{ $stock->stock }}</td>
                                <td>
                                    <button class="btn btn-primary"><a href="/Stock/UpdateStock/{{ $stock->id }}/Edit">Edit</a></button>
                                    <form action="/Stock/{{ $stock->id }}" method="post" style="display: inline">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
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