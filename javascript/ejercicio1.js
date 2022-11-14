function ocultar(circulo){
    document.getElementById(circulo).style.backgroundColor='transparent';
}

function mostrar(circulo){
    if (circulo=="roja")
        document.getElementById(circulo).style.backgroundColor="red";
    else if(circulo=="azul")
        document.getElementById(circulo).style.backgroundColor="blue";
    else if(circulo=="verde")
        document.getElementById(circulo).style.backgroundColor="green";
    
     
}