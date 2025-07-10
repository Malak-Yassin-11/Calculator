<?php

require_once __DIR__ . '/../interfaces/Loggable.php';
require_once 'Operation.php';

class Multiplication extends Operation implements Loggable {
    public function calculate(): float {

        return $this->firstNumber * $this->secondNumber;
    }

    public function log(string $message): void {

        echo "Multiplication Operation Log: $message\n";
    }
}
