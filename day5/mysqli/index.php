<?php
error_reporting(-1);
// SELECT * FROM `messages` WHERE 1
// UPDATE `messages` SET `text`= CONCAT (text, '-!') // таким образом добавляем текст к тому что есть
// UPDATE `messages` SET `id`='[value-1]',`name`='[value-2]',`text`='[value-3]',`date`='[value-4]' WHERE 1
// INSERT INTO `messages`(`id`, `name`, `text`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
// INSERT INTO `messages`(`name`, `text`) VALUES ('Anton','This mesage is for Anton')
// DELETE FROM `messages` WHERE id=4

// ------- Function MYSQLI_CONNECT
/* @ используется для подавления сообщений об ошибках по умолчанию */
//$link = @mysqli_connect('localhost', 'fake_user', 'my_password', 'my_db');

$db_conn = @mysqli_connect('localhost', 'root', '', 'php_mysqld_db') or die("Error connecting to db!!!");

if (!$db_conn) {
    /* Используйте предпочитаемый вами метод регистрации ошибок */
    // error_log - отправляет уведомление на сервер
    //error_log('Ошибка при подключении: ' . mysqli_connect_error());
    echo mysqli_connect_error();
    die;
}


// -------- FUnction mysqli_set_charset($db, "charset") - установка кодировки для вывода из бд
//Кодировку надо указать без "-"
mysqli_set_charset($db_conn, 'utf8') or die('Не установленна кодировка');


// --------- Function mysqli_query()
/* $insert = "INSERT INTO `messages` (name, text) VALUES ('Alexandru', 'Lorem ipsum test mesage') ";
$rez_insert = mysqli_query($db_conn, $insert);
if($rez_insert) echo "OK"; // Если запрос ушео успешно выводим ок )
else echo "ERROR"; */
//echo mysqli_error($db_conn); // -- Таким образом можно выявить ошибку



//------- Function update - Обновление в базе
/* $update = "UPDATE `messages` SET text = CONCAT(text , '|||') WHERE id > 6";
$rez_update = mysqli_query($db_conn, $update) or die(mysqli_error($db_conn)); //  or die(mysqli_error($db_conn)) - для вывода ошибок */






// --------- FUnction DELETE - удаление строк
/* $delete = "DELETE FROM `messages` WHERE id > 12";
$rez_delete = mysqli_query($db_conn, $delete) or die(mysqli_error($db_conn));
echo mysqli_affected_rows($db_conn); */


function print_arr($arr){
    echo "<pre>" . print_r($arr, true) . "</pre>";
}

// ----------- Function SELECT
$rez = mysqli_query($db_conn, "SELECT name, text, date from `messages` ORDER BY id DESC ");

// ------------ Function mysqli_fetch_all -- Вывод данных из запроса
// используем в запрос MYSQLI_ASSOC чтобы показать ассоциативную выборку
// используем в запрос MYSQLI_NUM чтобы показать нумерованную выборку 
// используем в запрос MYSQLI_BOTH чтобы показать оба типа выборки
$data = mysqli_fetch_all($rez, MYSQLI_ASSOC);
//print_arr($data);

foreach( $data as $item ){
    echo "Name: {$item['name']} <br>";
    echo "Text:  {$item['text']}<br>";
    echo "Date: {$item['date']} <hr>";
}


// ------------ Function mysqli_fetch_assoc -- Вывод данных из запроса
$rez2 = mysqli_query($db_conn, "SELECT `id`, name, text, date from `messages` ORDER BY id DESC ");
$data2 = [];
while ($row = mysqli_fetch_assoc($rez2)){
    $data2[$row['id']] = $row;    
}

//print_arr($data2);


// -------- Function mysqli_num_rows - Вывод количества записей
//echo mysqli_num_rows($rez);


// -------- Function mysqli_real_escape_string
$str = "d'Artanian";
$str2 = mysqli_real_escape_string($db_conn, $str);
$insert2 = "INSERT INTO `messages` (name, text) VALUES ('$str2', 'Тестинг запроса с кавычкой') ";
echo $insert2;
$rez_insert2 = mysqli_query($db_conn, $insert2) or die(mysqli_error($db_conn));

?>