@extends('layouts.app')
@section('title', 'Tariff Basic — MYFREEDOM')
@section('meta_description', 'Тариф Basic від MYFREEDOM — самостійний запуск квартири в оренду з готовими стандартами, чеклістами та підтримкою менеджера.')

@section('content')
<section class="plan-hero">
    <div class="container plan-hero__content">
        <div>
            <span class="eyebrow">MYFREEDOM Tariffs</span>
            <h1>Tariff Basic</h1>
            <p class="lead">Стартовий пакет для власників, які готові самостійно вести ремонт та запуск квартири в оренду, маючи під рукою всі стандарти MYFREEDOM.</p>
            <div class="plan-actions">
                <a href="{{ route('home') }}#consultation-form" class="btn btn--primary">Отримати консультацію</a>
                <a href="{{ route('home') }}" class="btn btn--ghost">Повернутися на головну</a>
            </div>
        </div>
        <div class="plan-highlight">
            <h3>Для кого</h3>
            <p>Власники, які хочуть уникнути переплат та контролювати ремонт особисто, але з опорою на готові шаблони.</p>
            <div class="plan-tags">
                <span class="plan-tag">Перший проєкт</span>
                <span class="plan-tag">Самостійне ведення</span>
                <span class="plan-tag">Оптимізація бюджету</span>
            </div>
            <p class="plan-note">Ми даємо карту дій, ви керуєте реалізацією.</p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container plan-grid">
        <article class="plan-card">
            <h2>Що входить</h2>
            <ul class="checklist">
                <li>Покрокова дорожня карта від аналізу ЖК до здачі ключів орендарю.</li>
                <li>Базові планувальні рішення під різні площі та формати квартир.</li>
                <li>Шаблони кошторисів, відомості матеріалів та рекомендовані постачальники.</li>
                <li>Стандартизовані технічні завдання для підрядників.</li>
                <li>ROI-калькулятор для прогнозу окупності та кеш-флоу.</li>
            </ul>
        </article>
        <article class="plan-card">
            <h2>Результат, який отримуєте</h2>
            <ul class="checklist">
                <li>Ремонт без критичних переробок і зайвих витрат.</li>
                <li>Інтер'єр, що відповідає попиту орендарів у вашому сегменті.</li>
                <li>Підготовлений пакет документів та чек-ліст приймання робіт.</li>
                <li>План запуску квартири з першими орендарями.</li>
            </ul>
            <span class="plan-price">Інвестиція уточнюється з менеджером</span>
            <p class="plan-note">Залиште контакти — розрахуємо бюджет під вашу квартиру.</p>
        </article>
    </div>
</section>

@include('form')
@endsection
