
<?php

//ШПАРГАЛКА ФУНКЦИЙ

// function myFunc($a, $b){
//     $sum = $a - $b;
//     return $sum;
// }
// echo myFunc(44, 21) . PHP_EOL;

// $aa = 111;
// $bb = 222;
// echo myFunc($aa, $bb);

// function calcSum( ... $numbers) {
//         $sum = 0;
//             foreach ($numbers as $number) {
//                 $sum += $number;
//             }
//             return $sum;
//     }
//     echo calcSum(2, 4, 6) . PHP_EOL;    //12
//     echo calcSum(4, 4, 6) . PHP_EOL;    //14



// function getSum() {
//     $var = 3;           // локальная
//     return $var;
// }

// $var = 5;               // Внешняя

function getSum() {
    global $var1;        // глобальная
    $var1 = 3;
    return $var1;
}

$var1 = 5;
echo getSum() . PHP_EOL;               // Внешняя
echo $var1 . PHP_EOL;

echo "<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

// Статические переменные

function calculator() {
   static $start = 0;               // статичная
    return ++$start;
}

echo calculator();
echo calculator();                  // пример работы static
echo calculator() . PHP_EOL;

echo "<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

//  возврат функцией массива

function myFriends() {
    $kate = 'Kate';
    $Jay = 'Jay';
    $Ray = 'Ray';

    return [$kate, $Jay, $Ray];
}

print_r(myFriends());


echo "<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>" . PHP_EOL;

// Несколько функций с циклом

// function lesson3($fff) {
//    return $fff % 3 === 0;

// }

// function displayResult($bbb, $zzz) {
//     if ($zzz) {
//         echo 'число ' . $bbb . ' делится на 3 ' .PHP_EOL;
//     }
// }

// for ($i = 1; $i <= 100; $i++) {
//     displayResult($i, lesson3($i));
// }

// Функция с циклом внутрни

function displayString ($str, $n) : void { // : void не вернет значение return
                                            // : array вернет массив
    for ($i = 0; $i < $n; $i++) {
        echo $str . PHP_EOL;

    }
}
displayString('test str', 3);