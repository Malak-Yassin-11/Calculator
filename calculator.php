<?php

class Calculator {
    private Operation $operation;

    public function __construct(Operation $operation) {

        $this->operation = $operation;
    }

    public function operate(float $firstNumber, float $secondNumber): void {

        try {
            $this->operation->setOperands($firstNumber, $secondNumber);
            $result = $this->operation->calculate();
            $formattedResult =  number_format($result, 3);
            echo "Result: $formattedResult \n";

            if ($this->operation instanceof Loggable) {
                $this->operation->log("Calculated $firstNumber and $secondNumber => $formattedResult");
            }

        } catch (Throwable $e) {
            throw $e; 
        }
    }

}
