@extends('layouts.app')
@section('title', 'Головна — MYFREEDOM')
@section('meta_description', 'Курс MYFREEDOM допомагає власникам квартир створити ремонт під оренду: стандарти, шаблони, ROI-калькулятор та підтримка експертів.')

@section('content')
<section class="hero">
    <div class="container hero__grid">
        <div class="hero__content">
            <span class="eyebrow">#РемонтПідОренду</span>
            <h1>Курс «Як зробити ремонт так, щоб квартира здавалася з першого дня»</h1>
            <p class="hero__lead">Покрокові інструкції від вибору ЖК та планування квартири до заселення першого мешканця. Дізнайтеся, як підготувати квартиру до оренди з максимальним доходом, спираючись на стандарти <span class="text-highlight">MYFREEDOM</span>.</p>
            <div class="hero__actions">
                <a href="#consultation-form" class="btn btn--primary">Замовити консультацію</a>
                <p class="hero__note">Отримайте стандартизований підхід найбільшої управляючої компанії з орендного житла в Україні.</p>
            </div>
            <dl class="hero__meta">
                <div class="hero__meta-item">
                    <dt>330+ квартир</dt>
                    <dd>Під управлінням MYFREEDOM із відточеними сценаріями ремонту</dd>
                </div>
                <div class="hero__meta-item">
                    <dt>ROI-калькулятор</dt>
                    <dd>Розрахунок окупності інвестицій до старту ремонту</dd>
                </div>
                <div class="hero__meta-item">
                    <dt>7 років досвіду</dt>
                    <dd>Практика на реальних проєктах від преміум до комфорт-класу</dd>
                </div>
            </dl>
        </div>
        <div class="hero__visual">
            <div class="hero-video">
                <div class="hero-video__inner">
                    <button class="play-button" type="button" aria-label="Дивитись прев’ю курсу">
                        <span class="play-icon" aria-hidden="true"></span>
                    </button>
                    <p class="hero-video__caption">Подивіться, як MYFREEDOM трансформує простір під довгострокову оренду.</p>
                </div>
            </div>
            <div class="hero__badge">
                <p>Найбільша управляюча компанія в Україні.</p>
                <span>MYFREEDOM Invest</span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="glass-panel">
            <header class="section-header section-header--center">
                <span class="eyebrow">Для кого цей курс</span>
                <h2>Для власників, які готують квартиру до оренди</h2>
                <p class="section-description">Ми вже прорахували формулу вигідної оренди. Ви повторюєте готові рішення, скорочуючи час і бюджет на запуск.</p>
            </header>
            <div class="problem-callout">
                <span class="problem-callout__icon" aria-hidden="true">❌</span>
                <h3>Типові помилки «з’їдають» прибуток і час</h3>
                <p class="section-description">Курс допомагає уникнути хаотичних рішень, дає чіткі технічні завдання та стандарти підрядникам.</p>
            </div>
            <div class="problem-grid">
                <article class="problem-card">
                    <span class="problem-card__icon" aria-hidden="true">💸</span>
                    <h4>Переплата за ремонт</h4>
                    <p>Без досвіду легко витратити 20–30% зайвого бюджету на матеріали та меблі без впливу на дохід.</p>
                    <p class="solution">👉 У курсі — готові кошториси, списки матеріалів та підрядників.</p>
                </article>
                <article class="problem-card">
                    <span class="problem-card__icon" aria-hidden="true">📐</span>
                    <h4>Планування «для себе»</h4>
                    <p>Коли рішення приймаються за власним смаком, квартира простоює місяцями.</p>
                    <p class="solution">👉 Дамо планувальні шаблони, які допомагають здавати з першого дня.</p>
                </article>
                <article class="problem-card">
                    <span class="problem-card__icon" aria-hidden="true">🛠️</span>
                    <h4>Самовільні дії підрядників</h4>
                    <p>Без чіткого ТЗ майстри роблять «як звикли», що веде до переробок.</p>
                    <p class="solution">👉 Отримаєте шаблони технічних завдань та чеклісти контролю.</p>
                </article>
                <article class="problem-card">
                    <span class="problem-card__icon" aria-hidden="true">⏳</span>
                    <h4>Втрачений час</h4>
                    <p>Щоденний контроль, суперечки та нескінченні закупівлі виснажують.</p>
                    <p class="solution">👉 У курсі — автоматизований план робіт і порядок дій з економією до 80% часу.</p>
                </article>
                <article class="problem-card">
                    <span class="problem-card__icon" aria-hidden="true">📊</span>
                    <h4>Немає розуміння окупності</h4>
                    <p>Без системи розрахунків не видно, коли інвестиція повернеться.</p>
                    <p class="solution">👉 Ви отримуєте ROI-калькулятор та моделі розрахунків.</p>
                </article>
            </div>
            <div class="section-cta">
                <a href="{{ route('tariff.basic') }}" class="btn btn--secondary">Переглянути пакети курсу</a>
            </div>
        </div>
    </div>
