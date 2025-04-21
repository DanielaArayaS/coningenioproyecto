<?php
// Simular recepción de datos del formulario
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || empty($data["name"]) || empty($data["email"]) || empty($data["message"])) {
    http_response_code(400);
    echo json_encode(["error" => "Datos incompletos"]);
    exit();
}

// Respuesta simulada
echo json_encode(["message" => "Formulario recibido, gracias por contactarnos"]);
?>
