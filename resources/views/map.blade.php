@extends('layouts.main')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


var oldValue = [];



@if($year == "2022")
    @foreach($values as $value)
      oldValue.push('{{$value->value}}');
    @endforeach
@endif

// Start Median
function median(numbers) {
    const sorted = numbers.slice().sort((a, b) => a - b);
    const middle = Math.floor(sorted.length / 2);

    if (sorted.length % 2 === 0) {
        return (sorted[middle - 1] + sorted[middle]) / 2;
    }

    return sorted[middle];
}

var medianValues = [];
@foreach ($datas as $data)
medianValues.push({{$data->value}})
@endforeach

medianL = median(medianValues);
// End Median

function median(values){
  if(values.length ===0) throw new Error("No inputs");

  values.sort(function(a,b){
    return a-b;
  });

  var half = Math.floor(values.length / 2);
  
  if (values.length % 2)
    return values[half];
  
  return (values[half - 1] + values[half]) / 2.0;
}


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
      colorAxis: {minValue: 0, maxValue: 1.2, colors: ['#00FFFF', '#FFFF00', '#FFBF00', '#FF8000', '#FF4000', '#FF0000']},
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

        lWidth = window.screen.width;

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

    let tquarter = "{{$quarter}}";
    let rquarter = "";
    switch(tquarter) {
      case "1":
        rquarter = "I"
        break
      case "2":
        rquarter = "II"
        break
      case "3":
        rquarter = "III"
        break
      case "4":
        rquarter = "IV"
        break   
    }

    let tyear = "{{$year}}"

    function prettify(num) {
            var n = num.toString();
            return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + '.');
        }

    mentions = prettify(mentions);
    population = prettify(population);
    population = population + '.000';


    return '<div class="row">' +
        '<div class="col-12"><h1>' + name +
        '</h1></div></div>' + 
        '<div class="row">' + '<div class="col-12"> ' + rquarter + ' Квартал ' + tyear + ' </div></div><hr>' +
        '<div class="row">' + '<div class="col-12">По запросу' + 
        '<span onclick="cptobuff()" class="countr-tooltip" id="cptobuff" title="Кликните чтобы скоировать в буффер обмена"><i>'+ getCountryName(isoCode) + '</i></span>' +
        '</div></div>' +
        '<div class="row"><div class="col-6">Упоминания</div><div class="col-6 text-end float-right">' + mentions + '</div></div>' +
        '<div class="row"><div class="col-6">Население</div><div class="col-6 text-end">' + population + '</div></div>' + 
        '<hr>' +
        '<div class="row"><div class="col-9">Упоминаний на человека</div><div class="col-3 text-end">' + value + '</div></div>' +
        '<hr>' +
        '<div class="row"><div class="col-9">Медианный показатель по миру</div><div class="col-3 text-end">' + medianL + '</div></div>';

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
      <div class="mt-3 w-50" id="formWrapperFix">
      <form action="/map/" method="POST" id="formFixMobile" class="d-flex gap-2">
        @csrf

        
            <select class="form-select" id="mapYear" required name="year">
                <option {{ $year == "2021" ? "selected" : "" }} value="2021">2021 год</option>
                <option {{ $year == "2022" ? "selected" : "" }} value="2022">2022 год</option>
            </select>


            <select class="form-select" required id="mapKvartal" name="quarter">






@if($year == "2021")






                    
@isset($q2021_1_q)                
@if(count($q2021_1_q) > 0)
@foreach ($q2021_1_q as $item)
                        
    <option 
    @isset($values)
    {{ $quarter == "1" ? "selected" : "" }}
    @endisset
    value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset


@isset($q2021_2_q)
@if(count($q2021_2_q) > 0)
@foreach ($q2021_2_q as $item)

    <option 
    @isset($values)
    {{ $quarter == "2" ? "selected" : "" }}
    @endisset
    value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset

@isset($q2021_3_q)
@if(count($q2021_3_q) > 0)
@foreach ($q2021_3_q as $item)

<option 
@isset($values)
{{ $quarter == "3" ? "selected" : "" }}
@endisset
value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset

@isset($q2021_4_q)
@if(count($q2021_4_q) > 0)
@foreach ($q2021_4_q as $item)

<option 
@isset($values)
{{ $quarter == "4" ? "selected" : "" }}
@endisset
value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset





@elseif($year == "2022")




@isset($q2022_1_q)                
@if(count($q2022_1_q) > 0)
@foreach ($q2022_1_q as $item)
                        
    <option 
    @isset($values)
    {{ $quarter == "1" ? "selected" : "" }}
    @endisset
    value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset


@isset($q2022_2_q)
@if(count($q2022_2_q) > 0)
@foreach ($q2022_2_q as $item)

    <option 
    @isset($values)
    {{ $quarter == "2" ? "selected" : "" }}
    @endisset
    value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset

@isset($q2022_3_q)
@if(count($q2022_3_q) > 0)
@foreach ($q2022_3_q as $item)

