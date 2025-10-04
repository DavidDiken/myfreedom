<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url()->current() }}">
    <title>@yield('title', 'MYFREEDOM')</title>
    @hasSection('meta_description')
        <meta name="description" content="@yield('meta_description')">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="site-header">
    <div class="container nav-shell">
        <a href="{{ route('home') }}" class="nav-logo" aria-label="MYFREEDOM головна">
            <img src="{{ asset('images/logo_MYFREEDOM_invest_2_gold.svg') }}" alt="Логотип MYFREEDOM" />
        </a>
        <nav class="nav-links" id="primary-menu">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
            <a href="{{ route('tariff.basic') }}" class="{{ request()->routeIs('tariff.basic') ? 'active' : '' }}" @if(request()->routeIs('tariff.basic')) aria-current="page" @endif>Tariff Basic</a>
            <a href="{{ route('tariff.standard') }}" class="{{ request()->routeIs('tariff.standard') ? 'active' : '' }}" @if(request()->routeIs('tariff.standard')) aria-current="page" @endif>Tariff Standard</a>
            <a href="{{ route('tariff.premium') }}" class="{{ request()->routeIs('tariff.premium') ? 'active' : '' }}" @if(request()->routeIs('tariff.premium')) aria-current="page" @endif>Tariff Premium</a>
        </nav>
        <div class="nav-cta">
            <a href="{{ route('home') }}#consultation-form" class="btn btn--primary btn--sm">Get Consultation</a>
        </div>
        <button type="button" class="burger" id="burger" aria-label="Відкрити меню" aria-controls="primary-menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main class="page-main">
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; {{ date('Y') }} MYFREEDOM. All rights reserved.</p>
        <p>MYFREEDOM Invest — стандарти якісного сервісу оренди.</p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('primary-menu');

        if (burger && navMenu) {
            burger.addEventListener('click', () => {
                const expanded = burger.getAttribute('aria-expanded') === 'true';
                burger.setAttribute('aria-expanded', String(!expanded));
                navMenu.classList.toggle('is-open');
            });

            navMenu.querySelectorAll('a').forEach((link) => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 960 && burger.getAttribute('aria-expanded') === 'true') {
                        burger.setAttribute('aria-expanded', 'false');
                        navMenu.classList.remove('is-open');
                    }
                });
            });
        }
    });
</script>

@stack('scripts')
</body>
</html>
