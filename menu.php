<?php

function menu(): string {
    while (true) {
        echo "\n==============================\n";
        echo " Calculator\n";
        echo "==============================\n";
        echo "Please choose an operation:\n";
        echo "  1. Add\n";
        echo "  2. Subtract\n";
        echo "  3. Multiply\n";
        echo "  4. Divide\n";
        echo "  Type 'exit' to quit.\n";
        echo "------------------------------\n";
        echo "Your choice (1-4 or 'exit'): ";

        $choice = strtolower(trim(fgets(STDIN)));

        if (in_array($choice, ['1', '2', '3', '4', 'exit'])) {
            return $choice;
        }

        echo "Invalid input: Please enter 1, 2, 3, 4 or 'exit'.\n";
    }
}
