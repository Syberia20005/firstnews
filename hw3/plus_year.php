<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:26
 */
/**
 * @param $arr
 */
function plus_year($arr){
    echo "Увеличенный возраст всех людей на 1: \n";

    foreach ($arr as $item) {
        foreach ($item as $key => $value) {
            if($key == 'old'){
                echo ++$value."\n";
            }
            if($key == 'babyboy' && !empty($value)|| $key == 'babygirl' && !empty($value)){
                foreach ($value as $k => $val) {

                    if($k == 'old') {
                        echo ++$val."\n";
                    }
                }
            }

        }
    }
    return true;
}
