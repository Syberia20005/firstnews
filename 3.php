<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:26
 */
$arr = [];
$arr = [26, 17, 136, 12, 79, 15];
$result = 0;

foreach ($arr as $item) {
    $result += ($item * $item);
}
