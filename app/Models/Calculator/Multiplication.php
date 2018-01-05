<?php 

namespace App\Models\Calculator;

use App\Models\Calculator\Exceptions\NoOperandsException;
use App\Models\Calculator\OperationAbstract;
use App\Models\Calculator\OperationInterface;

class Multiplication extends OperationAbstract implements OperationInterface
{

    /**
     *
     * Calculate operands
     *
     */
    
    public function calculate()
    {
         if (count($this->operands) === 0) {
          throw new NoOperandsException;
        }

        $result = 1;

        foreach ($this->operands as $operand) {
            $result *= $operand;
        }

        return $result;
    }
}