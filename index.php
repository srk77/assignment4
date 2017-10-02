<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$date1 = str_replace("-","/",$date);
echo('The value of \$date1: '.$date1.'<br>');

if(strcmp($date1,$tar) >0 ){
echo "the future<br> ";
} else if(strcmp($date1,$tar)==0){
echo "oops<br>";
} else {
echo "the past<br>";
}

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
