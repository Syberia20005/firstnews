<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:03
 */
$arr = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];
$month = 5;
foreach ($arr as $k => $item){

    if($k == $month-1){
        echo "<b>".$item."</b>\n";
    }else{
        echo $item."\n";
    }
}
