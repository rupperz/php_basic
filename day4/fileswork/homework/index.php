<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting(-1);
require_once "funcs.php";
if(isset($_POST) && !empty($_POST['name']) && !empty($_POST['msg'])){
    save_msg();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$mesages = get_msg();
$mesages = array_msg($mesages);
//print_arr($mesages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
    <style>
        .mesages{
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <p>
            <label for="name">Имя: </label></br>
            <input name="name" type="text">
        </p>
        <p>
            <label for="msg">Коммент: </label></br>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
        </p>
        <button type="submit">Отправить</button>
    </form>

    <hr>
    <?php
    /* $filemsg = file("msg.txt", FILE_IGNORE_NEW_LINES);
    echo "<pre>";
    print_r($filemsg);
    echo "</pre>"; */

    
    //$filemsg = nl2br ( file_get_contents("msg.txt"));
    //print_r($filemsg);
    ?>


    <?php if(!empty($mesages)): ?>
        <?php foreach($mesages as $mesage): ?>
            <?php 
            $mesage = get_format_message($mesage); 
            //print_arr($mesage); 
            ?>
            <div class="mesages">
                <p>Автор: <?=$mesage[0]?> | Дата: <?=$mesage[2]?></p>
                <div class="comment"><?=nl2br(htmlspecialchars($mesage[1]))?></div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    
    

</body>
</html>