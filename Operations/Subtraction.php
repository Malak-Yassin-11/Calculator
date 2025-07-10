<?php

require_once __DIR__ . '/../interfaces/Loggable.php';
require_once 'Operation.php';

class Subtraction extends Operation implements Loggable {
    public function calculate(): float {

        return $this->firstNumber - $this->secondNumber;
    }

    public function log(string $message): void {

        echo "Subtraction Operation Log: $message\n";
    }
}
