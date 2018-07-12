@extends('template.template')
@section('content')
    <div class="col-md-12">
        <h1 class="text-center">Корзина с покупками</h1>
    </div>
    <form method="post" class="col-md-12 form-horizontal" role="form">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <table class="table table-striped table-condensed">
            <tr class="info">
                <th>Наименование товара</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
            <tr>
                <td>Стол для пескографики размером 1 x 1</td>
                <td>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" name="quantity" class="form-control" id="quantity1" value="1">
                        </div>
                    </div>
                </td>
                <td>11 &#8381;</td>
            </tr>
            <tr>
                <td>Стол для пескографики размером 1 x 1</td>
                <td>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" name="quantity" class="form-control" id="quantity2" value="1">
                        </div>
                    </div>
                </td>
                <td>11 &#8381;</td>
            </tr>
            <tr>
                <td>Стол для пескографики размером 1 x 1</td>
                <td>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" name="quantity" class="form-control" id="quantity3" value="1">
                        </div>
                    </div>
                </td>
                <td>11 &#8381;</td>
            </tr>
            <tr>
                <td>Стол для пескографики размером 1 x 1</td>
                <td>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" name="quantity" class="form-control" id="quantity4" value="1">
                        </div>
                    </div>
                </td>
                <td>11 &#8381;</td>
            </tr>
            <tr>
                <td>Стол для пескографики размером 1 x 1</td>
                <td>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" name="quantity" class="form-control" id="quantity5" value="1">
                        </div>
                    </div>
                </td>
                <td>11 &#8381;</td>
            </tr>
            <tr class="success">
                <td>
                    <b>К оплате</b>
                </td>
                <td id="total">5</td>
                <td>55 &#8381;</td>
            </tr>
        </table>
        <div class="form-group">
            <div class="col-md-offset-10 col-md-1">
                <button type="submit" class="btn btn-success">Оплатить</button>
            </div>
        </div>
    </form>
@endsection