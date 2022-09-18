class Cliente extends Persona{

    static contadorClientes = 0;

    constructor(fechaRegistro){
        this._idCliente = ++Cliente.contadorClientes;
        this._fechaReegistro = fechaRegistro;
    }
    get idCliente(){
        return this._idCliente;
    }
    get fechaRegistro(){
        return this._fechaReegistro;
    }
    set fechaRegistro(fechaRegistro){
        this._fechaReegistro = fechaRegistro;
    }
    toString(){
        return `${super.toString()} ${this._idCliente} ${this._fechaReegistro}`;
    }
}