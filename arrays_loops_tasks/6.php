<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:40
 */

$arr = [];
$en  = [];
$ru  = [];

$arr = [
    'green'=>'зеленый',
    'red'  =>'красный',
    'blue' =>'голубой'
];

foreach ($arr as $key => $item) {
    $en[] = $key;
    $ru[] = $item;
}

