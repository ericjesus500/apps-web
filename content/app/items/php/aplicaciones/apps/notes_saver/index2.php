<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Notas PHP</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }
    .panel {
      padding: 1rem;
      overflow-y: auto;
    }
    .formulario {
      width: 60%;
      background: #f0f0f0;
    }
    .notas {
      width: 40%;
      background: #ffffff;
      border-left: 1px solid #ddd;
    }
    form input, form textarea, form button {
      width: 100%;
      margin-bottom: 1rem;
      padding: 0.5rem;
      font-size: 1rem;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    form button {
      background: #4f46e5;
      color: white;
      border: none;
    }
    .nota-item {
      padding: 0.75rem;
      border-bottom: 1px solid #eee;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .nota-item:hover {
      background: #f9f9f9;
      cursor: pointer;
    }
    .nota-item h4 {
      margin: 0;
    }
    .acciones button {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      margin-left: 0.5rem;
    }
    #buscador {
      width: 100%;
      padding: 0.5rem;
      font-size: 1rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    #modal {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.5);
      display: none;
      align-items: center;
      justify-content: center;
      overflow-y: auto;
      padding: 2rem;
      z-index: 1000;
    }
    #modal .contenido {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      max-width: 800px;
      width: 100%;
      max-height: 90vh;
      overflow-y: auto;
    }
    #modal pre {
      background: #eee;
      padding: 1rem;
      overflow-x: auto;
    }
    #mensaje {
      background: #d1e7dd;
      color: #0f5132;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      margin-bottom: 1rem;
      display: none;
    }
    .toolbar {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }
    .toolbar button {
      padding: 0.5rem;
      background: #e0e0e0;
      border: 1px solid #bbb;
      border-radius: 4px;
      cursor: pointer;
    }
    .sortable-ghost {
      background: #cce5ff;
      opacity: 0.7;
    }
  </style>
