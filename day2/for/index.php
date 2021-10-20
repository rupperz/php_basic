<?php
$arr = ['Vadim', 'Maxim', 'Alexandru', 'Alina', 'Grigorii'];

print_r($arr);

$names = [
    'Maxim' => 'Dunaev',
    'Kiril' => 'Maroc',
    'Oleg' => 'Bemol',
    'Anton' => 'Sinekov'
];
echo "<br>";
print_r($names);
echo "<hr>";
//Metoda while
/* $i = 1;
while( $i <= 11 ) {
    echo $i . "<br>";
    $i++;
} */

//Metoda FOR
/* for($i = 1; $i <= 11; $i++ ){
    echo $i . "<br>";
}
echo "<br>"; */

//Metoda FOR fara {} se executa doar 1 rind dupa for
/* for($i = 1; $i <= 11; $i++ )
    echo $i . "<br>"; */

//Functia FOR + count a masivului
for( $i = 0; $i < count($arr); $i++ ){
    echo $arr[$i] . "<br>";
}

//WHILE si FOR se folosesc doar pentru masive simple fara key
//Pentru masive cu sau fara key sau asociative se foloseste FOREACH

echo "<hr>";

//HOMEWORK
//Afisarea select option anii 1900-2021 cu functia FOR
echo "<select>";
for( $i = 1900; $i <= 2021; $i++ ){
    echo "<option value='{$i}''>".$i ."</option>";
}
echo "</select>";

echo "<hr>";

//Afisarea tablitei inmultire  cu functia FOR
echo "<br>";
echo "<table border='1px'>";
for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($n = 1; $n<=10; $n++){
        echo "<td>{$i}*{$n}=".$i*$n."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>