<?php 
error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Типы данных</title>
</head>
<body>
<?php
/* $arr = array('Ivanov', 'Petrov', 'Sidorov');
// var_dump($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr[1];
//echo $arr{0}; //Deprecated

// $var = "Ivanov";
// echo $var;

$arr2 = [1,'dog',8,5,['banan', 'orange', 'apple']];
echo "<pre>";
print_r($arr2);
echo "</pre>";

//echo $arr2[1]."<br>";
echo $arr2[4][1];


$arr3 = array(
    2 => 'Ivanov', 
    4 => 'Petrov', 
    'Sidorov',
    'Teplov'
);
// var_dump($arr);
echo "<pre>";
print_r($arr3);
echo "</pre>";

echo $arr3[5]; */
$arr = array('Ivanov', 'Petrov', 'Sidorov');
//Асоциативные масивы
$goods = [
    [
        'title' => 'Nokia', 
        'price' => '100', 
        'description' => 'Description nokia'
    ],
    [
        'title' => 'Samsung', 
        'price' => '120', 
        'description' => 'Description Samsung'
    ],
    [
        'title' => 'Sony', 
        'price' => '250', 
        'description' => 'Description Sony'
    ]
];
    // var_dump($arr);
    /* echo "<pre>";
    print_r($goods);
    echo "</pre>";

    echo $goods[0]['title']." - ".$goods[0]['price']." - ".$goods[0]['description'];
    echo "<br>";
    echo $goods[1]['title']." - ".$goods[1]['price']; */

    /* $i = 0;
    while($i < 3){
        echo $goods[$i]['title']." - ".$goods[$i]['price']."<br>";
        $i++;
    } */


//add element in array
    /* $goods[10] = 'Ipad';
    echo "<pre>";
    print_r($goods);
    echo "</pre>"; */

//function for arrays
//COUNT

    //echo count($goods);

//array_diff
    /* $array1 = array("a" => "green", "red", "blue", "red", 1, "banan");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_diff($array1, $array2);

    print_r($result); */

//array_intersect
    /* $result2 = array_intersect($array1, $array2);
    echo "<br>";
    print_r($result2);
    echo "<br>"; */

//array_key_exists
    /* $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "Массив содержит элемент 'first'.";
    }
    echo "<br>"; */

//array_keys and array_values
    /* print_r (array_keys($goods[0]));
    echo "<br>";
    print_r (array_values($goods[0])); */

//Слияние масивов 
    /* echo "<br>";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result1 = array_merge ($array1, $array2); //array_merge - перезаписывает
    print_r($result1);
    echo "<br>";
    $result1 = $array1 + $array2; //+ не перезаписывает масив а оставляет первое вхождение
    print_r($result1); */

//array_rand random key
    /* $result = array_rand($arr);
    echo $result; */

//array_reverse 
    /* $result = array_reverse($goods);
    $result = array_reverse($goods, true); // не меняется индекс а только value
    print_r($result); */


    // Основные функции для работы с масивами
    // count
    // array_diff
    // array_intersect
    // array_key_exists
    // array_keys
    // array_values
    // array_merge
    // array_rand
    // array_reverse
    // compact
    // exctract
    // arsort
    // asort
    // sort
    // rsort

    // array_combine
    // array_search
    // array_shift
    // array_unique
    // array_unshift
    // array_flip

?>
</body>
</html>