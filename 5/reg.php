<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 14.05.16
 * Time: 12:44
 */
require_once 'user.php';
$name = '';

if(!empty($_POST)) {
    $success = true;
    if (empty($_POST['name'])) {
        echo "Не указано имя<br/>";
        $success = false;
    } else{
        $name = $_POST['name'];
    }

    if(empty($_POST['password']) && empty($_POST['password_2'])){
        echo 'Пароль не указан<br/>';
        $success = false;
    } else {
        if (strcmp($_POST['password'], $_POST['password_2']) !== 0) {
            echo "Указанные пароли не совпадают<br/>";
            $success = false;
        }
    }

    if($success === true){
        foreach (getAllUsers() as $user){
            if(strcasecmp($user['name'],$name) === 0){
                $success = false;
                echo "Пользователь с таким именем уже есть в с-ме<br/>";
                break;
            }
        }
    }
    
    if($success === true){
        if(regUser($name, $_POST['password'])){
            header('Location: index.php');
            return;
        }    
    }
}
?>

<form method="post">
    <input name="name" type="text"  placeholder="Enter login" value="<?php echo $name; ?>"/> <br /><br /><br />
    <input name="password" type="password" placeholder="Enter password" /> <br /><br />
    <input name="password_2" type="password" placeholder="Enter password again" /> <br /><br />
    <input type="submit" value="Регистрация" />
</form><br/>