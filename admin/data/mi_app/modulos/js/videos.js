const btnCancelar = document.getElementById("cancelar");
const formVideo = document.getElementById("formVideo");
const btns = document.querySelectorAll('button[name="accion"]');
const buscador = document.getElementById("buscador");
const videoTitulo = document.getElementById("video_titulo");
const selectRows = document.getElementById("num_registros");
const selectListTipoVideo = document.getElementById("video_tipo");

//console.log(btns);

selectListTipoVideo.addEventListener('change', ()=>{  
  const nombreLista = document.getElementById('video_nombre_lista');
  if (selectListTipoVideo.value == 2) {
    const selectItem = selectListTipoVideo[2].innerText;
    if (selectItem === "Lista de Youtube") {
      nombreLista.setAttribute("type", "text");
      nombreLista.addEventListener('keyup', ()=>{
        videoTitulo.value = nombreLista.value
      })
    }
  } if (selectListTipoVideo.value != 2) {
    nombreLista.setAttribute("type", "hidden")
  }

})

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
          if (videoTitulo.value === "") {
            alert("Escriba el tìtulo de un video");
          } else if (videoTitulo.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formVideo.action);
            let dataForm = new FormData(formVideo);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML = "";
              rptaData.innerHTML = rpta;
              confirmSaveVideo(rpta);
              initialButtons();
              limpiarInput();
              getDataVideo(paginaActual);
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
              const videoId = document.getElementById("video_id");
              if (videoTitulo.value === "") {
                alert("Escriba el tìtulo de un video");
              } else if (videoTitulo.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formVideo.action);
                let dataForm = new FormData(formVideo);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("video_id", videoId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  confirmSaveVideo(rpta);
                  initialButtons();
                  limpiarInput();
                  getDataVideo(paginaActual);
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
  getDataVideo(paginaActual);
});

//Mostrar toda la data de Videos
const btnMostrarTodo = document.getElementById("mostrarTodo");
btnMostrarTodo.addEventListener("click", () => {
  getDataVideoFull();
});

//Paginación
let paginaActual = 1;
getDataVideo(paginaActual);

selectRows.addEventListener(
  "change",
  () => {
    getDataVideo(paginaActual);
  },
  false
);

