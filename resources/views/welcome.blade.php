<a href="/">Welcome</a>
<br>
<a href="/about">About</a>
<br>
<a href="/contact">Contact</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <nav>
        <a href="/">Welcome</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    @yield('content')
</body>
</html>
