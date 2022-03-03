@extends('layouts.main')

@section('content')

<div class="container">

    <h3 class="mt-50 mb-50">Данные за {{$data[0]->quarter}} квартал {{$data[0]->year}} года, {{$display_language}} язык:</h3>



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger mb-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Удалить запись
    </button>

    <!-- Modal -->
    <form action="/dashboard/{{$data[0]->year}}/{{$data[0]->quarter}}/{{$language}}/delete" method="POST">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вы уверены что хотите удалить запись?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{$data[0]->quarter}} квартал {{$data[0]->year}} года, {{$display_language}} язык
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Нет</button>
                        <input type="submit" class="btn btn-danger" value="Да, я хочу удалить эту запись">
                        <input type="hidden" name="year" value="{{$data[0]->year}}">
                        <input type="hidden" name="quarter" value="{{$data[0]->quarter}}">
                        <input type="hidden" name="language" value="{{$language}}">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="edit-block">


        @foreach ($data as $item)
        <form action="/dashboard/update" method="POST">
            @csrf
            <input type="hidden" name="language" value="{{$language}}">
            <input name="{{$item->name}}-id" type="hidden" value="{{$item->id}}">




            <div class="edit-block-item">
                <p>{{$item->display_name}}</p>

                <div class="row">
                    <div class="col-3">
                        <label for="">Население</label>
                    </div>
                    <div class="col-3">
                        <label for="">Упоминаний</label>
                    </div>
                    <div class="col-3">
                        <label for="">Пентиль</label>
                    </div>
                    <div class="col-3">
                        <label for="">Значение</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input name="{{$item->name}}-population" type="text" value="{{$item->population}}">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-mentions" type="text" value="{{$item->mentions}}">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-pentil" type="text" value="{{$item->pentil}}">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-value" class="w-50" type="text" value="{{$item->value}}">
                        <input type="submit" class="btn btn-success update-button" value="Обновить">
                    </div>
                </div>

            </div>

        </form>
        @endforeach



    </div>

</div>

@endsection