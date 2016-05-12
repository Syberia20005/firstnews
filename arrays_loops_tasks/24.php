<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 03:42
 */
$numb = 442158755745;
$numb = str_split($numb);
$num = 5;
$count = 0;

for($i = 0; $i < count($numb); $i++){
    if($num == $numb[$i]){
        $count++;
    }

}
echo $count;