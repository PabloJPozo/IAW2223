/* Rellena este fichero */
$(document).ready(function(){
    $("#btn-aumentar").click(function(e) {
        e.preventDefault();
        $("#encabezado").css({"font-size": "300%", "background-color":"yellow"});
        $(".pares").css({"font-size":"300%", "background-color":"yellow"});
    });
    $("#btn-disminuir").click(function(e){
        e.preventDefault();
        $("#encabezado").css({"font-size":"75%", "background-color":"green"});
        $(".pares").css({"font-size":"75%", "background-color":"green"});
    });

});