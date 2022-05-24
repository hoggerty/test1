<?php declare(strict_types=1);

function stairsOfNumbersPrint(string $endOfLineSymbol): void {
    $number_counter = 1;
    $stair_number = 1;
    while ($number_counter <= 100) {
        $printable_numbers = [];
        while(count($printable_numbers) < $stair_number) {
            $printable_numbers[] = $number_counter;
            $number_counter++;
        }
        $stair_number++;
        echo implode(' ', $printable_numbers) . $endOfLineSymbol;
    }
}

stairsOfNumbersPrint('<br>');