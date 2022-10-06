const personas = [
    new Persona('Edwin', 'Patiño'),
    new Persona('Paola', 'Bautista')
];

function mostrarPersonas(){
    let texto = '';
    for(let persona of personas){
        texto += `<li> ${persona.nombre} ${persona.apellido}</li>`
    }
    document.getElementById('personas').innerHTML = texto;
}

function agregarPersona(){
    const forma = document.forms['forma'];
    const nombre = forma['txtNombre'];
    const apellido = forma['txtApellido'];
    if(nombre.value !=  '' && apellido.value != ''){
        const persona = new Persona(nombre.value, apellido.value);
        console.log(persona);
        personas.push(persona);
        mostrarPersonas();
    }else{
        console.log('No hay informacion que agregar');
    }

}