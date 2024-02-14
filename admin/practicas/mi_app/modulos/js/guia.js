const btnCancelar = document.getElementById('cancelar');
const formGuia = document.getElementById("formGuia");
const btns = document.querySelectorAll('button[name="accion"]');
const guiaTitulo = document.getElementById("guia_titulo");

// const guiaHref = document.getElementById("guia_href");
// const guiaHrefLocal = document.getElementById("guia_href_local");
// const guiaCategoria = document.getElementById("guia_categoria");
// const guiaAutor = document.getElementById("guia_autor");

getListGuias(); 
  
document.addEventListener("DOMContentLoaded", dataCategorias);
document.addEventListener("DOMContentLoaded", dataAutor);

btnCancelar.addEventListener("click", initialButtons);
btnCancelar.addEventListener("click", limpiarInput);
btnCancelar.addEventListener("click", getListGuias);

//Mostrar toda la data tecnologia
const btnMostrarTodo = document.getElementById('btnMostrarTodo');
btnMostrarTodo.addEventListener('click', getListGuias);

//Traer data de Categorias de get_tecnologia.php
function dataCategorias() {
  let xhrGuiaCateg = new XMLHttpRequest();
  xhrGuiaCateg.open("GET", "/admin/practicas/mi_app/acciones/tecnologia/get_tecnologia.php");
  xhrGuiaCateg.send();
  xhrGuiaCateg.onreadystatechange = function () {
    if (xhrGuiaCateg.readyState==4 && xhrGuiaCateg.status==200) {
      let dataGuiaCateg = xhrGuiaCateg.responseText;
      const guiasCateg = JSON.parse(dataGuiaCateg)
      //VERIFICACION DE LA DATA RECIBIDA(dataGuiaCateg) Y LA DATA PROCESADA(guiasCateg)
      //console.log(Array.isArray(dataGuia)); //false
      //console.log(Array.isArray(guias)); //true
      //console.log(typeof dataGuia); //string
      //console.log(typeof guias);//object

      for (const guiaCateg of guiasCateg) {
        let id = guiaCateg.id;
        let categoria = guiaCateg.tecno;
        mostrarCategoria(id, categoria)
      }
    }
  }  
}

//Traer data de autores de get_autor.php
function dataAutor() {
  let xhrGuiaAutor = new XMLHttpRequest();
  xhrGuiaAutor.open("GET", "/admin/practicas/mi_app/acciones/autor/get_autor.php");
  xhrGuiaAutor.send();
  xhrGuiaAutor.onreadystatechange = function () {
    if (xhrGuiaAutor.readyState==4 && xhrGuiaAutor.status==200) {
      let dataGuiaAutor = xhrGuiaAutor.responseText;
      const guiasAutor = JSON.parse(dataGuiaAutor)
      //VERIFICACION DE LA DATA RECIBIDA(dataGuiaCateg) Y LA DATA PROCESADA(guiasCateg)
      //console.log(Array.isArray(dataGuia)); //false
      //console.log(Array.isArray(guias)); //true
      //console.log(typeof dataGuia); //string
      //console.log(typeof guias);//object

      for (const guiaAutor of guiasAutor) {
        let id = guiaAutor.id;
        let autor = guiaAutor.autor;
        mostrarAutor(id, autor)
      }
    }
  }  
}

function mostrarCategoria(id, categoria) {
  
  let Categorias = [
    {
      cap: `${id}`,
      categoria: `${categoria}`,
    }
  ];
  // console.log(Categorias);

  for (const key in Categorias) {
    if (Object.hasOwnProperty.call(Categorias, key)) {
      const element = Categorias[key];
      let cap = element.cap;
      let categ = element.categoria;
      insertarCategoria(cap, categ);
    }
  }
}

function insertarCategoria(cap, categ) {
  const selectElement = document.getElementById("guia_categoria");
  let htmlToInsert = `<option value=${cap}>${categ}</option>`;
  selectElement.insertAdjacentHTML("beforeend", htmlToInsert);
}

function mostrarAutor(id, autor) {
  let autores = [
    {
      cap: `${id}`,
      autor: `${autor}`
    }
  ];
  for (const key in autores) {
    if (Object.hasOwnProperty.call(autores, key)) {
      const element = autores[key];
      let cap = element.cap;
      let autor = element.autor;
      insertarAutor(cap, autor);
    }
  }
}

function insertarAutor(cap, autor) {
  const selectElement = document.getElementById("guia_autor");
  let htmlToInsert = `<option value=${cap}>${autor}</option>`;
  selectElement.insertAdjacentHTML("beforeend", htmlToInsert);
}

