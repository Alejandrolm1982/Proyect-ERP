function deshabilitarControl1(control1) {
  control1.classList.remove("boton1");
  control1.classList.add("boton1Inhabilitado");
  control1.disabled = true;
}

function habilitarControl1(control1) {
  control1.classList.remove("boton1Inhabilitado");
  control1.classList.add("boton1");
  control1.disabled = false;
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

/* INICIO - ajaxPost3 - Devuelve el resultado a un DIV (POST) */
function ajaxPost3(form1, controlador1, div1)
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
/* FIN - ajaxPost3 - Devuelve el resultado a un DIV (POST) */

function ajaxGet1(controlador1, div1) {
  return new Promise((resolve, reject) => {
      let ajax1 = new XMLHttpRequest();
      ajax1.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById(div1.id).innerHTML = this.responseText;
              resolve(this.responseText);
          }
      };
      ajax1.open("GET", controlador1, true);
      ajax1.send();
  });
}



function insertarDatos1(form1, boton1, controlador1, div1)
{      
  deshabilitarControl1(boton1);
  // Opcion 1: El mensaje se muestra en un div (ajaxPost1)
  ajaxPost2(form1,controlador1,div1);
  // Opcion 2: El mensaje se muestra en una alert (ajaxPost2)
  // ajaxPost2(form1,controlador1,div1);
  // Habilitar el botón después de un tiempo (por ejemplo, 3 segundos)
  setTimeout(function () {
    habilitarControl1(boton1);
  }, 3000);

  form1.reset();
}


function seleccionarDatos1(valorSeleccionado, controlador1, div1) {
  // Creación del objeto FormData y agregando el valor seleccionado
  const formData = new FormData();
  formData.append("cliente/proveedor", valorSeleccionado);

  // Llamada a la función ajaxPost1 con el objeto FormData
  ajaxPost1(formData, controlador1, div1);
}

function seleccionarDatos2(valorSeleccionado, controlador1, div1) {
  // Creación del objeto FormData y agregando el valor seleccionado
  const formData = new FormData();
  formData.append("producto", valorSeleccionado);

  // Llamada a la función ajaxPost1 con el objeto FormData
  ajaxPost1(formData, controlador1, div1);
}
function seleccionarDatos3(valorSeleccionado, controlador1, div1) {
  // Creación del objeto FormData y agregando el valor seleccionado
  const formData = new FormData();
  formData.append("almacen", valorSeleccionado);

  // Llamada a la función ajaxPost1 con el objeto FormData
  ajaxPost1(formData, controlador1, div1);
}
function seleccionarDatos4(valorSeleccionado, controlador1, div1) {
  // Creación del objeto FormData y agregando el valor seleccionado
  const formData = new FormData();
  formData.append("facturacion", valorSeleccionado);

  // Llamada a la función ajaxPost1 con el objeto FormData
  ajaxPost1(formData, controlador1, div1);
}

function seleccionarDatos5(form1, boton1, controlador1, div1)
{    
    deshabilitarControl1(boton1);
    ajaxPost3(form1,controlador1,div1);
    habilitarControl1(boton1);
    form1.reset();
}

function seleccionarDatos6(controlador1, div1)
{
  ajaxGet1(controlador1, div1);
}

/* ---------------------------------- INICIO - (cargar Pagina) Seleccionar 5 */
// Paso 1 - Referencia del elemento que tiene asociado el evento
document.addEventListener("DOMContentLoaded", function() {
  // Paso 2 - Llamada a la función
  const controlador18 = "Controllers/Facturacion7Controller.php";
  const div18 = document.getElementById("containerDocumento");
  // Llamada a la función para cargar la consulta al cargar la página
  seleccionarDatos6(controlador18, div18);
});
/* ---------------------------------- FIN - (cargar Pagina) Seleccionar 5 */