function getDataVideoFull(){
  const paginacion = document.getElementById('nav-paginacion');
  paginacion.innerHTML = "";
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "/admin/data/mi_app/acciones/videos/get_data_full.php", true)
  xhr.send()
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      let data = xhr.responseText;
      const videos = JSON.parse(data);
      let template = "";
      videos.forEach((video) => {
        template += `
                  <tr class="fila">
                    <td class="td-border">${video.id}</td>
                    <td class="td-border">${video.titulo}</td>
                    <td class="td-border"><a class="text-amarillo">${video.url}</a></td>
                    <td class="td-border"><a class="text-amarillo">${video.web}</a></td>
                    <td class="td-border">${video.autor}</td>
                    <td class="td-border">${video.tecno}</td>
                    <td class="td-border">${video.origen}</td>
                    <td class="td-border">${video.tipo}</td>
                    <td class="td-border">${video.lista}</td>
                    <td class="td-border">${video.estado}</td>
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
      let printVideos = document.getElementById("tabla_video");
      printVideos.innerHTML = "";
      printVideos.innerHTML = template;
      seleccionarFila();
    }
  }
}

function getDataVideo(pagina) {
  let num_registros = document.getElementById("num_registros").value;
  if (pagina != null) {
    paginaActual = pagina;
  }

  let url = "/admin/data/mi_app/acciones/videos/paginador.php";
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
      let tablaVideos = document.getElementById("tabla_video");
      tablaVideos.innerHTML = "";
      tablaVideos.innerHTML = rows.data;
      seleccionarFila();
      document.getElementById("lbl-total").innerHTML =
        "Mostrando: " +
        rows.totalFiltro +
        " de " +
        rows.totalRegistros +
        " registros";
      document.getElementById("nav-paginacion").innerHTML = rows.paginacion;
    })
    .catch((err) => console.log(err));
}

//BUSCADOR DE COINCIDENCIAS INMEDIATAS
buscador.addEventListener("keyup", () => {
  if (buscador.value != "") {
    let request = new XMLHttpRequest();
    request.open(
      "POST",
      "/admin/data/mi_app/acciones/videos/buscaDatosVideos.php",
      true
    );
    request.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded"
    );
    request.send(`buscador=${buscador.value}`);
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        let busquedaVideo = request.responseText;
        //console.log(typeof busquedaAutor);//string
        //console.log(busquedaAutor);
        let dataVideo = JSON.parse(busquedaVideo);
        //console.log(typeof dataAutor);//object
        //console.log(dataAutor);

        let template = "";
        dataVideo.forEach((video) => {
          template += `
                       <tr class="fila">
                         <td class="td-border">${video.id}</td>
                         <td class="td-border">${video.titulo}</td>
                         <td class="td-border"><a class="text-amarillo">${video.url}</a></td>
                         <td class="td-border"><a class="text-amarillo">${video.web}</a></td>
                         <td class="td-border">${video.autor}</td>
                         <td class="td-border">${video.tecno}</td>
                         <td class="td-border">${video.origen}</td>
                         <td class="td-border">${video.tipo}</td>
                         <td class="td-border">${video.lista}</td>
                         <td class="td-border">${video.estado}</td>
                         <td class="text-center">
                          <button class="btn p-0 mx-2 seleccionar" type="button" value="seleccionar" name="accionBtnTable" >
                            <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                          </button>
                           <button class="btn p-0 mx-2 eliminar" type="button" value="eliminar" name="acciones">
                             <span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
                           </button>
                         </td>
                       </tr>
                     `;
        });
        let tablaVideo = document.getElementById("tabla_video");
        tablaVideo.innerHTML = "";
        tablaVideo.innerHTML = template;
        seleccionarFila();
      }
    };
  } else {
    getDataVideo();
  }
});

function seleccionarFila() {
  resaltarFila();
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
              filaElement.children[10].children[0].addEventListener(
                "click",
                () => {
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
              filaElement.children[10].children[1].addEventListener(
                "click",
                () => {
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

function resaltarFila() {
  let tr = document.querySelectorAll("tr.fila");
  //console.log(td);
  for (let i = 0; i < tr.length; i++) {
    const trElement = tr[i];
    trElement.addEventListener("click", () => {
      trElement.style.backgroundColor = "tomato";
      trElement.style.color = "black";
    });
    for (let j = 0; j < tr.length; j++) {
      const element = tr[j];
      element.addEventListener("click", () => {
        trElement.removeAttribute("style");
        element.style.backgroundColor = "tomato";
        element.style.color = "black";
      });
    }
  }
}

function seleccionarRegistro(filaID) {
  const inputId = document.getElementById("video_id");
  inputId.setAttribute("type", "hidden");
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/data/mi_app/acciones/videos/get_data_id_video.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`video_id=${filaID}`);
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
  XHR.open("POST", "/admin/data/mi_app/acciones/videos/eliminaVideo.php");
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`video_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
    getDataVideo(paginaActual);
  };
}

function getRegistro(rptJSON) {
  const videoId = document.getElementById("video_id");
  const videoTitulo = document.getElementById("video_titulo");  
  const videoUrl = document.getElementById("video_url");
  const videoWeb = document.getElementById("video_web");
  const videoTecno = document.getElementById("video_tecno");
  const videoAutor = document.getElementById("video_autor");
  const videoOrigen = document.getElementById("video_origen");
  const videoTipo = document.getElementById("video_tipo");
  const videoLista = document.getElementById("video_nombre_lista");  
  const videoEstado = document.getElementById("video_estado");
  if (videoLista.value != "") {
    videoLista.setAttribute("type", "text");  
  }

  rptJSON.forEach((rpt) => {
    videoId.value = rpt.id;
    videoTitulo.value = rpt.titulo;
    videoUrl.value = rpt.url;
    videoWeb.value = rpt.web;
    videoTecno.value = rpt.tecno;
    videoAutor.value = rpt.autor;
    videoOrigen.value = rpt.origen;
    videoTipo.value = rpt.tipo;
    videoLista.value = rpt.lista;
    videoEstado.value = rpt.estado;
  });
}

function adminButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const inputId = document.getElementById("video_id");

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
  const inputId = document.getElementById("video_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");
    inputId.setAttribute("type", "text");
    inputId.value = "";
    inputId.setAttribute("disabled", "disabled");
  }
  getDataVideo();
}

