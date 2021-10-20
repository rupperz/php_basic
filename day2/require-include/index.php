<?php error_reporting(-1)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Folosim functia INCLUDE si REQUIRE</h1>
    <h2>Cu INCLUDE pagina se afiseaza si se executa toata + warning, chiar daca fisierul include lipseste</h2>
    <?php include 'inc.php'; //-/inc.php ?>
    <?php 
    foreach($names as $key => $surname){
        echo "Name: ". $key .", Surname: ". $surname."<br>";
    }
    ?>
    <h2>Cu REQUIRE pagina se opreste din executie cu FATAL ERROR daca fisierul din REQUIRE lipseste</h2>
    
    <?php require 'inc.php'; //-/inc.php?>
    <?php 
    foreach($names as $key => $surname){
        echo "Name: ". $key .", Surname: ". $surname."<br>";
    }
    ?>
    <h2>Cu INCLUDE_ONCE pagina se afiseaza si se executa toata + warning, chiar daca fisierul include lipseste dar controleaza daca nu a mai fost conectat odata</h2>
    <?php include 'inc.php'; //-/inc.php ?>
    <?php 
    foreach($names as $key => $surname){
        echo "Name: ". $key .", Surname: ". $surname."<br>";
    }
    ?>
    <h2>Cu REQUIRE_ONCE pagina se opreste din executie cu FATAL ERROR daca fisierul din REQUIRE lipseste dar controleaza daca nu a mai fost conectat odata</h2>
    <?php 
    foreach($names as $key => $surname){
        echo "Name: ". $key .", Surname: ". $surname."<br>";
    }
    ?>
    <?php require 'inc.php'; //-/inc.php?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero dolor quasi eum, tempora numquam, modi autem necessitatibus neque quam eos quaerat sapiente, ipsam porro. Quaerat beatae placeat necessitatibus similique tenetur.</p>
</body>
</html>