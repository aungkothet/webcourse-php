<?php

$helloWorld = "HELLO WORLD!!!";

$length = strlen($helloWorld);

echo $length;

echo "<br>";

$revString = strrev($helloWorld);

echo $revString;
echo "<br>";
$helloWorld = $revString;

$position = strpos($helloWorld, '!');
echo $position;