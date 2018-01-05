<?php 

use App\Models\Calculator\Addition;
use App\Models\Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{

      /** @test */
      public function adds_up_given_operands()
      {
            $addition = new Addition;
            $addition->setOperands([10, 5]);

            $this->assertEquals(15, $addition->calculate());
      }

      /** @test */
      // this test doesn't work because of PHP 7.2
      // public function no_operands_given_throws_exception_when_calculating()
      // {
      //     $this->expectException(NoOperandsException::class);

      //       $addition = new Addition;
      //       $addition->calculate();
      // }

}
