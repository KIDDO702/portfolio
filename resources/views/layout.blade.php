<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob Developer</title>
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app.dc32a03d.css') }}">
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
            <a href="/" class="navbar-brand text-uppercase fw-bold text-primary">
                Bob Developer <i class="fa-brands fa-dev"></i>
            </a>
            <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto me-4">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="/listings" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="/blogs" class="nav-link">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link btn btn-danger btn-sm text-light disabled">Adverts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 bg-dark">
        <div class="container">
            <div class="mb-2" style="border-bottom: 1px solid white;">
                <h3 class="text-white fw-bold text-uppercase">Bob Developer
                    <i class="fa-brands fa-dev"></i>
                </h3>
                <ul class="justify-content-center mb-2 nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://www.facebook.com/robert.ochieng.5815" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://twitter.com/crazy___kiddo" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://www.instagram.com/_crazy.graphics_/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link text-light" href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link text-light" href="https://github.com/KIDDO702" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <div class="py-3 text-light text-uppercase fw-bold">
                @php
                    $year = date('Y');
                    echo 'Copyright &copy; Bob Developer'. ' ' .$year;
                @endphp
            </div>
        </div>
    </footer>
    <script src="{{ asset('build/assets/app.416a9070.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> --}}
</body>
</html>
