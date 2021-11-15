<!DOCTYPE html>
<html>
<body>

<?php
// $x = 100;  
// $y = 90;
// $z = 100000;
// $z = null;
// echo $z ?? "It's null";
// if (!(!($x == 100) xor ($y == 900))) {
// // if( !(!true xor false) ) /// if( !(false xor false)) // !false // true
//     echo "Hello world!";
// }else {
// 	echo "Hello HELL!";
// }

// if($x > $y)
// { 
//     if ( $x > 50 ){
//         echo "x is greater than 50";
//     }else {
//         echo "x is less than 50";
//     }
//     // echo "x is greater than y";
//     // $x -= $y; // $x = $x - $y;
// }
// else 
// {
//     echo "y is greater than x";
//     // $x = $y - $x;
// }
// echo ($x > $y) ? ( ( $x > 50 ) ? "x is greater than 50" : "x is less than 50" ) : "y is greater than x";



// echo ($x > $y) ? ( ($x < 50) ? "x is greater than 50" : "x is less than 50" ): "y is greater than x";
// echo $x;

$x = array('red','green');

// $x[0] ==> 'red'
// $x[1] ==> 'green'

$x = array("a" => "red", "b" => "green", 'c' => 'black'); 
$y = array("a" => "red", 'c' => 'black', "b" => "green"); 

// $x['a'] ==> 'red'
// $x['b'] ==> 'green'
// $x['c'] ==> 'black'

// $y = array("c" => "blue", "d" => "yellow");  

// $x = ['a'=>'blue','b'=>'yellow'];
// $y = ['a'=>'blue','b'=>'yello'];

var_dump($x !== $y); // union of $x and $y
?>  

</body>
</html>
