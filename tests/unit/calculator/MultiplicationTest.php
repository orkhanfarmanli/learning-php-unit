<?php

use App\Models\Calculator\Multiplication;
use PHPUnit\Framework\TestCase;


class MultiplicationTest extends TestCase
{

  /** @test */
  public function devides_given_operands()
  {
        $division = new Multiplication;
        $division->setOperands([100, 2]);

        $this->assertEquals(200, $division->calculate());
  }

  /** @test */  
  // public function removes_division_by_zero_operands()
  // {
  //       $division = new Multiplication;
  //       $division->setOperands([10, 0, 0, 5, 0]);

  //       $this->assertEquals(2, $division->calculate());
  // }

}
