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
    <div class="logo">
        <img src="{{ asset('images/logo_MYFREEDOM_invest_2_gold.svg') }}" alt="Логотип" />
    </div>

    <!-- бургер для мобилы -->
    <div class="burger" id="burger">&#9776;</div>

    <div class="nav-center" id="nav-menu">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('tariff.basic') }}" class="{{ request()->routeIs('tariff.basic') ? 'active' : '' }}">Tariff Basic</a>
        <a href="{{ route('tariff.standard') }}" class="{{ request()->routeIs('tariff.standard') ? 'active' : '' }}">Tariff Standard</a>
        <a href="{{ route('tariff.premium') }}" class="{{ request()->routeIs('tariff.premium') ? 'active' : '' }}">Tariff Premium</a>
    </div>

    <div class="nav-right">
        <a><span class="btn">Get Consultation</span></a>
    </div>
</nav>

<div class="container">
        @yield('content')
    </div>
    <footer class="container">
        &copy; {{ date('Y') }} MYFREEDOM. All rights reserved.
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.getElementById('burger');
            const navMenu = document.getElementById('nav-menu');

            burger.addEventListener('click', () => {
                navMenu.classList.toggle('show');
            });
        });

    </script>
</body>
</html>
