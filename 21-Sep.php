<?php
// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5
// 1 2 3 4 5

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

// echo $cars[0][0].",".$cars[0][1].",  ".$cars[0][2].".<br>";
// echo $cars[1][0].",".$cars[1][1].",  ".$cars[1][2].".<br>";
// echo $cars[2][0].",".$cars[2][1].",  ".$cars[2][2].".<br>";
// echo $cars[3][0].",".$cars[3][1].",  ".$cars[3][2].".<br>";

for($i = 0 ; $i < count($cars); $i++){
    for($j = 0; $j< count($cars[$i]); $j++ ){
        echo $cars[$i][$j].",";
    }
    echo ".<br>";
}

