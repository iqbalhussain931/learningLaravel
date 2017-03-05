$("#addWidgetsAll > span").click(function () {
   $(this).toggleClass("active");
});

$("#modal-addWidgets .switch-button label").click(function () {

    $("#modal-addWidgets .addToPage").toggleClass("hide");

    if($("#modal-addWidgets .switch-button input[type='checkbox']").is(':checked')){

    }
});

$("#modal-addWidgets button.addToPage").click(function () {
    var widget = "";
    $('#addWidgetsAll > span.active').each(function(index,item){
        /*if(parseInt($(item).data('index'))>2){
            $(item).html('Testimonial '+(index+1)+' by each loop');
        }*/
        //alert($(this).text());
        widget += "<li class=\"ui-state-default btn btn-primary btn-circle\" data-widgetID=\""+ $(this).attr('data-widgetID') +"\"><span>" + $(this).text() +"</span><a href=\"#\"><span class=\"fa fa-trash\"></span></a></li>";
        $("#allWidgets").append(widget);
    });

    $('#modal-addWidgets').modal('toggle');
});

$( function() {
    $( "#allWidgets" ).sortable();
    $( "#allWidgets" ).disableSelection();
} );