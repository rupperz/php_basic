<?php

function clear(){
    global $db_conn;
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db_conn, $value);
    }

}

function save_msg(){
    global $db_conn;
    clear();
    extract($_POST);
    // $name = mysqli_real_escape_string($db_conn, $_POST['name']);
    // $msg = mysqli_real_escape_string($db_conn, $_POST['msg']);
    // для чисел обьязательно приводим их к типу $id = (int)$_POST['id']

    $query = "INSERT INTO messages (name, text) VALUES ('$name', '$msg')";
    echo $query;
    mysqli_query($db_conn, $query);
}

function get_msg(){
    global $db_conn;
    $query = "SELECT * FROM messages ORDER BY id DESC";
    $res = mysqli_query($db_conn, $query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function print_arr($arr){
    echo "<pre>".print_r($arr, true)."</pre>";
}




?>