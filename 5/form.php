<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 14.05.16
 * Time: 10:33
 */

//var_dump(strcasecmp('qwer','Qwer'));
//die();
//наша форма авторизации!!!!!




/*
$users =[
    [
        'id'=> 1,
        'name' => 'Tolia',
        'password' => '11111',

    ],
    [
        'id'=> 2,
        'name' => 'Sergei',
        'password' => '440081',
    ],
];
*/
//echo "<pre>";
//var_dump($_POST);
//print_r($_COOKIE);
//print_r($_SESSION);
//echo "</pre>";
//return;
//$user = NULL;
/*
if(isset($_SESSION['id'])){
    foreach ($users as $userOne) {
        if($userOne['id'] == $_SESSION['id']){
            $user = $userOne;
        }
    }
}
*/

require_once 'user.php';

$user = getUser();

if($user === null && !empty($_POST)){
    if(isset($_POST['name']) && isset($_POST['password'])){
        foreach (getAllUsers() as $userOne) {
           // if($userOne['name'] == $_POST['name'] && $userOne['password'] == $_POST['password']){
             if(strcasecmp($userOne['name'],$_POST['name']) === 0 && strcasecmp($userOne['password'],$_POST['password']) === 0){
                $user = $userOne;
                 //$_SESSION['id'] = $user['id'];  вместо этой строки нижняя
                 authUser($user['id']);
            }
        }
    }
}
if ($user !== NULL){
    header('Location: index.php');
    return;
}



?>
Не авторизированы<br/>

<form method="post">
    <input name="name" type="text"  placeholder="Enter login" /> <br />
    <input name="password" type="password" placeholder="Enter password" /> <br />
    <input type="submit" value="Поехали" />
</form><br/>

<?php
if(isset($_POST['name'])){
    echo 'Пользователь '.$_POST['name'].' не найден.';
}
?>

<a href="reg.php">Регистрация</a><br/>