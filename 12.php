<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 01:13
 */
$n = 1000;
$num = 0;
$res = 0;

while($n > 50){
    $n = $n/2;
    $num++;
}

echo $n."\n";
echo $num."\n";