<?php
error_reporting(-1);
date_default_timezone_set('Europe/Chisinau'); //set timezone

//------------ Function date
/* echo date('d-m-Y H:i:s');
echo "<br>";
echo date('d-m-Y h:i:s A'); // echo date  time in 12h format
echo "<br>";
echo date_default_timezone_get(); // get and echo timezone
echo "<br>";
echo date('d-m-Y h:i:s', 1);
echo "<br>";
echo date('d-m-Y h:i:s', time() + 60 * 60 * 24 * 7 ); // adding 7 day time to date
echo "<br>";
echo time(); // Unix time from 01.01.1970
echo "<br>";
echo "2020 - " . date('Y'); // echo this year */

//phpinfo(); //information about your server configuration
/* echo "<br>";
$date = getdate();
print_r($date); */
/*
Array
(
    [seconds] => 40
    [minutes] => 58
    [hours]   => 21
    [mday]    => 17
    [wday]    => 2
    [mon]     => 6
    [year]    => 2003
    [yday]    => 167
    [weekday] => Tuesday
    [month]   => June
    [0]       => 1055901520
)
*/
/* echo "<br>";
echo date('d-m-Y h:i:s', strtotime("+1 day 1 hour")); // tomorrow date show
echo "<br>";
echo date('d-m-Y h:i:s', time() + 60 * 60 * 24);  // tomorow date */


// ------------- Function mktime
/* echo "<br>";
echo time();
echo "<br>";
echo mktime( date("H") + 1, date("i") + 1, date("s") + 1, date("m"), date("d"), date("Y") );
echo "<br>";
$t = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y") + 1 ); //adding 1 year
echo date('Y-m-d H:i:s', $t); */


// -------- Function date_create
$date = date_create(date('Y-m-d H:i:s'));
//var_dump($date);
echo date_format($date, 'Y-m-d H:i:s');


// -------- Function date_add
date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5seconds'));
echo "<br>";
echo date_format($date, 'Y-m-d H:i:s');
echo "<br>";

// -------- Function microtime
echo microtime(); //string
echo "<br>";
echo microtime(true); // boolean
echo "<br>";


//-   Execution time of page
/* $start = microtime(true);
usleep(1000000);
$end = microtime(true);
echo $end - $start; */

//exemple 2 timer
$start = microtime(true);
for($i = 1; $i <= 1000000; $i++){
    if($i == 1000000) echo "Отчет завершен за: ";
}
$end = microtime(true);


echo $end - $start;

// -------- Function date_create









?>