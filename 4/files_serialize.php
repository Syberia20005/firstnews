<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 12:10
 */
$d = fopen('test.txt',"r");

$r = fread($d,1024);
$r = unserialize($r);
print_r($r);


fclose($d);

// fread() - может прочитать по частям
// file_get_contents() - прочитат целиком файл!!!