<!doctype html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- my style -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Custom styles for this template -->
    <link href="/css/heroes.css" rel="stylesheet">
    <link href="/css/product.css" rel="stylesheet">
    <link href="/css/form-validation.css" rel="stylesheet">

    <title>Victoria Bus | {{ $title }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark bg-gradient">
            <div class="container">
                <a class="navbar-brand mb-0" href="/">
                    <strong>VICTORIA BUS |</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ $active === 'Model Bus' ? 'active' : '' }}" href="/kategoribus">Model
                                Bus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'Daftar Harga' ? 'active' : '' }}"
                                href="/daftarharga">Daftar
                                Harga</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link {{ $active === 'Pesanan' ? 'active' : '' }}" href="/pesanan">Pesanan</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-5 justify-content-center" id="dropdownMacos">
                        <ul class="navbar-nav ms-auto">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Wellcome, {{ auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-macos mx-0 border-0 shadow mx-2 mt-2"
                                        style="width: 100px;">
                                        @can('IsAdmin')
                                            <li><a class="dropdown-item" href="/dashboard"><i
                                                        class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                        @endcan
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                Keluar</button>
                                        </form>

                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                            class="bi bi-box-arrow-right"></i> Masuk</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        @yield('layout')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
    </header>
    <footer class="footer mt-auto py-5 bg-dark">
        <div class="container">
            <h5 class="text-light">PT. Victoria Transfort</h5>
            <p class="text-light">Alamat: JL. Mayor Sujadi 23A, Jepun Tulungagung, Jawa Timur</p>
            <p class="text-light">No Tlp: (0355) 321620, 321624, 327575</p>
            <p class="text-light">Email: MyBus@gmail.com</p>
        </div>
    </footer>

</body>

</html>
