<?php

class Vector
{
    public Point $start;
    public Point $end;
    public float $length;

    function __construct(int $startX, int $startY, int $endX, int $endY, float $length)
    {
        $this->start = new Point($startX, $startY);
        $this->end = new Point($endX, $endY);
        $this->length = $length;
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
    $topHalf = ($a->start->x * $b->start->y) + ($a->end->x * $b->end->y);
    $bottomHalf = $a->length * $b->length;
    return $topHalf / $bottomHalf;
}