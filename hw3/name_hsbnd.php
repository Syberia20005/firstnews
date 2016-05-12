<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:25
 */
/**
 * @param $arr
 * @return string
 */
function name_hsbnd($arr){
    $name = '';
    $res  = '';

    foreach ($arr as $k => $item) {
        if($k == 'husband'){
            $name = $item['name'];
            $res  = "Супруг " . $name . "\n";
        }
    }

    return $res;
}