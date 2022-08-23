let miNumero = "18x";
console.log(typeof miNumero);

let edad = Number(miNumero);
console.log(typeof edad);

// verificar si la variable es numerica NaN (Not a Number)
console.log(edad);

if (isNaN(edad)){
    console.log("No es un numero");
}
else{
    if (edad >= 18){
        console.log("Puede votar");
    }
    else{
        console.log("Muy joven para votar");
    }
}

if (isNaN(edad)){
    console.log("No es un numero");
}
else{
    let voto = (edad >= 18) ? "Puede votar" : "Muy joven para votar";
    console.log(voto);
}
