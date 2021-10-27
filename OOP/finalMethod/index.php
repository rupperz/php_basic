<?php

// FINAL METHODS AND CLASSES
// Финальный метод нельзя переопределить

/*class Vehicle {
    final public function test()
    {
        //....
    }
}

class Car extends Vehicle {
    public function test()
    {
        //..
    }
}*/

class Vehicle {

}

final class Car extends Vehicle {

}
// От финального класса нельзя унаследовать
class Audi extends Car {

}