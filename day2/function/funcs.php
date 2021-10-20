<?php

/* function sum($a = 1, $b = 2){ // ca sa ne protejam de erori in caz ca nu au fost transmise valori, ii dam valori default
    echo $a + $b;
    echo "<br>";
} */

/* function sum(&$a, $b){
    echo $a + $b;
    echo "<br>";
    $a = 100;
} */

/* function sum($a, $b){
    $c = $a + $b;
    return $c;
} */

//Homework
function array_count($arr){
    $count = count($arr);
    return $count;
}

function my_array_values($arr){
    $data = [];
    //is_array($arr);
    foreach($arr as $k => $v){
        $data[] = $v;
    }
    return $data;
}
//-----Homework


function my_array_keys($arr){
    $data = [];
    //is_array($arr);
    foreach($arr as $k => $v){
        $data[] = $k;
    }
    return $data;
}

?>