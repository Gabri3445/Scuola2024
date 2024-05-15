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