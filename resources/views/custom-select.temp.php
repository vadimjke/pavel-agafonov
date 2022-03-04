@extends('layouts.main')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

var oldValue = [];
@if($year == "2022")

    @foreach($values as $value)
      oldValue.push('{{$value->value}}');
    @endforeach
    var medianL = '4.1';
@else
    var medianL = '3.8';
@endif


google.charts.load('current', {
    'packages':['geochart'],
    'mapsApiKey': 'AIzaSyDXKb5LJbTf4XYJ1060yyVZ0P7yR7agLE8',
    'language': 'ru'
  });
  google.charts.setOnLoadCallback(drawRegionsMap);

  function drawRegionsMap() {

    pagafonovMapCallback();

    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn('string', 'Country');
    dataTable.addColumn('number', 'Sales');
    // A column for custom tooltip content
  dataTable.addColumn({'type': 'string', 'role': 'tooltip', 'p': {'html': true}});
    dataTable.addRows([


        @foreach ($datas as $data)
          ['{{$data->name}}', {{$data->pentil}}, createCustomHTMLContent('{{$data->display_name}}', '{{$data->value}}', medianL, '{{$loop->iteration}}', '{{$data->population}}', '{{$data->name}}', '{{$data->mentions}}')],
        @endforeach
    ]);

    var options = {
      colorAxis: {minValue: 0, maxValue: 1.2, colors: ['#FFFF40', '#FFFF00', '#FFBF00', '#FF8000', '#FF4000', '#FF0000']},
      backgroundColor: '#81d4fa',
      datalessRegionColor: '#fff',
      focusTarget: 'category',
      tooltip: {isHtml: true},
      defaultColor: '#f5f5f5',
      domain: 'PS',
      displayMode: 'regions',
      enableRegionInteractivity: 'true',
      geochartVersion: '10'
    };

    var chartItem = document.getElementById('regions_div');

    var chart = new google.visualization.GeoChart(chartItem);









  
    google.visualization.events.addListener(chart, 'select', function () {
      var selection = chart.getSelection();
      if (selection.length > 0) {
        var mtooltip = document.getElementById("map-tooltip");

        mtooltip.classList.add("animate-map-tooltip");

        
        let ztData = dataTable.getValue(selection[0].row, 2);

        ztData += "<div id='closeMapButton' onclick='closeMapF()'>✕</div>";
        mtooltip.innerHTML = ztData;

        //window.open('http://' + data.getValue(selection[0].row, 2), '_blank');
      }
    });
    












    chart.draw(dataTable, options);
  }


  // ==================== //
  // Custom Map Functions //
  // ==================== //

  function pagafonovMapCallback() {

    // debug
    console.log('Карта загрузилась');

    // get numbers
    textelems = document.getElementsByTagName('text');
    for (let i=0;i<textelems.length;i++)
    {
      textelems[i].innerHTML = "";
    }
  }


  function closeMapF() {
    document.getElementById('map-tooltip').classList.remove('animate-map-tooltip');
    }

  function createCustomHTMLContent(name, value, median, diff, population, isoCode, mentions) {
    diff = diff-1;
    if(value<3.8) {
      formatValue = '<span style="color:green;">'+value+'</span>';
    }
    else {
      formatValue = '<span style="color:red;">'+value+'</span>';
    }

    mentions = mentions.substring(0, mentions.length - 3);
    mentions = mentions + " тыс.";

    @if($year == 2022)

    if (oldValue[diff] > value) {
      valueSign = '<b style="color:green">' + oldValue[diff] +  ' > ' + value + '</b>';
    }
    else if (oldValue[diff] == value) {
      valueSign = '<b style="color:black">' + oldValue[diff] +  ' = ' + value + '</b>';
    }
    else {
      valueSign = '<b style="color:red">' + oldValue[diff] +  ' > ' + value + '</b>';
    }




    return '<div>' +
        '<h1>' + name +
        '</h1>' + '<hr>' + 
        '<p>Упоминания о коррупции по запросу</p>' + 
        '<p> <span onclick="cptobuff()" class="countr-tooltip" id="cptobuff" title="Кликните чтобы скоировать в буффер обмена"><i>'+ getCountryName(isoCode) + '</i></span>: <b>' + mentions + '</b>' +
        '<p>Население: <b>' + population + ' тыс. </b> человек' + 
        '<hr>' +
        '<p>Упоминаний о коррупции на человека: <b>' + formatValue + '</b></p>' +
        '<p>Медианный показатель по миру: <b>' + median + '</b></p>';
        


    @else 
    return '<div>' +
        '<h1>' + name +
        '</h1>' + '<hr>' + 
        '<p>Упоминания о коррупции по запросу</p>' + 
        '<p> <span onclick="cptobuff()" class="countr-tooltip" id="cptobuff" title="Кликните чтобы скоировать в буффер обмена"><i>'+ getCountryName(isoCode) + '</i></span>: <b>' + mentions + '</b>' +
        '<p>Население: <b>' + population + ' тыс.</b> человек' + 
        '<hr>' + 
        '<p>Упоминаний о коррупции на человека: <b>' + formatValue + '</b></p>' +
        '<p>Медианный показатель по миру: <b>' + median + '</b></p>';
    @endif
  }


  function cptobuff() {
    let a = document.getElementById('cptobuff').textContent;
    copy(a);
    let b = document.getElementById('map-toast');
    b.classList.add('animate-map-toast');
    setTimeout(function(){
            b.classList.remove('animate-map-toast');
      }, 2000);
  }

  function copy(text) {
    var input = document.createElement('textarea');
    input.innerHTML = text;
    document.body.appendChild(input);
    input.select();
    var result = document.execCommand('copy');
    document.body.removeChild(input);
    return result;
}

  // ======================== //
  // End Custom Map Functions //
  // ======================== //

    </script>

