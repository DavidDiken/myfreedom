@extends('layouts.app')
@section('title', 'Tariff Standard — MYFREEDOM')
@section('meta_description', 'Тариф Standard MYFREEDOM — кураторський супровід ремонту, персоналізовані планування та контроль ключових етапів запуску квартири.')

@section('content')
<section class="plan-hero">
    <div class="container plan-hero__content">
        <div>
            <span class="eyebrow">MYFREEDOM Tariffs</span>
            <h1>Tariff Standard</h1>
            <p class="lead">Баланс між самостійністю та професійною підтримкою. Ви отримуєте куратора MYFREEDOM, який супроводжує критичні етапи та допомагає отримати прогнозований результат.</p>
            <div class="plan-actions">
                <a href="{{ route('home') }}#consultation-form" class="btn btn--primary">Залишити заявку</a>
                <a href="{{ route('tariff.basic') }}" class="btn btn--ghost">Переглянути Tariff Basic</a>
            </div>
        </div>
        <div class="plan-highlight">
            <h3>Для кого</h3>
            <p>Власники, які цінують контроль, але хочуть делегувати частину процесів експертам.</p>
            <div class="plan-tags">
                <span class="plan-tag">Куратор</span>
                <span class="plan-tag">Погодження плану</span>
                <span class="plan-tag">Контроль якості</span>
            </div>
            <p class="plan-note">Разом будуємо ремонт, який стартує без затримок.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container plan-grid">
        <article class="plan-card">
            <h2>Що входить</h2>
            <ul class="checklist">
                <li>Усі матеріали пакета Basic.</li>
                <li>Персоналізоване планування з розстановкою меблів та зонуванням.</li>
                <li>Кураторський супровід: дзвінки, зустрічі та контроль критичних точок.</li>
                <li>Затвердження кошторису та контроль закупівель.</li>
                <li>Підключення до бази надійних підрядників та майстрів.</li>
            </ul>
        </article>
        <article class="plan-card">
            <h2>Результат, який отримуєте</h2>
            <ul class="checklist">
                <li>Ремонт без хаотичних правок завдяки куратору.</li>
                <li>Інтер'єр, адаптований до вашого сегменту оренди.</li>
                <li>Прозорий контроль бюджету та графіку поставок.</li>
                <li>Готовність квартири до професійної фотозйомки та запуску.</li>
            </ul>
            <span class="plan-price">Інвестиція розраховується індивідуально</span>
            <p class="plan-note">Менеджер підготує комерційну пропозицію після короткої консультації.</p>
        </article>
    </div>
</section>

@include('form')
@endsection
