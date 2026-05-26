<?php

namespace App\Http\Controllers;

class OperationsController extends Controller
{
    /**
     * Potencia de un número.
     */
    public function power(int $a, int $b): int|float
    {
        return pow($a, $b);
    }

    /**
     * Suma de dos números.
     */
    public function addition(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Multiplicación de dos números.
     */
    public function multiplication(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * División de dos números.
     */
    public function division(int $a, int $b): float|string
    {
        if ($b == 0) {
            return "Error: división entre cero";
        }

        return $a / $b;
    }

    /**
     * Promedio de dos números.
     */
    public function average(int $a, int $b): float
    {
        return ($a + $b) / 2;
    }

    /**
     * Resta de dos números.
     */
    public function subtraction(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * Módulo o residuo de una división.
     */
    public function modulo(int $a, int $b): int
    {
        return $a % $b;
    }

    /**
     * Calcula el porcentaje de un total.
     */
    public function percentage(int $total, int $percent): float
    {
        return ($total * $percent) / 100;
    }
}
