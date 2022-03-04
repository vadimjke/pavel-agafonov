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
      colorAxis: {minValue: 0, maxValue: 1, colors: ['#00FF00', '#FFFF00', '#FFBF00', '#FF8000', '#FF4000', '#FF0000']},
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

  

    </script>

<div id="map-toast">
    Текст успешно скопирован в буффер обмена!
</div>


<div id="map-tooltip">

</div>



<div class="container-xxl mt-3 mb-3 px-4 py-4 rounded-3 position-relative">
<h1>Индекс упоминания о коррупции в Google:</h1>
<small>*Политические границы приблизительные и основаны на карте Google</small>
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
</div>








       <div class="mb-5" id="regions_div">
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
    



@endsection