@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Pemesanan</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/pesanan/create" class="btn btn-success mb-4">Tambahkan Pesanan</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Kelas Penumpang</th>
                    <th scope="col">Tgn Keberangkatan</th>
                    <th scope="col">Jlh. Penumpang</th>
                    <th scope="col">Jlh. Lansia</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanan as $pesanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pesanan->Nama_Pemesan }}</td>
                        <td>{{ $pesanan->No_Identitas }}</td>
                        <td>{{ $pesanan->No_HP }}</td>
                        <td>{{ $pesanan->Kelas_Penumpang }}</td>
                        {{-- <td>{!! $pesanan->daftarharga->kelas_bus !!}</td> --}}
                        <td>{{ $pesanan->Tgl_Keberangkatan }}</td>
                        <td>{{ $pesanan->Jlh_Penumpang }}</td>
                        <td>{{ $pesanan->Jlh_Lansia }}</td>
                        <td>{{ $pesanan->Harga_Tiket }}</td>
                        <td>{{ $pesanan->Total_Bayar }}</td>
                        <td>
                            {{-- <a href="/dashboard/materi/{{ $pesanan->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/materi/{{ $pesanan->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a> --}}
                            <form action="/dashboard/pesanan/{{ $pesanan->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