</head>
<body>
  <div class="panel formulario">
    <h2>Agregar / Editar Nota</h2>
    <div id="mensaje"></div>
    <div class="toolbar">
      <button type="button" onclick="agregarCampo('subtitulo')">+ Subtítulo</button>
      <button type="button" onclick="agregarCampo('descripcion')">+ Descripción</button>
      <button type="button" onclick="agregarCampo('codigo')">+ Código</button>
      <button type="button" onclick="exportarPDF()">📄 Exportar a PDF</button>
    </div>
    <form id="formNota" method="post" action="guardar.php">
      <input type="hidden" name="indice" id="indice">
      <div id="camposExtras"></div>
      <button type="submit">Guardar Nota</button>
    </form>
  </div>
  <div class="panel notas">
    <input type="text" id="buscador" placeholder="Buscar por título...">
    <h3>Notas existentes</h3>
    <div id="listaNotas"></div>
    <button onclick="mostrarMas()">Mostrar más</button>
  </div>

  <div id="modal">
    <div class="contenido">
      <h3 id="modalTitulo"></h3>
      <div id="modalExtras"></div>
      <p><strong>Etiquetas:</strong> <span id="modalEtiquetas"></span></p>
      <button onclick="cerrarModal()">Cerrar</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
  <script>
    let notas = [];
    let pagina = 0;
    const porPagina = 10;

    function cargarNotas() {
      fetch('notas.json')
        .then(res => res.json())
        .then(data => {
          notas = data || [];
          mostrarNotas();
        });
    }

    function mostrarNotas() {
      const buscador = document.getElementById('buscador').value.toLowerCase();
      const lista = document.getElementById('listaNotas');
      lista.innerHTML = '';

      let filtradas = notas.filter(n => n.titulo.toLowerCase().includes(buscador));
      let inicio = pagina * porPagina;
      let fin = inicio + porPagina;

      filtradas.slice(inicio, fin).forEach((nota, i) => {
        const div = document.createElement('div');
        div.className = 'nota-item';

        const titulo = document.createElement('h4');
        titulo.textContent = nota.titulo;
        titulo.onclick = () => verNota(nota);

        const acciones = document.createElement('div');
        acciones.className = 'acciones';

        const btnEditar = document.createElement('button');
        btnEditar.innerHTML = '✏️';
        btnEditar.onclick = () => editarNota(nota, i + inicio);

        const btnEliminar = document.createElement('button');
        btnEliminar.innerHTML = '🗑️';
        btnEliminar.onclick = () => eliminarNota(i + inicio);

        acciones.appendChild(btnEditar);
        acciones.appendChild(btnEliminar);

        div.appendChild(titulo);
        div.appendChild(acciones);
        lista.appendChild(div);
      });
    }

    function mostrarMas() {
      pagina++;
      mostrarNotas();
    }

    function verNota(nota) {
      document.getElementById('modalTitulo').textContent = nota.titulo;
      const extras = document.getElementById('modalExtras');
      extras.innerHTML = '';
      for (const clave in nota) {
        if (['titulo', 'etiquetas'].includes(clave)) continue;
        const valores = nota[clave].split('\n');
        valores.forEach(valor => {
          const el = document.createElement(clave === 'codigo' ? 'pre' : 'p');
          el.textContent = valor;
          extras.appendChild(el);
        });
      }
      document.getElementById('modalEtiquetas').textContent = nota.etiquetas;
      document.getElementById('modal').style.display = 'flex';
    }

    function cerrarModal() {
      document.getElementById('modal').style.display = 'none';
    }

    function editarNota(nota, indice) {
      document.getElementById('formNota').reset();
      document.getElementById('indice').value = indice;
      const extras = document.getElementById('camposExtras');
      extras.innerHTML = '';

      for (const clave in nota) {
        const valores = nota[clave].split('\n');
        valores.forEach(valor => {
          const campo = document.createElement(clave === 'descripcion' || clave === 'codigo' ? 'textarea' : 'input');
          campo.name = clave;
          campo.placeholder = clave.charAt(0).toUpperCase() + clave.slice(1);
          campo.value = valor;
          if (campo.tagName === 'TEXTAREA') campo.rows = clave === 'codigo' ? 5 : 3;
          extras.appendChild(campo);
        });
      }
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function eliminarNota(indice) {
      if (confirm('¿Seguro que deseas eliminar esta nota?')) {
        notas.splice(indice, 1);
        fetch('eliminar.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(notas)
        }).then(() => {
          pagina = 0;
          mostrarNotas();
          mostrarMensaje('Nota eliminada con éxito.');
        });
      }
    }

    function mostrarMensaje(texto) {
      const mensaje = document.getElementById('mensaje');
      mensaje.textContent = texto;
      mensaje.style.display = 'block';
      setTimeout(() => mensaje.style.display = 'none', 3000);
    }

    function agregarCampo(nombre) {
      const div = document.getElementById('camposExtras');
      const campo = document.createElement(nombre === 'descripcion' || nombre === 'codigo' ? 'textarea' : 'input');
      campo.name = nombre;
      campo.placeholder = nombre.charAt(0).toUpperCase() + nombre.slice(1);
      campo.id = nombre + Date.now();
      if (campo.tagName === 'TEXTAREA') campo.rows = nombre === 'codigo' ? 5 : 3;
      div.appendChild(campo);
    }

    function exportarPDF() {
      mostrarMensaje('Función para exportar a PDF aún en desarrollo.');
    }

    document.getElementById('buscador').addEventListener('input', () => {
      pagina = 0;
      mostrarNotas();
    });

    document.getElementById('formNota').addEventListener('submit', function(event) {
      event.preventDefault();
      const campos = Array.from(document.querySelectorAll('#camposExtras > input, #camposExtras > textarea'));
      const nota = {};
      campos.forEach(campo => {
        if (!nota[campo.name]) {
          nota[campo.name] = [];
        }
        nota[campo.name].push(campo.value);
      });
      // Convertir arrays a string unidos por salto de línea
      for (const clave in nota) {
        nota[clave] = nota[clave].join('\n');
      }
      const indice = document.getElementById('indice').value;
      if (indice) {
        notas[indice] = nota;
      } else {
        notas.push(nota);
      }
      fetch('guardar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(notas)
      }).then(() => {
        this.reset();
        document.getElementById('indice').value = '';
        cargarNotas();
        mostrarMensaje('Nota guardada correctamente.');
        document.getElementById('camposExtras').innerHTML = '';
      });
    });

    Sortable.create(document.getElementById('camposExtras'), {
      animation: 150,
      ghostClass: 'sortable-ghost'
    });

    cargarNotas();
  </script>
</body>
</html>