//GESTION DE ACCION SOBRE BOTONES AGREGAR, MODIFICAR
for (const key in btns) {
  if (Object.hasOwnProperty.call(btns, key)) {
    const btnElement = btns[key];
    btnElement.addEventListener("click", () => {
      //console.log(btnElement.value);
      switch (btnElement.value) {
        //GRABAR REGISTRO NUEVO
        case "Agregar":
          //console.log("clickeaste Agregar");
          if (guiaTitulo.value === "") {
            alert("Escriba un titulo para una guia de estudio");
          } else if (guiaTitulo.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formGuia.action);
            let dataForm = new FormData(formGuia);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML = "";
              rptaData.innerHTML = rpta;
              comprobar(rpta);
              initialButtons();
              limpiarInput();
              getListGuias();
            };
          }
          break;

        //ACTUALIZAR REGISTRO NUEVO
        case "Modificar":
          //console.log("clickeaste Modificar");
          Swal.fire({
            title: "Está seguro de modificar el registro?",
            text: "Esta acción es irreversible!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, Actualizar!",
          }).then((result) => {
            if (result.isConfirmed) {
              const guiaId = document.getElementById("guia_id");
              if (guiaTitulo.value === "") {
                alert("Escriba un título para la guía de estudio");
              } else if (guiaTitulo.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formGuia.action);
                let dataForm = new FormData(formGuia);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("guiaId", guiaId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  comprobar(rpta);
                  initialButtons();
                  limpiarInput();
                  getListGuias();
                };
              }
              Swal.fire({
                title: "Actualización exitosa!",
                text: "El registro ha sido actualizado con éxito.",
                icon: "success",
              });
            }
          });
          break;

        default:
          break;
      }
    });
  }
}

function getListGuias() {
  let objXHR;
  if (window.XMLHttpRequest) {
    objXHR = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    objXHR = new ActiveXObject("Microsoft.XMLHTTP");
  }
  objXHR.open("GET", "/admin/practicas/mi_app/acciones/guia/get_guia.php", true);
  objXHR.send();
  objXHR.onreadystatechange = function () {
    if (objXHR.readyState == 4 && objXHR.status == 200) {
      let data = objXHR.responseText;
      const guias = JSON.parse(data);
      let template = "";
      guias.forEach((guia) => {
        const URL_BASE = `../../../../../content/cursos/articulos/`;
        template += `
                  <tr class="fila">
                    <td class="td-border text-white">${guia.id}</td>
                    <td class="td-border text-white">${guia.titulo}</td>
                    <td class="td-border"><span class="text-skyblue_2">${guia.autor}</span></td>
                    <td class="td-border text-white">${guia.categoria}</td>
                    <td class="td-border text-white"><a class="text-amarillo" href="${guia.href}" target="_blank">${guia.href}</a></td>
                    <td class="td-border text-white"><a class="text-amarillo" href="${URL_BASE}${guia.hrefLocal}" target="_blank">${guia.hrefLocal}</a></td>
                    <td class="text-center">
                      <button class="btn p-0 mx-2 seleccionar" type="button" name="accionBtnTable" value="seleccionar">
                        <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                      </button>
                      <button class="btn p-0 mx-2 eliminar" type="button" name="accionBtnTable" value="eliminar">
                        <span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
                      </button>
                    </td>
                  </tr>
                `;
      });
      //console.log(template);
      let printGuias = document.getElementById("tabla_guia");
      printGuias.innerHTML = "";
      printGuias.innerHTML = template;
      seleccionarFila();
    }
  };
}

