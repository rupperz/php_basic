<?php
//INHERITANCE
class Vehicle {
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distance) {
        $time = $distance / $this->speed;
        return $time;
    }
}

class Bicycle extends Vehicle {
    public $type;
    public $color = 'White';
    const CALORIES_PER_HOUR = 500;

    public function caloriesBurned($distance) {
        $time = $this->tripTime($distance);
        $calories = $time * self::CALORIES_PER_HOUR;
        return $calories;
    }
    //здесь мы переопределили метод tripTime из класса Vehicle
    public function tripTime($distance) {
        //$time = parent::tripTime($distance) * 1.2; // через parent::triTime получаем доступ к класса родителя
        //$time = ($distance / $this->speed) * 1.2;
        //return $time;
        return parent::tripTime($distance) * 1.2;//Еще более короткий метод вызода
    }

}
//Наследование из класса Vehicle и использование в класс Car с "extends"
class Car extends Vehicle {
    public $color = 'Yellow';
    public $fuel;

    public function fuelConsumption($distance) {
        $result = ($this->fuel * $distance) / 100;
        return $result;
    }
}

$car1 = new Car;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 130;
$car2->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

$distance = 300;

echo '<br> Car1 Time: '.$car1->tripTime($distance);
echo '<br> Car2 Time: '.$car2->tripTime($distance);
echo '<br> Bicycle Time: '.$bicycle->tripTime($distance);

echo '<br>';
echo '<br> Car1 FuelConsumption: '.$car1->fuelConsumption($distance);
echo '<br> Car1 FuelConsumption: '.$car2->fuelConsumption($distance);
echo '<br> Bicycle Calories Burned: '.$bicycle->caloriesBurned($distance);