<?php

require_once 'Menu.php';
require_once 'Calculator.php';
require_once 'Operations/Operation.php';
require_once 'Operations/Addition.php';
require_once 'Operations/Subtraction.php';
require_once 'Operations/Multiplication.php';
require_once 'Operations/Division.php';
require_once 'Interfaces/Loggable.php';

function getNumber(string $prompt): float {

    echo $prompt;
    $input = trim(fgets(STDIN));

    if (!is_numeric($input)) {
        throw new InvalidArgumentException("Invalid input: '$input' is not a number.");
    }

    return (float)$input;
}


while (true) {
    $choice = menu();

    if ($choice === 'exit') {
        echo "Exiting calculator. Goodbye!\n";
        break;
    }

    try {
        $firstNumber = getNumber("Enter first number: ");
        $secondNumber = getNumber("Enter second number: ");

        switch ($choice) {
            case '1':
                $operation = new Addition();
                break;
            case '2':
                $operation = new Subtraction();
                break;
            case '3':
                $operation = new Multiplication();
                break;
            case '4':
                $operation = new Division();
                break;
        }

        $calc = new Calculator($operation);
        $calc->operate($firstNumber, $secondNumber);

    } catch (Throwable $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }

    echo "-------------------------\n";
}
