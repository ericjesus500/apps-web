window.addEventListener('DOMContentLoaded', function () {

  // Seleccionamos todos los toggles
  const toggles = document.querySelectorAll('.menu-item .toggle');
  const sidebar = document.querySelector('.sidebar');
  const content = document.querySelector('.content-layout');
  const navIcon = document.querySelector('.icon-nav-header i');
  const navIconMenu = document.querySelector('.sh-admin .sh-menu #iconMenu i');
  const sm_item = document.querySelectorAll('submenu-item')

  function activaMenu() {
    navIconMenu.addEventListener('click', () => {
      const menu = document.querySelector('.sidebar .sidebar-opciones')
      const optOpc = menu.classList.contains('active')
      if (!optOpc) {
        menu.classList.add('active')
        sidebar.style.width = "270px"
      } else {
        menu.classList.remove('active')
        sidebar.style.width = "70px"
      }
      return
    })
  }

  function handleResize() {

    sm_item.forEach(item => {
      item.addEventListener('click', (e) => {
        e.preventDefault()
      })
    })

    // Función para cerrar todos los submenús
    function closeAllSubmenus() {
      document.querySelectorAll('.submenu').forEach(s => {
        s.classList.remove('active');
        s.style.maxHeight = "0px";
        s.style.opacity = "0";
      });
      document.querySelectorAll('.arrow').forEach(a => {
        a.classList.remove('open', 'close');
      });
    }

    // Manejo de submenus
    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const submenu = toggle.nextElementSibling; // el UL.submenu
        const arrow = toggle.querySelector('.arrow');
        const isOpen = submenu.classList.contains('active');

        closeAllSubmenus();

        if (!isOpen) {
          // Abrir el submenu clicado
          submenu.classList.add('active');
          submenu.style.maxHeight = submenu.scrollHeight + "px";
          submenu.style.opacity = "1";
          arrow.classList.add('open');
        }
      });
    });

    // Al cargar, solo el primer submenu activo
    const submenus = document.querySelectorAll('.submenu');
    if (submenus.length > 0) {
      closeAllSubmenus();
      submenus[0].classList.add('active');
      submenus[0].style.maxHeight = submenus[0].scrollHeight + "px";
      submenus[0].style.opacity = "1";
      const firstArrow = submenus[0].previousElementSibling.querySelector('.arrow');
      if (firstArrow) firstArrow.classList.add('open');
    }

    // 👉 Toggle Sidebar
    navIcon.addEventListener('click', () => {
      if (sidebar.classList.contains('collapsed')) {
        // Reabrir
        sidebar.classList.remove('collapsed');
        content.classList.remove('expanded');
        navIcon.classList.remove('bi-box-arrow-right');
        navIcon.classList.add('bi-box-arrow-left');
        sidebar.style.padding = "10px";
      } else {
        // Colapsar
        sidebar.classList.add('collapsed');
        content.classList.add('expanded');
        navIcon.classList.remove('bi-box-arrow-left');
        navIcon.classList.add('bi-box-arrow-right');
        sidebar.style.padding = "0";
      }
    });

  }

  handleResize()
  activaMenu()
});
