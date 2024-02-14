const btnCancelar = document.getElementById('cancelar');
const formTecno = document.getElementById('formTecno');
const btns = document.querySelectorAll('button[name="accion"]');
const tecnoFile = document.getElementById("tecno_file");
const tecnoNombre = document.getElementById('tecno_nombre');

totalListTecno();

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
          if (tecnoNombre.value === "") {
            alert("Escriba el nombre de una tecnología");
          } else if (tecnoNombre.value != "") {
            let XHR = new XMLHttpRequest();
            XHR.open("POST", formTecno.action);
            let dataForm = new FormData(formTecno);
            dataForm.append("btnValue", btnElement.value);
            XHR.send(dataForm);
            XHR.onreadystatechange = function () {
              let rpta = XHR.responseText;
              const rptaData = document.getElementById("rpta");
              rptaData.innerHTML="";
              rptaData.innerHTML = rpta;
              comprobar(rpta);
              initialButtons();
              limpiarInput()
              totalListTecno();
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
              const tecnoId = document.getElementById("tecno_id");
              if (tecnoNombre.value === "") {
                alert("Escriba el nombre de una tecnologia");
              } else if (tecnoNombre.value != "") {
                let XHR = new XMLHttpRequest();
                XHR.open("POST", formTecno.action);
                let dataForm = new FormData(formTecno);
                dataForm.append("btnValue", btnElement.value);
                dataForm.append("tecnoId", tecnoId.value);
                XHR.send(dataForm);
                XHR.onreadystatechange = function () {
                  let rpta = XHR.responseText;
                  const rptaData = document.getElementById("rpta");
                  rptaData.innerHTML = rpta;
                  comprobar(rpta);
                  initialButtons();
                  limpiarInput();
                  totalListTecno();
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

btnCancelar.addEventListener('click', initialButtons)
btnCancelar.addEventListener('click', limpiarInput)
btnCancelar.addEventListener('click', totalListTecno)

//Mostrar toda la data tecnologia
const btnMostrarTodo = document.getElementById('btnMostrarTodo');
btnMostrarTodo.addEventListener('click', totalListTecno);

//Renderizar imagen
tecnoFile.addEventListener('change', ()=>{
    const formTecno = document.getElementById('formTecno');
    if (formTecno) {
      const formDataTecno = new FormData(formTecno)
      renderImage(formDataTecno)
    }
})

function renderImage(formDataTecno){
  const portada = document.getElementById('portada');
  const tecno_file = formDataTecno.get('tecno_file')
  const url_image = URL.createObjectURL(tecno_file)
  //  console.log(url_image)
  portada.setAttribute('src', url_image)
}

function totalListTecno() {
  let objXHR;
  if (window.XMLHttpRequest) {
    objXHR = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    objXHR = new ActiveXObject("Microsoft.XMLHTTP");
  }
  objXHR.open("GET", "/admin/data/mi_app/acciones/tecnologia/get_tecnologia.php", true);
  objXHR.send();
  objXHR.onreadystatechange = function () {
    if (objXHR.readyState == 4 && objXHR.status == 200) {
      let data = objXHR.responseText;
      //console.log(data);
      const tecnos = JSON.parse(data);
      let template = "";
      tecnos.forEach((tecno) => {
        template += `
                  <tr class="fila">
                    <td>${tecno.id}</td>
                    <td><a>${tecno.tecno}</a></td>
                    <td>${tecno.file}</td>
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
      let printTecnos = document.getElementById("tabla_tecnologia");
      printTecnos.innerHTML = "";
      printTecnos.innerHTML = template;
      seleccionarFila();
    }
  };
}

function seleccionarFila(){
  resaltarFila();
  const btnSeleccionado = document.querySelectorAll('button[name="accionBtnTable"]');
  const fila = document.querySelectorAll("tr.fila");
  
  for (const key in btnSeleccionado) {
    if (Object.hasOwnProperty.call(btnSeleccionado, key)) {
      const element = btnSeleccionado[key];
      element.addEventListener('click', ()=>{
        if (element.value==="seleccionar") {
          //console.log("soy boton seleccionar");
          for (const keyFila in fila) {
            if (Object.hasOwnProperty.call(fila, keyFila)) {
              const filaElement = fila[keyFila];
              filaElement.children[3].children[0].addEventListener("click",() => {
                //console.log(filaElement.children[3].children[0]);
                let filaID = filaElement.children[0].innerHTML;
                let rptData = document.getElementById("rpta");
                rptData.innerHTML = "";
                rptData.innerHTML = "Registro selecionado: " + filaID;
                seleccionarRegistro(filaID);
                adminButtons();
              });
            }
          }
        }else if (element.value==="eliminar") {
          //console.log("soy boton eliminar");
          for (const keyFila in fila) {
            if (Object.hasOwnProperty.call(fila, keyFila)) {
              const filaElement = fila[keyFila];
              filaElement.children[3].children[1].addEventListener("click", () => {
                //console.log(filaElement.children[3].children[1]);
                let filaID = filaElement.children[0].innerHTML;
                let rptData = document.getElementById("rpta");
                rptData.innerHTML="";
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
              });
            }
          }
        }
      })
    }
  }
}

function resaltarFila(){
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

function seleccionarRegistro(filaID){
  const inputId = document.getElementById('tecno_id');
  inputId.setAttribute("type", "hidden")
  let XHR = new XMLHttpRequest();
  XHR.open("POST", "/admin/data/mi_app/acciones/tecnologia/get_data_id_tecno.php")
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`tecno_id=${filaID}`);
  XHR.onreadystatechange = function(){
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML="";
    rptData.innerHTML = "Registro a actualizar: " + rpta;
    if (rpta) {
      rptJSON = JSON.parse(rpta);
      getRegistro(rptJSON);
    }
  }
}

function eliminarRegistro(filaID){
  let XHR = new XMLHttpRequest();
  XHR.open("POST", "/admin/data/mi_app/acciones/tecnologia/eliminaTecno.php")
  XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  XHR.send(`tecno_id=${filaID}`);
  XHR.onreadystatechange = function(){
    let rpta = XHR.responseText;
    let rptData = document.getElementById("rpta");
    rptData.innerHTML="";
    rptData.innerHTML = "Registro a eliminar: " + rpta;
    totalListTecno();
  }
}

function getRegistro(rptJSON) {
  let inputId = document.getElementById("tecno_id");
  let inputTecno = document.getElementById("tecno_nombre");  
  let portada = document.getElementById("portada");
  const URL_IMG = "/admin/data/mi_app/acciones/tecnologia/logos/";

  rptJSON.forEach((rpt) => {
    inputId.value = rpt.id;
    inputTecno.value = rpt.tecno;
    portada.setAttribute("src", `${URL_IMG}${rpt.file}`);
  });
}

function adminButtons(){
  const btnAgregar = document.getElementById('agregar');
  const btnModificar = document.getElementById('modificar');
  const btnCancelar = document.getElementById('cancelar');  
  const inputId = document.getElementById('tecno_id');

  if (btnModificar.hasAttribute("disabled")) {
    btnModificar.removeAttribute("disabled")
    btnAgregar.setAttribute("disabled", "disabled")
    btnCancelar.removeAttribute("disabled")
    inputId.removeAttribute("disabled");
  }
}

function initialButtons(){
  const btnAgregar = document.getElementById("agregar");
  const btnModificar = document.getElementById("modificar");
  const btnCancelar = document.getElementById("cancelar");  
  const inputId = document.getElementById("tecno_id");

  if (!btnModificar.hasAttribute("disabled")) {
    btnModificar.setAttribute("disabled", "disabled");
    btnAgregar.removeAttribute("disabled");
    btnCancelar.setAttribute("disabled", "disabled");    
    inputId.setAttribute("type", "text");
    inputId.value="";
    inputId.setAttribute("disabled", "disabled");
  }
  totalListTecno();
}

//Complementarios
function limpiarInput() {
  const tecno = document.getElementById("tecno_nombre");
  const tecnoFile = document.getElementById('tecno_file');  
  const portada = document.getElementById("portada");
  tecno.value = "";
  tecnoFile.value = "";
  portada.setAttribute("src", "");
}

function comprobar(a) {
  // let rptData = document.getElementById('rpta');
  //rptData.innerHTML="";
  // rptData.innerHTML = a;
  let msg = a;
  //console.log(msg); //Inserción exitosa
  if (msg == "El archivo se ha subido correctamente.Inserción exitosa") {
    alertSaveExito();
  }
  if (msg == "Inserción fallida") {
    alertSaveFalla();
  }
}

function alertSaveExito(){
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
  })
}

function alertSaveFalla(){
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
  })
}
