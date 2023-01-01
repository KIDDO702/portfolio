<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="main-wrapper">
        <div class="header fixed-top bg-light">
            <div class="header-left text-center d-flex justify-content-center bg-light">
                <a class="navbar-brand fw-bold text-uppercase text-primary" style="font-size: 20px;">
                    BOB DEVELOPER <i class="fa-brands fa-dev"></i>
                </a>
            </div>
            <a id="toggle_btn" data-toggle="collapse" data-target="#sidebar" >
                <i class="fas fa-align-left text-primary"></i>
            </a>
            <div class="top-nav-search">
                <form action="#" class="input-group align-items-center">
                    <input type="text" name="" id="" class="form-control" placeholder="Search" style="border-radius: 30px 0 0 30px;">
                    <button type="submit" class="btn btn-primary" style="border-radius: 0 30px 30px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <ul class="nav user-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-desktop"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar bg-light" id="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-menu">
                    <ul class="flex-column nav nav-tabs">
                        <li class="menu-title fw-bold nav-item mb-2">Main Menu</li>
                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                                <i class="fas fa-house m-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item" x-data="{ open:false }">
                            <a href="#" class="nav-link" @click="open = !open">
                                <i class="fa-brands fa-microblog m-2"></i></i> Blog
                            </a>
                            <ul class="nav flex-column px-3" x-show="open" @click.outside="open = false">
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/addblog">
                                        <i class="fa-solid fa-plus"></i> Add Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/editblog">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" x-data="{ open:false }">
                            <a href="#" class="nav-link" @click="open = !open">
                                <i class="fa-solid fa-diagram-project m-2"></i> Projects
                            </a>
                            <ul x-show="open" @click.outside="open = false" class="nav flex-column px-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/addproject">
                                        <i class="fa-solid fa-plus"></i> Add Project
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/editproject">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit Project
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title fw-bold nav-item mb-2">Other</li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <div class="d-grid">
                                    <button type="submit" class="btn-danger btn text-white">
                                        <i class="fa-solid fa-right-from-bracket"></i> LogOut
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper" style="min-height: 340px;">
            <div class="content container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('scripts')
</body>
</html>
