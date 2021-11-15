<?php

for ($i = 1; $i <= 12; $i++) {
    echo "<div class='col-3'>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<h6>$i * $j = " . $i * $j . "<h6>";
    }
    echo "</div>";
    if ($i % 3 == 0) {
        echo  "<hr>";
    }
}