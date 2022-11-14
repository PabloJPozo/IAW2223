function EuroDolar() {
    var euros = document.getElementById("dinero").value; 
    let noEsNumero = isNaN(euros);
    if(noEsNumero==true){
        document.getElementById("resultado").innerHTML="Error, el valor no es numérico";
    }
    else{
        var dolares;
        if(euros<0){
            document.getElementById("resultado").innerHTML="El número que ha introducido es negativo";
        }
        else{
            dolares = euros*0.99;
            document.getElementById("resultado").innerHTML="" +dolares+ " $";
        }
    }
}

function DolarEuros() {
    var dolar = document.getElementById("dinero").value;
    var euros;
    let noEsNumero = isNaN(dolar);
    if(noEsNumero==true){
        document.getElementById("resultado").innerHTML="Error, el valor introducido no es numérico";
    }
    else{
        if(dolar<0){
            document.getElementById("resultado").innerHTML="El número que ha introducido es negativo";
        }
        else{
            euros = dolar*1.01;
            document.getElementById("resultado").innerHTML="" +euros+ " €";
        }
    }
}