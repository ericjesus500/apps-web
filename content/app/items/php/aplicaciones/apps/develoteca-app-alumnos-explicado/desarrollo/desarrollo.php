<?php 
	const RUTA_IMAGES = BASE_URL."php/aplicaciones/apps/develoteca-app-alumnos-explicado/desarrollo/img/";
 ?>
<div class="container mt-3">
	<h1 class="text-center text-primary">APP CERTIFICACION DE ALUMNOS</h1>
	<h5 class="text-center text-success"><small>By Develoteca</small></h5>

	<section>
		<article>
			<h2 class="text-info my-5">Estructura de directorios</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid mx-auto d-block" src=<?=RUTA_IMAGES."01-estructura.PNG"?> alt="estructura">
					</div>
					<div class="col-md-8">
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>vista_alumnos.php</b> es donde estará el formulario para el ingreso de la información de alumnos.</li>
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>alumnos.php</b> es donde se va a recepcionar la información ingresada en <b>vista_alumnos.php</b></li>
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>vista_cursos</b> es donde estará el formulario para el ingreso de la información de los cursos.</li>
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>cursos.php</b> es donde se recepcionará la información ingresada en <b>vista_cursos.php</b></li>
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>certificado.php</b> es el archivo donde se gestionará la impresión de los certificados de los alumnos.</li>
							<li class="list-group-item"><i class="bi bi-check-all text-info"></i><b>index.php</b> es el archivo de bienvenida a la aplicación</li>
						</ul>
						<img  class="img-fluid mx-auto d-block" src=<?=RUTA_IMAGES."03-secciones-index.PNG"?> alt="03-secciones-index">
					</div>
				</div>
			</div>			
		</article>
		<article>
			<h2 class="text-info my-5">Inicio de la aplicación</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-fluid mx-auto d-block" src=<?=RUTA_IMAGES."02-inicio-app.PNG"?> alt="inicio-app">
					</div>
					<div class="col-md-8">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">usuario: jesus</li>
							<li class="list-group-item">password: admin</li>
						</ul>
					</div>
				</div>
			</div>
			<h3 class="text-danger my-5">Código</h3>
			<pre class="pre-content-list bg-dark">
				<code>
					<span class="comentario">//index.php inicial de la aplicación</span>

					&lt;?php 

				    &nbsp;&nbsp;&nbsp;<span class="text-info">session_start()</span>;

				    &nbsp;&nbsp;&nbsp;if ($_POST) {
				        
				        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$mensaje="Usuario o contraseña incorrecto";

				        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($_POST['<span class="text-lila">usuario</span>']=='jesus' && $_POST['<span class="text-warning">password</span>']=='admin') {
				            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$_SESSION['<span class="text-lila">usuario</span>']=$_POST['<span class="text-lila">usuario</span>'];            
				            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;header('Location:./secciones/index.php');
				        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				    &nbsp;&nbsp;&nbsp;}

					?&gt;

					&lt;!DOCTYPE html&gt;
					&lt;html lang="es"&gt;
					&lt;head&gt;
					    &nbsp;&nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;
					    &nbsp;&nbsp;&nbsp;&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
					    &nbsp;&nbsp;&nbsp;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
					    &nbsp;&nbsp;&nbsp;&lt;link rel="stylesheet" href="./src/bootstrap520/css/bootstrap.min.css"&gt;
					    &nbsp;&nbsp;&nbsp;&lt;title&gt;App Alumnos&lt;/title&gt;
					&lt;/head&gt;
					&lt;body&gt;
					    &nbsp;&nbsp;&nbsp;&lt;div class="container mt-4"&gt;
					        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="row"&gt;
					            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-md-4"&gt;&lt;/div&gt;
					            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-md-4"&gt;
					                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;form action="" method="post"&gt;
					                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="card"&gt;
					                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="card-header"&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio de Sesión
					                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="card-body"&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">&lt;?php</span> if(isset($mensaje)){ <span class="text-info">?&gt;</span>
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="alert alert-danger" role="alert"&gt;
					                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;strong class="alert-heading"&gt;&lt;?= $mensaje ?&gt;&lt;/strong&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">&lt;?php</span> } <span class="text-info">?&gt;</span>                            
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="mb-3"&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label for="" class="form-label"&gt;<span class="text-yellow">Usuario</span>&lt;/label&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="text"
					                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="form-control" name="<span class="text-lila">usuario</span>" id="usuario" aria-describedby="helpId"&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small id="helpId" class="form-text text-muted"&gt;Escriba su usuario&lt;/small&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="mb-3"&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label for="" class="form-label"&gt;<span class="text-yellow">Password</span>&lt;/label&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="password"
					                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;class="form-control" name="<span class="text-warning">password</span>" id="password" aria-describedby="helpId"&gt;
					                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;small id="helpId" class="form-text text-muted"&gt;Ingrese su contraseña&lt;/small&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;button type="submit" class="btn btn-primary"&gt;<span class="text-yellow">Iniciar sesión</span>&lt;/button&gt;
					                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;                    
					                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/form&gt;
					            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-md-4"&gt;&lt;/div&gt;
					        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;
					    &nbsp;&nbsp;&nbsp;&lt;/div&gt;
					&lt;/body&gt;
					&lt;/html&gt;
				</code>
			</pre>
		</article>
		<article>
			<h2 class="text-info my-5">Index.php de la App</h2>
			<img  class="img-fluid mx-auto d-block" src=<?=RUTA_IMAGES."03-secciones-index.PNG"?> alt="03-secciones-index">
			<h3 class="text-danger my-5">Código</h3>
			<pre class="pre-content-list bg-dark">
				<code>
					<span class="comentario">//head.php</span>

					&lt;?php 
					    session_start();
					    if (!isset($_SESSION{'usuario'})) {
					      header('Location:../index.php');
					    }
					?&gt;

					&gt;!doctype html&gt;
					&gt;html lang="es"&gt;
					  &gt;head&gt;
					    &gt;title&gt;App Alumnos&gt;/title&gt;
					    &gt;!-- Required meta tags --&gt;
					    &gt;meta charset="utf-8"&gt;
					    &gt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;

					    &gt;!-- Bootstrap CSS v5.2.0-beta1 --&gt;
					    &gt;link rel="stylesheet" href="../src/bootstrap520/css/bootstrap.min.css"&gt;
					    &gt;link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css"&gt;    

					  &gt;/head&gt;
					  &gt;body&gt;
					    &gt;nav class="navbar navbar-expand navbar-light bg-light"&gt;
					        &gt;div class="nav navbar-nav"&gt;
					            &gt;a class="nav-item nav-link active" href="index.php"&gt;Inicio&gt;/a&gt;
					            &gt;a class="nav-item nav-link" href="vista_alumnos.php"&gt;Alumnos&gt;/a&gt;
					            &gt;a class="nav-item nav-link" href="vista_cursos.php"&gt;Cursos&gt;/a&gt;
					            &gt;a class="nav-item nav-link" href="cerrar.php"&gt;Cerrar Sesión&gt;/a&gt;
					        &gt;/div&gt;
					    &gt;/nav&gt;

					    &gt;div class="container"&gt;
				</code>
			</pre>
		</article>
	</section>
</div>