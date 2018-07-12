@extends('template.template')
@section('content')
    <div class="col-md-12">
        <h1 class="text-center">Товары для пескографики</h1>
    </div>
    <hr class="col-md-12">
    <div class="col-md-12">
        <div class="col-md-3">
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
                            <img src="{{ asset('images/slider-1.jpg') }}" alt="Рисунок песком">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/slider-1.jpg') }}" alt="Рисунок песком">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/slider-1.jpg') }}" alt="Рисунок песком">
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
        <div class="col-md-9" style="font-size: 18px">
            <p>Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную
                роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения
                высшего порядка, а также реализация намеченных плановых заданий требуют определения и уточнения позиций,
                занимаемых участниками в отношении поставленных задач. С другой стороны консультация с широким активом
                способствует подготовки и реализации систем массового участия.</p>
        </div>
    </div>
    <hr class="col-md-12">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12" style="">
                                <h3 class="text-center">
                                    Столы для пескографики
                                </h3>
                                <div class="row">
                                    <a href="{{ route('stoly-dlya-peskografiki') }}">
                                        <div class="col-md-offset-1 col-md-10 type-of-goods">
                                            <img class="center-block" src="{{ asset('images/table.jpg') }}" alt="Стол для рисования песком">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12" style="">
                                <h3 class="text-center">
                                    Аксессуары для пескографики
                                </h3>
                                <div class="row">
                                    <a href="{{ route('aksessuary-dlya-peskografiki') }}">
                                        <div class="col-md-offset-1 col-md-10 type-of-goods">
                                            <img class="center-block" src="{{ asset('images/accessories.jpg') }}" alt="Аксессуары для рисования песком">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="border: 1px solid #c0c0c0; border-radius: 5px; margin: 30px 0 0 0">
                        <div class="row">
                            <div class="col-md-12" style="/*height:537px;*/ margin-top: 30px;">
                                <h3 class="text-center">
                                    Отзывы покупателей
                                </h3>
                                <form method="post" class="col-md-12 form-horizontal" role="form">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="write-a-review" id="write-a-review" rows="5" placeholder="Написать отзыв..." style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-md-3" style="margin: 10px 0 0 0;">
                                            <button type="submit" class="btn btn-primary">Сохранить отзыв</button>
                                        </div>
                                    </div>
                                </form>
                                {{--<hr class="col-md-11">--}}
                                <div class="col-md-12" style="margin: 30px 0 0 0; height:290px; border: 1px solid #c0c0c0; border-radius: 5px; overflow:auto;">
                                    <div class="row">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px;">
                                            Светлана, 15.03.2017
                                        </div>
                                        <div class="col-md-12" style="margin: 10px 0 0 0">
                                            Прекрасные столы! Я очень довольна покупкой
                                        </div>
                                        <hr class="col-md-11">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px;">
                                            Маргарита, 06.11.2016
                                        </div>
                                        <div class="col-md-12" style="margin: 10px 0 0 0">
                                            Столы просто супер, всем рекомендую!!!
                                        </div>
                                        <hr class="col-md-11">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px;">
                                            Екатерина, 12.01.2016
                                        </div>
                                        <div class="col-md-12" style="margin: 10px 0 0 0">
                                            Столы сделаны очень качественно, я очень рада покупке.
                                        </div>
                                        <hr class="col-md-11">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px;">
                                            Елена, 17.06.2015
                                        </div>
                                        <div class="col-md-12" style="margin: 10px 0 0 0">
                                            Детям покупка очень понравилась!
                                        </div>
                                        <hr class="col-md-11">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-11" style="">
                                <h3 class="text-center">
                                    Статьи о пескографике
                                </h3>
                                <div class="col-md-12" style="height:653px; border: 1px solid #c0c0c0; border-radius: 5px; overflow:auto;">
                                    <div class="row">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Рисунки песком
                                        </div>
                                        <div class="col-md-12" style="width: 300px; height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            <p style="column-width: 150px; height: 100%;">
                                                С другой стороны дальнейшее развитие различных форм деятельности играет
                                                важную роль в формировании существенных финансовых и административных
                                                условий. Задача организации, в особенности же укрепление и развитие
                                                структуры позволяет выполнять важные задания по разработке системы
                                                обучения кадров, соответствует насущным потребностям. Разнообразный и
                                                богатый опыт начало повседневной работы по формированию позиции играет
                                                важную роль в формировании форм развития. Идейные соображения высшего
                                                порядка, а также реализация намеченных плановых заданий позволяет
                                                оценить значение новых предложений. Повседневная практика показывает,
                                                что рамки и место обучения кадров в значительной степени обуславливает
                                                создание существенных финансовых и административных условий. Задача
                                                организации, в особенности же дальнейшее развитие различных форм
                                                деятельности представляет собой интересный эксперимент проверки
                                                соответствующий условий активизации.
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Психологические песочницы
                                        </div>
                                        <div class="col-md-12" style="height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            <p>Равным образом новая модель организационной деятельности способствует
                                                подготовки и реализации дальнейших направлений развития. Разнообразный и
                                                богатый опыт укрепление и развитие структуры обеспечивает широкому кругу
                                                (специалистов) участие в формировании системы обучения кадров,
                                                соответствует насущным потребностям. Не следует, однако забывать, что
                                                рамки и место обучения кадров способствует подготовки и реализации
                                                позиций, занимаемых участниками в отношении поставленных задач. С другой
                                                стороны начало повседневной работы по формированию позиции в
                                                значительной степени обуславливает создание соответствующий условий
                                                активизации.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12" style="height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            <p>Товарищи! консультация с широким активом в значительной степени
                                                обуславливает создание новых предложений. Разнообразный и богатый опыт
                                                начало повседневной работы по формированию позиции играет важную роль в
                                                формировании направлений прогрессивного развития. Товарищи! постоянный
                                                количественный рост и сфера нашей активности играет важную роль в
                                                формировании новых предложений. Задача организации, в особенности же
                                                реализация намеченных плановых заданий играет важную роль в формировании
                                                соответствующий условий активизации. Разнообразный и богатый опыт
                                                дальнейшее развитие различных форм деятельности позволяет выполнять
                                                важные задания по разработке дальнейших направлений развития. Товарищи!
                                                рамки и место обучения кадров обеспечивает широкому кругу (специалистов)
                                                участие в формировании новых предложений.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12" style="height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12" style="height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12" style="height: 30px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12">Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12">Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12">Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <div class="col-md-12">
                                            <a href="">Читать полностью</a>
                                        </div>
                                        <hr class="col-md-12">
                                        <div class="col-md-12" style="color: #449d44; font-size: 18px; padding: 10px 0 10px 15px;">
                                            Дети в восторге
                                        </div>
                                        <div class="col-md-12">Задача организации, в особенности же сложившаяся
                                            структура организации представляет собой интересный эксперимент проверки
                                            соответствующий условий активизации. С другой стороны рамки и место обучения
                                            кадров представляет собой интересный эксперимент проверки дальнейших
                                            направлений развития.
                                        </div>
                                        <hr class="col-md-12">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection