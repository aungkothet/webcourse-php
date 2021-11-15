<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("Asia/Yangon");
// echo "Today is " . date("Y-M-d H:i:s") . "<br>";
// echo "Today is " . date("d M. y") . "<br>";
// echo "Today is " . date("m-Y-d") . "<br>";
// // $today = strtotime("+3 days +3 hours +1 year");
// // var_dump($today);
// // echo date('Y-m-d h:i:s a',$today);
// // echo "Today is " . date("l");

// $startdate = strtotime("last Monday");
// var_dump($startdate);
// var_dump(date('Y-m-d H:i:s',$startdate));

// $enddate = strtotime("+4 weeks", $startdate);
// var_dump($enddate);
// var_dump(date('Y-m-d H:i:s',$enddate));



// while ($startdate < $enddate) {
//   echo date("M d l", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);
// }


// $targetDateTimeStamp=strtotime("October 06");
// var_dump($targetDateTimeStamp);
// $todayTimeStamp = time();
// var_dump($todayTimeStamp);
// var_dump((($targetDateTimeStamp-time())/60/60/24));
// $d2=ceil(($targetDateTimeStamp-time())/60/60/24);
// echo "There are " . $d2 ." days until 6th of October.";

$d=mktime(6, 30, 2, 1, 1,1970);
var_dump(time());
var_dump(date('Y-M-d H:i:s',$d));
// // $d=strtotime("04:01am February 01 2021");
// $today=strtotime("today");
// $tomorrow = strtotime("tomorrow +1 hour");
// // $today = sta
// echo "<br>";
// if($today> $tomorrow){
//     echo date("Y-M-d", $today)."=>  $today is greater than $tomorrow =>".date("Y-M-d", $tomorrow);
// }else {
//     echo date("Y-M-d", $tomorrow)." => $tomorrow  is greater than $today =>".date("Y-M-d", $today);
// }
// echo "<br>Created date is $tomorrow ==>  " . date("Y-M-d H:i:s l", $tomorrow);
?>

</body>
</html>
