function calcularIMC(){

    let coeficiente;

    var masa = document.getElementById("pes").value;
    var altura = document.getElementById("alt").value;

    coeficiente = masa/(altura*altura);

    if(coeficiente<18.5){
        document.getElementById("resultado").innerHTML="Peso inferior al normal";
    } 
    else if (coeficiente<24.9){
        document.getElementById("resultado").innerHTML="Peso normal";
    }
    else if (coeficiente<29.9){
        document.getElementById("resultado").innerHTML="Sobrepeso";
    }   
    else{
        document.getElementById("resultado").innerHTML="Obesidad";
    }   
}
