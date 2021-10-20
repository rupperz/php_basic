<?php
//WHILE si FOR se folosesc doar pentru masive simple fara key
//Pentru masive cu sau fara key sau asociative se foloseste FOREACH

$arr = [
    'Maxim',
    'Vadim',
    'Kiril',
    'Alexandru'
];

$names = [
    'Maxim' => 'Gudkov',
    'Vadim' => 'Dumbrava',
    'Kiril' => 'Potreba',
];

//Вывод одномерного масива
print_r($arr);
echo "<br>";
foreach($arr as $item){
    echo $item."<br>";
}
echo "<br>";

//Вывод значение
foreach($names as $name){
    echo $name."<br>";
}

//Вывод ключ + значение
echo "<br>";
foreach($names as $key => $surname){
    echo "Name: ". $key .", Surname: ". $surname."<br>";
}

//Вывод ключ + значение для одномерного масива
echo "<br>";
foreach($arr as $k => $v){
    echo "Key: ". $k .", Name: ". $v."<br>";
}
?>