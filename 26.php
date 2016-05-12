<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:56
 */
$arr = [rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100)];

print_r($arr);
$mult = 1;

foreach ($arr as $k => $item) {
    if($item > 0 && $k % 2 == 0){
        $mult *= $item;
    }
    if($item > 0 && $k % 2 != 0){
        echo $item."\n";
    }
}
echo $mult."\n";
