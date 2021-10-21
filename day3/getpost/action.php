<?php
error_reporting(-1);

if(isset($_POST['send'])){
    echo "POST data: ";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

if(isset($_GET['send'])){
    echo "POST data: ";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if(!empty($_POST) && isset($_POST)) {
    echo "POST data: ";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

if(!empty($_GET)) {
    echo "GET data: ";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

?>
<p>
    <a href="/day3/getpost/">Back</a>
</p>