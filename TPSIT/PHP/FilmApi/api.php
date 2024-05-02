<?php

require __DIR__ . '/db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_SERVER["PATH_INFO"] == "/movies") {
        if (isset($_GET["title"])) {
            $title = $_GET["title"];
            http_response_code(200);
            header("Content-Type: application/json");
            $result = getMovies($title);
            echo json_encode([
                "status" => 200,
                "message" => "",
                "payload" => $result
            ]);
            return;
        }
        http_response_code(400);
        header("Content-Type: application/json");
        echo json_encode([
            "status" => 400,
            "message" => "Bad request",
            "payload" => []
        ]);
        return;
    } else if ($_SERVER["PATH_INFO"] == "/actors") {
        if (isset($_GET["name"])) {
            $name = $_GET["name"];
            http_response_code(200);
            header("Content-Type: application/json");
            $result = getActors($name);
            echo json_encode([
                "status" => 200,
                "message" => "",
                "payload" => $result
            ]);
            return;
        }
        http_response_code(400);
        header("Content-Type: application/json");
        echo json_encode([
            "status" => 400,
            "message" => "Bad request",
            "payload" => []
        ]);
        return;
    }
} else {
    http_response_code(405);
    header("Content-Type: application/json");
    echo json_encode([
        "status" => 405,
        "message" => "Method not allowed",
        "payload" => []
    ]);
    return;
}