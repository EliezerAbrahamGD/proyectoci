<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Prueba básica.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Prueba de multiplicación.
     */
    public function test_multiplication_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->multiplication(5, 3);

        $this->assertEquals(15, $result);
    }

    /**
     * Prueba de promedio.
     */
    public function test_average_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->average(8, 4);

        $this->assertEquals(6, $result);
    }

    /**
     * Prueba de potencia.
     */
    public function test_power_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->power(4, 9);

        $this->assertIsInt($result);
        $this->assertNotNull($result);
        $this->assertEquals(262144, $result); // 4^9 = 262144
        $this->assertGreaterThan(0, $result);
    }

    /**
     * Prueba de suma.
     */
    public function test_addition_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->addition(4, 9);

        $this->assertEquals(13, $result);
    }

    /**
     * Prueba de resta.
     */
    public function test_subtraction_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->subtraction(10, 4);

        $this->assertEquals(6, $result);
    }

    /**
     * Prueba de división.
     */
    public function test_division_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->division(20, 5);

        $this->assertEquals(4, $result);
    }

    /**
     * Prueba de módulo.
     */
    public function test_modulo_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->modulo(10, 3);

        $this->assertEquals(1, $result);
    }

    /**
     * Prueba de porcentaje.
     */
    public function test_percentage_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->percentage(200, 10);

        $this->assertEquals(20, $result);
    }
}
