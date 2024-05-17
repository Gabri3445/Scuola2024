<?php

class Vector
{
    public Point $end;
    public float $length;

    function __construct(int $endX, int $endY)
    {
        $this->end = new Point($endX, $endY);
        $this->length = sqrt(pow($endX, 2) + pow($endY, 2));
    }
}

class Point
{
    public int $x;
    public int $y;

    function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function cosine_similarity(Vector $a, Vector $b): float
{
    // (a * b) / ||a|| * ||b||
    $topHalf = ($a->end->x * $b->end->x) + ($a->end->y * $b->end->y);
    $bottomHalf = $a->length * $b->length;
    if ($bottomHalf == 0) {
        return 0;
    }
    return $topHalf / $bottomHalf;
}



class User {
    public string $username;
    /** @var string[] $watched_movies */
    public array $watched_movies;

    /**
     * @param string $username
     * @var string[] $watched_movies
     */
    function __construct(string $username, array $watched_movies)
    {
        $this->username = $username;
        $this->watched_movies = $watched_movies;
    }
}
/** @var User[] $users   */
/** @var string[] $movies */
function build_matrix(array $users, array $movies) {
    // 
    $matrix = null;
    foreach ($movies as $movie) {
        /** @var User $user */
        foreach ($users as $user) {
            $has_watched = false;
            if (in_array($movie, $user->watched_movies)) {
               $has_watched = true;
            }
            $matrix[$movie][$user->username] = $has_watched;
        }
    }
    return $matrix;
}

$users = [
    new User("UserA", ["Test1"]),
    new User("UserB", ["Test1", "Test2"])
];

$movies = ["Test1", "Test2", "Test3"];

$matrix_test = build_matrix($users, $movies);

echo "test";

echo "test";