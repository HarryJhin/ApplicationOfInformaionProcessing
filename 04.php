<?php
$su = 100;

function hap() {
    global $su;
    $su += 200;
}

hap();
echo $su;