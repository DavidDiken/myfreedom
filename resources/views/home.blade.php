@extends('layouts.app')
@section('title', 'Головна - MYFREEDOM')
@section('content')
<section class="hero">
        <h1 class="h1">Заголовок лендинга</h1>
        <p class="sub">Одно-два предложения про ценность и что получит пользователь.</p>
    </section>

    <div class="grid">
        <div class="card"><strong>Преимущество 1</strong><br>1-2 строки конкретной пользы.</div>
        <div class="card"><strong>Преимущество 2</strong><br>1-2 строки конкретной пользы.</div>
        <div class="card"><strong>Преимущество 3</strong><br>1-2 строки конкретной пользы.</div>
    </div>
    @include('form')
@endsection