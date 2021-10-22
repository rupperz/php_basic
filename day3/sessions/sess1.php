<?php
//$_SESSION сохраняются до закрытие браузера
session_start();
define('ADMIN', 'admin');
//$_SESSION['name'] = "Victor";
/* echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['username']; */

if (!empty($_POST['login'])){
    if($_POST['login'] === ADMIN ){
        $_SESSION['admin'] = ADMIN;
        $_SESSION['res'] = "You are authorized";
    }else{
        $_SESSION['res'] = "Login not corect";
        //echo "Login not corect";
    }

    header('Location: sess1.php');
    die;
}
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

<hr>

<?php
    if(isset($_SESSION['res'])) {
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    }
?>

<form action="" method="post">
    <input type="text" name="login" id="">
    <button type="submit"> Submit</button>
</form>