<?php 
date_default_timezone_set('Europe/Chisinau'); //set timezone

//------------ Function date
echo date('d-m-Y H:i:s');
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
echo "2020 - " . date('Y'); // echo this year

//phpinfo(); //information about your server configuration
echo "<br>";
$date = getdate();
print_r($date);
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
echo "<br>";
echo date('d-m-Y h:i:s', strtotime("+1 day 1 hour")); // tomorrow date show
echo "<br>";
echo date('d-m-Y h:i:s', time() + 60 * 60 * 24);  // tomorow date


// ------------- Function mktime
echo "<br>";
echo time();
echo "<br>";
echo mktime( date("H") + 1, date("i") + 1, date("s") + 1, date("m"), date("d"), date("Y") );
echo "<br>";
$t = mktime( date("H"), date("i"), date("s"), date("m"), date("d"), date("Y") + 1 ); //adding 1 year
echo date('Y-m-d H:i:s', $t);






?>