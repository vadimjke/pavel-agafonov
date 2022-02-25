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














    chart.draw(dataTable, options);
  }




  function createCustomHTMLContent(name, value, median, diff, population, isoCode, mentions) {
    diff = diff-1;
    if(value<3.8) {
      formatValue = '<span style="color:green;">'+value+'</span>';
    }
    else {
      formatValue = '<span style="color:red;">'+value+'</span>';
    }


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
        '<p>Упоминаний о коррупции на человека: <b>' + formatValue + '</b></p>' +
        '<p>Медианный показатель по миру: <b>' + median + '</b></p>' +
        '<p>Изменение за квартал: ' +  valueSign +
        '<hr>' + 
        '<p>Упоминания о коррупции по запросу "<b><i><u>'+ getCountryName(isoCode) + ' corruption</u></i></b>": ' + mentions +
        '<p>Население: <b>' + population + '</b> тысяч человек';

    @else 
    return '<div>' +
        '<h1>' + name +
        '</h1>' + '<hr>' + 
        '<p>Упоминаний о коррупции на человека: <b>' + formatValue + '</b></p>' +
        '<p>Медианный показатель по миру: <b>' + median + '</b></p>' +
        '<hr>' + 
        '<p>Упоминания о коррупции по запросу "<b><i><u>'+ getCountryName(isoCode) + ' corruption</u></i></b>": ' + mentions +
        '<p>Население: <b>' + population + '</b> тысяч человек';
    @endif
  }

    </script>










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

@endsection