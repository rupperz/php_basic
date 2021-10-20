<?php
error_reporting (-1);
define("DBNAME","phpcoursedb define");
const dbname = 'mycoursedb const';
// echo dbname;

$nickname = "UNIFUN";
$_ninname = "_ninname";
/* echo "Вывод переменной с _ $_ninname";
Вывод переменны методом HEREDOC
$str3 = <<<HERE
    <br>
    Вывод переменны методом HEREDOC
    var = "UNIFUN";
    vis = '_ninname';
    HERE;

echo $str3; */

/* //Вывод переменны методом NOWDOC
$str4 = <<<'HERE'
<br>
Вывод переменны методом HEREDOC
var = "UNIFUN";
vis = '_ninname';
HERE;

echo $str4; */


/* $balance = 0;
$addBalance1 = 10;
$addBalance2 = 35;

$balance = $addBalance1 + $addBalance2;
$age = 32;
$todayDate = date("d.m.y"); */
//echo "Balance = $balance";

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
<div>Привет, <?php echo $nickname; ?></div>
    <?php
        //Tipuri de date
        /* echo "<div> Мне ".$age."</div>";
        echo "<div> Сегодняшнее число $todayDate";
        echo "<br/>";
        echo "Типы переменных: <br/>";
        echo 'Boolean: $a = true and $b = false';
        echo "<br/>";
        echo 'Integer: $a = 125';
        echo "<br/>";
        echo 'String: $a = Vadim';
        echo "<br/>";
        echo 'Float: $a = 3.14';
        echo "<br/>";
        echo 'Array: $a = array';
        echo "<br/>";
        echo 'Object: $a = object';
        echo "<br/>";
        echo "Константа -> define DBNAME: ".DBNAME; */
    ?>

    <?php
    //$semafor = "red";
    
    //Operatori if else, switch
    /* if($semafor == "green"){
        echo "Semaforul este verde, putem trece drumul.";
    } else if($semafor == "yellow"){
        echo "Acum semaforul este galben";
    } else {
        echo "Astept cind se aprinde culoarea verde";
    }

    // o alta metoda de a afisa
    /* if( 5 != 4 )
        echo "OK";
     */
    
     /*
     echo ($semafor == "green");

     switch ($semafor) {
        case 'green':
            echo "Semaforul este verde, putem trece drumul.";
            break;
        case 'yellow':
            echo "Acum semaforul este galben";
            break;
        case 'red':
            echo "Astept cind se aprinde culoarea verde";
            break;
        default:
            echo "Semaforul este stricat, trecem la o alta trecere de pietoni";
            break;
    } */
    
    //Тернарный оператор PHP
    /* echo "<br/>";
    echo "Тернарный оператор PHP";
    echo "<br/>";
    echo 'Синтаксис:';
    echo "<hr>";
    echo '$var = condition ? exp1 : exp2;'; */

    /* $speed = 55;
    $maxspeed = 70;
    echo "<br/>";
    //echo ($speed <= 60) ? "Viteza este normala" : "A-ti depasit viteza!";
    $yourspeed = ($speed <= 60) ? "Viteza este in limita normei" : "A-ti depasit viteza!";
    echo $yourspeed;
    echo "<hr> PHP 5.3 <br/>";
    $yourspeed = $speed ?: "A-ti depasit viteza!";
    echo $yourspeed;
    //Echivalent
    $yourspeed = $speed ? "Viteza este in limita normei" : "A-ti depasit viteza!";
    echo "<br/>";
    echo "<hr> PHP 7 <br/>";
    $yourspeed = $speed ?? "A-ti depasit viteza!";
    echo $yourspeed;
    //echivalent
    $yourspeed = isset($speed) ? "Viteza este in limita normei" : "Viteza prea mare";
    echo "<br/>";
    echo $yourspeed; */

    //Циклы whi, Do while

    /* $i = 1;
    while ($i <= 10) {
        echo $i."<br/>";
        //$i = $i + 1;
        //$i += 1;
        $i++;
    } */

    

    /* echo 20 % 4;
    echo pow(2, 3); //echo 2 ** 3; */

    /* $a = 5;
    $b = &$a;
    var_dump($a);
    $a = 7;
    var_dump($a);
    var_dump($b); */

    //Increment and decrement

    /* $a = 3;
    var_dump(++$a); //Prefix increment intii mareste apoi afiseaza
    var_dump($a);
    echo "<br/>";
    var_dump($a++); //postfix intii afiseaza dupa care mareste
    //sau asa: $a = $a + 1;
    var_dump($a);
    echo "<hr/>";
    var_dump(--$a); //Prefix increment intii scade apoi afiseaza
    var_dump($a);
    echo "<br/>";
    var_dump($a--); //postfix intii afiseaza dupa care scade
    //sau asa: $a = $a - 1;
    var_dump($a);
    $a += 1;
    echo $a;
    echo "<br/>"; */


    //Concatenare 
    /* $str1 = "Hello ";
    $str2 = "World";
    $str3 = "People";
    $strConc = $str1.$str2; */
    /* echo $strConc;
    echo "Hello, {$str3}s";
    sau asa facem concatenarea
    echo "Hello, $str3"."s"; */


    //Комбинированные операторы

    /* $a = 5;
    //$a = $a + 2;
    
    //Combinam
    $a += 2;
    echo $a;

    $str1 .= " World";
    echo $str1; */

    //NULL
    //var_dump($var); //null

    /* $var = ""; //null
    unset($var); //null
    $var = NULL; //null
    $var++; // null
    var_dump($var); */

    //Циклы

    // if(condition) {
    //     instructions;
    // }


    //Table with created with WHILE function
    /* echo "<table border='1px'>\n";
    $i = 1;
    while ($i <= 5) {
        echo "\t<tr>\n";
        $n = 1;
        while($n <= 8){
            echo "\t\t<td>row $i | Col - $n</td>\n";
            $n++;
        }
        
        //$i = $i + 1;
        $i += 1;
        //$i++;
        echo "\t</tr>\n";
    }
    echo "</table>\n"; */

    //Вывод списка годов в tag <select></select> через WHILE
    /* echo "<select>\n";
    $year = 1900;
    while( $year <= 2021) {
        echo "\t\t<option value='{$year}' >$year</option>\n";
        $year++;
    }
    echo "\t</select>\n"; */

    //Вывод списка годов в tag <select></select> через DO WHILE
   /*  echo "<select>\n";
    $year = 1900;
    DO{
        echo "\t\t<option value='{$year}' >$year</option>\n";
        $year++;
    } WHILE ($year <= 2021);
    echo "\t</select>\n"; */

    //Домашка таблица умножения
    echo "<table border='1px'>\n";
    $i = 1;
    while ($i <= 10) {
        echo "\t<tr>\n";
        $n = 1;
        while($n <= 10){
            $rez = $n * $i;
            echo "\t\t<td>\t $n * $i = $rez</td>\n";
            $n++;
        }
        
        //$i = $i + 1;
        $i += 1;
        //$i++;
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>
</html>