<div id="map-toast">
    Текст успешно скопирован в буффер обмена!
</div>


<div id="map-tooltip">

</div>



<div class="container-xxl mt-3 px-4 py-4 rounded-3 position-relative">
<h1>Индекс упоминания о коррупции в Google:</h1>
<small>*Политические границы приблизительны и основаны на карте Google</small>
@if(isset($year))
<!-- <div class="position-absolute" style="right: -100px;bottom:0;"> -->
<div class="position-fixed" id="mapNotation">
  <h5>Данные за {{$quarter}} квартал {{$year}} года:</h5>
</div>
@else
<div class="position-fixed" id="mapNotation">
  <h5>Данные за 4 квартал 2021 года:</h5>
</div>
@endif





<!-- menu block start -->
@if (isset($datas))
      <div class="mt-3 d-flex">
      <form action="/map/" method="POST" class="d-flex gap-2">
        @csrf
        <div class="custom-select" style="width: 200px;">
            <select  id="mapYear" name="year">
            @if(Route::currentRouteName() == 'map')
            <option selected id="defaultYear" value="2021">Год</option>
            @endif
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
</div>


            <div class="custom-select" style="width:200px; display:inline-block">
            <select id="mapKvartal" name="quarter">
            @if(Route::currentRouteName() == 'map')
            <option selected id="defaultKvartal" value="4">Квартал</option>
            @endif
                    @isset($q2021_1_q)
                    @if(count($q2021_1_q) > 0)
                      @foreach ($q2021_1_q as $item)
                        <option value="{{$item->quarter}}">
                          @switch($item->quarter)
                            @case(1)
                              I
                              @break
                            @case(2)
                              II
                            @break
                            @case(3)
                              III
                            @break
                            @case(4)
                              IV
                            @break
                          @endswitch
                          квартал
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_2_q)
                    @if(count($q2021_2_q) > 0)
                      @foreach ($q2021_2_q as $item)
                      <option value="{{$item->quarter}}">
                          @switch($item->quarter)
                            @case(1)
                              I
                              @break
                            @case(2)
                              II
                            @break
                            @case(3)
                              III
                            @break
                            @case(4)
                              IV
                            @break
                          @endswitch
                          квартал
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_3_q)
                    @if(count($q2021_3_q) > 0)
                      @foreach ($q2021_3_q as $item)
                      <option value="{{$item->quarter}}">
                          @switch($item->quarter)
                            @case(1)
                              I
                              @break
                            @case(2)
                              II
                            @break
                            @case(3)
                              III
                            @break
                            @case(4)
                              IV
                            @break
                          @endswitch
                          квартал
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_4_q)
                    @if(count($q2021_4_q) > 0)
                      @foreach ($q2021_4_q as $item)
                        <option value="{{$item->quarter}}">
                          @switch($item->quarter)
                            @case(1)
                              I
                              @break
                            @case(2)
                              II
                            @break
                            @case(3)
                              III
                            @break
                            @case(4)
                              IV
                            @break
                          @endswitch
                          квартал
                        </option>
                      @endforeach
                    @endif
                    @endisset

             
            </select>
