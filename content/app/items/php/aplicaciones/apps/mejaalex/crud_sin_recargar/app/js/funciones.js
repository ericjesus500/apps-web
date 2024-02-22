function modificar(data_bd){
	cadena = data_bd.split(',');

	$("#id_").val(cadena[0]);
	$("#usuario_").val(cadena[1]);
	$("#correo_").val(cadena[2]);
	$("#telefono_").val(cadena[3]);
	$("#rol_").val(cadena[4]);

}

$('#modificar_adm').click(function(){
	var data_modificada = $('#form_adm').serialize();
	//alert(data_modificada);
	
	$.ajax({
		url: 'php/editar_usuario.php',
		type: 'POST',
		data: data_modificada,

		success: function(variable){
			$('#table_adm').load('index.php #table_adm');
			//alert("exitoso");
			$('#editarUsuario').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').hide();
		}

	})
	
});

$('#agregar_adm').click(function(){
	var nueva_data = $('#form_agregar').serialize();
	//alert(nueva_data);
	
	$.ajax({
		url: 'php/agregar_usuario.php',
		type: 'POST',
		data: nueva_data,

		success: function(variable){
			$('#table_adm').load('index.php #table_adm');
			//alert("exitoso");
			$('#nuevoUsuario').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').hide();

			$('#agg_usuario').val("");
			$('#agg_contrasenia').val("");
			$('#agg_correo').val("");
			$('#agg_telefono').val("");
		}

	})
	
});

function eliminar(data_bd){
	cadena = data_bd.split(',');

	$("#del_id").val(cadena[0]);
	$("#del_usuario").val(cadena[1]);

	document.getElementById('del_id_label').textContent = 'ID: ' + cadena[0];
	document.getElementById('del_usuario_label').textContent = 'USUARIO: ' + cadena[1];
	
}


$('#eliminar_adm').click(function(){
	var del_data = $('#form_del').serialize();
	//alert(del_data);
	
	$.ajax({
		url: 'php/eliminar_usuario.php',
		type: 'POST',
		data: del_data,

		success: function(variable){
			$('#table_adm').load('index.php #table_adm');
			$('#eliminarUsuario').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').hide();
		}

	})
	
});