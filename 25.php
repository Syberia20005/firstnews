<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:39
 */


$arr = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
print_r($arr);

$min = $arr[0];
$max = $arr[0];
$pos_min = 0;
$pos_max = 0;

foreach ($arr as $k => $item) {
    if($item <= $min){
        $min = $item;
        $pos_min = $k;
    }
    if($item >= $max){
        $max = $item;
        $pos_max = $k;
    }

}

$tmp = $arr[$pos_min];
$arr[$pos_min] = $arr[$pos_max];
$arr[$pos_max] = $tmp;
print_r($arr);