</div>





            <div class="custom-select" style="width:200px; display:inline-block">
            <select id="mapLang" name="language">
            @if(Route::currentRouteName() == 'map')
            <option selected id="defaultLanguage" value="english">Язык</option>
            @endif

                    @isset($q2021_1_l)
                    @if(count($q2021_1_l) > 0)
                      @foreach ($q2021_1_l as $item)
                        <option value="{{$item->language}}">
                        @switch($item->language)
                            @case('english')
                              Английский
                              @break
                            @case('arabic')
                              Арабский
                            @break
                            @case('chinese')
                              Китайский
                            @break
                            @case('spanish')
                              Испанский
                            @break
                          @endswitch
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_2_l)
                    @if(count($q2021_2_l) > 0)
                      @foreach ($q2021_2_l as $item)
                      <option value="{{$item->language}}">
                        @switch($item->language)
                            @case('english')
                              Английский
                              @break
                            @case('arabic')
                              Арабский
                            @break
                            @case('chinese')
                              Китайский
                            @break
                            @case('spanish')
                              Испанский
                            @break
                          @endswitch
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_3_l)
                    @if(count($q2021_3_l) > 0)
                      @foreach ($q2021_3_l as $item)
                      <option value="{{$item->language}}">
                        @switch($item->language)
                            @case('english')
                              Английский
                              @break
                            @case('arabic')
                              Арабский
                            @break
                            @case('chinese')
                              Китайский
                            @break
                            @case('spanish')
                              Испанский
                            @break
                          @endswitch
                        </option>
                      @endforeach
                    @endif
                    @endisset
                    @isset($q2021_4_l)
                    @if(count($q2021_4_l) > 0)
                      @foreach ($q2021_4_l as $item)
                      <option value="{{$item->language}}">
                        @switch($item->language)
                            @case('english')
                              Английский
                              @break
                            @case('arabic')
                              Арабский
                            @break
                            @case('chinese')
                              Китайский
                            @break
                            @case('spanish')
                              Испанский
                            @break
                          @endswitch
                        </option>
                      @endforeach
                    @endif
                    @endisset


            </select>
</div>
            <button type="submit" class="btn btn-primary">Показать</button>
      </form>











</div>










      </div>
      @endif
<!-- menu block end -->








</div>








       <div class="mb-5" id="regions_div">
        
       </div>
      <div id="map_customized">
        <div class="hide_numbers" id="hn1">&nbsp;</div>
        <div class="hide_numbers" id="hn2">&nbsp;</div>

        <div class="scale_numbers" id="sn1">0.2</div>
        <div class="scale_numbers" id="sn2">0.4</div>
        <div class="scale_numbers" id="sn3">0.6</div>
        <div class="scale_numbers" id="sn4">0.8</div>
        <div class="scale_numbers" id="sn5">1.0</div>
      </div>
       
       @if ($language == "spanish")
       <script src="{{ asset('js/isoConvertSpanish.js') }}"></script>
       @elseif ($language == "english")
       <script src="{{ asset('js/isoConvert.js') }}"></script>
       @elseif ($language == "arabic")
       <script src="{{ asset('js/isoConvertArabic.js') }}"></script>
       @elseif ($language == "chinese")
       <script src="{{ asset('js/isoConvertChinese.js') }}"></script>
       @endif
    






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
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "2":
            @isset($q2021_2_l)
                    @if(count($q2021_2_l) > 0)
                      @foreach ($q2021_2_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "3":
            @isset($q2021_3_l)
                    @if(count($q2021_3_l) > 0)
                      @foreach ($q2021_3_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "4":
            @isset($q2021_4_l)
                    @if(count($q2021_4_l) > 0)
                      @foreach ($q2021_4_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
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
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
@endforeach
@endif
@endisset
break;
      case "2":
            @isset($q2022_2_l)
                    @if(count($q2022_2_l) > 0)
                      @foreach ($q2022_2_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "3":
            @isset($q2022_3_l)
                    @if(count($q2022_3_l) > 0)
                      @foreach ($q2022_3_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
            @endisset
      break;
      case "4":
            @isset($q2022_4_l)
                    @if(count($q2022_4_l) > 0)
                      @foreach ($q2022_4_l as $item)
$("#mapLang").append('<option value="{{$item->language}}">{{$item->translated_lang}}</option>');
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
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_2_q)
@if(count($q2021_2_q) > 0)
@foreach ($q2021_2_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_3_q)
@if(count($q2021_3_q) > 0)
@foreach ($q2021_3_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_4_q)
@if(count($q2021_4_q) > 0)
@foreach ($q2021_4_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
break;
case "2022":
$("#mapKvartal").empty();
@isset($q2022_1_q)
@if(count($q2022_1_q) > 0)
@foreach ($q2022_1_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_2_q)
@if(count($q2022_2_q) > 0)
@foreach ($q2022_2_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_3_q)
@if(count($q2022_3_q) > 0)
@foreach ($q2022_3_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_4_q)
@if(count($q2022_4_q) > 0)
@foreach ($q2022_4_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->quarter}} квартал</option>');
@endforeach
@endif
@endisset
break;
}
    
});

</script>



@endsection