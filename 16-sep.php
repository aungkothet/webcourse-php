<?php

// $mark = 80;

// // 0 -> 20 ==> E 
// // 21 -> 40 ==> D
// // 41 -> 60 => C
// // 61 -> 80 => B
// // 81 -> 100 => A

// if( $mark >= 0 && $mark <= 100){

//     if( $mark > 80 && $mark <= 100 ){
//         $grade = "A"; // Excellent
//     }elseif ( $mark > 60 && $mark <= 80){
//         $grade = "B"; // Good Keep Going
//     }elseif ( $mark > 40 && $mark <= 60){
//         $grade = "C"; // You need to push harder
//     }elseif ( $mark > 20 && $mark <= 40){
//         $grade = "D"; // Worse 
//     }elseif ( $mark >= 0 && $mark <= 20){
//         $grade = "E"; // So stupid
//     }
//     // $grade = "F";
//     echo "Your Grade is  $grade";
    
//     switch($grade){
//         case "A":  echo " <br/>You are Excellent";break;
//         case "B": echo " <br/>You are Good Keep Going";break;
//         case "C": echo " <br/>You need to push harder";break;
//         case "D": echo " <br/>You are Worse Student";break;
//         case "E": echo " <br/>You are So stupid";break;
//         default : echo "<br/>Invalid Grade";
//     }

// }else {
//     echo "Enter Valid Mark!!! Mark should be 0 to 100.";
// }

// echo "<br>";

// echo "1<br>";
// echo "2<br>";
// echo "3<br>";
// echo "4<br>";
// echo "5<br>";
// echo "6<br>";
// echo "7<br>";
// echo "8<br>";
// echo "9<br>";
// echo "10<br>";

// $i = 11;

// while( $i <= 10 ){
//     echo "$i<br>";
//     $i++;
// }
// $user = "Chocolate";

// echo $ss = ($user == 'Chocolate')? "anonymous" : "logged in";
// $user = "Strawberry";
// echo "<br>";
// echo $ss = ($user == 'Chocolate')? "anonymous" : "logged in";

// $a = "a";
// $b = empty($a);

// echo $b;


// $i = 11;
// do{
//     echo "$i<br>";
//     $i++;
// }while($i<=10);


for ($i = 10; $i >= 1; $i-- ){
    echo "$i<br>";
}
