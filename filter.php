<?php
  function my_callback($item) {
    return strlen($item);
  }
  $strings = ["apple", "orange", "banana", "coconut"];
  var_dump($strings);
//   foreach ($strings as $key => $value) {
//     $lengths[$key] = my_callback($value);
//   }
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);

// $int = 1229;
// $min = 1;
// $max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
//   echo("Variable value is not within the legal range");
// } else {
//   echo("Variable value is within the legal range");
// }
// $str = "http://fb.com";
// var_dump($str);
// $newstr = filter_var($str, FILTER_VALIDATE_URL);
// if($newstr === false ) {
//     echo "Invalid URL";
// }else {
//     echo "Valid URL $newstr";
// }
// var_dump($newstr);
?>