<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 12.05.16
 * Time: 23:13
 */
require_once "babylist.php";
require_once "oldchild.php";
require_once "get_old_height.php";
require_once "name_hsbnd.php";
require_once "plus_year.php";
require_once "compare_old.php";

$d = fopen('functionrequire.txt','r' );

$read = fread($d,1024);
$read = unserialize($read);
print_r($read);

fclose($d);


echo "Список детей: \n" . babylist($read);

echo "Возраст детей: \n" . oldchild($read);

echo get_old_height($read);

echo name_hsbnd($read);

plus_year($read);

compare_old($read);