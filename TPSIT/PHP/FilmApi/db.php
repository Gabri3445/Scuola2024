<?php

$hostname = "172.17.0.2";

$conn = mysqli_connect($hostname, "root", "password", "movie");

if ($conn->connect_error) {
    return null;
}

function getMovies($title) {
    global $conn;
    if ($conn->connect_error) {
        return null;
    }
    if (isset($title)) {
        $query = "select * from movie.movie where title like '%$title%'";
        $result = $conn->query($query)->fetch_all(MYSQLI_ASSOC);
        return $result;
    } else {
        return [];
    }
}