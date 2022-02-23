<!DOCTYPE html>
<html lang="en">
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
      <div style="width: 250px;">&nbsp;</div>
      <div style="width: 250px;">&nbsp;</div>
      <div style="width: 250px;">&nbsp;</div>
    </div>
  </div>
</nav>

@yield('content')
    
</body>
</html>