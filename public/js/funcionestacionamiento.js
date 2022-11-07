
var class_id="";

//----------------------------FUNCION BOTON QUE CAMBIA LA VISTA PRAT / A. VARAS---------------------------------------

// function click_here(button_id){
//     class_id=document.getElementById(button_id).className;






//------------------------------------------------------------------------------------

//obtener id y clase del objeto seleccionado
function click_here(button_id){
    class_id=document.getElementById(button_id).className;

    cambiarEstado(class_id, button_id);     //llamo la funcion cambiarEstado del estacionamiento
    mostrar(class_id, button_id);           //id del lugar   
}

//*********************** */MODAL3  LLAMA LA FUNCION MOSTRAR VENTANA EMERGENTE***********************

function mostrar(classActual, idActual){

    //abre modal3, agregándole la clase "show"
    document.getElementById('modal_container3').className = document.getElementById('modal_container3').className+=" show3";
}


//*********************** */ FUNCION BOTON REGISTRAR QUE CIERRA LA VENTANA ***********************

const modal_container3 = document.getElementById('modal_container3');
const close3 = document.getElementById('close3');

close3.addEventListener('click', () => {
    modal_container3.classList.remove('show3');
});


//*********************** */ LLAMA LA FUNCION QUE CAMBIA ESTADO OCUPADO / DESOCUPADO ***********************

function cambiarEstado(estadoActual, idActual){
    if (estadoActual=='btn-est desocupado') {
        //Cambia la propiedad de la clase.
        document.getElementById(idActual).className ="btn-est ocupado";
    }else{
        //Cambia la propiedad de la clase.
        document.getElementById(idActual).className ="btn-est desocupado";
    }

}









