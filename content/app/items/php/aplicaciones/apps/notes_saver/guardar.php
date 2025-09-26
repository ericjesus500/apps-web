<?php
// guardar.php

// Obtener los datos del formulario
$titulo = $_POST['titulo'] ?? '';
$descripcion = $_POST['descripcion'] ?? '';
$codigo = $_POST['codigo'] ?? '';
$etiquetas = $_POST['etiquetas'] ?? '';
$indice = $_POST['indice'] ?? null;

// Validar campos mínimos
if (trim($titulo) === '' || trim($descripcion) === '') {
    die('Título y descripción son obligatorios.');
}

// Cargar notas existentes
$archivo = 'notas.json';
$notas = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

// Crear o actualizar nota
$nuevaNota = [
    'titulo' => $titulo,
    'descripcion' => $descripcion,
    'codigo' => $codigo,
    'etiquetas' => $etiquetas,
    'fecha' => date('Y-m-d H:i:s')
];

if (is_numeric($indice) && isset($notas[$indice])) {
    $notas[$indice] = $nuevaNota; // Editar nota existente
} else {
    $notas[] = $nuevaNota; // Agregar nueva nota
}

// Guardar archivo
file_put_contents($archivo, json_encode($notas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Redirigir de vuelta al formulario
header('Location: index.html');
exit;
