let btnAgregar = document.getElementById("agregar");
let btnModificar = document.getElementById('modificar');

traerListado();

btnAgregar.addEventListener("click", (e) => {
  //alert("Bienvenido al sitio de estudio");
  e.preventDefault();
  let tecno = document.getElementById("input_tecnologia").value;
  if (tecno != "") {    
    // Grabar tecnologia
    let XHR;
    if (window.XMLHttpRequest) {
      XHR = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
      XHR = new ActiveXObject("Microsoft.XMLHTTP");
    }
    XHR.open("POST", "/admin/para_estudio/mi_app/acciones/guardaTecnologia.php");
    XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    XHR.onreadystatechange = function () {
      rpta = XHR.responseText;
      comprobar(rpta);
      traerListado();
    };
    XHR.send(`tecnologia_nombre=${tecno}`);    
    limpiarInput();
  } else {
    alert("Escriba el nombre de una tecnología");
  }
});

btnModificar.addEventListener("click", () => {
  let msg = "Inserción fallida";

  if (msg == "Inserción exitosa") {
    btnAlertExito();
  }
  if (msg == "Inserción fallida") {
    btnAlertFalla();
  }  
});

function limpiarInput() {
  let tecno = document.getElementById("input_tecnologia");
  tecno.value = "";
}

function comprobar(a) {
  let msg = a;
  //console.log(msg); //Inserción exitosa
  if (msg == "Inserción exitosa") {
    btnAlertExito();
  }
  if (msg == "Inserción fallida") {
    btnAlertFalla();
  }
}

function traerListado() {
  let objXHR;
  if (window.XMLHttpRequest) {
    objXHR = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    objXHR = new ActiveXObject("Microsoft.XMLHTTP");
  }
  objXHR.open("GET", "/admin/para_estudio/mi_app/acciones/get_tecnologia.php", true);
  objXHR.send();
  objXHR.onreadystatechange = function () {
    if (objXHR.readyState == 4 && objXHR.status == 200) {
      let data = objXHR.responseText;
      //console.log(data);
      const tecnos = JSON.parse(data);
      let template = "";
      tecnos.forEach((tecno) => {
        template += `
                  <tr>
                    <td>${tecno.id}</td>
                    <td>
                      <a>${tecno.tecno}</a>
                    </td>
                    <td class="text-center">
                      <button class="btn p-0 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Seleccionar">
                        <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                      </button>
                      <button class="btn p-0 mx-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar">
                        <span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
                      </button>
                    </td>
                  </tr>
                `;
      });
      //console.log(template);
      let printTecnos = document.getElementById("tecnologia");
      printTecnos.innerHTML = "";
      printTecnos.innerHTML = template;
    }
  };
}

function btnAlertExito(){
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

function btnAlertFalla(){
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
    title: "Signed in successfully",
  })
}