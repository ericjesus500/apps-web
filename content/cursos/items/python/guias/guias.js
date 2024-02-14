const buscador = document.getElementById("buscador");

//BUSCADOR DE COINCIDENCIAS INMEDIATAS
buscador.addEventListener('keyup', () => {  
  if (buscador.value!="") {
    let request = new XMLHttpRequest();
    request.open(
      "POST",      
      "/content/cursos/items/python/articulos/buscaDatosGuia.php",
      true
    );
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.send(`buscador=${buscador.value}`);
    request.onreadystatechange = function(){
      if(request.readyState == 4 && request.status == 200){
        let busquedaGuia = request.responseText;
        //console.log(busquedaGuia);
        let dataGuia = JSON.parse(busquedaGuia);
        let template = "";
        let url;
        dataGuia.forEach(guia => {
          url = "/content/cursos/articulos/";
          template += `
                       <tr class="fila text-white">
                         <td class="td-border">${guia.id}</td>
                         <td class="td-border"><a>${guia.titulo}</a></td>
                         <td class="td-border"><a>${guia.autor}</a></td>
                         <td class="td-border"><a class="text-amarillo" href="${guia.href}" target="_blank">${guia.href}</a></td>
                         <td class="td-border"><a class="text-amarillo" href="${url}${guia.hrefLocal}" target="_blank">${guia.hrefLocal}</a></td>
                       </tr>
                     `;
        });
        let tablaGuia = document.getElementById("tabla_guia");
        tablaGuia.innerHTML = "";
        tablaGuia.innerHTML = template;
        resaltarFila();
      }
    }
  } else if (buscador.value === "") {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "/content/cursos/items/python/articulos/get_guia.php", true)
    xhr.send();
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        let dataGuia = xhr.responseText;
        //console.log(dataGuia);
        const guias = JSON.parse(dataGuia);
        let template = "";
        let url;
        guias.forEach((guia) => {
          url = "/content/cursos/articulos/";
          template += `
                  <tr class="fila text-white">
                    <td class="td-border">${guia.id}</td>
                    <td class="td-border"><a>${guia.titulo}</a></td>
                    <td class="td-border"><a>${guia.autor}</a></td>
                    <td class="td-border"><a class="text-amarillo" href="${guia.href}" target="_blank">${guia.href}</a></td>
                    <td class="td-border"><a class="text-amarillo" href="${url}${guia.hrefLocal}" target="_blank">${guia.hrefLocal}</a></td>
                  </tr>
                `;
        });
        //console.log(template);
        let printGuias = document.getElementById("tabla_guia");
        printGuias.innerHTML = "";
        printGuias.innerHTML = template;
        resaltarFila();
      }
    };
  }
})

function resaltarFila() {
  let tr = document.querySelectorAll("tr.fila");
  for (let i = 0; i < tr.length; i++) {
    const trElement = tr[i];
    //console.log(trElement);
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

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});
