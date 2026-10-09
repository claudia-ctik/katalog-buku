<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Buku')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <nav>
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('books.index') }}">Data Buku</a>
            </nav>
        </div>
    </header>

    <main class="container main-content">
        @if (session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

</body>
</html>
