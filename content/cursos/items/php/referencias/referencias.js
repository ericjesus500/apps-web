// SELECCION DE MENUS DE REFERENCIAS.PHP

const check_nivel = document.querySelectorAll('.check-nivel')
for (const key in check_nivel) {
  if (Object.prototype.hasOwnProperty.call(check_nivel, key)) {
    const nivel = check_nivel[key];
    let sectionBasic = document.getElementById('basico');
    let sectionInter = document.getElementById('intermedio');
    let sectionAdvance = document.getElementById('avanzado');
    let server = document.getElementById('server');
    let composer = document.getElementById('composer');
    nivel.addEventListener('click', () => {
      switch (nivel.value) {
        case 'basico':
          let clasesBasic = sectionBasic.classList
          clasesBasic.forEach(clase => {
            if (clase === "d-none") {
              sectionBasic.classList.remove('d-none')
              sectionBasic.classList.add('d-block')
              sectionInter.classList.remove('d-block')
              sectionInter.classList.add('d-none')
              sectionAdvance.classList.remove('d-block')
              sectionAdvance.classList.add('d-none')
              server.classList.remove('d-block')
              server.classList.add('d-none')
              composer.classList.remove('d-block')
              composer.classList.add('d-none')
            }
          });
          break;
        case 'intermedio':
          let clasesInter = sectionInter.classList
          clasesInter.forEach(clase => {
            if (clase === "d-none") {
              sectionBasic.classList.remove('d-block')
              sectionBasic.classList.add('d-none')
              sectionInter.classList.remove('d-none')
              sectionInter.classList.add('d-block')
              sectionAdvance.classList.remove('d-block')
              sectionAdvance.classList.add('d-none')
              server.classList.remove('d-block')
              server.classList.add('d-none')
              composer.classList.remove('d-block')
              composer.classList.add('d-none')
            }
          });
          break;
        case 'avanzado':
          let clasesAdvance = sectionAdvance.classList
          clasesAdvance.forEach(clase => {
            if (clase === "d-none") {
              sectionBasic.classList.remove('d-block')
              sectionBasic.classList.add('d-none')
              sectionInter.classList.remove('d-block')
              sectionInter.classList.add('d-none')
              sectionAdvance.classList.remove('d-none')
              sectionAdvance.classList.add('d-block')
              server.classList.remove('d-block')
              server.classList.add('d-none')
              composer.classList.remove('d-block')
              composer.classList.add('d-none')
            }
          });
          break;
        case 'server':
          let servidor = server.classList
          servidor.forEach(clase => {
            if (clase === "d-none") {
              sectionBasic.classList.remove('d-block')
              sectionBasic.classList.add('d-none')
              sectionInter.classList.remove('d-block')
              sectionInter.classList.add('d-none')
              sectionAdvance.classList.remove('d-block')
              sectionAdvance.classList.add('d-none')
              server.classList.remove('d-none')
              server.classList.add('d-block')
              composer.classList.remove('d-block')
              composer.classList.add('d-none')
            }
          });
          break;
          case 'composer':
          let composs = composer.classList
          composs.forEach(clase => {
            if (clase === "d-none") {
              sectionBasic.classList.remove('d-block')
              sectionBasic.classList.add('d-none')
              sectionInter.classList.remove('d-block')
              sectionInter.classList.add('d-none')
              sectionAdvance.classList.remove('d-block')
              sectionAdvance.classList.add('d-none')
              server.classList.remove('d-block')
              server.classList.add('d-none')
              composer.classList.remove('d-none')
              composer.classList.add('d-block')
            }
          });
          break;
        default:
          break;
      }
    })
  }
}