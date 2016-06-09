<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 29.05.16
 * Time: 16:58
 */


$shop_categories = array (
    array(
        'title'    => 'Компьютеры',
        'children' => array(
            array(
                'title' => 'Ноутбуки',
                ),
                array(
                    'title' => 'Моноблоки',
                ),
                array(
                'title'    => 'Системные блоки',
                'children' => array(
                        array(
                        'title' => 'Tower',
                        ),
                        array(
                            'title' => 'MiniTower',
                        ),
                    ),
                ),
        ),
    ),
    array(
        'title' => 'Бытовая техника',
        'children' => array(
            array(
                'title' => 'Пылесосы',
            ),
            array(
                'title' => 'Холодильники',
            ),
        ),
    ),
);

//print_r($shop_categories);

function print_cats($array) {
    foreach ($array as $i => $arr) {
        //if ($i == 0 || $i == 1) {
            echo $arr['title'];
        //}
            echo "\n";
            echo $i."\n";
            if (array_key_exists('children',$arr)) {
                echo print_cats($arr['children']).'--';
                //echo $i."\n";
            }
    //}

        
        //echo '--';
    }
}

print_cats($shop_categories);

/*
function rec($a){
    if($a > 0){
        rec($a-1);
    }
    echo $a."\n";
}
rec(3);
*/