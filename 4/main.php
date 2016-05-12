<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 12:55
 */

include "f2.php";//если инклюд не находит файл то продолжит работу
//include "f2.php";

require "fp.php"; //если реквайен не находит файл - и работу прекращает
//require 'ttt.php';

include_once "f2.php";

f1();


f2();
echo "\n";



try{
    
    //....
}catch (Exception $e){
    //.....
}catch (MyExeption $e){
    //...
}