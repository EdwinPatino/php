const mostrarReloj = ()=>{
    let fecha = new Date();
    let hor = formatoHora(fecha.getHours());
    let min = formatoHora(fecha.getMinutes());
    let seg = formatoHora(fecha.getSeconds());
    document.getElementById('hora').innerHTML = `${hor}:${min}:${seg}`;

    const meses = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
    const dias = ['Dom', 'Lun', 'Mar', 'Mir', 'Jue', 'Vie', 'Sab'];
    let diaSemana = dias[fecha.getDay()];
    let dia = fecha.getDate();
    let mes = meses[fecha.getMonth()];
    let fechaTexto = `${diaSemana}, ${dia} ${mes}`;
    document.getElementById('fecha').innerHTML = fechaTexto;

    //se recupera el elmento contenedor
    //classList recuperamos todas las clases de tipo CSS que se estan aplicando en este elemento HTML
    //classList regresa una lista
    //toggle funciona como un interruptor, aplica un estilo si no lo tiene y si lo tiene se lo quita va intercalando
    //se llama la clase 'animar' de CSS para ir intercalando
    document.getElementById('contenedor').classList.toggle('animar')
}

const formatoHora = (hora) =>{
    if(hora<10){
        hora = '0' + hora;
    }
    return hora;
}
//permite llamar la funcion mostrarReloj cada segundo
setInterval(mostrarReloj, 1000);