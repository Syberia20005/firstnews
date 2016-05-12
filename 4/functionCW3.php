<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 11:06
 */

//1,1,2,3,5,8,13,21,34

/*
function fibon($last,$count){
    static $sum = 2;
    $new_last = $sum;
    $sum = $sum + $last;// $sum += $last;

    //if(--$count == 0)
    fibon($new_last,$count);

}

fibon(1,4);

*/

$a = [2,7,'t26'];
$b = serialize($a);

print_r($a);
print_r($b);

$c = unserialize($b);

print_r($c);

$d = fopen('/Applications/XAMPP/xamppfiles/htdocs/4/test.txt',"w+");
fwrite($d, $b);
fclose($d);

//file_put_contents() - пишет все сразу в файл - по частям не получится