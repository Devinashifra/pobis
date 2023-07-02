@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-10">
                <a href="/dashboard/materi" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Back to all
                    blog </a>
                <a href="/dashboard/materi/{{ $bus->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit </a>
                <form action="/dashboard/materi/{{ $bus->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                        <span data-feather="trash-2"></span> Delete </button>
                </form>

                <h1 class="my-5">{{ $bus-kategoribus }}</h1>
                @if ($bus->image)
                    <img src="{{ asset('storage/' . $bus->image) }}" class="card-img-top" alt="gambar">
                @else
                    <img src="https://source.unsplash.com/1200x300?programing" class="card-img-top" alt="gambar">
                @endif
                <article class="my-4 fs-5">
                    <p> {!! $bus->body !!} </p>
                </article>
            </div>
        </div>
    </div>
@endsection
