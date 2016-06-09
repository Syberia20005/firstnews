<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 14.05.16
 * Time: 11:25
 */
session_start();

setcookie('id');
unset($_SESSION['id']);  //удаление элемента из массива
header('Location: index.php');