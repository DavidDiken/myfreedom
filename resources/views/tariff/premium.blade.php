@extends('layouts.app')
@section('title', 'Tariff Premium — MYFREEDOM')
@section('meta_description', 'Tariff Premium MYFREEDOM — повний супровід ремонту та запуску квартири в оренду: дизайн, комплектація, контроль підрядників та управління заселенням.')

@section('content')
<section class="plan-hero">
    <div class="container plan-hero__content">
        <div>
            <span class="eyebrow">MYFREEDOM Tariffs</span>
            <h1>Tariff Premium</h1>
            <p class="lead">Максимальна делегація: ми беремо на себе всю підготовку квартири під оренду, від концепції до заселення першого гостя.</p>
            <div class="plan-actions">
                <a href="{{ route('home') }}#consultation-form" class="btn btn--primary">Замовити презентацію тарифу</a>
                <a href="{{ route('tariff.standard') }}" class="btn btn--ghost">Обрати Tariff Standard</a>
            </div>
        </div>
        <div class="plan-highlight">
            <h3>Для кого</h3>
            <p>Інвестори, які хочуть повністю делегувати запуск квартири та отримувати прогнозований дохід без операційної рутини.</p>
            <div class="plan-tags">
                <span class="plan-tag">Під ключ</span>
                <span class="plan-tag">Управління орендою</span>
                <span class="plan-tag">VIP супровід</span>
            </div>
            <p class="plan-note">Ми відповідаємо за результат, ви — за фокус на інвестиціях.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container plan-grid">
        <article class="plan-card">
            <h2>Що входить</h2>
            <ul class="checklist">
                <li>Повний пакет Standard плюс авторський дизайн-проєкт.</li>
                <li>Комплектація меблями, технікою та декором під ключ.</li>
                <li>Управління підрядниками: тендер, договори, контроль виконання.</li>
                <li>Підготовка до запуску: фотозйомка, опис об’єкта та маркетинг.</li>
                <li>Підключення до операційного управління MYFREEDOM.</li>
            </ul>
        </article>
        <article class="plan-card">
            <h2>Результат, який отримуєте</h2>
            <ul class="checklist">
                <li>Готовий інвестиційний продукт з перевіреним сервісом.</li>
                <li>Вихід на стабільний дохід одразу після здачі об'єкта.</li>
                <li>Повна фінансова звітність та контроль якості від MYFREEDOM.</li>
                <li>Професійне управління гостями, сервісом і технічним станом.</li>
            </ul>
            <span class="plan-price">Інвестиція розраховується персонально</span>
            <p class="plan-note">Запросіть презентацію — підготуємо пропозицію під ваш кейс.</p>
        </article>
    </div>
</section>

@include('form')
@endsection
