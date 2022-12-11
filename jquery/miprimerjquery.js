/*Esta es la manera larga de decirle al navegador que ejecute el jquery cuando este listo */
$(document).ready(function(){
    $("#btn-ocultar").click(function (e) { 
        e.preventDefault();
        $("p").hide(); /*oculto*/
    });

    $("#btn-mostrar").click(function (e) { 
        e.preventDefault();
        $("p").show(); /*muestro*/
    });


})