<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header-title">
            <h2 class="header__text">FashionablyLate</h2>
        </div>
        <nav class="header-nav">
            @yield('header-nav__link')
        </nav>
    </header>

    <main>
        <div class="content-title">
            <h3 class="content-title__text">@yield('content-title')</h3>
        </div>
        @yield('content')
    </main>

</body>
</html>