<?php

require_once 'data.php';

foreach ($publications as $item) {
    //echo "<pre>";
    //echo 'В переменной $item находится обьект класса '.get_class($item) ;
    //print_r($item->printItem());
    //echo "</pre>";
    $item->printItem();
}


