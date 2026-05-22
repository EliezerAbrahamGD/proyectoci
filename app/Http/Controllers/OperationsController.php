<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    //Potencia(Eliezer)
    public function power(int $a, int $b): int|float
    {
        return pow($a, $b);
    }
}

