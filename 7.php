<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:47
 */
$arr = [];
$arr =[2, 5, 9, 15, 0, 4];

foreach ($arr as $item) {
    if($item > 3 && $item < 10){
        echo $item."\n";
    }
}