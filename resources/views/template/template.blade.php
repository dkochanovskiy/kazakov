<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slider/media.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title>kazakov</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('home') }}">logo</a>
            </div>
            <div class="col-md-offset-8 col-md-2">
                <div class="row">
                    <div class="col-md-12">Контакт</div>
                    <div class="col-md-12">Телефон</div>
                    <div class="col-md-12">Социальные сети</div>
                </div>
            </div>
            <hr class="col-md-12">
            <section>
                @section('content')
                @show
            </section>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('home') }}">Главная</a>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ route('stoly-dlya-peskografiki') }}">Столы для пескографики</a>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ route('aksessuary-dlya-peskografiki') }}">Аксессуары для пескографики</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    Контакт
                                </div>
                                <div class="col-md-12">
                                    Телефон
                                </div>
                                <div class="col-md-12">
                                    Социальные сети
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>
</html>
