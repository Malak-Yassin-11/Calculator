<?php
abstract class Operation {

    protected float $firstNumber;
    protected float $secondNumber;

    public function setOperands(float $firstNumber, float $secondNumber) : void {

        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    abstract public function calculate(): float;
}