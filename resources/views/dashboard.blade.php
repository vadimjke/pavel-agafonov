@extends('layouts.main')

@section('content')

<div class="container-xxl mt-5 bg-white px-4 py-4 rounded-3">
    <div class="row mb-100">
        <div class="col-6">
            <h1>Административная панель</h1>
        </div>
        <div class="col-6 d-flex position-relative">
            <a href="/signout" class="btn align-self-end btn-lg btn-danger float-right position-absolute" style="right:0;">Выйти</a>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <a href="#addItem" class="btn btn-primary" data-bs-toggle="collapse">Добавить запись</a>
            <div class="collapse mt-50" id="addItem">
                <div class="row">
                    <div class="col-4"><label for="year">Год:</label></div>
                    <div class="col-3"><label for="quarter">Квартал:</label></div>
                    <div class="col-5"><label for="language">Язык:</label></div>
                </div>
                <form action="/dashboard/add" method="POST">
                    <div class="row">
                        <div class="col-4"> <select class="form-select" id="year" name="year" aria-label="Default select example">
                                <option value="2021">2021</option>
                                <option selected value="2022">2022</option>
                            </select></div>
                        <div class="col-3">
                            <select class="form-select" id="quarter" name="quarter" aria-label="Default select example">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <select class="form-select" id="language" name="language" aria-label="Default select example">
                                <option value="english" selected>Английский</option>
                                <option value="spanish">Испанский</option>
                                <option value="arabic">Арабский</option>
                                <option value="chinese">Китайский</option>
                            </select>
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">2021 год</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4 квартал</td>
                        <td>


                            <div class="dropdown">
                                <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Редактировать
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dashboard/2021/4/english">Английский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2021/4/spanish">Испанский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2021/4/arabic">Арабский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2021/4/chinese">Китайский</a></li>
                                </ul>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">2022 год</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 квартал</td>
                        <td>


                            <div class="dropdown">
                                <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Редактировать
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dashboard/2022/1/english">Английский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2022/1/spanish">Испанский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2022/1/arabic">Арабский</a></li>
                                    <li><a class="dropdown-item" href="/dashboard/2022/1/chinese">Китайский</a></li>
                                </ul>
                            </div>


                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <div class="mt-5 float-right">

    </div>
</div>

@endsection