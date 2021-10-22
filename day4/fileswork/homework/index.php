<?php
error_reporting(-1);

if(isset($_POST) && !empty($_POST['name']) && !empty($_POST['msg'])){
    //echo $_POST['name'];
    //echo $_POST['msg'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];
    $dateMsg = date('Y-m-d h:i:s');
    //echo $dateMsg;
    $msg = $name . "|" . $msg . "|" . $dateMsg . "\n";
    file_put_contents('msg.txt', $msg, FILE_APPEND);
    //header("Location:");
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
        <p><input name="name" type="text"></p>
        <p><textarea name="msg" id="msg" cols="30" rows="10"></textarea></p>
        <p><button type="submit">SUBMIT</button></p>
    </form>

    <?php
    $filemsg = file("msg.txt", FILE_IGNORE_NEW_LINES |FILE_SKIP_EMPTY_LINES);
    echo "<pre>";
    print_r($filemsg);
    echo "</pre>";

    //$filemsg = nl2br ( file_get_contents("msg.txt"));
    //print_r($filemsg);
    ?>

</body>
</html>