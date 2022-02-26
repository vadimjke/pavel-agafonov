@extends('layouts.main')

@section('content')

<div class="container-xxl mt-5 bg-white px-4 py-4 rounded-3">
    <h1>Административная панель</h1>

    <div class="mx-2 py-2 px-2 border w-25 d-flex gap-5" style="margin-top: 100px;">
        <h3>2021 год</h3>
        <button class="btn btn-primary btn-lg">4 квартал</button>
    </div>
    <div class="mx-2 py-2 px-2 border w-25 d-flex gap-5" style="margin-top: 100px;">
        <h3>2022 год</h3>
        <button class="btn btn-primary btn-lg">1 квартал</button>
    </div>

    <div class="mt-5">
        <a href="/signout" class="btn btn-lg btn-danger" style="margin-top: 100px;">Выйти</a>
    </div>
</div>

@endsection