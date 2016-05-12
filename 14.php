<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 01:27
 */

$arr = [];
$arr = [4, 2, 5, 19, 13, 0, 10];


$flag = 0;
foreach ($arr as $e ) {
    if ($e == 2 || $e == 3 || $e == 4) {
        $flag = 1;
        break;
    }
}

if ($flag == 1){
    echo "Есть!\n";
} else {
    echo "Нет!\n";
}