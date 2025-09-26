addEventListener('load', inicializarEventos, false);

function inicializarEventos(){
	for(let i =1; i<=5; i++){
		let ob=document.getElementById('enlace'+i);
		ob.addEventListener('click', presionarEnlace, false)
	}
}

function presionarEnlace(e){
	e.preventDefault();
	let url = e.target.getAttribute('href');
	cargarCliente(url);
}

let conexion1;
function cargarCliente(url){
	conexion1 = new XMLHttpRequest();
	conexion1.onreadystatechange = procesarEventos;
	conexion1.open("GET", url, true);
	conexion1.send();
}

function procesarEventos(){
	let info = document.getElementById('informacion');
	if (conexion1.readyState == 4) {
		info.innerHTML = conexion1.responseText;
	}else{
		info.innerHTML = 'Cargando ...'
	}
}