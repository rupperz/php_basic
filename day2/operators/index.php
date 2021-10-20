<?php

//Операторы AND (&&) и OR (||)
echo "<hr>";
$a = 5;
if( $a > 3 && $a < 7 ){ // && sau AND
    echo "This is true";
}else{
    echo "This is false!";
}
echo "<br>";
if( $a > 6 OR $a < 4 ){ // OR sau ||
    echo "This is true";
}else{
    echo "This is false!";
}

echo "<br>";

//Операторы BREAK AND CONTINUE
//Оператор BREAK
for ($i = 0; $i <= 30; $i++){
    echo $i."<br>";
    if($i == 5) {
        echo "<h1>FOUND!!!</h1>";
        break;
    }
    
}

echo "<br>";
//Оператор CONTINUE
for ($i = 0; $i <= 30; $i++){
    if( $i >= 10 && $i <= 20) continue;
    echo $i."<br>";
    
}



//HOMEWORK
$arr = [
    'Gudkov',
    'Dumbrava',
    'Potreba',
    'Gusar',
    'Monoton',
    'Berin'
];

$names = [
    'Maxim' => 'Gudkov',
    'Vadim' => 'Dumbrava',
    'Kiril' => 'Potreba',
    'Anton' => 'Gusar',
    'Oleg' => 'Monoton',
    'Alex' => 'Berin',
];

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

/* for ($i = 0; $i < count($arr); $i++){
    if($i <= 1 || $i > 3){
        echo $arr[$i];
        continue;
    }
} */

//Вывод 1 и 3 элемента через foreach из многомерного масива
echo "<br>";
$n = 0;
foreach($names as $key => $value){
    if($n == 1 || $n == 3){
        echo $n." Name: ".$key." - Surname: ".$value;
        echo "<br>";
    }
    //echo $n;
    $n++;
}


?>