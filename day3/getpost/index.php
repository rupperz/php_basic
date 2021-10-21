<?php
error_reporting(-1);

if(isset($_POST) && !empty($_POST)){
    echo "POST data: ";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Name: <input type="text" name="name"></p>
        <p>Text: <textarea name="text"></textarea></p>
        <p>Remember: <input type="checkbox" name="remember"></p>
        <p>
            <select name="lang" id="" multiple="">
                <option value="en">EN</option>
                <option value="ru">RU</option>
                <option value="ro">RO</option>
            </select>
        </p>
        <p><button type="submit" name="send" value="send">Отправить</button></p>

        <a href="?name=<?=$_POST['name']?>&amp;lang=test">Link</a>
    </form>

    <p>Введенное имя: <?php if(isset($_POST['name']) && !empty($_POST['name']) ) echo $_POST['name']; else echo "Форма не отправленна"; ?></p>
    <p>Введенный текст: <?php if(isset($_POST['text']) && !empty($_POST['text']) ) echo nl2br($_POST['text']); else echo "Форма не отправленна"; ?></p>

    <?php // if(условие) ? ДА : НЕТ ?>
    <p>Введенный текст: <?php echo !empty($_POST['text']) ? nl2br($_POST['text']) : "Форма не отправленна";    ?></p>

    <p>
        <?php
        if(isset($_POST['remember']) && $_POST['remember'] == 'on') echo "Чекбокс отмечен"
        ?>
    </p>
</body>
</html>