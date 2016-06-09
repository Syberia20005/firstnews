<?php

require_once 'user.php';

$user = getUser();
requiredUser($user);

echo "Вы авторизированны как  ".$user['name']. ' [ <a href="out.php">Выход</a> ]';
