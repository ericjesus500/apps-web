const btnCancelar = document.getElementById("cancelar");
const formOrigenVideo = document.getElementById("formOrigenVideo");
const btns = document.querySelectorAll('button[name="accion"]');
let origenNombre = document.getElementById("origen_video_nombre");
//console.log(btns);

//GESTION DE ACCION SOBRE BOTONES AGREGAR, MODIFICAR
totalListOrigenVideo();
for (const key in btns) {
  if (Object.hasOwnProperty.call(btns, key)) {
    const btnElement = btns[key];
    btnElement.addEventListener("click", () => {
      //console.log(btnElement.value);
      switch (btnElement.value) {
        //GRABAR REGISTRO NUEVO
        case "Agregar":
          //console.log("clickeaste Agregar");
          if (origenNombre.value === "") {
            alert("Escriba el nombre de un origen de video");
          } else if (origenNombre.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formOrigenVideo.action);
            let dataForm = new FormData(formOrigenVideo);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML = rpta;
              comprobar(rpta);
              limpiarInput();
              totalListOrigenVideo();
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
              const origenId = document.getElementById("origen_video_id");
              if (origenNombre.value === "") {
                alert("Escriba el nombre de un origen de video");
              } else if (origenNombre.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formOrigenVideo.action);
                let dataForm = new FormData(formOrigenVideo);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("origen_id", origenId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  comprobar(rpta);
                  limpiarInput();
                  totalListOrigenVideo();
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
btnCancelar.addEventListener("click", totalListOrigenVideo);

//Mostrar toda la data tipo de video
const btnMostrarTodo = document.getElementById("btnMostrarTodo");
btnMostrarTodo.addEventListener("click", totalListOrigenVideo);

function totalListOrigenVideo() {
  let objXHR;
  if (window.XMLHttpRequest) {
    objXHR = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    objXHR = new ActiveXObject("Microsoft.XMLHTTP");
  }
  objXHR.open(
    "GET",
    "/admin/data/mi_app/acciones/origen_video/get_origen_video.php",
    true
  );
  objXHR.send();
  objXHR.onreadystatechange = function () {
    if (objXHR.readyState == 4 && objXHR.status == 200) {
      let data = objXHR.responseText;
      //console.log(data);
      const origenVideos = JSON.parse(data);
      let template = "";
      origenVideos.forEach((origenVideo) => {
        template += `
                  <tr class="fila">
                    <td>${origenVideo.id}</td>
                    <td><a>${origenVideo.origenNombre}</a></td>
                    <td class="text-center">
                      <button class="btn p-0 mx-2 seleccionar" type="button" name="accionBtnTable" value="seleccionar" onclick="selectRow()">
                        <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                      </button>
                      <button class="btn p-0 mx-2 eliminar" type="button" name="accionBtnTable" value="eliminar" onclick="deleteRow()">
                        <span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
                      </button>
                    </td>
                  </tr>
                `;
      });
      //console.log(template);
      let printOrigenVideos = document.getElementById("tabla_origen_video");
      printOrigenVideos.innerHTML = "";
      printOrigenVideos.innerHTML = template;
      resaltarFila();
    }
  };
}

function selectRow() {
  //console.log("clickeaste Seleccionar");
  const btnSeleccionado = document.querySelectorAll(
    'button[name="accionBtnTable"]'
  );
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
              filaElement.children[2].children[0].addEventListener(
                "click",
                () => {
                  let filaID = filaElement.children[0].innerHTML;
                  //console.log(filaID);
                  seleccionarRegistro(filaID);
                  adminButtons();
                }
              );
            }
          }
        }
      });
    }
  }
}

function deleteRow() {
  //console.log("clickeaste Eliminar");
  const btnSeleccionado = document.querySelectorAll(
    'button[name="accionBtnTable"]'
  );
  const fila = document.querySelectorAll("tr.fila");

  for (const key in btnSeleccionado) {
    if (Object.hasOwnProperty.call(btnSeleccionado, key)) {
      const element = btnSeleccionado[key];
      element.addEventListener("click", () => {
        if (element.value === "eliminar") {
          //console.log("soy boton eliminar");
          for (const keyFila in fila) {
            if (Object.hasOwnProperty.call(fila, keyFila)) {
              const filaElement = fila[keyFila];
              filaElement.children[2].children[1].addEventListener(
                "click",
                () => {
                  //console.log(filaElement.children[2].children[0]);
                  let filaID = filaElement.children[0].innerHTML;
                  //console.log(filaID);
                  Swal.fire({
                    title: "El registro será Eliminado?",
                    text: "Esta acción no se podrá revertir, está seguro de Eliminar el registro!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, borrar registro!",
                  }).then((result) => {
                    if (result.isConfirmed) {
                      eliminarRegistro(filaID);
                      Swal.fire({
                        title: "Registro Eliminado!",
                        text: "El registro ha sido eliminado con éxito.",
                        icon: "success",
                      });
                      totalListOrigenVideo();
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
  const inputId = document.getElementById("origen_video_id");
  inputId.setAttribute("type", "hidden");
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/data/mi_app/acciones/origen_video/get_id_origen_video.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`origen_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    // let rptData = document.getElementById("rpta");
    // rptData.innerHTML = "Registro a actualizar: " + rpta;
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
    "/admin/data/mi_app/acciones/origen_video/eliminaOrigenVideo.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`origen_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
  };
}

function getRegistro(rptJSON) {
  let inputId = document.getElementById("origen_video_id");
  let inputOrigenNombre = document.getElementById("origen_video_nombre");
  rptJSON.forEach((rpt) => {
    inputId.value = rpt.id;
    inputOrigenNombre.value = rpt.origenNombre;
  });
}

function adminButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const inputId = document.getElementById("origen_video_id");

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
  const inputId = document.getElementById("origen_video_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");
    inputId.setAttribute("type", "text");
    inputId.value = "";
    inputId.setAttribute("disabled", "disabled");
  }
  totalListOrigenVideo();
}

//Complementarios
function limpiarInput() {
  const origenNombre = document.getElementById("origen_video_nombre");
  origenNombre.value = "";
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
