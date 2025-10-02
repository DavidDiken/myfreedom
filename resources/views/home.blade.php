@extends('layouts.app')
@section('title', 'Головна - MYFREEDOM')
@section('content')
<section class="hero">
    <div class="hero_left">
        <div class="hero_tag"><p>#РемонтПідОренду</p></div>
        <br>
        <h1 class="h1">Курс "Як зробити ремонт так, щоб квартира здавалася з першого дня"</h1>
        <br>
        <h3 style="color: white">Покрокові інструкції від вибору ЖК та планування квартири до здачі першому орендарю<span>...або як підготувати квартиру до здачі в оренду з максимальним доходом</span></h3>
        <br>
        <br>
        <div class="flex20">
            <a href="#consultation-form"><button>Замовити консультацію</button></a>
            <p class="sub">Отримай перевірені стандарти від <br>найбільшої управляючої компанії в Україні <span style="color:#E1CF95;">MYFREEDOM</span></p>
        </div>
    </div>
    <div class="hero_right">
        <div class="hero_video">
            <div class="play-button"></div>
        </div>
    </div>
</section>

    <div class="grid">
        <div class="card"><strong>Преимущество 1</strong><br>1-2 строки конкретной пользы.</div>
        <div class="card"><strong>Преимущество 2</strong><br>1-2 строки конкретной пользы.</div>
        <div class="card"><strong>Преимущество 3</strong><br>1-2 строки конкретной пользы.</div>
    </div>
    @include('form')
@endsection
