class Producto{
    static contadorProductos = 0;

    constructor(nombre, precio){
        this._idProducto = ++Producto.contadorProductos;
        this._nombre = nombre;
        this._precio = precio;
    }

    get idProducto(){
        return this._idProducto;
    }
    get nombre(){
        return this._nombre;
    }
    set nombre (nombre){
        this._nombre = nombre;
    }
    get precio(){
        return this._precio;
    }
    set precio (precio){
        this._precio = precio;
    }
    toString(){
        return `idProducto: ${this._idProducto}, ${this._nombre}, $${this._precio}`;
    }
}

class Orden {
    static contadorOrdenes = 0;
    static get MAX_PRODUCTOS(){
        return 5;
    }

    constructor(){
        this._idOrden = ++Orden.contadorOrdenes;
        this._productos = [];
        //this._contadorProductosAgregados = 0;
    }

    get idOrden(){
        return this._idOrden;
    }
    agreagrProducto(producto){
        if(this._productos.length < Orden.MAX_PRODUCTOS){
            this._productos.push(producto);
            //this._productos[this._contadorProductosAgregados++] = producto; //otra manera de agreagr productos a nuestro arra, agregamos y despues incrementamos la variable
        }else{
            console.log('No se pueden agragr mas productos');
        }
    }
    clacularTotal(){
        let totalVenta = 0;
        for(let producto of this._productos){
            totalVenta += producto.precio;
        }
        return totalVenta;
    }
    mostrarOrden(){
        let productosOrden = '';
        for(let producto of this._productos){
            productosOrden += ' \n{' + producto.toString() + '} ';
        }

        console.log(`Orden: ${this._idOrden} Total: $${this.clacularTotal()}, Productos: ${productosOrden}`)
    }
}


let producto1 = new Producto('camisa', 300);
let producto2 = new Producto('pantalon', 1300);

let oreden1 = new Orden();
oreden1.agreagrProducto(producto1);
oreden1.agreagrProducto(producto2);
oreden1.mostrarOrden();

let orden2 = new Orden();
let producto3 = new Producto('Zapatos', 400);
orden2.agreagrProducto(producto3);
orden2.agreagrProducto(producto1);
orden2.agreagrProducto(producto2);
orden2.mostrarOrden();