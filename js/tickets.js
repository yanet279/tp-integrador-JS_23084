function calPrecioFinal() {
    let cantEnt=document.getElementById("cantEntradas").value; 

    let porcentajeDesc=document.getElementById("porcDescuento").value;
    let descuento=(cantEnt*1000) * porcentajeDesc/100;

    let precioTotal=(cantEnt*1000) - descuento;
    console.log("precioTotal: ", precioTotal);
    
    document.getElementById("valorTotal").value='Total a pagar: $'+precioTotal;
}