<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:26
 */
/**
 * @param $arr
 * @return string
 */
function compare_old($arr){
    $res = '';
    $husband_old = 0;
    $wife_old    = 0;

    $husband_old = $arr['husband']['old'];
    $wife_old   = $arr['wife']['old'];

    if($husband_old == $wife_old){
        $res = "Супруги одногодки\n";
    }else{
        $res = "Супруги разногодки\n";
    }
    echo $res;

    return true;
}