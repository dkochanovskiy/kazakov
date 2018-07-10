@extends('template.template')
@section('content')
    <div class="col-md-12">
        <div class="col-md-3">slider</div>
        <div class="col-md-9" style="font-size: 18px">
            Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также реализация намеченных плановых заданий требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. С другой стороны консультация с широким активом способствует подготовки и реализации систем массового участия.
        </div>
    </div>
    <hr class="col-md-12">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11" style="outline: 1px solid #c0c0c0;">
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-1" style="font-size: 22px;">
                                        Столы
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ route('tables') }}">
                                        <div class="col-md-offset-1 col-md-10" style="outline: 1px solid red; height:100px;">

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11" style="outline: 1px solid #c0c0c0;">
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-1" style="font-size: 22px;">
                                        Аксессуары
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ route('accessories') }}">
                                        <div class="col-md-offset-1 col-md-10" style="outline: 1px solid red; height:100px;">

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10" style="outline: 1px solid #c0c0c0; font-size: 22px; margin-top: 30px;">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-1">
                                        Отзывы
                                    </div>
                                </div>
                                <form method="post" class="form-horizontal" role="form">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input type="text" name="write-a-review" class="form-control" placeholder="Написать отзыв...">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary">Сохранить отзыв</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11" style="outline: 1px solid #c0c0c0;">
                                <div class="col-md-offset-3 col-md-1" style="font-size: 22px;">
                                    Статьи
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection