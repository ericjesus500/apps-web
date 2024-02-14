const btnCancelar = document.getElementById("cancelar");
const formAutor = document.getElementById("formApp");
const btns = document.querySelectorAll('button[name="accion"]');
const buscador = document.getElementById("buscador");
const appNombre = document.getElementById("app_nombre");
const selectRows = document.getElementById("num_registros");
// const btnPruebas = document.getElementById('pruebas');
//console.log(btns);

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
          if (appNombre.value === "") {
            alert("Escriba el nombre de una aplicación");
          } else if (appNombre.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formApp.action);
            let dataForm = new FormData(formApp);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML = "";
              rptaData.innerHTML = rpta;
              confirmSaveApp(rpta);
              initialButtons();
              limpiarInput();
              getDataApp(paginaActual);
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
              const appId = document.getElementById("app_id");
              if (appNombre.value === "") {
                alert("Escriba el nombre de una aplicación");
              } else if (appNombre.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formApp.action);
                let dataForm = new FormData(formApp);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("appId", appId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  confirmSaveApp(rpta);
                  initialButtons();
                  limpiarInput();
                  getDataApp(paginaActual);
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

btnCancelar.addEventListener("click", initialButtons);
btnCancelar.addEventListener("click", limpiarInput);
btnCancelar.addEventListener("click", () => {
  getDataApp(paginaActual);
});

//Mostrar toda la data de Autores
const btnMostrarTodo = document.getElementById("mostrarTodo");
btnMostrarTodo.addEventListener("click", () => {
  getDataApp(paginaActual);
});

//Paginación
let paginaActual = 1;
getDataApp(paginaActual);

selectRows.addEventListener('change', ()=>{
  getDataApp(paginaActual)
}, false)

function getDataApp(pagina) {
  let num_registros = document.getElementById("num_registros").value;  
  if (pagina != null) {
    paginaActual = pagina;
  }

  let url = "/admin/data/mi_app/acciones/app/paginador.php";
  let formData = new FormData();  
  formData.append("registros", num_registros);
  formData.append("pagina", paginaActual);

  fetch(url, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((rows) => {
      //let rptData = document.getElementById('rptData');
      //rptData.innerHTML="";
      //rptData.innerHTML = rows.data;
      //console.log(rows);
      let tablaApps = document.getElementById("tabla_app");
      tablaApps.innerHTML = "";
      tablaApps.innerHTML = rows.data;
      seleccionarFila();
      document.getElementById("lbl-total").innerHTML =
        "Mostrando: " +
        rows.totalFiltro +
        " de " +
        rows.totalRegistros +
        " registros";
      document.getElementById("nav-paginacion").innerHTML = rows.paginacion;
    }).catch((err) => console.log(err));
}

//BUSCADOR DE COINCIDENCIAS INMEDIATAS
buscador.addEventListener('keyup', () => {  
  if (buscador.value!="") {
    let request = new XMLHttpRequest();
    request.open(
      "POST",
      "/admin/data/mi_app/acciones/app/buscaDatosApp.php",
      true
    );
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send(`buscador=${buscador.value}`);
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
        let busquedaApp = request.responseText;
        //console.log(typeof busquedaApp);//string
        //console.log(busquedaApp);
        let dataApp = JSON.parse(busquedaApp);
        //console.log(typeof dataApp);//object
        //console.log(dataApp);

        let template = "";
        dataApp.forEach(app => {
          template += `
                       <tr class="fila">
                         <td class="td-border">${app.id}</td>
                         <td class="td-border"><a>${app.nombre}</a></td>
                         <td class="td-border"><a>${app.tecnologia}</a></td>
                         <td class="td-border"><a>${app.autor}</a></td>
                         <td class="td-border"><a>${app.url}</a></td>
                         <td class="td-border"><a>${app.descripcion}</a></td>
                         <td class="text-center">
                          <button class="btn p-0 mx-2 seleccionar" type="button" value="seleccionar" name="accionBtnTable" >
                            <span class="h5"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                          </button>
                           <button class="btn p-0 mx-2 eliminar" type="button" value="eliminar" name="acciones">
                             <span class="h5"><i class="bi bi-trash-fill text-yellow"></i></span>
                           </button>
                         </td>
                       </tr>
                     `;
        });
        let tablaApp = document.getElementById("tabla_app");
        tablaApp.innerHTML = "";
        tablaApp.innerHTML = template;
        seleccionarFila();
      }
    }
  } else {
    getDataApp();
  }
})

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
              filaElement.children[5].children[0].addEventListener("click",() => {
                  //console.log(filaElement.children[10].children[0]);
                  const filaID = filaElement.children[0].innerHTML;
                  //console.log(filaID);
                  let rptData = document.getElementById("rpta");
                  rptData.innerHTML = "";
                  rptData.innerHTML = "Registro seleccionado: " + filaID;
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
              filaElement.children[5].children[1].addEventListener("click",() => {
                //console.log(filaElement.children[10].children[1]);
                const filaID = filaElement.children[0].innerHTML;
                //console.log(filaID);
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

function resaltarFila(){
  let tr = document.querySelectorAll("tr.fila");
  //console.log(td);
  for (let i = 0; i < tr.length; i++) {
    const trElement = tr[i];
    trElement.addEventListener('click', ()=>{
      trElement.style.backgroundColor = "tomato";
      trElement.style.color = "black";
    })
    for (let j = 0; j < tr.length; j++) {
      const element = tr[j];
      element.addEventListener('click', ()=>{
        trElement.removeAttribute("style")
        element.style.backgroundColor = "tomato";
        element.style.color = "black";
      })
    }
  }
}

function seleccionarRegistro(filaID){
  const appId = document.getElementById("app_id");
  appId.setAttribute("type", "hidden");
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/data/mi_app/acciones/app/get_data_id_app.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`app_id=${filaID}`);
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
};

function eliminarRegistro(filaID) {
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/data/mi_app/acciones/app/eliminaApp.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`app_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
    getDataApp(paginaActual);
  };
}

function getRegistro(rptJSON) {
  const appId = document.getElementById("app_id");
  const appNombre = document.getElementById("app_nombre");
  const appAutor = document.getElementById('app_autor');
  const appTecno = document.getElementById('app_tecno');
  const appUrl = document.getElementById("app_url");
  const appDescripcion = document.getElementById('app_descripcion');  

  rptJSON.forEach(rpt => {
    appId.value = rpt.id;
    appNombre.value = rpt.nombre;
    appAutor.value = rpt.autor;
    appTecno.value = rpt.tecnologia;
    appUrl.value = rpt.url;
    appDescripcion = rpt.descripcion;
  });  
}

function adminButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const appId = document.getElementById("app_id");

  if (btnModificar.hasAttribute("disabled")) {
    btnModificar.removeAttribute("disabled");
    btnAgregar.setAttribute("disabled", "disabled");
    btnCancelar.removeAttribute("disabled");
    appId.removeAttribute("disabled");
  }
}

function initialButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const appId = document.getElementById("app_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");
    appId.setAttribute("type", "text");
    appId.value = "";
    appId.setAttribute("disabled", "disabled");
  }
  getDataApp();
}

//COMPLEMENTARIOS
function limpiarInput() {
  const appId = document.getElementById("app_id");
  const appNombre = document.getElementById("app_nombre");
  const appAutor = document.getElementById("app_autor");
  const appTecno = document.getElementById("app_tecno");
  const appUrl = document.getElementById("app_url");
  const appDescripcion = document.getElementById("app_descripcion"); 
  const buscador = document.getElementById('buscador');
  portada.setAttribute("src", "");
  appId.value = "";
  appNombre.value = "";
  appAutor.value = "";
  appTecno.value = "";
  appUrl.value = "";
  appDescripcion.value = "";
  buscador.value="";
}

// alerts de Sweetalert
function confirmSaveApp(a) {
  // let rptData = document.getElementById('rptData');
  // rptData.innerHTML = a;
  let msg = a;
  if (msg == "El archivo se ha subido correctamente.Grabación exitosa" || msg == "Error al subir el archivo.Grabación exitosa") {
    alertSaveExito();
  } else {
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