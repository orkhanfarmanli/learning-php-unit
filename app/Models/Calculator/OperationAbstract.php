<?php 

namespace App\Models\Calculator;


abstract class OperationAbstract
{
  
    protected $operands;

    /**
     *
     * Set operands
     *
     */
    
    public function setOperands(array $operands)
    {
          $this->operands = $operands;
    }
}