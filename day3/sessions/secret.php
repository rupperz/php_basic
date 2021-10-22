<?php
//$_SESSION сохраняются до закрытие браузера
session_start();

// $_SESSION['name'] = "Victor"; // Сохранение данных в сесии
// $_SESSION['username'] = "Unifun"; // Сохранение данных в сесии
// echo $_SESSION['name'];
// echo "<br>";
// echo $_SESSION['username'];

if(isset($_GET['do']) && $_GET['do'] == 'exit') unset($_SESSION['admin']);

if(!isset($_SESSION['admin'])) die ('You are not loged');

echo "Hello my dear, {$_SESSION['admin']}";
?>
<a href="secret.php?do=exit">Logout</a>
<ul>
    <li>
        <a href="sess1.php">sess1</a>
    </li>
    <li>
        <a href="sess2.php">sess2</a>
    </li>
    <li>
        <a href="secret.php">secret</a>
    </li>
</ul>

<form action="" method="post">
    <input type="text" name="login" id="">
    <button type="submit"> Submit</button>
</form>