<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    public function power(int $a, int $b): int|float
    {
        return pow($a, $b);
    }
}
