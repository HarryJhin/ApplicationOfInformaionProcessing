<?php
$start = date("y-M-d일 G:i 부터", mktime(15, 30, 0, 6, 24, 2020));
echo $start;
echo "<br>";
$end = date("Y-n-d일 G:i 까지", mktime(16, 30, 0, 6, 24, 2020));
echo $end;