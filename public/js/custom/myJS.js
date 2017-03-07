$("#addWidgetsAll > span").click(function () {
   $("#addWidgetsAll > span").removeClass("active");
   $(this).toggleClass("active");
});


// Add New Page Widget Multiple add widgets

/*$("#modal-addWidgets .switch-button label").click(function () {

    $("#modal-addWidgets .addToPage").toggleClass("hide");

    if($("#modal-addWidgets .switch-button input[type='checkbox']").is(':checked')){

    }
});*/

$("#modal-addWidgets button.addToPage").click(function () {
    var widget = "";
    $('#addWidgetsAll > span.btn-default.active').each(function(index,item){
        /*if(parseInt($(item).hasClass("active"))){
            //$(item).html('Testimonial '+(index+1)+' by each loop');
            alert($(item).text());
        }*/
        //alert($(this).text());
        widget += "<li class=\"ui-state-default btn btn-primary btn-circle\" data-widgetID=\""+ $(this).attr('data-widgetID') +"\"><input type='hidden' name='widget[]' value=\""+ $(this).attr('data-widgetID') +"\" /><span>" + $(this).text() +"</span><a href=\"#\"><span class=\"fa fa-trash\"></span></a></li>";
        $("#allWidgets").append(widget);
    });

    $('#modal-addWidgets').modal('toggle');
});

$( function() {
    $( "#allWidgets" ).sortable();
    $( "#allWidgets" ).disableSelection();
} );