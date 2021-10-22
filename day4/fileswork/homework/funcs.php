<?php

function save_msg(){
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $dateMsg = date('Y-m-d h:i:s');
    $msg = $name . "|" . $msg . "|" . $dateMsg . "***\n";
    file_put_contents('msg.txt', $msg, FILE_APPEND);
}

function get_msg(){
    return file_get_contents('msg.txt');
}

function array_msg($mesages){
    $mesages = explode("***\n", $mesages);
    array_pop($mesages);
    return array_reverse($mesages);
}

function get_format_message($mesages){
    $mesages = explode("|", $mesages);
    return $mesages;
}

function print_arr($arr){
    echo "<pre>".print_r($arr, true)."</pre>";
}




?>