
<?php

use App\Models\Calculator\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{

  /** @test */
  public function devides_given_operands()
  {
        $division = new Subtraction;
        $division->setOperands([100, 2]);

        $this->assertEquals(98, $division->calculate());
  }

  /** @test */  
  // public function removes_division_by_zero_operands()
  // {
  //       $division = new Subtraction;
  //       $division->setOperands([10, 0, 0, 5, 0]);

  //       $this->assertEquals(2, $division->calculate());
  // }

}
