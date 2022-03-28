<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- LINK BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- LINK BOOTSTRAP --}}

    {{-- My Css --}}
    <link rel="stylesheet" href="css/stle.css">
    {{-- My Css --}}
    <title>Pant8 | {{ $title }}</title>
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Pant8</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ $where == 'home' ? ' active fw-bold' : null }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ $where == 'categories' ? ' active fw-bold' : null }}"
                            href="/categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ $where == 'posts' ? ' active fw-bold' : null }}" href="/posts">Posts</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, <span class="fw-bold">{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-columns-gap me-1"></i>Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/sign-out" method="get">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><i
                                                class="bi bi-box-arrow-in-left me-1"></i>Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/sign-in" class="nav-link{{ $where == 'signin' ? ' active fw-bold' : null }}">
                                <i class="bi bi-box-arrow-right me-1"></i>Sign-in
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    {{-- NAVBAR --}}

    {{-- BODY --}}
    <div class="container">
        @yield('container')
    </div>
    {{-- BODY --}}

    {{-- SCRIPT BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- SCRIPT BOOTSTRAP --}}
</body>

</html>
