document.addEventListener("DOMContentLoaded", traerListGuias);

function traerListGuias() {
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
        const URL_BASE = `../../../../content/cursos/items/${guia.categoria}/articulos/`;
        template += `
                    <tr>
                      <td class="td-border text-white">${guia.id}</td>
                      <td class="td-border text-white">${guia.titulo}</td>
                      <td class="td-border"><a class="text-skyblue_2">${guia.autor}</a></td>
                      <td class="td-border text-white">${guia.categoria}</td>
                      <td class="td-border text-white"><a class="text-amarillo" href="${guia.href}" target="_blank">${guia.href}</a></td>
                      <td class="td-border text-white"><a class="text-amarillo" href="${URL_BASE}${guia.hrefLocal}" target="_blank">${guia.hrefLocal}</a></td>
                      <td class="text-center">
                        <button class="btn p-0 mx-2 seleccionar" type="button" name="accion" value="seleccionar">
                          <span class="h4"><i class="bi bi-check2-square text-skyblue_2"></i></span>
                        </button>
                        <button class="btn p-0 mx-2" type="button" name="accion" value="eliminar" id="eliminar">
                          <span class="h4"><i class="bi bi-trash-fill text-yellow"></i></span>
                        </button>
                      </td>
                    </tr>
                  `;
      });
      let printGuias = document.getElementById("tabla_guia");
      printGuias.innerHTML = template;
    }
  };
}

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});
