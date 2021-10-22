<?php

/* session_start();
//$_SESSION['test'] = 123;
var_dump($_SESSION); */
// Кука будет работать на все папки вложенные в папку от которого она инициализированна. 
//если не указать ей директорию "/" чтобы работала для всего домена
//setcookie('test2', 'My value 2', time() + 3600 * 24, '/' );


//Здесь удаляем куку
/* setcookie('test', '', time() - 3600);
setcookie('test2', '', time() - 3600, '/');
echo $_COOKIE['test'];
echo "<br>";
echo $_COOKIE['test2']; */


//Делаем счетчик
isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/') : setcookie('counter', 1, time() + 3600, '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1

?>