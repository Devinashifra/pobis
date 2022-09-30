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
                        <label for="Nama_Pemesan" class="col-form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Nama_Pemesan') is-invalid @enderror"
                            id="Nama_Pemesan" name="Nama_Pemesan" placeholder="Nama pemesan" required autofocus
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
                        <label for="No_Identitas" class="col-form-label">Nomor Identitas</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('No_Identitas') is-invalid @enderror"
                            id="No_Identitas" name="No_Identitas" placeholder="No KTP" required autofocus
                            value="{{ old('No_Identitas') }}">
                        @error('No_Identitas')
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
                        <label for="daftarharga_id" class="col-form-label">Kelas
                            Penumpang</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-select" id="daftarharga_id" name="daftarharga_id"
                            placeholder="Kelas Penumpang" required autofocus>
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
                        <label for="Tgl_Keberangkatan" class="col-form-label">Tanggal Keberangkatan</label>
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
                        <label for="Jlh_Penumpang" class="col-form-label">Jumlah Penumpang</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Jlh_Penumpang') is-invalid @enderror"
                            id="Jlh_Penumpang" name="Jlh_Penumpang" placeholder="Bukan lansia (Usia < 60)" required
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
                        <label for="Jlh_Lansia" class="col-form-label">Jumlah Penumpang Lansia</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Jlh_Lansia') is-invalid @enderror" id="Jlh_Lansia"
                            name="Jlh_Lansia" placeholder="Usia 60 tahun ke atas" required autofocus
                            value="{{ old('Jlh_Lansia') }}">
                        @error('Jlh_Lansia')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Harga_Tiket" class="col-form-label">Harga Tiket</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Harga_Tiket') is-invalid @enderror"
                            id="Harga_Tiket" name="Harga_Tiket" placeholder="Harga Tiket" required autofocus
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

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Saya dan/atau rombongan
                    telah
                    membaca,
                    memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
                </label>
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
