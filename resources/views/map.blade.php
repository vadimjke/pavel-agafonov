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
        ['{{$data->name}}', {{$data->pentil}}, createCustomHTMLContent('{{$data->display_name}}', '{{$data->value}}', '4.1')],
        @endforeach
    ]);

    var options = {
      colorAxis: {colors: ['#edae3d', '#a22922']},
      backgroundColor: '#81d4fa',
      datalessRegionColor: '#fff',
      focusTarget: 'category',
      tooltip: {isHtml: true},
      defaultColor: '#f5f5f5',
      domain: 'RU',
      displayMode: 'regions',
      enableRegionInteractivity: 'true',
      geochartVersion: '10'
    };

    var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

    chart.draw(dataTable, options);
  }




  function createCustomHTMLContent(name, value, median) {
    return '<div>' +
        '<h1>' + name +
        '</h1>' + 
        '<p>Упоминаний о коррупции на человека: <b>' + value + '</b></p>' +
        '<p>Медианный показатель по миру: <b>' + median + '</b></p>';
  }

    </script>


























       <div id="regions_div"></div>

@endsection