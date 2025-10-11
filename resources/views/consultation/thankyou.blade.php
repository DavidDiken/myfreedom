@extends('layouts.app')

@section('title', "Дякуємо!")
@section('meta_description', "Дякуємо за заявку")

@section('content')
    <section class="thankyou">
        <div class="thankyou-card glass">
            <div class="thankyou-icon">&#10003;</div>
            <h1>Дякуємо за заявку!</h1>
            <p class="thankyou-sub">Ми вже отримали вашу заявку і зв'яжемося з вами найближчим часом.</p>
            <a href="{{ route('home') }}" class="btn thankyou-btn">Повернутися на головну</a>
            <p class="thankyou-meta">Вас буде автоматично перенаправлено на головну через 10 секунд.</p>
        </div>
    </section>

    <script>
        setTimeout(function () {
            window.location.href = "{{ route('home') }}";
        }, 10000);
    </script>
@endsection
