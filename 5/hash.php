<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 14.05.16
 * Time: 10:17
 */

$pass ='440081';
var_dump($pass);
$hash = md5($pass);//32 символов

var_dump($hash);

$hash1 =sha1($pass);//40 символов
var_dump($hash1);

$hash2 = sha1($hash1);
var_dump($hash2);

