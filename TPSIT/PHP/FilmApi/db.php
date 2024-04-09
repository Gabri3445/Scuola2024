<?php

$hostname = "172.17.0.2";

$conn = mysqli_connect($hostname, "root", "password", "movie");

if ($conn->connect_error) {
    return null;
}

function getMovies($title): ?array
{
    global $conn;
    if ($conn->connect_error) {
        return null;
    }
    if (isset($title)) {
        $query =
"select m.title,
       group_concat(distinct g2.name separator ', ') as genres,
       m.synopsys,
       group_concat(distinct p.name, COALESCE(CONCAT(' ', p.middleName, ' '), ' '), p.surname separator
                    ', ')                   as actors,
       group_concat(distinct p2.name, COALESCE(CONCAT(' ', p2.middleName, ' '), ' '), p2.surname separator
                    ', ')                   as directors
from movie m
         left join genres g on m.id = g.movie
         left join genre g2 on g.genre = g2.id
         left join interprets i on m.id = i.movie
         left join person p on i.actor = p.id
         left join directs d on m.id = d.movie
         left join person p2 on d.director = p2.id
where m.title like '%pacific%'
group by m.id;";
        return $conn->query($query)->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}