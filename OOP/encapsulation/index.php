<?php
//ENCAPSULATION

class Phone
{
    public function getNumberByName($name)
    {
        //..
    }
    public function dialNumber()
    {
        //..
    }
    public function call($name)
    {
        $number = $this->getNumberByName($name);
        $this->dialNumber($number);
    }
}

$phone1 = new Phone;
$phone1->call('Alex');
