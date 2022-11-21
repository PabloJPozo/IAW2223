$(document).ready(function () {
    $("#btn-modificado").click(function (e) { 
        e.preventDefault();
        $("tr:odd").css({"background-color":"lightblue", "font-family":"verdana"});
    });

    $("#btn-original").click(function (e) { 
        e.preventDefault();
        $("tr:even").css({"background-color":"yellow", "font-family":"default"});
    });


});