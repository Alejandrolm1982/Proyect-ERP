function deshabilitarControl1(control1)
{
    control1.classList.remove("boton1");
    control1.classList.add("boton1Inhabilitado");
    control1.disable = true;
}

function habilitarControl1(control1)
{
    control1.classList.remove("boton1Inhabilitado");
    control1.classList.add("boton1");
    control1.disable = false;
}


/* INICIO - ajaxPost1 - Devuelve el resultado a un DIV (POST) */
function ajaxPost1(valorSeleccionado, controlador1, div1)
{

  // 1.- Creación del objeto XMLHttpRequest (Ajax1)
  const Ajax1 = new XMLHttpRequest();
  
  // 5.-Éxito en el envío
  Ajax1.addEventListener("load", function(event) {
    document.getElementById(div1.id).innerHTML = this.responseText;
  });
  
  // 5.-Error en el envío
  Ajax1.addEventListener("error", function( event ) {
    alert( 'Error: no se ha enviado la informacion' );
  } );
  Ajax1.open("POST", controlador1);
  
  // 4.-Envío del formulario a través del FormData
  Ajax1.send(valorSeleccionado);
}
/* FIN - ajaxPost1 - Devuelve el resultado a un DIV (POST) */

/* INICIO - ajaxPost1 - Devuelve el resultado a un DIV (POST) */
function ajaxPost2(form1, controlador1, div1)
{

  // 1.- Creación del objeto XMLHttpRequest (Ajax1)
  const Ajax1 = new XMLHttpRequest();

  // 2.- Enlace del formulario a un objeto FormData (FormData1)
  const FormData1 = new FormData( form1 );
  
  // 5.-Éxito en el envío
  Ajax1.addEventListener("load", function(event) {
    document.getElementById(div1.id).innerHTML = this.responseText;
  });
  
  // 5.-Error en el envío
  Ajax1.addEventListener("error", function( event ) {
    alert( 'Error: no se ha enviado la informacion' );
  } );
  
  // 3.-Configuración del envío del formulario a través del FormData
  Ajax1.open("POST", controlador1);
  
  // 4.-Envío del formulario a través del FormData
  Ajax1.send( FormData1 );
  
}
/* FIN - ajaxPost1 - Devuelve el resultado a un DIV (POST) */



function insertarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1);
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost2(form1,controlador1,div1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  habilitarControl1(boton1);
  form1.reset();
}


function seleccionarDatos1(valorSeleccionado, controlador1, div1) {
  // Creación del objeto FormData y agregando el valor seleccionado
  const formData = new FormData();
  formData.append("cliente/proveedor", valorSeleccionado);

  // Imprime el contenido del FormData en la consola para verificar
  console.log("Contenido de FormData:", formData);

  // Llamada a la función ajaxPost1 con el objeto FormData
  ajaxPost1(formData, controlador1, div1);
}


window.addEventListener('load', function(){

  let controlador1;
  let div1;
  let controlador2;
  let div2;
  let boton1;

/* ---------------------------------- INICIO - (submit) Seleccionar 1 */
// Paso 1: Obtener referencias:
const selectClienteProveedor = document.getElementById("cliente/proveedor");
// Paso 2 - Asociación del elemento al evento (change) y llamada a la función
if (selectClienteProveedor) {
  // Referencia de los elementos
  controlador1 = "Controllers/ClienteProveedor1Controller.php";
  div1 = document.getElementById("container1");

  selectClienteProveedor.addEventListener("change", function(event) {
    event.preventDefault();

    // Obtén el valor seleccionado del <select>
    const valorSeleccionado = selectClienteProveedor.value;

    // Llama a la función pasando el valor seleccionado
    seleccionarDatos1(valorSeleccionado, controlador1, div1);
  });
}
/* ---------------------------------- FIN - (submit) Seleccionar 1 */

  /* ---------------------------------- INICIO - (submit) Insertar 3 */
  // Paso 1: Obtener referencias:
  const formInsercion1 = document.getElementById("formularioAgregar");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formInsercion1)
  {
    // Referencia de los elementos
    boton1 = document.getElementById("confirmar");
    controlador2 = "Controllers/ClienteProveedor2Controller.php";
    div2 = document.getElementById("container3");
    // Evento y llamada a la función
    formInsercion1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formInsercion1,boton1,controlador2,div2);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar 3 */






});

function toggleFormulario() {
    var container2 = document.getElementById("container2");
    container2.style.display = (container2.style.display === "none" || container2.style.display === "") ? "block" : "none";
}

//Login JS
let switchCtn = document.querySelector("#switch-cnt");
let switchC1 = document.querySelector("#switch-c1");
let switchC2 = document.querySelector("#switch-c2");
let switchCircle = document.querySelectorAll(".switch__circle");
let switchBtn = document.querySelectorAll(".switch-btn");
let aContainer = document.querySelector("#a-container");
let bContainer = document.querySelector("#b-container");
let allButtons = document.querySelectorAll(".submit");

let getButtons = (e) => e.preventDefault()

let changeForm = (e) => {

    switchCtn.classList.add("is-gx");
    setTimeout(function(){
        switchCtn.classList.remove("is-gx");
    }, 1500)

    switchCtn.classList.toggle("is-txr");
    switchCircle[0].classList.toggle("is-txr");
    switchCircle[1].classList.toggle("is-txr");

    switchC1.classList.toggle("is-hidden");
    switchC2.classList.toggle("is-hidden");
    aContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-txl");
    bContainer.classList.toggle("is-z200");
}

let mainF = (e) => {
    for (var i = 0; i < allButtons.length; i++)
        allButtons[i].addEventListener("click", getButtons );
    for (var i = 0; i < switchBtn.length; i++)
        switchBtn[i].addEventListener("click", changeForm)
}

window.addEventListener("load", mainF);