window.addEventListener('load', function(){

  let controlador1;
  let div1;
  let controlador2;
  let div2;
  let boton1;
  let controlador3;
  let boton2;
  let div3;
  let controlador4;
  let boton3;
  let div4;
  let controlador5;
  let boton4;
  let div5;
  let controlador6;
  let boton5;
  let div6;
  let controlador7;
  let boton6;
  let div7;
  let boton7;
  let div8;
  let controlador8;
  let boton8;
  let div9;
  let controlador9;
  let boton9;
  let div10;
  let controlador10;
  let boton10;
  let controlador11;
  let div11;
  let boton11;
  let controlador12;
  let div12;
  let boton12;
  let controlador13;
  let div13;
  let boton13;
  let controlador14;
  let div14;
  let boton14;
  let controlador15;
  let div15;
  let boton15;
  let controlador16;
  let div16;
  let boton16;
  let controlador17;
  let div17;


/* ---------------------------------- INICIO - (submit) Seleccionar 1 */
// Paso 1: Obtener referencias:
const selectClienteProveedor = document.getElementById("cliente/proveedor");
// Paso 2 - Asociación del elemento al evento (change) y llamada a la función
if (selectClienteProveedor) {
  // Referencia de los elementos
  controlador1 = "Controllers/ClienteProveedor1Controller.php";
  div1 = document.getElementById("container1");

  // Obtén el valor seleccionado del <select>
  const valorSeleccionado = selectClienteProveedor.value;

  // Llama a la función pasando el valor seleccionado
  seleccionarDatos1(valorSeleccionado, controlador1, div1);

  // Asociación del elemento al evento (change) y llamada a la función
  selectClienteProveedor.addEventListener("change", function(event) {
    event.preventDefault();

    // Obtén el valor seleccionado del <select>
    const valorSeleccionado = selectClienteProveedor.value;

    // Llama a la función pasando el valor seleccionado
    seleccionarDatos1(valorSeleccionado, controlador1, div1);
});
}
/* ---------------------------------- FIN - (submit) Seleccionar 1 */

/* ---------------------------------- INICIO - (submit) Seleccionar 2 */
// Paso 1: Obtener referencias:
const selectProducto = document.getElementById("producto");
// Paso 2 - Asociación del elemento al evento (change) y llamada a la función
if (selectProducto) {
  // Referencia de los elementos
  controlador1 = "Controllers/Producto1Controller.php";
  div1 = document.getElementById("container1");

  // Obtén el valor seleccionado del <select>
  const valorSeleccionado = selectProducto.value;

  // Llama a la función pasando el valor seleccionado
  seleccionarDatos2(valorSeleccionado, controlador1, div1);

  selectProducto.addEventListener("change", function(event) {
    event.preventDefault();

    // Obtén el valor seleccionado del <select>
    const valorSeleccionado = selectProducto.value;

    // Llama a la función pasando el valor seleccionado
    seleccionarDatos2(valorSeleccionado, controlador1, div1);
  });
}
/* ---------------------------------- FIN - (submit) Seleccionar 2 */

/* ---------------------------------- INICIO - (submit) Seleccionar 3 */
// Paso 1: Obtener referencias:
const selectAlmacen = document.getElementById("almacen");
// Paso 2 - Asociación del elemento al evento (change) y llamada a la función
if (selectAlmacen) {
  // Referencia de los elementos
  controlador1 = "Controllers/Almacen1Controller.php";
  div1 = document.getElementById("container1");

  // Obtén el valor seleccionado del <select>
  const valorSeleccionado = selectAlmacen.value;

  // Llama a la función pasando el valor seleccionado
  seleccionarDatos3(valorSeleccionado, controlador1, div1);

  selectAlmacen.addEventListener("change", function(event) {
    event.preventDefault();

    // Obtén el valor seleccionado del <select>
    const valorSeleccionado = selectAlmacen.value;

    // Llama a la función pasando el valor seleccionado
    seleccionarDatos3(valorSeleccionado, controlador1, div1);
  });
}
/* ---------------------------------- FIN - (submit) Seleccionar 3 */

/* ---------------------------------- INICIO - (submit) Seleccionar 4 */
// Paso 1: Obtener referencias:
const selectFacturacion = document.getElementById("facturacion");
// Paso 2 - Asociación del elemento al evento (change) y llamada a la función
if (selectFacturacion) {
  // Referencia de los elementos
  controlador1 = "Controllers/Facturacion1Controller.php";
  div1 = document.getElementById("container1");

      // Obtén el valor seleccionado del <select>
      const valorSeleccionado = selectFacturacion.value;

      // Llama a la función pasando el valor seleccionado
      seleccionarDatos4(valorSeleccionado, controlador1, div1);

  selectFacturacion.addEventListener("change", function(event) {
    event.preventDefault();

    // Obtén el valor seleccionado del <select>
    const valorSeleccionado = selectFacturacion.value;

    // Llama a la función pasando el valor seleccionado
    seleccionarDatos4(valorSeleccionado, controlador1, div1);
  });
}
/* ---------------------------------- FIN - (submit) Seleccionar 4 */



  /* ---------------------------------- INICIO - (submit) Insertar 1 */
  // Paso 1: Obtener referencias:
  const formInsercion1 = document.getElementById("formularioAgregar");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formInsercion1)
  {
    // Referencia de los elementos
    boton1 = document.getElementById("confirmar");
    controlador2 = "Controllers/ClienteProveedor2Controller.php";
    div2 = document.getElementById("container1");
    // Evento y llamada a la función
    formInsercion1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formInsercion1,boton1,controlador2,div2);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar 1 */

  /* ---------------------------------- INICIO - (submit) Insertar 2 */
  // Paso 1: Obtener referencias:
  const formInsercion2 = document.getElementById("formularioAgregar2");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formInsercion2)
  {
    // Referencia de los elementos
    boton4 = document.getElementById("confirmar2");
    controlador5 = "Controllers/Producto2Controller.php";
    div5 = document.getElementById("container1");
    // Evento y llamada a la función
    formInsercion2.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formInsercion2,boton4,controlador5,div5);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar 2 */


 /* ---------------------------------- INICIO - (submit) Insertar 3 */
  // Paso 1: Obtener referencias:
  const formInsercion3 = document.getElementById("formularioAgregar3");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formInsercion3)
  {
    // Referencia de los elementos
    boton7 = document.getElementById("confirmar3");
    controlador8 = "Controllers/Almacen2Controller.php";
    div8 = document.getElementById("container1");
    // Evento y llamada a la función
    formInsercion3.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formInsercion3,boton7,controlador8,div8);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar 3 */

   /* ---------------------------------- INICIO - (submit) Insertar y consultar 4 */
  // Paso 1: Obtener referencias:
  const formInsercion4 = document.getElementById("formularioAgregar4");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formInsercion4)
  {
    // Referencia de los elementos
    boton10 = document.getElementById("confirmar4");
    controlador11 = "Controllers/Facturacion2Controller.php";
    div11 = document.getElementById("container1");
    // Evento y llamada a la función
    formInsercion4.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formInsercion4,boton10,controlador11,div11);
      seleccionarDatos5(formInsercion4,boton10,controlador11,div11);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar y consultar 4 */

  /* ---------------------------------- INICIO - (submit) Insertar 5 */
  // Paso 1: Obtener referencias:
  const formularioAgregarUsuario = document.getElementById("formularioAgregarUsuario");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formularioAgregarUsuario)
  {
    // Referencia de los elementos
    boton13 = document.getElementById("confirmarUsuario");
    controlador14 = "Controllers/Insert1Controller.php";
    div14 = document.getElementById("container1");
    // Evento y llamada a la función
    formularioAgregarUsuario.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formularioAgregarUsuario,boton13,controlador14,div14);
    });
  }
  /* ---------------------------------- FIN - (submit) Insertar 5 */


  /* ---------------------------------- INICIO - (submit) edicion 1 */
  // Paso 1: Obtener referencias:
  const formEdicion1 = document.getElementById("formularioEdicion");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEdicion1)
  {
    // Referencia de los elementos
    boton2 = document.getElementById("confirmarEdicion");
    controlador3 = "Controllers/ClienteProveedor3Controller.php";
    div3 = document.getElementById("container3");
    // Evento y llamada a la función
    formEdicion1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEdicion1,boton2,controlador3,div3);
      window.location.href = "clienteproveedor.php";
    });
  }
  /* ---------------------------------- FIN - (submit) edicion 1 */  

  /* ---------------------------------- INICIO - (submit) edicion 2 */
  // Paso 1: Obtener referencias:
  const formEdicion2 = document.getElementById("formularioEdicion2");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEdicion2)
  {
    // Referencia de los elementos
    boton5 = document.getElementById("confirmarEdicion2");
    controlador6 = "Controllers/Producto3Controller.php";
    div6 = document.getElementById("container3");
    // Evento y llamada a la función
    formEdicion2.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEdicion2,boton5,controlador6,div6);
      window.location.href = "producto.php";
    });
  }
  /* ---------------------------------- FIN - (submit) edicion 2 */ 
    /* ---------------------------------- INICIO - (submit) edicion 3 */
  // Paso 1: Obtener referencias:
  const formEdicion3 = document.getElementById("formularioEdicion3");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEdicion3)
  {
    // Referencia de los elementos
    boton8 = document.getElementById("confirmarEdicion3");
    controlador9 = "Controllers/Almacen3Controller.php";
    div9 = document.getElementById("container3");
    // Evento y llamada a la función
    formEdicion3.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEdicion3,boton8,controlador9,div9);
      window.location.href = "almacen.php";
    });
  }
  /* ---------------------------------- FIN - (submit) edicion 3 */ 

  /* ---------------------------------- INICIO - (submit) edicion 4 */
  // Paso 1: Obtener referencias:
  const formEdicion4 = document.getElementById("formularioEdicion4");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEdicion4)
  {
    // Referencia de los elementos
    boton11 = document.getElementById("confirmarEdicion4");
    controlador12 = "Controllers/Facturacion3Controller.php";
    div12 = document.getElementById("container3");
    // Evento y llamada a la función
    formEdicion4.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEdicion4,boton11,controlador12,div12);
      window.location.href = "facturacion.php";
    });
  }
  /* ---------------------------------- FIN - (submit) edicion 4 */ 


  /* ---------------------------------- INICIO - (submit) eliminacion 1 */
  // Paso 1: Obtener referencias:
  const formEliminacion1 = document.getElementById("formEliminacion1");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEliminacion1)
  {
    // Referencia de los elementos
    boton3 = document.getElementById("botonEliminacion1");
    controlador4 = "Controllers/ClienteProveedor5Controller.php";
    div4 = document.getElementById("container3");
    // Evento y llamada a la función
    formEliminacion1.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEliminacion1,boton3,controlador4,div4);
      window.location.href = "clienteproveedor.php";
    });
  }
  /* ---------------------------------- FIN - (submit) eliminacion 1 */  
  
    /* ---------------------------------- INICIO - (submit) eliminacion 2 */
  // Paso 1: Obtener referencias:
  const formEliminacion2 = document.getElementById("formEliminacion2");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEliminacion2)
  {
    // Referencia de los elementos
    boton6 = document.getElementById("botonEliminacion2");
    controlador7 = "Controllers/Producto5Controller.php";
    div7 = document.getElementById("container3");
    // Evento y llamada a la función
    formEliminacion2.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEliminacion2,boton6,controlador7,div7);
      window.location.href = "producto.php";
    });
  }
  /* ---------------------------------- FIN - (submit) eliminacion 2 */  

      /* ---------------------------------- INICIO - (submit) eliminacion 3 */
  // Paso 1: Obtener referencias:
  const formEliminacion3 = document.getElementById("formEliminacion3");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEliminacion3)
  {
    // Referencia de los elementos
    boton9 = document.getElementById("botonEliminacion3");
    controlador10 = "Controllers/Almacen5Controller.php";
    div10 = document.getElementById("container3");
    // Evento y llamada a la función
    formEliminacion3.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEliminacion3,boton9,controlador10,div10);
      window.location.href = "almacen.php";
    });
  }
  /* ---------------------------------- FIN - (submit) eliminacion 3 */  


  /* ---------------------------------- INICIO - (submit) eliminacion 4 */
  // Paso 1: Obtener referencias:
  const formEliminacion4 = document.getElementById("formEliminacion4");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formEliminacion4)
  {
    // Referencia de los elementos
    boton12 = document.getElementById("botonEliminacion4");
    controlador13 = "Controllers/Facturacion5Controller.php";
    div13 = document.getElementById("container3");
    // Evento y llamada a la función
    formEliminacion4.addEventListener("submit", function(event){
      event.preventDefault();
      insertarDatos1(formEliminacion4,boton12,controlador13,div13);
      window.location.href = "facturacion.php";
    });
  }
  /* ---------------------------------- FIN - (submit) eliminacion 4 */  

  /* ---------------------------------- INICIO - (submit) busqueda 1 */
  // Paso 1: Obtener referencias:
  const formularioBusqueda1 = document.getElementById("formularioBusqueda");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formularioBusqueda1)
  {
    // Referencia de los elementos
    boton13 = document.getElementById("confirmarBusqueda");
    controlador14 = "Controllers/ClienteProveedor6Controller.php";
    div14 = document.getElementById("container1");
    // Evento y llamada a la función
    formularioBusqueda1.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos5(formularioBusqueda1,boton13,controlador14,div14);
    });
  }
  /* ---------------------------------- FIN - (submit) busqueda 1 */
  /* ---------------------------------- INICIO - (submit) busqueda 2 */
  // Paso 1: Obtener referencias:
  const formularioBusqueda2 = document.getElementById("formularioBusqueda2");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formularioBusqueda2)
  {
    // Referencia de los elementos
    boton14 = document.getElementById("confirmarBusqueda2");
    controlador15 = "Controllers/Almacen6Controller.php";
    div15 = document.getElementById("container1");
    // Evento y llamada a la función
    formularioBusqueda2.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos5(formularioBusqueda2,boton14,controlador15,div15);
    });
  }
  /* ---------------------------------- FIN - (submit) busqueda 2 */
  /* ---------------------------------- INICIO - (submit) busqueda 3 */
  // Paso 1: Obtener referencias:
  const formularioBusqueda3 = document.getElementById("formularioBusqueda3");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formularioBusqueda3)
  {
    // Referencia de los elementos
    boton15 = document.getElementById("confirmarBusqueda3");
    controlador16 = "Controllers/Facturacion6Controller.php";
    div16 = document.getElementById("container1");
    // Evento y llamada a la función
    formularioBusqueda3.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos5(formularioBusqueda3,boton15,controlador16,div16);
    });
  }
  /* ---------------------------------- FIN - (submit) busqueda 3 */
  /* ---------------------------------- INICIO - (submit) busqueda 4 */
  // Paso 1: Obtener referencias:
  const formularioBusqueda4 = document.getElementById("formularioBusqueda4");
  // Paso 2 - Asociación del elemento al evento (submit) y llamada a la función
  if(formularioBusqueda4)
  {
    // Referencia de los elementos
    boton16 = document.getElementById("confirmarBusqueda4");
    controlador17 = "Controllers/Producto6Controller.php";
    div17 = document.getElementById("container1");
    // Evento y llamada a la función
    formularioBusqueda4.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos5(formularioBusqueda4,boton16,controlador17,div17);
    });
  }
  /* ---------------------------------- FIN - (submit) busqueda 4 */

  /*Login*/

  document.addEventListener('DOMContentLoaded', function () {
    // Tu código aquí
    document.getElementById('loginForm').addEventListener('submit', function (event) {
      event.preventDefault();

      const formData = new FormData(this);
    
      fetch('controllers/LoginController1.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.text())
      .then(responseText => console.log(responseText))
      .then(data => {
          if (data.success) {
              // Redirigir a otra página si los datos coinciden
              window.location.href = 'Home.php';
          } else {
              // Mostrar mensaje de error
              alert(data.message);
          }
      })
      .catch(error => console.error('Error:', error));
    });
});

});

function toggleFormulario() {
    var container2 = document.getElementById("container2");
    container2.style.display = (container2.style.display === "none" || container2.style.display === "") ? "block" : "none";
}




