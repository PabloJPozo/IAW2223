$(document).ready(function () {
    $("#btn-modificado").click(function (e) { 
        e.preventDefault();
        $("tr:odd").addClass("impares");
    });

    $("#btn-original").click(function (e) { 
        e.preventDefault();
        $("tr:odd").removeClass("impares");
    });


});