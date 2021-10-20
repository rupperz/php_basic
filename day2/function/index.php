<?php error_reporting(-1);

require_once 'funcs.php';


$nums = [1, 2, 3];
$names = ['Ivanov', 'Vasilenco'];

//echo count($nums);
//echo count($names);
echo "<br>";
// Пользоваетльские функции могут начинатся либо с буквы либо со знака "_"



/* $x = 15;
$y = 45;
sum(5, 5);
sum(4, 2);
sum($x, $y);
sum();
sum(100); */

/* $a = 5;
$b = 10;
echo $a;
echo "<br>";
sum($a, $b);
echo $a; */

/* $rez = sum(1, 4);
echo $rez; */

//Homework
$names = [
    'Maxim' => 'Gudkov',
    'Vadim' => 'Dumbrava',
    'Kiril' => 'Potreba',
    'Anton' => 'Gusar',
    'Oleg' => 'Monoton',
    'Alex' => 'Berin',
];

$test = [];
$test2 = '';

echo array_count($names);
echo "<br>";

$values = my_array_values($names);;
print_r ($values);
echo "<br>";
//-----Homework

$keys = array_keys($nums);
print_r($keys);

echo "<br>";
$keys2 = my_array_keys($nums);
print_r($keys2);

echo "<br>";
$keys2 = my_array_keys($names);
print_r($keys2);

echo "<br>";
$keys3 = my_array_keys($test);
print_r($keys3);


?>