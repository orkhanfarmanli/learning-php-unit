<?php 

namespace App\Models\Calculator;

use App\Models\Calculator\OperationInterface;

class Calculator 
{
  protected $operations = [];

  /**
   *
   * Set operation
   *
   */
  
  public function setOperation(OperationInterface $operation)
  {
      $this->operations[] = $operation;
  }

  /**
   *
   * Set operations
   *
   */
  
  public function setOperations(array $operations)
  {
      // foreach ($operations as $operation) {
      //     if ($operation instanceof OperationInterface) {
      //         $this->operations[] = $operation;
      //     }
      // }

    $filteredOperations  = array_filter($operations, function($operation){
        return $operation instanceof OperationInterface;
    });

      $this->operations = array_merge($this->operations, $filteredOperations);
  }

  /**
   *
   * Get operations
   *
   */
  
  public function getOperations()
  {
      return $this->operations;
  }

  /**
   *
   * Calculate the result
   *
   */
  
  public function calculate()
  {
      $result = [];
      foreach ($this->operations as $operation) {
          $result[] = $operation->calculate();
      }

      return $result;
  }


}