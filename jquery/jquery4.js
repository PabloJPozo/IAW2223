    $(document).ready(function () {
    $("#btn-modificado").click(function (e) { 
        e.preventDefault();
        $(".roja").css({"color":"blue", "font-size":"200%"});
    });

    $("#btn-original").click(function (e) { 
        e.preventDefault();
        $(".roja").css({"color":"red", "font-size":"100%"});
    });


});