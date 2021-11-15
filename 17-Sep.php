<?php

// $cars = ['BMW', "Lambo", "Marceede",  "Luxes", "Toyota"];
// $cars = ['a' => 'BMW', 'b' => "Lambo", 'c' => "Marceede", 'd' => "Luxes", 'e' => "Toyota"];
// echo $cars[0]."<br>";
// echo $cars[1]."<br>";
// echo $cars[2]."<br>";
// echo $cars[3]."<br>";
// echo $cars[4]."<br>";

// for($i = 4; $i >= 0; $i--){
//     if($i == 2){
//         break;
//     }
//     echo $cars[$i]."<br>";
// }
// $i = 0;
// while($i <= 4){
//     echo $cars[$i++]."<br>";
// }

// do{
//     echo $cars[$i++]."<br>";  
// }while($i <=4);
// foreach ($array as $value) {
// }
// foreach ($cars as $key => $value) { // $value ==> $cars[$key]
//    var_dump($key);
//    var_dump($value);
//    echo "<br>";
// }

// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//         continue;
//     }
//     echo "The number is: $x <br>";
// }
// echo "THIS IS END OF LOOP<br>";

// for ($i = 5; $i >= 1; $i-- )
// {// outer loop 5/4/3/2/1
//     for ($j = 1; $j <= 4; $j++ ){ // inner loop // outer loop       
//         for($k= 1; $k <=5; $k++){ //inner loop
//             echo "$i - $j - $k<br>"; //1/2/3/4
//         }
//         echo 'J loop ----<br>'; 
//     }
//     echo '----<br>'; 
// }
// *
// **
// ***
// ****
// 1 // 1
// 2 // 12
// 3 // 123
// 4 // 1234

// *****
// ****
// ***
// **
// *
// **
// ***
// ****
// *****

// 1 // 54321 
// 2 // 5432
// 3 // 543
// 4 // 54
// 5 // 5
// 6 // 54
// 7 // 543
// 8 // 5432
// 9 // 54321

// ++++*
// +++**
// ++***
// +****
// *****
// +****
// ++***
// +++**
// ++++*

// 1 5432*
// 2 543**
// 3 54***
// 4 5****
// 5 *****
// 6 5****
// 7 54***
// 8 543**
// 9 5432*
 
// 1 --------*
// 2 ------*-*
// 3 ----*-*-*
// 4 --*-*-*-*
// 5 *-*-*-*-*


// 6 +****
// 7 ++***
// 8 



for($i = 1; $i<=5 ; $i++){
    $k = (5-$i)*2;
    for($j = 1; $j  <= 9; $j++){
        if($k>=$j){
            echo "-";
        }else {
            if($j%2 == 0){
                echo '-';
            }else {
                echo "*";
            }
        } 
    }
    echo "<br>";
}


