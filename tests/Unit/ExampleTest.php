<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    //Multiplicacion 
    public function test_multiplication_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->multiplication(5, 3);

        $this->assertEquals(15, $result);
    }

    //Promedio 
    public function test_average_result(): void
    {
    $controller = new OperationsController;

    $result = $controller->average(8, 4);

    $this->assertEquals(6, $result);
    }

    public function test_power_result(): void
    {
        $controller = new OperationsController;
        $result = $controller->power(4, 9);

        $this->assertIsInt($result);
        $this->assertNotNull($result);
        $this->assertEquals(262144, $result);  // 4^9 = 262,144
        $this->assertGreaterThan(0, $result);
    }

    public function test_addition_result(): void
    {
        $controller = new OperationsController;
        $result = $controller->addition(4, 9);
        $this->assertEquals(13, $result);
    }


    //Restar 
    public function test_subtraction_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->subtraction(10, 4);

        $this->assertEquals(6, $result);
    }

    //Division
    public function test_division_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->division(20, 5);

        $this->assertEquals(4, $result);
    }


    public function test_modulo_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->modulo(10, 3);

        $this->assertEquals(1, $result);
    }
}
