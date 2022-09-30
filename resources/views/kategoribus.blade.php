@extends('layouts.main')

@section('layout')
    <main>
        {{-- header --}}
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
                <h1 class="display-4 fw-normal">Model Bus</h1>
                <p class="lead fw-normal">Pilih model bus yang nyaman untuk perjalan anda</p>
                <a class="btn btn-outline-dark btn-lg px-4" href="/daftarharga">Cek Harga</a>
            </div>
        </div>

        {{-- card model bus --}}
        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            {{-- mengambil data tadi tabel bus --}}
            @foreach ($bus as $bus) 
                <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
                    style="border-radius: 21px 21px 0 0;">
                    <div class="my-3 py-3">
                        <h2 class="display-3"><a href="/kategoribus/{{ $bus->slug }}"
                                class="text-decoration-none text-light">{{ $bus->jenis_bis }}</a></h2>
                                <h5>Rp. {{ $bus->harga }}</h5>
                    </div>
                    <div>
                        <img src="/img/bis2.jpg" class=" mx-auto"
                            style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
