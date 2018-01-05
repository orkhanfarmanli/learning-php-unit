
<?php

use App\Models\Calculator\Division;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{

  /** @test */
  public function devides_given_operands()
  {
        $division = new Division;
        $division->setOperands([100, 2]);

        $this->assertEquals(50, $division->calculate());
  }

  /** @test */  
  public function removes_division_by_zero_operands()
  {
        $division = new Division;
        $division->setOperands([10, 0, 0, 5, 0]);

        $this->assertEquals(2, $division->calculate());
  }

}
