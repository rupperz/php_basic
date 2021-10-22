<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

// -------- Function COPY -- копирует фаил куда нам нужно
//copy('text.txt', 'folder/file.txt');


// -------- Function FILE_EXISTS - проверяет если существует фаил
/* if(file_exists('folder/file.txt')) echo "File exist";
else echo "File not found"; */


// --------- Function FILE_GET_CONTENTS - читает содержимое фаила
//echo $file = file_get_contents("text.txt");
/* $newfile = file_get_contents("https://www.php.net/");
//echo $newfile;
//echo htmlspecialchars($newfile); */
//echo nl2br ($fileRead = file_get_contents("text.txt"));


/* $file = file_get_contents("https://www.php.net/");
$file2 = file_get_contents("https://www.php.net/manual/en/function.file-put-contents");
//file_put_contents(filename, data)
file_put_contents('folder/file.txt', $file);
//file_put_contents('folder/file.txt', $file2); // Если писать так то фаил перезапишется просто
file_put_contents('folder/file.txt', $file2, FILE_APPEND); // Чтобы добавить контент в фаиле за перезаписи дописываем FILE_APPEND
 */


 // -------Function File
 // FILE_IGNORE_NEW_LINES - чтобы убрать перехад в новой строки
 // FILE_SKIP_EMPTY_LINES - чтобы убрать пустые строки
/* $file = file('text.txt', FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES);
echo "<pre>";
print_r($file);
echo "</pre>"; */


//--------- Function is_dir -  Проверяет если это папка или нет
// Можно также указать папку как ".", или ".." или "/" - то есть как относительный путь
/* if(is_dir('folder')) echo "This is folder";
else echo "This is not folder";
echo "<br>";
if(is_dir('text.txt')) echo "This is folder";
else echo "This is not folder";
echo "<br>";
if(is_dir('.')) echo "This is folder";
else echo "This is not folder";
echo "<br>";
if(is_dir('../')) echo "This is folder";
else echo "This is not folder";
echo "<br>"; */



//--------- Function is_file -  Проверяет если это папка или нет
/* if(is_file('folder')) echo "This is File";
else echo "This is not folder";
echo "<br>";
if(is_file('text.txt')) echo "This is File";
else echo "This is not folder";
echo "<br>";
 */


//--------- Function rename
//если указать второе значение но вдругую директорию, то фаил переменуется и переносится туда
/* rename('text.txt','folder/newtext.txt'); */


// --------- Function mkdir и rmdir
// mkdir - создает каталог, а если указать 1/2/3', 0777, true то можно создавать несколько папок одно в другое
// rmdir - удаляет каталог
//mkdir('1', 0777, true);
//rmdir('1');


//--------- Function touch - Устанавливает время доступа и модификации файла
/* touch('folder/file.txt', time() - 3600 * 24 ) */



// --------- Function unlink - удаляет фаил
//unlink("folder/file.txt");




?>