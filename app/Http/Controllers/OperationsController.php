<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    public function power(int $a, int $b): int|float
    {
        return pow($a, $b);
    }

    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }
     public function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }
    public function average(int $a, int $b): float
    {
    return ($a + $b) / 2;
    }
}
