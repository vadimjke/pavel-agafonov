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
          <a class="nav-link {{ (request()->is('map')) ? 'active' : '' }}" href="/map">Карта</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->is('support')) ? 'active' : '' }}" href="/support">Поддержать</a>
        </li>
      </ul>
      @if (request()->is('map'))
      <div class="d-flex gap-2" style="width: 600px;">
            <select class="form-select">
                <option selected value="2021">2021 год</option>
            </select>
            <select class="form-select">
                <option selected value="1">I квартал</option>
                <option value="2">II квартал</option>
            </select>
            <select class="form-select">
                <option selected value="english">Английский</option>
                <option value="spanish">Испанский</option>
                <option value="arabic">Арабский</option>
                <option value="chinese">Китайский</option>
            </select>
            <button type="button" class="btn btn-secondary">Показать</button>
      </div>
      @else
      <div style="width: 600px;">&nbsp;</div>
      @endif
      <div class="d-flex" style="width: 200px;">
        &nbsp;
      </div>
      <div class="d-flex justify-content-end" style="width: 200px;">
        <button type="button" class="btn btn-primary" style="float:right;">Войти</button>
      </div>
    </div>
  </div>
</nav>

@yield('content')
    
</body>
</html>