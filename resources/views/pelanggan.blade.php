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
        <div class="row">
            <div class="col text-start">
                <h2>Data Pelanggan</h2>
            </div>
            <div class="col text-end">
                <h2>Pelanggan</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-divider mt-2">
            <div class="row mt-3">
                <div class="col text-start">
                    <button class="btn btn-success" type="button"><a href="/Pelanggan/TambahPelanggan">Tambah</a></button>
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
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelamin</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">No KTP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                                @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $pelanggan->nama }}</td>
                                    <td>{{ $pelanggan->alamat }}</td>
                                    <td>{{ $pelanggan->kelamin }}</td>
                                    <td>{{ $pelanggan->no_telp }}</td>
                                    <td>{{ $pelanggan->no_ktp }}</td>
                                    <td>
                                        <button class="btn btn-warning"><a href="/Pelanggan/EditPelanggan/{{ $pelanggan->id }}/Edit">Edit</a></button>
                                        <form action="/Pelanggan/{{ $pelanggan->id }}" method="post" style="display: inline">
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