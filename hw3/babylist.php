<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:23
 */
/**
 * @param $arr
 * @return string
 */
function babylist($arr){
    $res = '';
    foreach($arr as $k => $val){
        foreach ($val as $key => $value) {
            if ($key == 'babyboy' && strlen($value['name']) != 0 || $key == 'babygirl' && strlen($value['name']) != 0) {
                $res .= "Ребенок " . $key . " которого зовут " . $value['name']."\n";
            }
        }
    }

    return $res;
}