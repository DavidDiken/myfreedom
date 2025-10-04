@extends('layouts.app')

@section('title', 'Дякуємо — MYFREEDOM')
@section('meta_description', 'Дякуємо за звернення! Ми зв’яжемося з вами, щоб обговорити запуск квартири в оренду за стандартами MYFREEDOM.')

@section('content')
<section class="hero hero--compact">
    <div class="container hero__grid hero__grid--single">
        <div class="hero__content">
            <span class="eyebrow">MYFREEDOM Invest</span>
            <h1>Дякуємо за заявку!</h1>
            <p class="hero__lead">Наш менеджер зв'яжеться з вами найближчим часом, щоб узгодити наступні кроки та відповісти на запитання.</p>
            <div class="hero__actions">
                <a href="{{ route('home') }}" class="btn btn--primary">Повернутися на головну</a>
                <a href="{{ route('home') }}#consultation-form" class="btn btn--ghost">Повторно залишити контакти</a>
            </div>
            <p class="hero__note">Вас автоматично перенаправить на головну сторінку через 20 секунд.</p>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    setTimeout(function () {
        window.location.href = "{{ route('home') }}";
    }, 20000);
</script>
@endpush
