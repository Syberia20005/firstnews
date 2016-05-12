<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:24
 */
/**
 * @param $arr
 * @return string
 */
function get_old_height($arr){
    $old    = 0;
    $height = 0;
    $res    = '';

    foreach ($arr as $k => $item) {
        if($k == 'wife') {
            $old = $item['old'];
            $height = $item['height'];
            $res = "Мой рост " . $height . " см и мой возраст " . $old . " лет\n";
        }
    }

    return $res;
}