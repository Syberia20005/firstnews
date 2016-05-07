<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 01:54
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $k => $val){
    echo $val;
    $k++;
    if($k != 3 && $k != 6 ) echo "\n";
}