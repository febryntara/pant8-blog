<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- LINK BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- LINK BOOTSTRAP --}}
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
