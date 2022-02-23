<!DOCTYPE html>
<html lang="ru-ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КАРТА</title>
    <style>
        .google-visualization-tooltip{
        border: 3px solid blueviolet!important;

        list-style: none!important;

        opacity: 0.9;
        

        

    }
    .google-visualization-tooltip-item
    {
        list-style: none!important;
        position: relative;
        top: -3px;
        color: #707173!important;

        font-family: Helvetica, Arial, sans-serif;
    }

    .google-visualization-tooltip-item p
    {
font-size: 18px;
    }

    .google-visualization-tooltip-item-list .google-visualization-tooltip-item:first-child 
    {
        display: none; 
    }
    </style>








    
</head>
<body>
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
      geochartVersion: '11'
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


























       <div id="regions_div" style="width: 99vw; height: 90vh; margin: 0 auto;"></div>
</body>
</html>