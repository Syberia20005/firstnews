<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 00:49
 */
$arr = [];
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res_while   = '';
$res_for     = '';
$res_foreach = '';

foreach ($arr as $item) {
    $res_foreach .= $item;
}
echo $res_foreach."\n";


for($i = 0; $i <= count($arr); $i++) {
    $res_for .= $arr[$i];
}
echo $res_for."\n";


$i = 0;
while ($i <= count($arr)){
    $res_while .= $arr[$i];
    $i++;
}
echo $res_while."\n";