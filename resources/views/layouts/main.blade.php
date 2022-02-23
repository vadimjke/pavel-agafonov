<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Павел Агафонов</title>

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Павел Агафонов</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link 
          {{ (request()->is('map')) ? 'active' : '' }}
          {{ (isset($quarter)) ? 'active' : '' }}
          " 
          href="/map">ИУК</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('support')) ? 'active' : '' }}" href="/support">Поддержать</a>
        </li>
      </ul>
      @if (isset($datas))
      <div style="width: 600px;">
      <form action="/map/" method="POST" class="d-flex gap-2">
        @csrf
            <select class="form-select" id="mapYear" name="year">
                @if(isset($year))
                <option {{ ($year == '2021') ? 'selected' : '' }} value="2021">2021 год</option>
                <option {{ ($year == '2022') ? 'selected' : '' }} value="2022">2022 год</option>
                @else
                <option selected value="2021">2021 год</option>
                <option value="2022">2022 год</option>
                @endif
            </select>
            <select class="form-select" id="mapKvartal" name="quarter">
              @if(isset($quarter))
              <option selected value="{{$quarter}}">{{$quarter}} квартал</option>
              @else
              <option selected value="4">4 квартал</option>
              @endif
             
            </select>
            <select class="form-select">
                <option selected value="english">Английский</option>
                <!-- <option value="spanish">Испанский</option>
                <option value="arabic">Арабский</option>
                <option value="chinese">Китайский</option> -->
            </select>
            <button type="submit" class="btn btn-secondary">Показать</button>
      </form>
      </div>
      @else
      <div style="width: 600px;">&nbsp;</div>
      @endif
      <div class="d-flex" style="width: 200px;">
        &nbsp;
      </div>
      <div class="d-flex justify-content-end" style="width: 200px;">
      @guest
        <a href="/login" class="btn btn-outline-light" style="float:right;">Войти</a>
        @endguest
        @auth
        <ul  class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="/dashboard">Настройки</a>
</li></ul>
            @endauth
      </div>
    </div>
  </div>
</nav>

@yield('content')

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- JS -->
<script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>