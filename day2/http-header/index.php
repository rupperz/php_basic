
<?php
require_once 'inc.php';
header ('Content-Type: text/html; charset=utf-8');
//header('Location: inc.php'); //nu e cea mai buna varianta de redirect, pentru ca fisierul se executa mai departe
//header('refresh: 5; url=inc.php');
//exit;
//sau
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
Чтобы не было крякозябры, кодировка фаила, а также charset и кодировка отправленная сервером должна совпадать

</body>
</html>