<?php
$endpoint = $_GET['endpoint'] ?? '';

switch ($endpoint) {
    case 'services':
        include '../api/services.php';
        break;
    case 'about-us':
        include '../api/about-us.php';
        break;
    case 'contact':
        include '../api/contact.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["error" => "Endpoint no encontrado"]);
        break;
}
?>