</section>

<section class="section metrics">
    <div class="container">
        <header class="section-header section-header--center">
            <h2>Цей курс — реальний досвід <span class="text-highlight">MYFREEDOM</span></h2>
            <p class="section-description">Ми працюємо з орендою професійно: тестуємо планування, відстежуємо сервіс і забезпечуємо максимальний дохід власникам.</p>
        </header>
        <div class="metrics-grid">
            <article class="metric-card">
                <span class="metric-value">25&nbsp;000</span>
                <span class="metric-label">гостей заселено минулого року</span>
            </article>
            <article class="metric-card">
                <span class="metric-value">330+</span>
                <span class="metric-label">квартир в активному управлінні</span>
            </article>
            <article class="metric-card">
                <span class="metric-value">7 років</span>
                <span class="metric-label">комплексного досвіду на ринку оренди</span>
            </article>
            <article class="metric-card">
                <span class="metric-value">№1</span>
                <span class="metric-label">управляюча компанія з орендної нерухомості в Україні</span>
            </article>
            <article class="metric-card">
                <span class="metric-value">80%</span>
                <span class="metric-label">часу власника ми беремо на себе</span>
            </article>
        </div>
    </div>
</section>

<section class="section multi-before-after">
    <div class="container">
        <header class="section-header section-header--center">
            <h2>Галерея <span class="text-highlight">до / після</span></h2>
            <p class="section-description">Кожен кейс — реальна квартира, яку наша команда підготувала до оренди під стандарт MYFREEDOM.</p>
        </header>
        <div class="before-after-grid">
            <div class="ba-item">
                <div class="ba-wrapper">
                    <img src="/images/before1.png" class="ba-img before" alt="Квартира до ремонту">
                    <div class="ba-overlay">
                        <img src="/images/after1.png" class="ba-img after" alt="Квартира після ремонту">
                    </div>
                    <input type="range" min="0" max="100" value="50" class="ba-slider" aria-label="Порівняти до та після">
                </div>
                <p class="ba-caption">Кухня в ЖК «Комфорт+»</p>
            </div>
            <div class="ba-item">
                <div class="ba-wrapper">
                    <img src="/images/before2.png" class="ba-img before" alt="Санвузол до ремонту">
                    <div class="ba-overlay">
                        <img src="/images/after2.png" class="ba-img after" alt="Санвузол після ремонту">
                    </div>
                    <input type="range" min="0" max="100" value="50" class="ba-slider" aria-label="Порівняти до та після">
                </div>
                <p class="ba-caption">Санвузол у ЖК «Софія»</p>
            </div>
            <div class="ba-item">
                <div class="ba-wrapper">
                    <img src="/images/before3.png" class="ba-img before" alt="Вітальня до ремонту">
                    <div class="ba-overlay">
                        <img src="/images/after3.png" class="ba-img after" alt="Вітальня після ремонту">
                    </div>
                    <input type="range" min="0" max="100" value="50" class="ba-slider" aria-label="Порівняти до та після">
                </div>
                <p class="ba-caption">Вітальня у ЖК «Парковий»</p>
            </div>
        </div>
    </div>
</section>

@include('form')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.ba-item').forEach(function (item) {
            const slider = item.querySelector('.ba-slider');
            const overlay = item.querySelector('.ba-overlay');

            if (slider && overlay) {
                slider.addEventListener('input', function () {
                    overlay.style.width = `${this.value}%`;
                });
            }
        });
    });
</script>
@endpush
