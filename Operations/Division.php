<?php

require_once __DIR__ . '/../interfaces/Loggable.php';
require_once 'Operation.php';

class Division extends Operation implements Loggable {
    public function calculate(): float {

        if ($this->secondNumber === 0) {
            throw new Exception("Cannot divide by zero.");
        }
        return $this->firstNumber / $this->secondNumber;
    }

    public function log(string $message): void {
        
        echo "Division Operation Log: $message\n";
    }
}
