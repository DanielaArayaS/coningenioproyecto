<?php
include '../config/config.php';

// Verificar autenticación
if ($_SERVER["HTTP_AUTHORIZATION"] !== "Bearer " . BEARER_TOKEN) {
    http_response_code(403);
    echo json_encode(["error" => "Token inválido"]);
    exit();
}

// Hacer llamada al endpoint de "Nosotros"
$endpoint = "https://ciisa.coningenio.cl/v1/about-us/";
$response = file_get_contents($endpoint);

if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(["error" => "Error al obtener la información de 'Nosotros'"]);
    exit();
}

echo $response;
?>
