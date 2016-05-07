<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:08
 */

$arr = ['mon','tue','wed','th','fr','sat','sun'];

foreach ($arr as $k => $item){

    if($k == 5 || $k == 6 ){
        echo "<b>".$item."</b>\n";
    }else{
        echo $item."\n";
    }
}
