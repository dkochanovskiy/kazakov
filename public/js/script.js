$('.carousel').carousel({
    interval: 5000
});
function DropDownList(name, text, input){
    $('#' + name).html(text + ' <span class="caret"></span>');
    $('#' + input).val(text);
    if(text == '1 x 1'){
        $("#price").html('<b>' + 11 + '</b>&nbsp;' + '&#8381');
        $("#outputPrice").val(11);
    }
    if(text == '2 x 2'){
        $("#price").html('<b>' + 22 + '</b>&nbsp;' + '&#8381');
        $("#outputPrice").val(22);
    }
    if(text == '3 x 3'){
        $("#price").html('<b>' + 33 + '</b>&nbsp;' + '&#8381');
        $("#outputPrice").val(33);
    }
}
$('#quantity1').keyup(function(){
    var val = $('#quantity1').val();
    $('#total').empty();
    $('#total').text(val);
});