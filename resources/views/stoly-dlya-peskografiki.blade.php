@extends('template.template')
@section('content')
    <div class="col-md-12">
        <h1 class="text-center">Столы для пескографики</h1>
    </div>
    <hr class="col-md-12">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="wrapper">
                        <div id="drawingsWithSand" class="carousel slide" data-ride="carousel">
                            <!--Показатели-->
                            <ol class="carousel-indicators">
                                <li data-target="#drawingsWithSand" data-slide-to="0" class="active"></li>
                                <li data-target="#drawingsWithSand" data-slide-to="1"></li>
                                <li data-target="#drawingsWithSand" data-slide-to="2"></li>
                            </ol>

                            <!--Обертка для слайдов-->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="center-block" src="{{ asset('images/table.jpg') }}" alt="Стол для рисования песком">
                                </div>
                                <div class="item">
                                    <img class="center-block" src="{{ asset('images/table.jpg') }}" alt="Стол для рисования песком">
                                </div>
                                <div class="item">
                                    <img class="center-block" src="{{ asset('images/table.jpg') }}" alt="Стол для рисования песком">
                                </div>
                            </div>

                            <!--Элементы управления-->
                            <a class="left carousel-control" href="#drawingsWithSand" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#drawingsWithSand" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <p>
                                        Материал корпуса
                                    </p>
                                </div>
                                <div class="col-md-offset-1 col-md-6">
                                    <p>
                                        <b>
                                            Дерево
                                        </b>
                                    </p>
                                </div>
                                <hr class="col-md-12">
                                <div class="col-md-5">
                                    <p>
                                        В комплект входят
                                    </p>
                                </div>
                                <div class="col-md-offset-1 col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <b>
                                                    Стол для пескографики
                                                </b>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>
                                                <b>
                                                    Подставка для стола
                                                </b>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>
                                                <b>
                                                    Светодиоды
                                                </b>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p>
                                                <b>
                                                    Песок (1 кг)
                                                </b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <form method="post" class="col-md-offset-2 col-md-12 form-horizontal" role="form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <div class="dropdown">
                                    <label class="col-md-6 control-label" for="availableSizes" style="font-weight: 500!important;">Доступные размеры</label>
                                    <div class="col-md-1">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="availableSizes" data-toggle="dropdown">
                                            1 x 1
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="javascript:DropDownList('availableSizes', '1 x 1', 'outputAvailableSizes')">
                                                    <p>
                                                        1 x 1
                                                    </p>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="javascript:DropDownList('availableSizes', '2 x 2', 'outputAvailableSizes')">
                                                    <p>
                                                        2 x 2
                                                    </p>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="javascript:DropDownList('availableSizes', '3 x 3', 'outputAvailableSizes')">
                                                    <p>
                                                        3 x 3
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="outputAvailableSizes" name="outputAvailableSizes" value="1 x 1">
                            <div class="col-md-6 control-label">
                                Цена (с НДС)
                            </div>
                            <div class="col-md-2 control-label" id="price">
                                <b>
                                    11 &#8381;
                                </b>
                            </div>
                            <input type="hidden" id="outputPrice" name="outputPrice" value="1 x 1">
                            <div class="form-group">
                                <div class="col-md-12" style="margin: 30px 0 0 0;">
                                    <button type="submit" class="btn btn-success">Добавить в корзину</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-offset-2 col-md-10">
                            <a href="{{ route('korzina-s-pokupkami') }}">
                                <button type="button" class="btn btn-danger">Перейти в корзину</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-4">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-offset-2 col-md-1">--}}
                            {{--<button type="button" class="btn btn-success"></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection