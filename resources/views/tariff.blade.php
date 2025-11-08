@extends('layouts.app')
@section('title', $currentTariff['title'] . ' - MYFREEDOM')

@section('content')
<section class="tariff-hero">
    <div class="tariff-hero__inner glass">
        <div class="hero_tag"><p>#РемонтПідОренду</p></div>
        <div class="tariff-hero__heading">
            <h1>{{ $currentTariff['hero_heading'] }}</h1>
            <p class="tariff-hero__subtitle">{{ $currentTariff['hero_subheading'] }}</p>
        </div>

        <div class="tariff-hero__grid">
            <div class="tariff-hero__column">
                <p class="tariff-hero__price">{{ $currentTariff['price'] }}</p>
                <p class="tariff-hero__badge">{{ $currentTariff['badge'] }}</p>
            </div>
            <div class="tariff-hero__column">
                <ul class="tariff-hero__summary">
                    @foreach($currentTariff['summary'] as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="tariff-hero__column">
                <p class="tariff-hero__accent">{{ $currentTariff['accent'] }}</p>
                <a href="{{ $currentTariff['cta_target'] }}" class="btn tariff-hero__cta">{{ $currentTariff['cta_label'] }}</a>
            </div>
        </div>

        <div class="tariff-switcher">
            @foreach($tariffs as $key => $tariff)
                <a href="{{ route('tariffs.show', ['tariff' => $key]) }}" class="tariff-switcher__item {{ $currentTariff['slug'] === $tariff['slug'] ? 'is-active' : '' }}" style="min-width: 120px">
                    <span class="tariff-switcher__label">{{ $tariff['name'] }}</span>
                    <span class="tariff-switcher__price">{{ $tariff['price'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>

@foreach($stages as $stage)
    <section class="tariff-stage" id="stage-{{ $stage['id'] }}">
        <div class="tariff-stage__header">
            <p class="tariff-stage__eyebrow">{{ $stage['title'] }}</p>
            <h2>{{ $stage['description'] }}</h2>
        </div>
        <div class="tariff-stage__lessons">
            @foreach($stage['lessons'] as $lesson)
                @php
                    $isIncluded = in_array($currentTariff['slug'], $lesson['available_in'], true);
                    $availableNames = array_map(function ($slug) use ($tariffs) {
                        return $tariffs[$slug]['name'] ?? strtoupper($slug);
                    }, $lesson['available_in']);
                    $availableLabel = $lesson['available_label'] ?? implode(' / ', $availableNames);
                @endphp
                <article class="lesson-card {{ $isIncluded ? 'lesson-card--active' : 'lesson-card--muted' }}">
                    <header class="lesson-card__header">
                        <h3>{{ $lesson['name'] }}</h3>
                        <div class="lesson-card__status {{ $isIncluded ? 'lesson-card__status--included' : 'lesson-card__status--missed' }}">
                            <span class="lesson-card__icon">{!! $isIncluded ? '&#10003;' : '&#10007;' !!}</span>
                            <span>{{ $isIncluded ? 'Включено у тариф' : 'Недоступно' }}</span>
                        </div>
                    </header>

                    <div class="lesson-card__body">
                        <div class="lesson-card__block">
                            <p class="lesson-card__label">Що це таке?</p>
                            <p>{{ $lesson['what_is'] }}</p>
                        </div>
                        <div class="lesson-card__block">
                            <p class="lesson-card__label">Які питання ми розберемо?</p>
                            <ul>
                                @foreach($lesson['questions'] as $question)
                                    <li>{{ $question }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="lesson-card__block">
                            <p class="lesson-card__label">За результатом ви:</p>
                            <ul>
                                @foreach($lesson['results'] as $result)
                                    <li>{{ $result }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    @unless($isIncluded)
                        <footer class="lesson-card__footer">
                            <span class="lesson-card__available">Доступно: {{ $availableLabel }}</span>
                        </footer>
                    @endunless
                </article>
            @endforeach
        </div>
    </section>
@endforeach

@include('form')
@endsection
