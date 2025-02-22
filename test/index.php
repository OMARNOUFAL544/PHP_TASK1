<?php


//   task 1


// $year = 2013;
// if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
//     echo 'This year is a leap year';
// } else {
//     echo 'This year is not a leap year';
// }


//   task 2


// $temp = 27;
// echo ($temp < 20) ? 'It is wintertime!' : 'It is summertime!';


//   task 3


// $a = 2;
// $b = 2;
// echo ($a === $b) ? ($a + $b) * 3 : $a + $b;


//   task 4


// $a = 10;
// $b = 1;
// echo ($a + $b === 30) ? ($a + $b) : 'false';


//   task 5


// $num = 20;
// echo ($num % 3 === 0) ? 'true' : 'false';


//   task 6


// $num = 50;
// echo ($num >= 20 && $num <= 50) ? 'true' : 'false';


//   task 7


// $a = 1;
// $b = 5;
// $c = 9;
// echo max($a, $b, $c);


//   task 8


// $units = 100;
// $bill = 0;
// if ($units <= 50) {
//     $bill = $units * 2.50;
// } elseif ($units <= 150) {
//     $bill = (50 * 2.50) + (($units - 50) * 5.00);
// } elseif ($units <= 250) {
//     $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
// } else {
//     $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
// }
// echo $bill . ' JOD';


//   task 9


// $num1 = 10;
// $num2 = 5;
// $operation = 'add';
// switch ($operation) {
//     case 'add': echo $num1 + $num2; break;
//     case 'subtract': echo $num1 - $num2; break;
//     case 'multiply': echo $num1 * $num2; break;
//     case 'divide': echo ($num2 != 0) ? $num1 / $num2 : 'Cannot divide by zero'; break;
//     default: echo 'Invalid operation';
// }


//   task 10


// $age = 15;
// echo ($age >= 18) ? 'Eligible to vote' : 'Not eligible to vote';


//   task 11


// $num = -60;
// if ($num > 0) echo 'Positive';
// elseif ($num < 0) echo 'Negative';
// else echo 'Zero';


//   task 12


// $grades = [60,86,95,63,55,74,79,62,50];
// $average = array_sum($grades) / count($grades);
// if ($average >= 90) echo 'A';
// elseif ($average >= 80) echo 'B';
// elseif ($average >= 70) echo 'C';
// elseif ($average >= 60) echo 'D';
// else echo 'F';

?>