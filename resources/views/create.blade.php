@extends('layouts.main')

@section('content')

<div class="container-xxl mt-5 bg-white px-4 py-4 rounded-3">





    <div class="row mb-50">
        <div class="col-6">
            <h3>Создание записи: <br>{{$year}} год, {{$quarter}} квартал, {{$language}} язык</h3>
        </div>
    </div>








    <form action="/dashboard/insert" method="POST">
        @csrf
        <input type="hidden" name="language" value="{{$language}}">
        <input type="hidden" name="quarter" value="{{$quarter}}">
        <input type="hidden" name="year" value="{{$year}}">

        <input type="submit" value="Создать" class="btn btn-lg btn-success insert-button">

        <div class="edit-block">

        <div class="edit-block-item">
                <p>Китай</p>

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
                        <input name="CN-population" required type="text" value="1402439">
                    </div>
                    <div class="col-3">
                        <input name="CN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>США</p>

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
                        <input name="US-population" required type="text" value="329535">
                    </div>
                    <div class="col-3">
                        <input name="US-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="US-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="US-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Индия</p>

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
                        <input name="IN-population" required type="text" value="1380136">
                    </div>
                    <div class="col-3">
                        <input name="IN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Япония</p>

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
                        <input name="JP-population" required type="text" value="125848">
                    </div>
                    <div class="col-3">
                        <input name="JP-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JP-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JP-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Германия</p>

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
                        <input name="DE-population" required type="text" value="84152">
                    </div>
                    <div class="col-3">
                        <input name="DE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Россия</p>

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
                        <input name="RU-population" required type="text" value="146476">
                    </div>
                    <div class="col-3">
                        <input name="RU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Индонезия</p>

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
                        <input name="ID-population" required type="text" value="259494">
                    </div>
                    <div class="col-3">
                        <input name="ID-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ID-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ID-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бразилия</p>

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
                        <input name="BR-population" required type="text" value="211308">
                    </div>
                    <div class="col-3">
                        <input name="BR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Франция</p>

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
                        <input name="FR-population" required type="text" value="67029">
                    </div>
                    <div class="col-3">
                        <input name="FR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Великобритания</p>

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
                        <input name="GB-population" required type="text" value="66746">
                    </div>
                    <div class="col-3">
                        <input name="GB-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GB-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GB-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Турция</p>

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
                        <input name="TR-population" required type="text" value="85935">
                    </div>
                    <div class="col-3">
                        <input name="TR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Италия</p>

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
                        <input name="IT-population" required type="text" value="60447">
                    </div>
                    <div class="col-3">
                        <input name="IT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мексика</p>

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
                        <input name="MX-population" required type="text" value="121656">
                    </div>
                    <div class="col-3">
                        <input name="MX-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MX-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MX-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Южная Корея</p>

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
                        <input name="KR-population" required type="text" value="25381">
                    </div>
                    <div class="col-3">
                        <input name="KR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Канада</p>

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
                        <input name="CA-population" required type="text" value="37206">
                    </div>
                    <div class="col-3">
                        <input name="CA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Испания</p>

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
                        <input name="ES-population" required type="text" value="47380">
                    </div>
                    <div class="col-3">
                        <input name="ES-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ES-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ES-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Саудовская Аравия</p>

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
                        <input name="SA-population" required type="text" value="33344">
                    </div>
                    <div class="col-3">
                        <input name="SA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Австралия</p>

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
                        <input name="AU-population" required type="text" value="24855">
                    </div>
                    <div class="col-3">
                        <input name="AU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Тайвань</p>

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
                        <input name="TW-population" required type="text" value="23324">
                    </div>
                    <div class="col-3">
                        <input name="TW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Польша</p>

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
                        <input name="PL-population" required type="text" value="38371">
                    </div>
                    <div class="col-3">
                        <input name="PL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Египет</p>

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
                        <input name="EG-population" required type="text" value="102184">
                    </div>
                    <div class="col-3">
                        <input name="EG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Таиланд</p>

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
                        <input name="TH-population" required type="text" value="67515">
                    </div>
                    <div class="col-3">
                        <input name="TH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Иран</p>

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
                        <input name="IR-population" required type="text" value="82239">
                    </div>
                    <div class="col-3">
                        <input name="IR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Пакистан</p>

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
                        <input name="PK-population" required type="text" value="219964">
                    </div>
                    <div class="col-3">
                        <input name="PK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Нигерия</p>

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
                        <input name="NG-population" required type="text" value="202534">
                    </div>
                    <div class="col-3">
                        <input name="NG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Вьетнам</p>

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
                        <input name="VN-population" required type="text" value="97076">
                    </div>
                    <div class="col-3">
                        <input name="VN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Нидерланды</p>

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
                        <input name="NL-population" required type="text" value="17232">
                    </div>
                    <div class="col-3">
                        <input name="NL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Аргентина</p>

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
                        <input name="AR-population" required type="text" value="44695">
                    </div>
                    <div class="col-3">
                        <input name="AR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Филиппины</p>

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
                        <input name="PH-population" required type="text" value="112106">
                    </div>
                    <div class="col-3">
                        <input name="PH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Малайзия</p>

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
                        <input name="MY-population" required type="text" value="31143">
                    </div>
                    <div class="col-3">
                        <input name="MY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бангладеш</p>

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
                        <input name="BD-population" required type="text" value="167475">
                    </div>
                    <div class="col-3">
                        <input name="BD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Южная Африка</p>

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
                        <input name="ZA-population" required type="text" value="55341">
                    </div>
                    <div class="col-3">
                        <input name="ZA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Колумбия</p>

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
                        <input name="CO-population" required type="text" value="48128">
                    </div>
                    <div class="col-3">
                        <input name="CO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>ОАЭ</p>

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
                        <input name="AE-population" required type="text" value="9619">
                    </div>
                    <div class="col-3">
                        <input name="AE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Швейцария</p>

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
                        <input name="CH-population" required type="text" value="8668">
                    </div>
                    <div class="col-3">
                        <input name="CH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Румыния</p>

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
                        <input name="RO-population" required type="text" value="19191">
                    </div>
                    <div class="col-3">
                        <input name="RO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бельгия</p>

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
                        <input name="BE-population" required type="text" value="11429">
                    </div>
                    <div class="col-3">
                        <input name="BE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Швеция</p>

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
                        <input name="SE-population" required type="text" value="10175">
                    </div>
                    <div class="col-3">
                        <input name="SE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сингапур</p>

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
                        <input name="SG-population" required type="text" value="5996">
                    </div>
                    <div class="col-3">
                        <input name="SG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Украина</p>

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
                        <input name="UA-population" required type="text" value="43952">
                    </div>
                    <div class="col-3">
                        <input name="UA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Казахстан</p>

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
                        <input name="KZ-population" required type="text" value="18323">
                    </div>
                    <div class="col-3">
                        <input name="KZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Алжир</p>

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
                        <input name="DZ-population" required type="text" value="41490">
                    </div>
                    <div class="col-3">
                        <input name="DZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Австрия</p>

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
                        <input name="AT-population" required type="text" value="8892">
                    </div>
                    <div class="col-3">
                        <input name="AT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ирландия</p>

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
                        <input name="IE-population" required type="text" value="4859">
                    </div>
                    <div class="col-3">
                        <input name="IE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Чили</p>

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
                        <input name="CL-population" required type="text" value="18676">
                    </div>
                    <div class="col-3">
                        <input name="CL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гонконг</p>

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
                        <input name="HK-population" required type="text" value="7350">
                    </div>
                    <div class="col-3">
                        <input name="HK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Чехия</p>

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
                        <input name="CZ-population" required type="text" value="10700">
                    </div>
                    <div class="col-3">
                        <input name="CZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ирак</p>

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
                        <input name="IQ-population" required type="text" value="40012">
                    </div>
                    <div class="col-3">
                        <input name="IQ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IQ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IQ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Перу</p>

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
                        <input name="PE-population" required type="text" value="31382">
                    </div>
                    <div class="col-3">
                        <input name="PE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Израиль</p>

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
                        <input name="IL-population" required type="text" value="8460">
                    </div>
                    <div class="col-3">
                        <input name="IL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Норвегия</p>

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
                        <input name="NO-population" required type="text" value="5313">
                    </div>
                    <div class="col-3">
                        <input name="NO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Норвегия</p>

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
                        <input name="SJ-population" required type="text" value="5313">
                    </div>
                    <div class="col-3">
                        <input name="SJ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SJ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SJ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Португалия</p>

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
                        <input name="PT-population" required type="text" value="10221">
                    </div>
                    <div class="col-3">
                        <input name="PT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Дания</p>

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
                        <input name="DK-population" required type="text" value="5794">
                    </div>
                    <div class="col-3">
                        <input name="DK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Дания</p>

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
                        <input name="GL-population" required type="text" value="5794">
                    </div>
                    <div class="col-3">
                        <input name="GL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Венгрия</p>

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
                        <input name="HU-population" required type="text" value="9774">
                    </div>
                    <div class="col-3">
                        <input name="HU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Греция</p>

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
                        <input name="GR-population" required type="text" value="10662">
                    </div>
                    <div class="col-3">
                        <input name="GR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Шри-Ланка</p>

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
                        <input name="LK-population" required type="text" value="21920">
                    </div>
                    <div class="col-3">
                        <input name="LK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Эфиопия</p>

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
                        <input name="ET-population" required type="text" value="106468">
                    </div>
                    <div class="col-3">
                        <input name="ET-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ET-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ET-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мьянма</p>

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
                        <input name="MM-population" required type="text" value="54400">
                    </div>
                    <div class="col-3">
                        <input name="MM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Марокко</p>

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
                        <input name="MA-population" required type="text" value="35496">
                    </div>
                    <div class="col-3">
                        <input name="MA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Финляндия</p>

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
                        <input name="FI-population" required type="text" value="5516">
                    </div>
                    <div class="col-3">
                        <input name="FI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Узбекистан</p>

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
                        <input name="UZ-population" required type="text" value="30023">
                    </div>
                    <div class="col-3">
                        <input name="UZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Катар</p>

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
                        <input name="QA-population" required type="text" value="2606">
                    </div>
                    <div class="col-3">
                        <input name="QA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="QA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="QA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кения</p>

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
                        <input name="KE-population" required type="text" value="51372">
                    </div>
                    <div class="col-3">
                        <input name="KE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Новая Зеландия</p>

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
                        <input name="NZ-population" required type="text" value="4840">
                    </div>
                    <div class="col-3">
                        <input name="NZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ангола</p>

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
                        <input name="AO-population" required type="text" value="22638">
                    </div>
                    <div class="col-3">
                        <input name="AO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кувейт</p>

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
                        <input name="KW-population" required type="text" value="4229">
                    </div>
                    <div class="col-3">
                        <input name="KW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Доминиканская Республика</p>

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
                        <input name="DO-population" required type="text" value="10385">
                    </div>
                    <div class="col-3">
                        <input name="DO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Эквадор</p>

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
                        <input name="EC-population" required type="text" value="16499">
                    </div>
                    <div class="col-3">
                        <input name="EC-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EC-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EC-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Беларусь</p>

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
                        <input name="BY-population" required type="text" value="9528">
                    </div>
                    <div class="col-3">
                        <input name="BY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Судан</p>

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
                        <input name="SD-population" required type="text" value="43850">
                    </div>
                    <div class="col-3">
                        <input name="SD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Словакия</p>

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
                        <input name="SK-population" required type="text" value="5409">
                    </div>
                    <div class="col-3">
                        <input name="SK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гана</p>

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
                        <input name="GH-population" required type="text" value="27858">
                    </div>
                    <div class="col-3">
                        <input name="GH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Танзания</p>

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
                        <input name="TZ-population" required type="text" value="59730">
                    </div>
                    <div class="col-3">
                        <input name="TZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Болгария</p>

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
                        <input name="BG-population" required type="text" value="7167">
                    </div>
                    <div class="col-3">
                        <input name="BG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гватемала</p>

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
                        <input name="GT-population" required type="text" value="17232">
                    </div>
                    <div class="col-3">
                        <input name="GT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Азербайджан</p>

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
                        <input name="AZ-population" required type="text" value="9648">
                    </div>
                    <div class="col-3">
                        <input name="AZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Венесуэла</p>

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
                        <input name="VE-population" required type="text" value="28890">
                    </div>
                    <div class="col-3">
                        <input name="VE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кот-д&#039;Ивуар</p>

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
                        <input name="CI-population" required type="text" value="27480">
                    </div>
                    <div class="col-3">
                        <input name="CI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Оман</p>

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
                        <input name="OM-population" required type="text" value="4725">
                    </div>
                    <div class="col-3">
                        <input name="OM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="OM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="OM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сербия</p>

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
                        <input name="RS-population" required type="text" value="7078">
                    </div>
                    <div class="col-3">
                        <input name="RS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Тунис</p>

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
                        <input name="TN-population" required type="text" value="11478">
                    </div>
                    <div class="col-3">
                        <input name="TN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Непал</p>

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
                        <input name="NP-population" required type="text" value="29718">
                    </div>
                    <div class="col-3">
                        <input name="NP-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NP-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NP-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Панама</p>

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
                        <input name="PA-population" required type="text" value="3801">
                    </div>
                    <div class="col-3">
                        <input name="PA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Хорватия</p>

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
                        <input name="HR-population" required type="text" value="3861">
                    </div>
                    <div class="col-3">
                        <input name="HR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Пуэрто-Рико</p>

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
                        <input name="PR-population" required type="text" value="3194">
                    </div>
                    <div class="col-3">
                        <input name="PR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Литва</p>

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
                        <input name="LT-population" required type="text" value="2799">
                    </div>
                    <div class="col-3">
                        <input name="LT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Уганда</p>

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
                        <input name="UG-population" required type="text" value="42331">
                    </div>
                    <div class="col-3">
                        <input name="UG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Иордания</p>

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
                        <input name="JO-population" required type="text" value="9116">
                    </div>
                    <div class="col-3">
                        <input name="JO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Коста-Рика</p>

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
                        <input name="CR-population" required type="text" value="5094">
                    </div>
                    <div class="col-3">
                        <input name="CR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Демократическая Республика Конго</p>

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
                        <input name="CD-population" required type="text" value="89560">
                    </div>
                    <div class="col-3">
                        <input name="CD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Камерун</p>

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
                        <input name="CM-population" required type="text" value="26374">
                    </div>
                    <div class="col-3">
                        <input name="CM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Боливия</p>

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
                        <input name="BO-population" required type="text" value="11670">
                    </div>
                    <div class="col-3">
                        <input name="BO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Парагвай</p>

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
                        <input name="PY-population" required type="text" value="7099">
                    </div>
                    <div class="col-3">
                        <input name="PY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Туркменистан</p>

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
                        <input name="TM-population" required type="text" value="5410">
                    </div>
                    <div class="col-3">
                        <input name="TM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Словения</p>

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
                        <input name="SI-population" required type="text" value="2067">
                    </div>
                    <div class="col-3">
                        <input name="SI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Афганистан</p>

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
                        <input name="AF-population" required type="text" value="34941">
                    </div>
                    <div class="col-3">
                        <input name="AF-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AF-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AF-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Уругвай</p>

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
                        <input name="UY-population" required type="text" value="3396">
                    </div>
                    <div class="col-3">
                        <input name="UY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="UY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ливан</p>

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
                        <input name="LB-population" required type="text" value="7708">
                    </div>
                    <div class="col-3">
                        <input name="LB-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LB-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LB-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бахрейн</p>

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
                        <input name="BH-population" required type="text" value="1584">
                    </div>
                    <div class="col-3">
                        <input name="BH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Камбоджа</p>

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
                        <input name="KH-population" required type="text" value="16409">
                    </div>
                    <div class="col-3">
                        <input name="KH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Люксембург</p>

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
                        <input name="LU-population" required type="text" value="610">
                    </div>
                    <div class="col-3">
                        <input name="LU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Замбия</p>

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
                        <input name="ZM-population" required type="text" value="17255">
                    </div>
                    <div class="col-3">
                        <input name="ZM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Латвия</p>

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
                        <input name="LV-population" required type="text" value="1927">
                    </div>
                    <div class="col-3">
                        <input name="LV-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LV-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LV-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Йемен</p>

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
                        <input name="YE-population" required type="text" value="30217">
                    </div>
                    <div class="col-3">
                        <input name="YE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="YE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="YE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Лаос</p>

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
                        <input name="LA-population" required type="text" value="7276">
                    </div>
                    <div class="col-3">
                        <input name="LA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сенегал</p>

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
                        <input name="SN-population" required type="text" value="16356">
                    </div>
                    <div class="col-3">
                        <input name="SN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Грузия</p>

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
                        <input name="GE-population" required type="text" value="4922">
                    </div>
                    <div class="col-3">
                        <input name="GE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сальвадор</p>

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
                        <input name="SV-population" required type="text" value="6486">
                    </div>
                    <div class="col-3">
                        <input name="SV-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SV-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SV-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гондурас</p>

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
                        <input name="HN-population" required type="text" value="9002">
                    </div>
                    <div class="col-3">
                        <input name="HN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Босния и Герцеговина</p>

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
                        <input name="BA-population" required type="text" value="3947">
                    </div>
                    <div class="col-3">
                        <input name="BA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Эстония</p>

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
                        <input name="EE-population" required type="text" value="1292">
                    </div>
                    <div class="col-3">
                        <input name="EE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Буркина-Фасо</p>

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
                        <input name="BF-population" required type="text" value="20900">
                    </div>
                    <div class="col-3">
                        <input name="BF-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BF-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BF-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мали</p>

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
                        <input name="ML-population" required type="text" value="16507">
                    </div>
                    <div class="col-3">
                        <input name="ML-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ML-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ML-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мадагаскар</p>

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
                        <input name="MG-population" required type="text" value="25684">
                    </div>
                    <div class="col-3">
                        <input name="MG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бенин</p>

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
                        <input name="BJ-population" required type="text" value="12018">
                    </div>
                    <div class="col-3">
                        <input name="BJ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BJ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BJ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Албания</p>

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
                        <input name="AL-population" required type="text" value="3063">
                    </div>
                    <div class="col-3">
                        <input name="AL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мозамбик</p>

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
                        <input name="MZ-population" required type="text" value="25998">
                    </div>
                    <div class="col-3">
                        <input name="MZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Монголия</p>

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
                        <input name="MN-population" required type="text" value="3103">
                    </div>
                    <div class="col-3">
                        <input name="MN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Армения</p>

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
                        <input name="AM-population" required type="text" value="2907">
                    </div>
                    <div class="col-3">
                        <input name="AM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ливия</p>

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
                        <input name="LY-population" required type="text" value="6688">
                    </div>
                    <div class="col-3">
                        <input name="LY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Макао</p>

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
                        <input name="MO-population" required type="text" value="649">
                    </div>
                    <div class="col-3">
                        <input name="MO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гвинея</p>

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
                        <input name="GN-population" required type="text" value="11855">
                    </div>
                    <div class="col-3">
                        <input name="GN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Никарагуа</p>

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
                        <input name="NI-population" required type="text" value="6085">
                    </div>
                    <div class="col-3">
                        <input name="NI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ботсвана</p>

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
                        <input name="BW-population" required type="text" value="2263">
                    </div>
                    <div class="col-3">
                        <input name="BW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кипр</p>

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
                        <input name="CY-population" required type="text" value="1022">
                    </div>
                    <div class="col-3">
                        <input name="CY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гаити</p>

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
                        <input name="HT-population" required type="text" value="10788">
                    </div>
                    <div class="col-3">
                        <input name="HT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="HT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Тринидад и Тобаго</p>

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
                        <input name="TT-population" required type="text" value="1215">
                    </div>
                    <div class="col-3">
                        <input name="TT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Таджикистан</p>

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
                        <input name="TJ-population" required type="text" value="8604">
                    </div>
                    <div class="col-3">
                        <input name="TJ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TJ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TJ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Северная Македония</p>

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
                        <input name="MK-population" required type="text" value="2083">
                    </div>
                    <div class="col-3">
                        <input name="MK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Зимбабве</p>

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
                        <input name="ZW-population" required type="text" value="14097">
                    </div>
                    <div class="col-3">
                        <input name="ZW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ZW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Молдавия</p>

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
                        <input name="MD-population" required type="text" value="2618">
                    </div>
                    <div class="col-3">
                        <input name="MD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Папуа - Новая Гвинея</p>

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
                        <input name="PG-population" required type="text" value="8947">
                    </div>
                    <div class="col-3">
                        <input name="PG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Габон</p>

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
                        <input name="GA-population" required type="text" value="2083">
                    </div>
                    <div class="col-3">
                        <input name="GA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кыргызстан</p>

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
                        <input name="KG-population" required type="text" value="5718">
                    </div>
                    <div class="col-3">
                        <input name="KG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Нигер</p>

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
                        <input name="NE-population" required type="text" value="21234">
                    </div>
                    <div class="col-3">
                        <input name="NE-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NE-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NE-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Малави</p>

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
                        <input name="MW-population" required type="text" value="20217">
                    </div>
                    <div class="col-3">
                        <input name="MW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бруней</p>

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
                        <input name="BN-population" required type="text" value="437">
                    </div>
                    <div class="col-3">
                        <input name="BN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Руанда</p>

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
                        <input name="RW-population" required type="text" value="11916">
                    </div>
                    <div class="col-3">
                        <input name="RW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="RW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Ямайка</p>

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
                        <input name="JM-population" required type="text" value="2672">
                    </div>
                    <div class="col-3">
                        <input name="JM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="JM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Палестина</p>

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
                        <input name="PS-population" required type="text" value="4615">
                    </div>
                    <div class="col-3">
                        <input name="PS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Чад</p>

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
                        <input name="TD-population" required type="text" value="15253">
                    </div>
                    <div class="col-3">
                        <input name="TD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Маврикий</p>

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
                        <input name="MU-population" required type="text" value="1364">
                    </div>
                    <div class="col-3">
                        <input name="MU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Экваториальная Гвинея</p>

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
                        <input name="GQ-population" required type="text" value="797">
                    </div>
                    <div class="col-3">
                        <input name="GQ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GQ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GQ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мавритания</p>

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
                        <input name="MR-population" required type="text" value="3840">
                    </div>
                    <div class="col-3">
                        <input name="MR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Намибия</p>

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
                        <input name="NA-population" required type="text" value="2554">
                    </div>
                    <div class="col-3">
                        <input name="NA-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NA-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NA-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мальта</p>

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
                        <input name="MT-population" required type="text" value="487">
                    </div>
                    <div class="col-3">
                        <input name="MT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Республика Косово</p>

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
                        <input name="XK-population" required type="text" value="1873">
                    </div>
                    <div class="col-3">
                        <input name="XK-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="XK-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="XK-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Исландия</p>

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
                        <input name="IS-population" required type="text" value="353">
                    </div>
                    <div class="col-3">
                        <input name="IS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="IS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Республика Конго</p>

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
                        <input name="CG-population" required type="text" value="5518">
                    </div>
                    <div class="col-3">
                        <input name="CG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Идти</p>

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
                        <input name="Idti-population" required type="text" value="8176">
                    </div>
                    <div class="col-3">
                        <input name="Idti-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="Idti-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="Idti-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гайана</p>

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
                        <input name="GY-population" required type="text" value="786">
                    </div>
                    <div class="col-3">
                        <input name="GY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сомали</p>

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
                        <input name="SO-population" required type="text" value="15890">
                    </div>
                    <div class="col-3">
                        <input name="SO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сьерра-Леоне</p>

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
                        <input name="SL-population" required type="text" value="7977">
                    </div>
                    <div class="col-3">
                        <input name="SL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Багамы</p>

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
                        <input name="BS-population" required type="text" value="393">
                    </div>
                    <div class="col-3">
                        <input name="BS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Черногория</p>

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
                        <input name="ME-population" required type="text" value="614">
                    </div>
                    <div class="col-3">
                        <input name="ME-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ME-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ME-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Южный Судан</p>

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
                        <input name="SS-population" required type="text" value="11190">
                    </div>
                    <div class="col-3">
                        <input name="SS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Фиджи</p>

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
                        <input name="FJ-population" required type="text" value="896">
                    </div>
                    <div class="col-3">
                        <input name="FJ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FJ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FJ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Эсватини</p>

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
                        <input name="SZ-population" required type="text" value="1160">
                    </div>
                    <div class="col-3">
                        <input name="SZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Суринам</p>

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
                        <input name="SR-population" required type="text" value="586">
                    </div>
                    <div class="col-3">
                        <input name="SR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бурунди</p>

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
                        <input name="BI-population" required type="text" value="11229">
                    </div>
                    <div class="col-3">
                        <input name="BI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бутан</p>

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
                        <input name="BT-population" required type="text" value="771">
                    </div>
                    <div class="col-3">
                        <input name="BT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BT-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Мальдивы</p>

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
                        <input name="MV-population" required type="text" value="540">
                    </div>
                    <div class="col-3">
                        <input name="MV-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MV-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MV-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Либерия</p>

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
                        <input name="LR-population" required type="text" value="4810">
                    </div>
                    <div class="col-3">
                        <input name="LR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Эритрея</p>

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
                        <input name="ER-population" required type="text" value="3214">
                    </div>
                    <div class="col-3">
                        <input name="ER-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ER-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="ER-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Джибути</p>

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
                        <input name="DJ-population" required type="text" value="884">
                    </div>
                    <div class="col-3">
                        <input name="DJ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DJ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DJ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гамбия</p>

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
                        <input name="GM-population" required type="text" value="2093">
                    </div>
                    <div class="col-3">
                        <input name="GM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Лесото</p>

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
                        <input name="LS-population" required type="text" value="1962">
                    </div>
                    <div class="col-3">
                        <input name="LS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Центрально-Африканская Республика</p>

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
                        <input name="CF-population" required type="text" value="5745">
                    </div>
                    <div class="col-3">
                        <input name="CF-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CF-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CF-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Восточный Тимор</p>

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
                        <input name="TL-population" required type="text" value="1318">
                    </div>
                    <div class="col-3">
                        <input name="TL-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TL-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TL-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гвинея-Бисау</p>

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
                        <input name="GW-population" required type="text" value="1833">
                    </div>
                    <div class="col-3">
                        <input name="GW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Андорра</p>

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
                        <input name="AD-population" required type="text" value="77">
                    </div>
                    <div class="col-3">
                        <input name="AD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Барбадос</p>

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
                        <input name="BB-population" required type="text" value="293">
                    </div>
                    <div class="col-3">
                        <input name="BB-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BB-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BB-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кабо-Верде</p>

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
                        <input name="CV-population" required type="text" value="556">
                    </div>
                    <div class="col-3">
                        <input name="CV-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CV-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CV-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Коморские острова</p>

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
                        <input name="KM-population" required type="text" value="821">
                    </div>
                    <div class="col-3">
                        <input name="KM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Белиз</p>

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
                        <input name="BZ-population" required type="text" value="397">
                    </div>
                    <div class="col-3">
                        <input name="BZ-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BZ-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BZ-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сейшельские острова</p>

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
                        <input name="SC-population" required type="text" value="95">
                    </div>
                    <div class="col-3">
                        <input name="SC-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SC-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SC-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Санкт-Люсия</p>

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
                        <input name="LC-population" required type="text" value="183">
                    </div>
                    <div class="col-3">
                        <input name="LC-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LC-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="LC-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сан-Марино</p>

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
                        <input name="SM-population" required type="text" value="34">
                    </div>
                    <div class="col-3">
                        <input name="SM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Антигуа и Барбуда</p>

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
                        <input name="AG-population" required type="text" value="98">
                    </div>
                    <div class="col-3">
                        <input name="AG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="AG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Гренада</p>

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
                        <input name="GD-population" required type="text" value="113">
                    </div>
                    <div class="col-3">
                        <input name="GD-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GD-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GD-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Соломоновы острова</p>

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
                        <input name="SB-population" required type="text" value="686">
                    </div>
                    <div class="col-3">
                        <input name="SB-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SB-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SB-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Святой Винсент и Гренадины</p>

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
                        <input name="VC-population" required type="text" value="111">
                    </div>
                    <div class="col-3">
                        <input name="VC-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VC-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VC-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сент-Китс и Невис</p>

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
                        <input name="KN-population" required type="text" value="53">
                    </div>
                    <div class="col-3">
                        <input name="KN-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KN-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KN-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Самоа</p>

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
                        <input name="WS-population" required type="text" value="198">
                    </div>
                    <div class="col-3">
                        <input name="WS-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="WS-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="WS-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сан-Томе и Принсипи</p>

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
                        <input name="PM-population" required type="text" value="219">
                    </div>
                    <div class="col-3">
                        <input name="PM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Доминика</p>

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
                        <input name="DM-population" required type="text" value="74">
                    </div>
                    <div class="col-3">
                        <input name="DM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="DM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Вануату</p>

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
                        <input name="VU-population" required type="text" value="307">
                    </div>
                    <div class="col-3">
                        <input name="VU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="VU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Тонга</p>

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
                        <input name="TO-population" required type="text" value="106">
                    </div>
                    <div class="col-3">
                        <input name="TO-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TO-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TO-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Микронезия</p>

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
                        <input name="FM-population" required type="text" value="115">
                    </div>
                    <div class="col-3">
                        <input name="FM-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FM-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="FM-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Кирибати</p>

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
                        <input name="KI-population" required type="text" value="119">
                    </div>
                    <div class="col-3">
                        <input name="KI-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KI-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KI-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Палау</p>

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
                        <input name="PW-population" required type="text" value="18">
                    </div>
                    <div class="col-3">
                        <input name="PW-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PW-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="PW-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Маршалловы острова</p>

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
                        <input name="MH-population" required type="text" value="59">
                    </div>
                    <div class="col-3">
                        <input name="MH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="MH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Науру</p>

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
                        <input name="NR-population" required type="text" value="11">
                    </div>
                    <div class="col-3">
                        <input name="NR-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NR-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="NR-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Тувалу</p>

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
                        <input name="TV-population" required type="text" value="12">
                    </div>
                    <div class="col-3">
                        <input name="TV-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TV-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TV-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Куба</p>

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
                        <input name="CU-population" required type="text" value="11330">
                    </div>
                    <div class="col-3">
                        <input name="CU-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CU-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="CU-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Сирия</p>

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
                        <input name="SY-population" required type="text" value="17500">
                    </div>
                    <div class="col-3">
                        <input name="SY-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SY-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="SY-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Западная Сахара</p>

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
                        <input name="EH-population" required type="text" value="616">
                    </div>
                    <div class="col-3">
                        <input name="EH-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EH-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="EH-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Французская Гвиана</p>

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
                        <input name="GF-population" required type="text" value="294">
                    </div>
                    <div class="col-3">
                        <input name="GF-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GF-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="GF-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Того</p>

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
                        <input name="TG-population" required type="text" value="8279">
                    </div>
                    <div class="col-3">
                        <input name="TG-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TG-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="TG-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Северная Корея</p>

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
                        <input name="KP-population" required type="text" value="25780">
                    </div>
                    <div class="col-3">
                        <input name="KP-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KP-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="KP-value" required type="text" value="">
                    </div>
                </div>

            </div>

            </form>
                        <input type="hidden" name="_token" value="y8k0GNO6sgpO02MgL3b6iMbQzbxGeEi8xOiWwCLY">            

            <div class="edit-block-item">
                <p>Бутан</p>

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
                        <input name="BT-population" required type="text" value="771">
                    </div>
                    <div class="col-3">
                        <input name="BT-mentions" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BT-pentil" required type="text" value="">
                    </div>
                    <div class="col-3">
                        <input name="BT-value" required type="text" value="">
                    </div>
                </div>

            </div>










            

        </div>

    </form>



</div>
































</div>


@endsection