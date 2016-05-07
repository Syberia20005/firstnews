<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:35
 */

$arr = [];
$arr = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400,
];

$result = '';

foreach ($arr as $key => $value) {
    $result .= $key . " - зарплата " . $value." долларов\n";
}

echo $result;