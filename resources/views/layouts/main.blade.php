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
                <option value="2021">2021 год</option>
                <option value="2022">2022 год</option>
                <!-- <option {{ ($year == '2021') ? 'selected' : '' }} value="2021">2021 год</option>
                <option {{ ($year == '2022') ? 'selected' : '' }} value="2022">2022 год</option> -->
                @else
                <option selected value="2021">2021 год</option>
                <option value="2022">2022 год</option>
                @endif
            </select>
            <select class="form-select" id="mapKvartal" name="quarter">
                    @isset($q2021_1_q)
                    @if(count($q2021_1_q) > 0)
                      @foreach ($q2021_1_q as $item)
                        <option value="{{$item->quarter}}">{{$item->quarter}} квартал</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_2_q)
                    @if(count($q2021_2_q) > 0)
                      @foreach ($q2021_2_q as $item)
                        <option value="{{$item->quarter}}">{{$item->quarter}} квартал</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_3_q)
                    @if(count($q2021_3_q) > 0)
                      @foreach ($q2021_3_q as $item)
                        <option value="{{$item->quarter}}">{{$item->quarter}} квартал</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_4_q)
                    @if(count($q2021_4_q) > 0)
                      @foreach ($q2021_4_q as $item)
                        <option value="{{$item->quarter}}">{{$item->quarter}} квартал</option>
                      @endforeach
                    @endif
                    @endisset

             
            </select>
            <select class="form-select" id="mapLang" name="language">


                    @isset($q2021_1_l)
                    @if(count($q2021_1_l) > 0)
                      @foreach ($q2021_1_l as $item)
                        <option value="{{$item->language}}">{{$item->language}}</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_2_l)
                    @if(count($q2021_2_l) > 0)
                      @foreach ($q2021_2_l as $item)
                        <option value="{{$item->language}}">{{$item->language}}</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_3_l)
                    @if(count($q2021_3_l) > 0)
                      @foreach ($q2021_3_l as $item)
                        <option value="{{$item->language}}">{{$item->language}}</option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_4_l)
                    @if(count($q2021_4_l) > 0)
                      @foreach ($q2021_4_l as $item)
                        <option value="{{$item->language}}">{{$item->language}}</option>
                      @endforeach
                    @endif
                    @endisset


            <!--
                <option {{ ($language == 'english') ? 'selected' : '' }} value="english">Английский</option>
                <option {{ ($language == 'spanish') ? 'selected' : '' }} value="spanish">Испанский</option>
                <option {{ ($language == 'arabic') ? 'selected' : '' }} value="arabic">Арабский</option>
                <option {{ ($language == 'chinese') ? 'selected' : '' }} value="chinese">Китайский</option>
            -->



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

<!-- Bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- JS -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/isoConvert.js') }}"></script>


<script>







$("#mapKvartal").change(function() {
  chosenKvartal = this.value;

  
  $("#mapLang").empty();
  chosenYearV = $("#mapYear").val();

  if (chosenYearV == "2021") {

    switch (chosenKvartal) {
    case "1":
      @isset($q2021_1_l)
                    @if(count($q2021_1_l) > 0)
                      @foreach ($q2021_1_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "2":
            @isset($q2021_2_l)
                    @if(count($q2021_2_l) > 0)
                      @foreach ($q2021_2_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "3":
            @isset($q2021_3_l)
                    @if(count($q2021_3_l) > 0)
                      @foreach ($q2021_3_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "4":
            @isset($q2021_4_l)
                    @if(count($q2021_4_l) > 0)
                      @foreach ($q2021_4_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
  }
  }


  else if (chosenYearV == "2022") {

    console.log(chosenYearV)
    console.log(chosenKvartal)

switch (chosenKvartal) {
case "1":

@isset($q2022_1_l)
@if(count($q2022_1_l) > 0)
@foreach ($q2022_1_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
@endforeach
@endif
@endisset
      break;
      case "2":
            @isset($q2022_2_l)
                    @if(count($q2022_2_l) > 0)
                      @foreach ($q2022_2_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "3":
            @isset($q2022_3_l)
                    @if(count($q2022_3_l) > 0)
                      @foreach ($q2022_3_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "4":
            @isset($q2022_4_l)
                    @if(count($q2022_4_l) > 0)
                      @foreach ($q2022_4_l as $item)
$("#mapLang").append('<option selected value="{{$item->language}}">{{$item->language}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
  }
  }






  
})




















$("#mapYear").change(function () {
    chosenYear = this.value;


    switch (chosenYear) {
        case "2021":
            $("#mapKvartal").empty();
            @isset($q2021_1_q)
                    @if(count($q2021_1_q) > 0)
                      @foreach ($q2021_1_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2021_2_q)
                    @if(count($q2021_2_q) > 0)
                      @foreach ($q2021_2_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2021_3_q)
                    @if(count($q2021_3_q) > 0)
                      @foreach ($q2021_3_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2021_4_q)
                    @if(count($q2021_4_q) > 0)
                      @foreach ($q2021_4_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
          break;
        case "2022":
            $("#mapKvartal").empty();
            @isset($q2022_1_q)
                    @if(count($q2022_1_q) > 0)
                      @foreach ($q2022_1_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2022_2_q)
                    @if(count($q2022_2_q) > 0)
                      @foreach ($q2022_2_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2022_3_q)
                    @if(count($q2022_3_q) > 0)
                      @foreach ($q2022_3_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
            @isset($q2022_4_q)
                    @if(count($q2022_4_q) > 0)
                      @foreach ($q2022_4_q as $item)
$("#mapKvartal").append('<option selected value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
                      @endforeach
                    @endif
            @endisset
          break;
    }
    
});

</script>


</body>
</html>