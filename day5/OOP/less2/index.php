<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo "<pre>";
    echo print_r($data, 1);
    echo "</pre>";
}
$car1 = new Car();
$car2 = new Car();
debug($car1);


$car1->color = 'Black';
$car1->brand = 'Jaguar';
$car1->speed = '200';
$car1->year = '2018';

$car2->color = 'White';
$car2->brand = 'BMW';
$car2->speed = '160';
$car2->year = '2019';

//debug($car1);
//debug($car2);

echo "<h3>О моем авто: </h3>
Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>
Количество колес: {$car1->wheels}<br>
Год выпуска: {$car1->year}<br>
Макс. Скорость: {$car1->speed}<br>
";
