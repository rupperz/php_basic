<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting(-1);
require_once "funcs.php";
require_once "connect.php";


if(!empty($_POST)){
    save_msg();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}



$mesages = get_msg();
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
    
    <?php if(!empty($mesages)): ?>
        <?php foreach($mesages as $mesage): ?>
            <div class="mesages">
                <p>Автор: <?=$mesage['name']?> | Дата: <?=$mesage['date']?></p>
                <div class="comment"><?=nl2br(htmlspecialchars($mesage['text']))?></div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    
    

</body>
</html>