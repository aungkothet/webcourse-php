<?php
// echo readfile('webdictionary.txt');
$myfile = fopen("webdictionary.txt", "r+") or die("Unable to open file!");
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br>";
// echo fgets($myfile) . ' --> ' .feof($myfile);
// echo "<br> this is last";
// var_dump(fgets($myfile));
while(!feof($myfile)) {
    echo fgetc($myfile)."<br>";
}
// while(!feof($myfile)){
//     $str = fgets($myfile);
//     $data = stripslashes($str);
//     $data = htmlspecialchars($data);
//     echo $data. "<br>";
// }
// do{
//     $str = fgets($myfile);
//     $data = stripslashes($str);
//     $data = htmlspecialchars($data);
//     echo $data. "<br>";
// }while($str);
// echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);