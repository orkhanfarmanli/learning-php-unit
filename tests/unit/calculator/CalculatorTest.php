<?php

use App\Models\Calculator\Addition;
use App\Models\Calculator\Calculator;
use App\Models\Calculator\Subtraction;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /** @test */
    public function can_set_single_operation()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);

        $calculator = new Calculator;
        $calculator->setOperation($addition);

        $this->assertCount(1, $calculator->getOperations());
    }


    /** @test */    
    public function can_set_multiple_operations()
    {
        $addition1 = new Addition;
        $addition1->setOperands([5, 10]);

        $addition2 = new Addition;
        $addition2->setOperands([2, 7]);

        $calculator = new Calculator;
        $calculator->setOperations([$addition1, $addition2]);

        $this->assertCount(2, $calculator->getOperations());
    }

    /** @test */
    public function operations_are_ignored_if_not_instance_of_operation_interface()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);

        $calculator = new Calculator;
        $calculator->setOperations([$addition, 'Test', 'Fuck', 'Haha']);

        $this->assertCount(1, $calculator->getOperations());
    }

    /** @test */
    public function can_calculate_result()
    {
        $addition = new Addition;
        $addition->setOperands([5, 10]);

        $subtraction = new Subtraction;
        $subtraction->setOperands([50, 15]);

        $calculator = new Calculator;
        $calculator->setOperations([$addition, $subtraction]);

        $this->assertEquals(50, $calculator->calculate());
    }
}
