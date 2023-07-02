@extends('layouts.main')

@section('layout')
    <div class="container py-5" style="background-image: url(./img/background.jpeg)">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12">
                <h1 class="my-5">
                    <a href="/kategoribus/" class="text-decoration-none">Model Bus :</a>
                    {{ $bus->nama_menu }}
                </h1>
                <article class="my-5 fs-5">
                    <p> {!! $bus->deskripsi !!} </p>
                </article>
                @if ($bus->image)
                    <img src="{{ asset('storage/' . $bus->image) }}" class="card-img-bottom" alt="gambar">
                @else
                    <img src="https://source.unsplash.com/900x700?bus" class="card-img-top" alt="gambar">
                @endif

                <a href="/kategoribus/" class="text-decoration-none d-block mt-5">Back to Model..</a>
            </div>
        </div>
    </div>
@endsection
