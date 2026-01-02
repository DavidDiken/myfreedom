<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>@yield('title', 'MYFREEDOM')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>
<body>
<nav class="nav">
    <div class="logo">
        <img src="{{ asset('images/logo_MYFREEDOM_invest_2_gold.svg') }}" alt="Логотип" />
    </div>

    <!-- бургер для мобилы -->
    <div class="burger" id="burger">&#9776;</div>

    <div class="nav-center" id="nav-menu">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Головна</a>
        <a href="{{ route('home') }}#course-benefits">Рішення</a>
        <a href="{{ route('home') }}#stats-section">Переваги</a>
        <a href="{{ route('home') }}#multi-before-after">Кейси</a>
        <a href="{{ route('home') }}#invest-plans">Тарифи</a>
    </div>

    <div class="nav-right">
        <a href="#consultation-form"><button>Замовити консультацію</button></a>
    </div>
</nav>

<div class="container">
        @yield('content')
    </div>
    <footer class="container site-footer">
        <div class="site-footer__content">
            <span>&copy; {{ date('Y') }} MYFREEDOM. All rights reserved.</span>
            <nav class="site-footer__links" aria-label="Footer">
                <a href="https://myfreedom.rent/invest/about">Про MYFREEDOM</a>
                <a href="https://myfreedom.rent/invest/public-offer">Договір публічної оферти</a>
                <a href="https://myfreedom.rent/invest/privacy-policy">Політика конфеденційності</a>
            </nav>
        </div>
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
