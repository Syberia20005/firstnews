<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:10
 */
$arr = ['mon','tue','wed','th','fr','sat','sun'];
$day = 5;
foreach ($arr as $k => $item){

    if($k == $day - 1){
        echo "<i>".$item."</i>\n";
    }else{
        echo $item."\n";
    }
}
