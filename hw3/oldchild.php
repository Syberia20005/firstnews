<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:24
 */
/**
 * @param $arr
 */
function oldchild($arr){
    $old  = 0;
    $name = '';
    $res  = '';

    foreach ($arr as $key => $item) {
        foreach ($item as $k => $val) {

            if ($k == 'babyboy' && !empty($val) || $k == 'babygirl' && !empty($val)) {
                $name = $val['name'];
                $old  = $val['old'];
                $res .= $name . " " . $old . " года \n";
            }
        }

    }

    return $res;
}