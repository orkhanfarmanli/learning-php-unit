<?php 

namespace App\Models\Calculator;

use App\Models\Calculator\Exceptions\NoOperandsException;
use App\Models\Calculator\OperationAbstract;
use App\Models\Calculator\OperationInterface;

class Division extends OperationAbstract implements OperationInterface
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

        return array_reduce(array_filter($this->operands), function($a, $b){
            if ($a !== null && $b !== null) {
                return $a / $b;
            }
            return $b;
        }, null);

    }
}