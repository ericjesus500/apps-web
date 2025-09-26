<?php
// eliminar.php

// Recibir los datos crudos del cuerpo POST (JSON)
$input = file_get_contents('php://input');
$notas = json_decode($input, true);

if (!is_array($notas)) {
    http_response_code(400);
    echo json_encode(['error' => 'Formato inválido.']);
    exit;
}

// Guardar las notas actualizadas en el archivo
file_put_contents('notas.json', json_encode($notas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Content-Type: application/json');
echo json_encode(['ok' => true]);
exit;
