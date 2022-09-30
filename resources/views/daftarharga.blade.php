@extends('layouts.main')

@section('layout')

    <body class="bg-light">
        <div class="container my-5">
            <main>
                {{-- heading --}}
                <div class="py-5 text-center">
                    <h2 class="display-4 fw-normal">Daftar Harga Tiket</h2>
                </div>

                {{-- Tabel daftar harga --}}
                <div class="container">
                    <div class="card">
                        <div class="card-header py-4">
                            <div class="card-block py-4">
                                <div class="table-responsive">
                                    <table class="table table table-striped table-hover">
                                        <thead>
                                            <tr class="table-light">
                                                <th scope="col">No</th>
                                                <th scope="col">Model Bus</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($harga as $harga)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $harga->kelas_bus }}</td>
                                                    <td>Rp. {{ $harga->harga }}</td>
                                                    <td><a class="btn btn-primary" href="/pesanan">Pesan</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection
