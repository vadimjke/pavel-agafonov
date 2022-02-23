@extends('layouts.main')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">




google.charts.load('current', {
    'packages':['geochart'],
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
        ['{{$data->name}}', {{$data->pentil}}, createCustomHTMLContent('{{$data->display_name}}', '{{$data->value}}', '3.8')],
        @endforeach
    ]);

    var options = {
      colorAxis: {minValue: 0, maxValue: 1, colors: ['#FFFF00', '#FFBF00', '#FF8000', '#FF4000', '#FF0000']},
      backgroundColor: '#81d4fa',
      datalessRegionColor: '#fff',
      focusTarget: 'category',
      tooltip: {isHtml: true},
      defaultColor: '#f5f5f5',
      domain: 'Denmark',
      displayMode: 'regions',
      enableRegionInteractivity: 'true',
      geochartVersion: '10'
    };

    var chartItem = document.getElementById('regions_div');

    var chart = new google.visualization.GeoChart(chartItem);














    chart.draw(dataTable, options);
  }




  function createCustomHTMLContent(name, value, median) {
    if(value<3.8) {
      value = '<span style="color:green; font-size: 22px;">'+value+'</span>';
    }
    else {
      value = '<span style="color:red; font-size: 22px;">'+value+'</span>';
    }
    return '<div>' +
        '<h1>' + name +
        '</h1>' + '<hr>' + 
        '<p>Упоминаний о коррупции на человека: <b>' + value + '</b></p>' +
        '<p>Медианный показатель по миру: <b style="font-size: 22px;">' + median + '</b></p>';
  }

    </script>










<div class="container-xxl mt-3 mb-3 px-4 py-4 rounded-3">
<h1>Индекс упоминания о коррупции в Google:</h1>
</div>












       <div class="mb-5" id="regions_div"></div>

@endsection