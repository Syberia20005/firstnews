<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 29.04.16
 * Time: 19:06
 */


$myold  = 30;
$diff   = 35 - $myold;
$myname = 'Marchenko Natalya';

if($myold > 35){
    echo "Меня зовут: $myname и мне $myold";
} else {
    echo "Меня зовут: $myname и до 35 лет мне еще $diff лет";
}



// assoc array

$country_array = array();
$country_array['Ukraine'] = 'Kyiv';
$country_array['French']  = 'Paris';
$country_array['Italy']   = 'Rome';
$country_array['Vatican'] = 'Vatican';
$country_array['Spain']   = 'Madrid';

echo "<pre>";
print_r($country_array);
echo "</pre>";


//multi array

$multi_array = array();
$multi_array[0]['style'] = 'poems';
$multi_array[0]['autor'] = 'Esenin';
$multi_array[0]['name']  = 'Shagane';
$multi_array[0]['price'] = '1000000';
$multi_array[1]['style'] = 'roman';
$multi_array[1]['autor'] = 'Draizer';
$multi_array[1]['name']  = 'The Financier';
$multi_array[1]['price'] = '2000000';
$multi_array[2]['style'] = 'fantasy';
$multi_array[2]['autor'] = 'King';
$multi_array[2]['name']  = 'Dark tower';
$multi_array[2]['price'] = '3000000';

echo "<pre>";
print_r($multi_array);
echo "</pre>";