//COMPLEMENTARIOS
function limpiarInput() {
  const selectTecno = document.getElementById('video_tecno');
  const selectAutor = document.getElementById('video_autor');
  const selectOrigen = document.getElementById('video_origen');
  const selectEstado = document.getElementById('video_estado');
  const selectTipo = document.getElementById('video_tipo');
  const videoId = document.getElementById("video_id");
  const videoTitulo = document.getElementById("video_titulo");
  const videoUrl = document.getElementById("video_url");
  const videoWeb = document.getElementById("video_web");
  const videoTecno = document.getElementById("video_tecno");
  const videoAutor = document.getElementById("video_autor");
  const videoOrigen = document.getElementById("video_origen");
  const videoEstado = document.getElementById("video_estado");
  const videoTipo = document.getElementById("video_tipo");
  const videoLista = document.getElementById("video_nombre_lista");
  const buscador = document.getElementById("buscador");  
  
  videoId.value = "";
  videoTitulo.value = "";
  videoUrl.value = "";
  videoWeb.value = "";
  videoTecno.value = selectTecno[0].innerText;
  videoAutor.value = selectAutor[0].innerText;
  videoOrigen.value = selectOrigen[0].innerText;
  videoEstado.value = selectEstado[0].innerText;
  videoTipo.value = selectTipo[0].innerText;
  videoLista.value = "";
  videoLista.setAttribute("type", "hidden");
  buscador.value = "";
}

// alerts de Sweetalert
function confirmSaveVideo(a) {
  // let rptData = document.getElementById('rptData');
  // rptData.innerHTML = a;
  let msg = a;
  if (msg == "Grabación exitosa") {
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

//BUSCADOR VALIDO PARA BUSQUEDAS EXACTAS => EVITAR GUARDAR REGISTROS REPETIDOS
// buscador.addEventListener('keyup', () => {
//   let request = new XMLHttpRequest;
//   request.open("GET", "/admin/practicas/mi_app/acciones/get_autor.php", true);
//   request.send();
//   request.onreadystatechange = function(){
//     if(request.readyState == 4 && request.status == 200){
//       let data = request.responseText;
//       const autores = JSON.parse(data);
//       let template = "";
//       autores.forEach((autor)=> {
//         let id = autor.id.toLowerCase();
//         let nombreAutor = autor.autor.toLowerCase();
//         if (id === buscador.value.toLowerCase() || nombreAutor === buscador.value.toLowerCase()) {
//           template += `
//                     <tr class="fila">
//                       <td class="td-border">${autor.id}</td>
//                       <td class="td-border"><a>${autor.autor}</a></td>
//                       <td class="td-border"><a>${autor.canal}</a></td>
//                       <td class="td-border"><a>${autor.url}</a></td>
//                       <td class="td-border"><a>${autor.web}</a></td>
//                       <td class="td-border"><a>${autor.twitter}</a></td>
//                       <td class="td-border"><a>${autor.facebook}</a></td>
//                       <td class="td-border"><a>${autor.twitch}</a></td>
//                       <td class="td-border"><a>${autor.discord}</a></td>
//                       <td class="text-center">
//                         <button class="btn p-0 mx-2 seleccionar" type="button" value="seleccionar" name="acciones">
//                           <span class="h5"><i class="bi bi-check2-square text-skyblue_2"></i></span>
//                         </button>
//                         <button class="btn p-0 mx-2 eliminar" type="button" value="eliminar" name="acciones">
//                           <span class="h5"><i class="bi bi-trash-fill text-yellow"></i></span>
//                         </button>
//                       </td>
//                     </tr>
//                   `;
//         } else if (buscador.value == "") {
//           showTotalListAutor();
//         }
//       })
//       let printTecnos = document.getElementById("tabla_autor");
//       printTecnos.innerHTML = "";
//       printTecnos.innerHTML = template;
//       const button = document.querySelectorAll('button[name="acciones"]');
//       button.forEach((element) => {
//         element.addEventListener("click", () => {
//           let btnName = element.value;
//           if (btnName == "eliminar") {
//             verFilaEliminar();
//           } else if (btnName == "seleccionar") {
//             resaltarFila();
//           }
//         });
//       });
//     }
//   }
// })
