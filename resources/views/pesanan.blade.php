{{-- memanggil section layout main --}}
@extends('layouts.main')

@section('layout')

    <body class="bg-light" style="background-image: url(./img/background.jpeg)">
        <div class="container mt-5">
            <main>
                {{-- heading --}}
                <div class="py-5 text-center">
                    <h2 class="display-4 fw-normal">Form Pemesanan</h2>
                </div>

                {{-- Notif pesan tiket berhasil --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- menu semua pesanan --}}
                <div class="row g-5">
                    <div class="container px-5">
                        <div class="container px-5">
                            <div class="container px-5">
                                <div class="col-md-7 col-lg-12">
                                    <h4 class="mb-3">Tambahkan Pesanan</h4>
                                    {{-- form pemesanan --}}
                                    <form action="{{ route('pesan.tiket') }}" method="post" class="needs-validation"
                                        novalidate>
                                        @csrf
                                        <div class="row g-3">
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label for="Nama_Pemesan" class="col-form-label">Nama</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text"
                                                        class="form-control @error('Nama_Pemesan') is-invalid @enderror"
                                                        id="Nama_Pemesan" name="Nama_Pemesan" placeholder="Nama pembeli"
                                                        required autofocus value="{{ old('Nama_Pemesan') }}">
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
                                                    <input type="text"
                                                        class="form-control @error('No_HP') is-invalid @enderror"
                                                        id="No_HP" name="No_HP" placeholder="Nomor HP" required
                                                        autofocus value="{{ old('No_HP') }}">
                                                    @error('No_HP')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label for="kelas" class="col-form-label">Kategori Menu</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <select class="form-select" id="Kelas_Penumpang" name="Kelas_Penumpang"
                                                        onchange="hargaTiket()" required>
                                                        <option selected disabled value="">-- Pilih Menu --</option>
                                                        <option value="7000">Paha Bawah</option>
                                                        <option value="9000">Paha Atas</option>
                                                        <option value="8000">Sayap</option>
                                                        <option value="8000">Dada</option>
                                                        <option value="9000">Dada Lembut</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label for="Tgl_Keberangkatan" class="col-form-label">Tanggal
                                                        Pemesanan</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="date"
                                                        class="form-control @error('Tgl_Keberangkatan') is-invalid @enderror"
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
                                                    <label for="Jlh_Penumpang" class="col-form-label">Jumlah
                                                        Beli</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="number"
                                                        class="form-control @error('Jlh_Penumpang') is-invalid @enderror"
                                                        id="Jlh_Penumpang" name="Jlh_Penumpang" onkeyup="sum();"
                                                        placeholder="Jumlah" required autofocus
                                                        value="{{ old('Jlh_Penumpang') }}">
                                                    @error('Jlh_Penumpang')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label for="Total_Bayar" class="col-form-label">Harga</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input name="Harga_Tiket" type="hidden">
                                                    <p><span id="Harga_Tiket">Rp. 0</span></p>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label for="Total_Bayar" class="col-form-label">Total
                                                        Bayar</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input name="Total_Bayar" type="hidden" value="0">
                                                    <p><span id="total">Rp. 0</span></p>
                                                </div>
                                            </div>
                                        </div>                                        

                                        <hr class="my-4">
                                        {{-- button --}}
                                        <div class="justify-content-center mb-5">
                                            <button class="btn btn-primary btn-lg" type="button"
                                                onclick="hitungTotal()">
                                                Hitung Total Bayar</button>
                                            <button class="btn btn-primary btn-lg mx-4" id="submit">Pesan</button>
                                            <a href="/pesanan" class="btn btn-danger btn-lg">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="{{ asset('js/main.js') }}"></script>

    </body>
@endsection
