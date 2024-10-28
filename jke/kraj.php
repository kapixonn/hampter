<?php
// kraj.php
require 'config.php';
require 'auth.php';

$headers = apache_request_headers();

if (!isAuthorized($headers)) {
    http_response_code(401);
    echo json_encode(["message" => "Unauthorized"]);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("SELECT * FROM kraj");
    $kraje = $stmt->fetchAll();
    echo json_encode($kraje);
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method Not Allowed"]);
}
?>