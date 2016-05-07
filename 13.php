<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 01:21
 */
$res = 0;

for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo $i . "*". $j . "=" . $res . " ";
    }
    echo "\n";
}
