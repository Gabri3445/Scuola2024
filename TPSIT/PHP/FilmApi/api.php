<?php

require __DIR__ . '/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_SERVER["PATH_INFO"] == "/movies") {
        $title = $_GET["title"];
        http_response_code(200);
        header("Content-Type: application/json");
        $result = getMovies($title);
        echo json_encode([
            "status" => 200,
            "message" => "",
            "payload" => $result
        ]);
    }
} else {
    http_response_code(405);
    header("Content-Type: application/json");
    echo json_encode([
        "status" => 405,
        "message" => "Method not allowed",
        "payload" => []
    ]);
}