function seleccionarFila() {
  resaltarFila();
  const btnSeleccionado = document.querySelectorAll('button[name="accionBtnTable"]');
  const fila = document.querySelectorAll("tr.fila");

  for (const key in btnSeleccionado) {
    if (Object.hasOwnProperty.call(btnSeleccionado, key)) {
      const element = btnSeleccionado[key];
      element.addEventListener("click", () => {
        if (element.value === "seleccionar") {
          //console.log("soy boton seleccionar");
          for (const keyFila in fila) {
            if (Object.hasOwnProperty.call(fila, keyFila)) {
              const filaElement = fila[keyFila];
              filaElement.children[6].children[0].addEventListener(
                "click",
                () => {
                  //console.log(filaElement.children[6].children[0]);
                  let filaID = filaElement.children[0].innerHTML;
                  let rptData = document.getElementById("rpta");
                  rptData.innerHTML = "";
                  rptData.innerHTML = "Registro selecionado: " + filaID;
                  seleccionarRegistro(filaID);
                  adminButtons();
                }
              );
            }
          }
        } else if (element.value === "eliminar") {
          //console.log("soy boton eliminar");
          for (const keyFila in fila) {
            if (Object.hasOwnProperty.call(fila, keyFila)) {
              const filaElement = fila[keyFila];
              filaElement.children[6].children[1].addEventListener(
                "click",
                () => {
                  //console.log(filaElement.children[3].children[1]);
                  let filaID = filaElement.children[0].innerHTML;
                  let rptData = document.getElementById("rpta");
                  rptData.innerHTML = "";
                  rptData.innerHTML = "Registro a eliminar: " + filaID;
                  //console.log(rptData.innerHTML);
                  Swal.fire({
                    title: "El registro será Eliminado?",
                    text: "Esta acción no se podrá revertir, está seguro de Eliminar el registro!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, borrar registro!",
                  }).then((result) => {
                    if (result.isConfirmed) {
                      eliminarRegistro(filaID);
                      Swal.fire({
                        title: "Registro Eliminado!",
                        text: "El registro ha sido eliminado con éxito.",
                        icon: "success",
                      });
                    }
                  });
                }
              );
            }
          }
        }
      });
    }
  }
}

function resaltarFila() {
  const fila = document.querySelectorAll("tr.fila");
  for (let i = 0; i < fila.length; i++) {
    const element = fila[i];
    element.addEventListener("click", () => {
      //console.log(element);
      element.style.backgroundColor = "tomato";
    });
    for (let j = 0; j < fila.length; j++) {
      const elem = fila[j];
      elem.addEventListener("click", () => {
        element.removeAttribute("style");
        elem.style.backgroundColor = "tomato";
      });
    }
  }
}

function seleccionarRegistro(filaID) {
  const inputId = document.getElementById("guia_id");
  inputId.setAttribute("type", "hidden");
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/practicas/mi_app/acciones/guia/get_data_id_guia.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`guia_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a actualizar: " + rpta;
    if (rpta) {
      rptJSON = JSON.parse(rpta);
      getRegistro(rptJSON);
    }
  };
}

function eliminarRegistro(filaID) {
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/practicas/mi_app/acciones/guia/eliminaGuia.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`guia_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
    getListGuias();
  };
}

function getRegistro(rptJSON) {
  const inputId = document.getElementById("guia_id");
  const inputTitulo = document.getElementById("guia_titulo");
  const inputHref = document.getElementById('guia_href');
  const inputHrefLocal = document.getElementById('guia_href_local');
  const selectCategoria = document.getElementById('guia_categoria');
  const selectAutor = document.getElementById('guia_autor');

  rptJSON.forEach((rpt) => {
    inputId.value = rpt.id;
    inputTitulo.value = rpt.titulo;
    inputHref.value = rpt.href
    inputHrefLocal.value = rpt.hrefLocal
    selectCategoria.value = rpt.categoria
    selectAutor.value = rpt.autor
  });
}

function adminButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const inputId = document.getElementById("guia_id");

  if (btnModificar.hasAttribute("disabled")) {
    btnModificar.removeAttribute("disabled");
    btnAgregar.setAttribute("disabled", "disabled");
    btnCancelar.removeAttribute("disabled");
    inputId.removeAttribute("disabled");
  }
}

function initialButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const inputId = document.getElementById("guia_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");
    inputId.setAttribute("type", "text");
    inputId.value = "";
    inputId.setAttribute("disabled", "disabled");
  }
  getListGuias();
}

// COMPLEMENTARIOS
function limpiarInput(){
  const guiaTitulo = document.getElementById('guia_titulo');
  const guiaHref = document.getElementById('guia_href');
  const guiaCategoria = document.getElementById('guia_categoria');
  const guiaAutor = document.getElementById('guia_autor');
  const guiaHrefLocal = document.getElementById('guia_href_local');
  guiaTitulo.value="";
  guiaHref.value="";
  guiaCategoria.value="";
  guiaAutor.value="";
  guiaHrefLocal.value="";
}

function comprobar(a) {
  // let rptData = document.getElementById('rptData');
  // rptData.innerHTML = a;
  let msg = a;
  //console.log(msg); //Inserción exitosa
  if (msg == "Inserción exitosa") {
    alertSaveExito();
  }
  if (msg == "Inserción fallida") {
    alertSaveFalla();
  }
}

function alertSaveExito() {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    },
  });
  Toast.fire({
    icon: "success",
    title: "Grabación exitosa",
  });
}

function alertSaveFalla() {
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    },
  });
  Toast.fire({
    icon: "error",
    title: "Grabación fallida",
  });
}