function calcularLetra(){
    let letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    let dni = document.getElementById("dni").value;
    let longitud = dni.length;
    let valores = /^[0-9]+$/;
    let indice;

    if(longitud==8 && dni.match(valores)){
        indice = parseInt(dni)%23;
        document.getElementById("letra").innerHTML = letras[indice];
    }
    else{
        document.getElementById("letra").innerHTML = "Introduce un DNI correcto";
    }
}