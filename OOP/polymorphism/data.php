<?php

//Get all DATA -> array ($publications)

require_once 'classes.php';

$publications = array();

//$news1 = new NewsPublication();
//$news2 = new NewsPublication();
//$news3 = new NewsPublication();
//$article1 = new ArticlePublication();
//$article2 = new ArticlePublication();
//$photo1 = new PhotoReportPublication();
//$photo2 = new PhotoReportPublication();

//$publications = array( $news1, $news2, $article1, $article2, $photo1);

//echo "<pre>";
//print_r($publications);



//connect to db
$con = mysqli_connect("localhost", "root", "", "news_course");
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//make query
$result = mysqli_query($con, "SELECT * FROM `publication`");

//work with results
while($row = mysqli_fetch_array($result)) {
    //echo "<br>".$row['type'];
    //new NewsPublication($row)
    $publications[] = new $row['type']($row);
}

echo "<pre>";
print_r($publications);