<option 
@isset($values)
{{ $quarter == "3" ? "selected" : "" }}
@endisset
value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset

@isset($q2022_4_q)
@if(count($q2022_4_q) > 0)
@foreach ($q2022_4_q as $item)

<option 
@isset($values)
{{ $quarter == "4" ? "selected" : "" }}
@endisset
value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>

@endforeach
@endif
@endisset




@endif

             
            </select>
            <select required class="form-select" id="mapLang" name="language">
                    @isset($q2021_1_l)
                      @if($year == "2021" && $quarter == "1")
                        @foreach ($q2021_1_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2021_2_l)
                      @if($year == "2021" && $quarter == "2")
                        @foreach ($q2021_2_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2021_3_l)
                      @if($year == "2021" && $quarter == "3")
                        @foreach ($q2021_3_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2021_4_l)
                      @if($year == "2021" && $quarter == "4")
                        @foreach ($q2021_4_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2022_1_l)
                      @if($year == "2022" && $quarter == "1")
                        @foreach ($q2022_1_l as $item)
                          <option
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2022_2_l)
                      @if($year == "2022" && $quarter == "2")
                        @foreach ($q2022_2_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2022_3_l)
                      @if($year == "2022" && $quarter == "3")
                        @foreach ($q2022_3_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset
                    @isset($q2022_4_l)
                      @if($year == "2022" && $quarter == "4")
                        @foreach ($q2022_4_l as $item)
                          <option 
                          @isset($values)
                          {{ $language == $item->language ? "selected" : "" }}
                          @endisset
                          value="{{$item->language}}">{{$item->translated_lang}}</option>
                        @endforeach
                      @endif
                    @endisset


            </select>
            <button type="submit" class="btn btn-primary">Показать</button>
      </form>











      

      </div>
     
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





var updateKvz = function() {
  {
chosenYear = $("#mapYear").val();

switch (chosenYear) {
case "2021":
$("#mapKvartal").empty();
@isset($q2021_1_q)
@if(count($q2021_1_q) > 0)
@foreach ($q2021_1_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_2_q)
@if(count($q2021_2_q) > 0)
@foreach ($q2021_2_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_3_q)
@if(count($q2021_3_q) > 0)
@foreach ($q2021_3_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2021_4_q)
@if(count($q2021_4_q) > 0)
@foreach ($q2021_4_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
break;
case "2022":
$("#mapKvartal").empty();
@isset($q2022_1_q)
@if(count($q2022_1_q) > 0)
@foreach ($q2022_1_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_2_q)
@if(count($q2022_2_q) > 0)
@foreach ($q2022_2_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_3_q)
@if(count($q2022_3_q) > 0)
@foreach ($q2022_3_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
@isset($q2022_4_q)
@if(count($q2022_4_q) > 0)
@foreach ($q2022_4_q as $item)
$("#mapKvartal").append('<option  value="{{$item->quarter}}">{{$item->translated_quarter}} квартал</option>');
@endforeach
@endif
@endisset
break;
}



updateLangz();


    
}
        }


var updateLangz = function() {
  
  $("#mapLang").empty();

  chosenKvartal = $("#mapKvartal").val();
  chosenYearV = $("#mapYear").val();

  if (chosenYearV == "2021") {

    switch (chosenKvartal) {
    case "1":
                    @if(count($q2021_1_l) > 0)
                      @foreach ($q2021_1_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "2":
                    @if(count($q2021_2_l) > 0)
                      @foreach ($q2021_2_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "3":
                    @if(count($q2021_3_l) > 0)
                      @foreach ($q2021_3_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "4":
                    @if(count($q2021_4_l) > 0)
                      @foreach ($q2021_4_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
  }
  
  }


  else if (chosenYearV == "2022") {
switch (chosenKvartal) {
  case "1":
                    @if(count($q2022_1_l) > 0)
                      @foreach ($q2022_1_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "2":
                    @if(count($q2022_2_l) > 0)
                      @foreach ($q2022_2_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "3":
                    @if(count($q2022_3_l) > 0)
                      @foreach ($q2022_3_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
      case "4":
                    @if(count($q2022_4_l) > 0)
                      @foreach ($q2022_4_l as $item)
$("#mapLang").append('<option {{ $language == $item->language ? "selected" : "" }} value="{{$item->language}}">{{$item->translated_lang}}</option>');
                      @endforeach
                    @endif
      break;
  }
  }



}



function isTouchScreendevice() {
    return 'ontouchstart' in window || navigator.maxTouchPoints;      
};

if(isTouchScreendevice()){
    
// Mobile update Form

$("#mapKvartal").change(updateLangz);
$("#mapYear").change(updateKvz);

}


else {

  // Desktop update Form


$("#mapKvartal").click(updateLangz);
$("#mapYear").change(function(){
  
  updateLangz();
});


// updatekvz
$("#mapYear").click(updateKvz);

}



</script>




@endsection