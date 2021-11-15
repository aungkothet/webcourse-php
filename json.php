<?php
// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// $x = array('red','green','blue','black');
// var_dump(json_encode($age));
// echo json_encode($age);

// $json= '{"Peter":35,"Ben":37,"Joe":43}';

// $ary= json_decode($json,true);
// echo "<br>";
// var_dump(json_encode($x));

// echo json_encode($x);

// echo "<br>";
// // var_dump($ary['Peter']);
// // var_dump($ary['Ben']);
// // var_dump($ary['Joe']);
// // var_dump($ary->Peter);
// // var_dump($ary->Ben);
// // var_dump($ary->Joe);

// foreach($ary as $key => $value) {
//     echo $key . " => " . $value . "<br>";
//   }



//   $arys = [
//     array("Peter"=>5, "Ben"=>10, "Joe"=>15),
//     array("Peter"=>35, "Ben"=>37, "Joe"=>43),
//     array("Peter"=>3, "Ben"=>7, "Joe"=>3),
//     array("Peter"=>40, "Ben"=>20, "Joe"=>25)
//   ];

// $arys = [
// "Peter" => ['p-red','p-green','p-blue','p-black'],
// "Ben" => ['b-red','b-green','b-blue','b-black'],
// "Joe" => 'j-red','j-green','j-blue','j-black',
// ];

 
// //   var_dump($js_encode);
// //   echo $js_encode;
// //   echo "<br>";
  
//   try{
//     $js_encode = json_encode($arys);
//     //   $js_encode .= "adf";
//     $js_decode = json_decode($js_encode,true);
// //   var_dump($js_decode);

//   }catch(Exception $e) {
//     echo "throw JsonException";
//     var_dump($e);
//   }

function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}
// echo divide(5, 0);
try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
}

echo "<br>This is final.";
?>