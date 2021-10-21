
<?php
//require_once 'inc.php';
header ('Content-Type: text/html; charset=utf-8');
//header('Location: inc.php'); //nu e cea mai buna varianta de redirect, pentru ca fisierul se executa mai departe
//header('refresh: 5; url=inc.php');
//exit;
//sau
//die;

//header("HTTP/1.0 404 Not Found");
//header("HTTP/1.0 304 Not Modified");

//Pentru a da fisierul la download folosim MIME
//header ('Content-Type: text/plain; charset=utf-8');
//header ('Content-Disposition: attachment; filename="downloaded.txt"');
//readfile('text.txt');
//die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?=$test?>
Чтобы не было крякозябры, кодировка фаила, 
а также charset и кодировка отправленная сервером 
должна совпадать
asdas
</body>
</html>