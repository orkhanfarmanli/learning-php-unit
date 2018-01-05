<?php 

namespace App\Models\Calculator;

use App\Models\Calculator\Exceptions\NoOperandsException;
use App\Models\Calculator\OperationAbstract;
use App\Models\Calculator\OperationInterface;

class Addition extends OperationAbstract implements OperationInterface
{
      /**
       *
       * Calculate the shit
       *
       */
      
      public function calculate()
      {
        if (count($this->operands) === 0) {
          throw new NoOperandsException;
        }
        return array_sum($this->operands);
      }

}