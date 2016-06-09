<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 14.05.16
 * Time: 12:49
 */

//var_dump(strcasecmp('qwer','Qwer'));
//die();
//наша форма авторизации!!!!!

session_start();

function requiredUser($user){
    if ($user === null) {
        header('location: form.php');
        die();
    }

}

function getSettings(){

    $user = getUser();
    requiredUser($user);
    $path = md5($user['name']) . 'settings';
    if(file_exists($path)) {
        $settings = file_get_contents($path);
        return unserialize($settings);
    } else {
        return [];
    }
}

function setSettings(array $settings){
    $user = getUser();
    requiredUser($user);
/////////////////////////////////////////////////
    $user_file = md5($user['name']) . 'settings';

    if (file_exists($user_file)) {
        $current_user = unserialize(file_get_contents($user_file));
//print_r($current_user);
        if (strcmp($current_user['avatar'], "ni.jpeg") != 0 && !empty($current_user['avatar'])) {
            if(strcmp($settings['avatar'],$current_user['avatar']) != 0 && strcmp($settings['avatar'], "ni.jpeg") != 0 ) {
                $current_user['avatar'] = $settings['avatar'];
            }
            $settings['avatar'] = $current_user['avatar'];
        }
    }
////////////////////////////////////////////////
    file_put_contents(md5($user['name']) . 'settings',serialize($settings) );
}

function getAllUsers(){
    $users = [];

    $usersPath = 'users.array';
    if (file_exists($usersPath)) {
        $users = unserialize(file_get_contents($usersPath));
    }
    return $users;
}

function getUser(){

    $user = NULL;

    if(isset($_SESSION['id'])){
        foreach (getAllUsers() as $userOne) {
            if($userOne['id'] == $_SESSION['id']){
                $user = $userOne;
            }
        }
    }
    return $user;
}

function authUser($id){

    $_SESSION['id'] = $id;

}

function regUser($name,$password){

    $users = getAllUsers();
    $maxId = 0;

    foreach ($users as $user) {
        $maxId = max($maxId,$user['id']);
    }
    //++$maxId;
    $users[] = [
        'id' => ++$maxId,
        'name' => $name,
        'password'=>$password,

    ];

   $usersPath = 'users.array';
    file_put_contents(
        $usersPath,
        serialize($users)
    );
    authUser($maxId);
    return true;
    
}
