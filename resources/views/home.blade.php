@extends('layouts.main')

@section('layout')

    <body>
        <main>
            <div class="pt-5" style="background-image: url(./img/background.jpeg)">
                <div class="px-4 pt-5 mt-5 text-center border-bottom">

                    {{-- heading --}}
                    <h1 class="display-4 fw-bold">Olive Fried Chicken</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead my-4">Menjual ayam goreng berkualitas dan murah <br>
                            Krispi di luar lembut di dalam
                        </p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn btn-outline-dark btn-lg px-4" href="/kategoribus">Menu</a>
                            <a class="btn btn-outline-dark btn-lg px-4" href="/pesanan">Pesan</a>
                        </div>
                    </div>

                    {{-- gambar --}}
                    <div class="overflow-hidden" style="max-height: 100%">
                        <div class="container px-5">
                            <img src="img/olive2.jpeg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Olive Fried Chicken"
                                width="1200" height="720" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
