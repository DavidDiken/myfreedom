@extends('layouts.app')

@section('title', "Дякуємо!")
@section('meta_description', "Дякуємо за заявку")

@section('content')
    <section class="hero">
        <h1 class="h1">Дякуємо за заявку!</h1>
        <p class="sub">Ми зв'яжемося з вами найближчим часом.</p>
        <p style="margin-top:16px">Вас буде автоматично перенаправлено на головну через 20 секунд.</p>
    </section>

    <script>
        setTimeout(function () {
            window.location.href = "{{ route('home') }}";
        }, 20000);
    </script>
@endsection