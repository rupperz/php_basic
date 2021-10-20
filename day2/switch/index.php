<?php error_reporting(-1)?>

<?php

// SWITCH este analogul la if elseif

$var = 2;

/* if ($var == 1){
    echo "Variable == 1";
}elseif( $var == 2){
    echo "Variable == 2";
}elseif($var == 3){
    echo "Variable == 3";
}else{
    echo "Somethink else";
} */

switch($var){
    case 1:
        echo "Variable = 1";
        break; //break daca nu il folosim atunci el afiseaza pe toate de cind conditia este satisfacuta
    case 2:
        echo "Variable = 2";
        break;
    case 3:
        echo "Variable = 3";
        break;
    default:
        echo "Somethink else";
}



$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;

/* var_dump($bool);
var_dump(1); */

if($bool == 1){
    echo '<table class="table" border="1">
                <tr>
                    <td>' .$str1. '</td>
                    <td>' .$str2. '</td>
                    <td>' .$str3. '</td>
                </tr>
            </table>';
}

//Constructia if(): endif o putem folosi atit si pentru WHILE, FOR, FOREACH, SWITCH


?>


<?php if($bool): ?>
    <table class="table" border="1">
        <tr>
            <td><?php echo $str1; ?></td> <?//Sau cu echo afisam sau cu semnul "="?>
            <td><?php echo $str2; ?></td>
            <td><?=$str3 ?></td>
        </tr>
    </table>
<?php endif; ?>

<?php 
$names = [
    'Maxim' => 'Gudkov',
    'Vadim' => 'Dumbrava',
    'Kiril' => 'Potreba',
    'Anton' => 'Gusar',
    'Oleg' => 'Monoton',
    'Alex' => 'Berin',
];

/* foreach($names as $key => $surname){
    echo "Name: ". $key .", Surname: ". $surname."<br>";
} */

echo "<br>";
foreach($names as $key => $surname):
    echo "Name: {$key}, Surname: ". $surname."<br>";// afisam $var prin concatenare sau {$var}
endforeach;

echo  "<br>";
?>
<?php foreach($names as $key => $surname):?>
    Name:  <?php echo $key?>, Surname: <?=$surname?><br>
<?php endforeach; ?>




