@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">Wellcome my lord, {{ auth()->user()->name }}</h1>
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="h-100 p-3 text-white bg-danger rounded-3">
                <h2 class="card-title">Model Bus</h2>
                <h2 class="card-text">{{ App\Models\kategori::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/kategoribus" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3 text-white bg-warning rounded-3">
                <h2 class="card-title">Daftar Harga</h2>
                <h2 class="card-text">{{ App\Models\daftarharga::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/materi" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3 text-white bg-success rounded-3">
                <h2 class="card-title">Pesanan</h2>
                <h2 class="card-text">{{ App\Models\pesanan::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/materi" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>
@endsection
