let a = 5;
let valMin = 0, valMax = 10;

//operador AND (&&)
if(a >= valMin && a <= valMax){
    console.log("Dentro de rango");
}
else{
    console.log("Fuera de rango");
}

//operador OR (||)
let vacaciones = false, diaDescanso = true;
if(vacaciones || diaDescanso){
    console.log("Puede asistir esta desocupado");
}
else{
    console.log("El padre esta ocupado");
}