<?php

require_once 'user.php';

$user = getUser();
requiredUser($user);

echo "Welcome to our site";