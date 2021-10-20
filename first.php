<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP project on UNIFUN</title>
</head>
<body>
    <h1>Hello UNIFUN!</h1>
    <?
        echo "HELLO UNIFUN COMPANY <br/> FROM Zubcu Victor";
        $today_date = date('d.m.y');
        echo "<br>".$today_date;
        echo "<hr> Ниже начнем работу с переменнами";
        //echo gettype($today_date);
        $var = 5;
        if(isset($var)){
            echo "<br/> Переменная существует и ее значение ".$var;
        }
        unset($var);
        echo "<br/> Переменная var >>$var<< была уничтоженна";

        define("pi", "3.14");
        echo "<br/> Вывод переменной присвоенная  через >>define";
        echo pi;

        $arr = array('a'=>'apple', 'b'=>'cat', 'c'=>'module');
        echo "<br>вывод масива <br>";
        print_r($arr);
    ?>
</body>
</html>