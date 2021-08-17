<?php

$start=microtime(true);

const MIN_ARRAY = 1; // min число
const MAX_ARRAY = 100000; // max число
const AMOUNT_ARRAY=100000; // кол-во чисел в массиве

/**
 * @param $numbers
 * @return int|int[]|string[]
 */

function issArray ($numbers)
{
    $numbers = array(); // инициализируем пустой массив
    do {
        $already_here = rand(MIN_ARRAY, MAX_ARRAY); // генерируем рандомное число
        if (!isset($numbers[$already_here])) // "если в массиве нет такого числа"
        {
            $numbers[$already_here] = true; // меняется флаг на true и число автоматически добавляется в массив
        }
    } while (count($numbers) < AMOUNT_ARRAY);
    return (array_keys($numbers)); // array_keys() - возвращает ключи массива
}

print_r(issArray(100000));

echo 'Time: '.round(microtime(true) - $start, 4).' sec.';
