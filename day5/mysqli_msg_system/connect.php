<?php
$db_conn = @mysqli_connect('localhost', 'root', '', 'php_mysqld_db') or die("Error connecting to db!!!");

if (!$db_conn) die( mysqli_connect_error());
mysqli_set_charset($db_conn, "utf8") or die("Не установлена кодировка");

?>