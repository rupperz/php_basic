<?php
//CLASSES AND OBJECTS
//Каждое слово названия с большими буквами то есть MyNewClass
class Car {
    //Предопределенные переменные класса
    public $color = 'White';
    public $speed;
    public $fuel;
    public $brand;

    const WHEELS = 4;

// фунция конструкт
//    public function __construct(){
//        echo '<br>New object of class '.__CLASS__.' created';
//        echo '<br>New Method '.__METHOD__.' called';
//    }

// фунция деструкт
//    public function __destruct(){
//        echo '<br>Method '.__METHOD__.' called';
//        echo '<br>Object deleted';
//    }

    // Function или метод
    public function test(){
        echo Car::WHEELS;
        echo self::WHEELS; // слово self заменяет название текущего класса
        echo $this->color;
    }
    // фунция конструкт
    public function __construct($brand = 'zaz', $speed = 160, $fuel = 12, $color='white')
    {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
    }

    public function tripTime($distance)
    {
        $time = $distance / $this->speed;
        return $time;
    }

}

class Bicycle {
    const WHEELS = 2;
    public $color = "Black";
    public function test(){
        echo Car::WHEELS;
        echo self::WHEELS; // слово self заменяет название текущего класса
        echo $this->color; // При помощи $this мы получаем доступ к обьекту Bycicle и к конкретному свойству его Color
    }
}


$car1 = new Car('Audi', '180', '15', 'Red');
//$car1->brand = 'Audi';
//$car1->speed = 120;
//$car1->fuel = 12;

//unset($car1);

$car2 = new Car('Mercedes', '230', '18', 'Black');
$car3 = new Car();
//$car2->brand = 'Mercedes';
//$car2->speed = 140;
//$car2->fuel = 14;
//$car2->color = 'Black';

//echo "<pre>";
//print_r ($car1);
//print_r ($car2);
//echo $car1->color;
//echo "</pre>";


//echo "<br>Car 1 Time: ".$car1->tripTime(1000);
//echo "<br>Car 2 Time: ".$car2->tripTime(1000);
//echo "<br>Car 2 Time: ".$car3->tripTime(1000);
echo "<br>";

// Вызов константы класса
//echo "Car WHEELS = ".Car::WHEELS;
//echo "<br>Bicycle WHEELS = ".Bicycle::WHEELS;
echo "<br>";
//$car1->test();

echo "<br>";
$b = new Bicycle;
$b->test();

