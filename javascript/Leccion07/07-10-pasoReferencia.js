const persona = {
    nombre: 'Edwin',
    apellido: 'Patino'
}

function cambiarValorObjt(p1){
    p1.nombre = 'Alexander';
    p1.apellido = 'Garay';
}

cambiarValorObjt(persona);
console.log (persona);