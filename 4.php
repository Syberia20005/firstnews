<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:32
 */
$arr =[];
$arr = [
    'green' => 'зеленый',
    'red'   => 'красный',
    'blue'  => 'голубой',
];

foreach ($arr as $key => $item) {
    echo $key."\n";
}

foreach ($arr as $item) {
    echo $item."\n";
}