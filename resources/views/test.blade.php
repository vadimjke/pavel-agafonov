@extends('layouts.main')

@section('content')


@foreach ($data as $item)
            @csrf
            

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
                        <input name="{{$item->name}}-population" required type="text" value="{{$item->population}}">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="{{$item->name}}-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
            @endforeach



@endsection