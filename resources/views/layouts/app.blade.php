<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>@yield('title', 'MYFREEDOM')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="nav">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('tariff.basic') }}" class="{{ request()->routeIs('tariff.basic') ? 'active' : '' }}">Tariff Basic</a>
        <a href="{{ route('tariff.standard') }}" class="{{ request()->routeIs('tariff.standard') ? 'active' : '' }}">Tariff Standard</a>
        <a href="{{ route('tariff.premium') }}" class="{{ request()->routeIs('tariff.premium') ? 'active' : '' }}">Tariff Premium</a>
    </nav>
    @yield('content')
    <footer class="container">
        &copy; {{ date('Y') }} MYFREEDOM. All rights reserved.
    </footer>
    
</body>
</html>