@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Form Pemesanan</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/pesanan" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Nama_Pemesan" class="col-form-label">Nama</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Nama_Pemesan') is-invalid @enderror"
                            id="Nama_Pemesan" name="Nama_Pemesan" placeholder="Nama pembeli" required autofocus
                            value="{{ old('Nama_Pemesan') }}">
                        @error('Nama_Pemesan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="No_HP" class="col-form-label">Nomor HP</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('No_HP') is-invalid @enderror" id="No_HP"
                            name="No_HP" placeholder="Nomor HP" required autofocus value="{{ old('No_HP') }}">
                        @error('No_HP')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="daftarharga_id" class="col-form-label">Kategori Menu</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-select" id="daftarharga_id" name="daftarharga_id"
                            placeholder="Kategori Menu" required autofocus>
                            @foreach ($daftarharga as $harga)
                                @if (old('daftarharga_id') == $harga->id)
                                    <option value="{{ $harga->id }}" selected>
                                        {{ $harga->kelas_bus }}</option>
                                @else
                                    <option value="{{ $harga->id }}">{{ $harga->kelas_bus }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Tgl_Keberangkatan" class="col-form-label">Tanggal Pemesanan</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" class="form-control @error('Tgl_Keberangkatan') is-invalid @enderror"
                            id="Tgl_Keberangkatan" name="Tgl_Keberangkatan" required autofocus
                            value="{{ old('Tgl_Keberangkatan') }}">
                        @error('Tgl_Keberangkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Jlh_Penumpang" class="col-form-label">Jumlah Beli</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Jlh_Penumpang') is-invalid @enderror"
                            id="Jlh_Penumpang" name="Jlh_Penumpang" placeholder="Jumlah" required
                            autofocus value="{{ old('Jlh_Penumpang') }}">
                        @error('Jlh_Penumpang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Harga_Tiket" class="col-form-label">Harga</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Harga_Tiket') is-invalid @enderror"
                            id="Harga_Tiket" name="Harga_Tiket" placeholder="Harga" required autofocus
                            value="{{ old('Harga_Tiket') }}">
                        @error('Harga_Tiket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Total_Bayar" class="col-form-label">Total Bayar</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Total_Bayar') is-invalid @enderror"
                            id="Total_Bayar" name="Total_Bayar" placeholder="Total Bayar" required autofocus
                            value="{{ old('Total_Bayar') }}">
                        @error('Total_Bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <div class="justify-content-center mb-5">
                <button class="btn btn-primary btn-lg" type="">
                    Hitung Total Bayar</button>
                <button class="btn btn-primary btn-lg mx-4" id="submit">Pesan
                    Tiket</button>
                <button class="btn btn-danger btn-lg" id="clear">Cancel</button>
            </div>
        </form>
    </div>
@endsection
