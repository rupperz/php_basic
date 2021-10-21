<?php 
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
//Функции для работы со строками


// ----------- explode
/* $str = 'Иванов Вадим Александр';
$str_explode = explode(" ", $str);
print_r($str_explode);
echo $str_explode[0]; */


//------------ implode or JOIN
/* $data = ['Apple', 'Ipad', 'Iphone'];
echo $str = implode(', ', $data); 
echo $str = join(', ', $data); */


// ----------- trim | rtrim | ltrim ( Удаляет пробелы и символы с начало и с конца стринга)
// ----------- rtrim (right trim), ltrim (left trim)
/* $str = "\t\n<p>Hello </p>\n";
$str .= "\n<p>my dear!</p>\t";
//echo $str;
echo trim($str);
echo trim($str, "\t"); */


// --------- rtrim
/* $str = "test my word,";
echo rtrim($str,','); */


// --------- Function pass encryption MD5 and SHA1
/* $passw = "password";
echo md5($passw);
echo md5(md5($passw)); 
echo "<br>";
echo sha1($passw); */


// -------- Function nl2br - new line two <br>
/* $str = "Hello\n
world";
echo nl2br($str); */


// ----------- Function str_replace | str_ireplace (str_ireplace - без учета регистра)
/* $str = "Hello my [i]name[/i] is [B]Eugen[/b]?";
echo $str;
echo "<br>";
$str1 = str_replace('[b]', '<b>', $str);
$str1 = str_replace('[/b]', '</b>', $str1);
$str1 = str_replace('?', '!', $str1);
echo $str1;
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];
$str2 = str_replace($search, $replace, $str);
$str3 = str_ireplace($search, $replace, $str);
echo "<br>";
echo $str2;
echo "<br>";
echo $str3; */


// ----------- Function strip_tags
/* $str4 = 'Hello my <i>name</i> is <b>Eugen</b>? <script>alert("XSS")</script>';
//echo $str4;
echo strip_tags($str4);
echo strip_tags($str4, '<b><i>'); */


// ------------ Function strlen (возвращает количество символов, но для РУС символы работает не правильно)
/* $mystr = "Victor";
$mystr2 = "Ку";
echo "String '".$mystr."' have: ".strlen($mystr)." symbol"; //6
echo "<br>";
echo "String '".$mystr2."' have: ".strlen($mystr2)." symbol"; // 4
 */
// ------- Function mb_strlen (для мультибайтных стрингов) как к примеру русский алфавит
/* echo "<br>";
echo "String '".$mystr2."' have: ".mb_strlen($mystr2)." symbol";  // 2
 */


// -------- Function strpos или mb_strpos (mb - многобайтная функция)
// ----strpos / mb_strpos - Поиск позиции первого вхождения одной строки в другую
/* $string = "Привет, Unifun!";
echo strpos($string, ','); // 12
echo "<br>";
echo mb_strpos($string, ',', 0, 'utf-8'); // 6

if(mb_strpos($string, ',', 0, 'utf-8')) echo "OK";
else echo "NOT FOUND";

if(mb_strpos($string, 'П', 0, 'utf-8') !== false) echo "OK";
else echo "NOT FOUND"; */


// ------------ Function mb_strtolower | mb_strtoupper | strtolower | strtoupper
//echo mb_strtolower($stringo, "utf-8") - кодировку надо указать если версия ниже php 5.6
/* $stringo = "i go to shop 'Мой мир'";
echo strtolower($stringo)."<br>";
echo strtoupper($stringo)."<br>";
echo mb_strtolower($stringo)."<br>";
echo mb_strtoupper($stringo)."<br>"; */


// ------------ Function substr
//mb_substr($stringo, start, length, кодировка) если старт отрицательный, начинает считать с конца
/* $stringo = "i go to shop 'Мой мир'";
echo mb_substr($stringo, 8, null, "utf-8")."<br>";
echo mb_substr($stringo, -4, 3, "utf-8")."<br>"; */


//------------- Function htmlspecialchars | htmlspecialchars_decode
/* $stringa = "&amp;<h1><i>Hello</i> <b>Unifun!!!</b></h1><iframe src='https://webformyself.com' height='100%' width='100%'></iframe><script>alert('XSS');</script>";
echo htmlspecialchars($stringa, ENT_QUOTES);
 */
/* $abrakadabra = "&amp;amp;&lt;h1&gt;&lt;i&gt;Hello&lt;/i&gt; &lt;b&gt;Unifun!!!&lt;/b&gt;&lt;/h1&gt;&lt;iframe src=&#039;https://webformyself.com&#039; height=&#039;100%&#039; width=&#039;100%&#039;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;);&lt;/script&gt;&<h1><i>Hello</i> <b>Unifun!!!</b></h1><iframe src='https://webformyself.com' height='100%' width='100%'></iframe><script>alert('XSS');</script>";
echo htmlspecialchars_decode($abrakadabra, ENT_QUOTES); */


//------------- Function htmlentities
$unistr = "Hello 'my' <b>Unifun</b> friends!!!";
echo htmlentities($unistr);




?>