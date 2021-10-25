<?php

//echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest'; // This was in php 5
//echo $user = $_GET['user'] ?? 'guest';  // This is now in PHP 7
echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';  // This is now in PHP 7


// ------ Оператор spaceship just in PHP 7 / Имеет 3 значений -1,0,1
$a = 3;
$b = 2;
echo $a <=> $b; // 1

echo "<br>";
echo '$a = '. $a."<br>";
echo '$b = '. $b."<br>";

if( ($a <=> $b ) === 1){
    echo '$a > $b';
}elseif (( $a <=> $b) === -1){
    echo '$a < $b';
}else{
    echo '$a = $b';

}


// ------------ Function define - можно задать константу типа масив

//This is in PHP 5
define ('DBHOST', 'localhost');
define ('DBUSER', 'login');
define ('DBPASS', 'user');
define ('DBBASE', 'databse');

// This is in PHP 7
/* define ('DB', [
    'localhost',
    'login',
    'password',
    'database'
]); */

// асоциативный масив
define ('DB', [
    'DBHOST' => 'localhost',
    'DBUSER' => 'login',
    'DBPASS' => 'password',
    'DBBASE' => 'database'
]);


echo "<pre>";
print_r(DB);
echo "</pre>";

echo DB['DBUSER'];

// Классы до PHP 7
/* use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// Теперь в PHP 7+
use some\namespace\{ClassA, ClassB, ClassC};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC}; */



// Декларация скалярных типов PHP 7
function sum(int... $ints){
    return array_sum($ints);
}
//declare(strict_types = 1); // Декларация стрикт тип для данных должна быть только в начале фаила v PHP 7
echo "<br>";
var_dump(sum(2, 3, 5));
echo "<br>";


//Декларация возвращаемых значений : int, : float, : string PHP 7

function sums($a, $b): string{
    return $a + $b;
}

var_dump(sums(2.2, 3.6));
echo "<br>";


// ------- Function intdiv() - возвращает результат деления PHP 7
var_dump( intdiv(17, 3) );
?>