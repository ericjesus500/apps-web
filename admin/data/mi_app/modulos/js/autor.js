const btnCancelar = document.getElementById('cancelar');
const formAutor = document.getElementById('formAutor');
const btns = document.querySelectorAll('button[name="accion"]');
const buscador = document.getElementById("buscador");
const autorFile = document.getElementById('autor_file');
const autorNombre = document.getElementById('input_autor');
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
          if (autorNombre.value === "") {
            alert("Escriba el nombre de un autor");
          } else if (autorNombre.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formAutor.action);
            let dataForm = new FormData(formAutor);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML = "";
              rptaData.innerHTML = rpta;
              confirmSaveAutor(rpta);
              initialButtons();
              limpiarInput();
              getDataAutor(paginaActual);
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
              const autorId = document.getElementById("input_id");
              if (autorNombre.value === "") {
                alert("Escriba el nombre de un autor");
              } else if (autorNombre.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formAutor.action);
                let dataForm = new FormData(formAutor);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("autorId", autorId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  confirmSaveAutor(rpta);
                  initialButtons();
                  limpiarInput();
                  getDataAutor(paginaActual);
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
btnCancelar.addEventListener("click", ()=>{
  getDataAutor(paginaActual);
});

//Mostrar toda la data de Autores
const btnMostrarTodo = document.getElementById("mostrarTodo");
btnMostrarTodo.addEventListener("click", ()=>{
  getDataAutor(paginaActual);
});

//Renderizar imagen
autorFile.addEventListener('change', ()=>{
    const formAutor = document.getElementById('formAutor');    
    if (formAutor) {
      const formDataAutor = new FormData(formAutor)
      renderImage(formDataAutor)
    }
})

function renderImage(formDataAutor){
  const portada = document.getElementById('portada');
  const autor_file = formDataAutor.get('autor_file')
  const url_image = URL.createObjectURL(autor_file)
  console.log(url_image)
  portada.setAttribute('src', url_image )
}

//Paginación
let paginaActual = 1;
getDataAutor(paginaActual);

selectRows.addEventListener('change', ()=>{    
  getDataAutor(paginaActual)
}, false)

function getDataAutor(pagina) {
  let num_registros = document.getElementById("num_registros").value;  
  if (pagina != null) {
    paginaActual = pagina;
  }

  let url = "/admin/data/mi_app/acciones/autor/paginador.php";
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
      let tablaAutores = document.getElementById("tabla_autor");
      tablaAutores.innerHTML = "";
      tablaAutores.innerHTML = rows.data;
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
      "/admin/data/mi_app/acciones/autor/buscaDatosAutor.php",
      true
    );
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send(`buscador=${buscador.value}`);
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
        let busquedaAutor = request.responseText;
        //console.log(typeof busquedaAutor);//string
        //console.log(busquedaAutor);
        let dataAutor = JSON.parse(busquedaAutor);
        //console.log(typeof dataAutor);//object
        //console.log(dataAutor);

        let template = "";
        dataAutor.forEach(autor => {
          template += `
                       <tr class="fila">
                         <td class="td-border">${autor.id}</td>
                         <td class="td-border"><a>${autor.autor}</a></td>
                         <td class="td-border"><a>${autor.canal}</a></td>
                         <td class="td-border"><a>${autor.url}</a></td>
                         <td class="td-border"><a>${autor.web}</a></td>
                         <td class="td-border"><a>${autor.twitter}</a></td>
                         <td class="td-border"><a>${autor.facebook}</a></td>
                         <td class="td-border"><a>${autor.twitch}</a></td>
                         <td class="td-border"><a>${autor.discord}</a></td>
                         <td class="td-border"><a>${autor.files}</a></td>
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
        let tablaAutor = document.getElementById("tabla_autor");
        tablaAutor.innerHTML = "";
        tablaAutor.innerHTML = template;
        seleccionarFila();
      }
    }
  } else {
    getDataAutor();
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
              filaElement.children[10].children[0].addEventListener("click",() => {
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
              filaElement.children[10].children[1].addEventListener("click",() => {
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
  const inputId = document.getElementById("input_id");
  inputId.setAttribute("type", "hidden");
  let XHR = new XMLHttpRequest();
  XHR.open(
    "POST",
    "/admin/data/mi_app/acciones/autor/get_data_id_autor.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`autor_id=${filaID}`);
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
    "/admin/data/mi_app/acciones/autor/eliminaAutor.php"
  );
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`autor_id=${filaID}`);
  XHR.onreadystatechange = function () {
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML = "";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
    getDataAutor(paginaActual);
  };
}

function getRegistro(rptJSON) {
  let inputId = document.getElementById("input_id");
  let inputAutor = document.getElementById("input_autor");
  let inputCanal = document.getElementById("input_canal");
  let inputUrl = document.getElementById("input_url");
  let inputWeb = document.getElementById("input_web");
  let inputTwitter = document.getElementById("input_twitter");
  let inputFacebook = document.getElementById("input_facebook");
  let inputTwitch = document.getElementById("input_twitch");
  let inputDiscord = document.getElementById("input_discord");
  let portada = document.getElementById("portada");
  const URL_IMG = "/admin/data/mi_app/acciones/autor/img_autores/";

  rptJSON.forEach(rpt => {
    inputId.value = rpt.id;
    inputAutor.value = rpt.autor;
    inputCanal.value = rpt.canal;
    inputUrl.value = rpt.url;
    inputWeb.value = rpt.web;
    inputTwitter.value = rpt.twitter;
    inputFacebook.value = rpt.facebook;
    inputTwitch.value = rpt.twitch;
    inputDiscord.value = rpt.discord;
    portada.setAttribute("src", `${URL_IMG}${rpt.file}`);
  });  
}

function adminButtons() {
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");
  const inputId = document.getElementById("input_id");

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
  const inputId = document.getElementById("input_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");
    inputId.setAttribute("type", "text");
    inputId.value = "";
    inputId.setAttribute("disabled", "disabled");
  }
  getDataAutor();
}

//COMPLEMENTARIOS
function limpiarInput() {
  const id = document.getElementById("input_id");
  const autor = document.getElementById("input_autor");
  const canal = document.getElementById("input_canal");
  const url = document.getElementById("input_url");
  const web = document.getElementById("input_web");
  const twitter = document.getElementById("input_twitter");
  const facebook = document.getElementById("input_facebook");
  const twitch = document.getElementById("input_twitch");
  const discord = document.getElementById("input_discord");
  const autorFile = document.getElementById("autor_file");
  const portada = document.getElementById("portada");
  const buscador = document.getElementById('buscador');
  portada.setAttribute("src", "");
  id.value = "";
  autor.value = "";
  canal.value = "";
  url.value = "";
  web.value = "";
  twitter.value = "";
  facebook.value = "";
  twitch.value = "";
  discord.value = "";
  autorFile.value = "";
  buscador.value="";
}

// alerts de Sweetalert
function confirmSaveAutor(a) {
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