<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 05.05.16
 * Time: 20:30
 */
$fml = [];
$fml = [
    'wife' => [
        'name' => 'Natalya',
        'old'  => '30',
        'height' => 172,
        'babyboy'  => [
            'name' => 'Петя',
            'old'  => 2,
        ],
        'babygirl' => [
            'name' => 'Аня',
            'old'  => 2.5,
        ],
    ],
    'husband' => [
        'name' => 'Sasha',
        'old'  => '30',
        'height' => 178,
        'babyboy'  => [

        ],
        'babygirl' => [
            'name' => 'Маня',
            'old'  => 2.9,
        ],
    ],

];

//print_r($fml);

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

echo "Список детей: \n" . babylist($fml);

echo "Возраст детей: \n" . oldchild($fml);

echo get_old_height($fml);

echo name_hsbnd($fml);

plus_year($fml);

compare_old($fml);