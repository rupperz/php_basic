<?php
//$_SESSION сохраняются до закрытие браузера
session_start();

//$_SESSION['name'] = "Victor";
echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['username'];
//unset($_SESSION['name']); // Удаление сесии name
session_unset(); // Удаление все сесии для юзера
session_destroy(); //Удаляет и сам фаил сесии с компа
?>

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