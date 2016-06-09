<?php

require_once 'user.php';

$user = getUser();
requiredUser($user);

if(isset($_POST['a_color']) || isset($_POST['width']) || isset($_POST['bghead']) || isset($_POST['bgfoot']) || isset($_POST['fontsize'])) {

    if(!empty($_FILES)){

        if($_FILES['avatar']['error'] === 0){

            if(isset($_FILES['avatar']['name'])){
                $uploaddir = __DIR__.'/images/';
                $uploadfile = $uploaddir . basename($_FILES['avatar']['name']);

                if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
                    echo "Файл корректен и был успешно загружен<br/><br/>";
                }else {
                    echo "Ошибка загрузки файла!<br/><br/>";
                }
            }
        }

        if($_FILES['avatar']['error'] != 4 ) {
            $avatar = $_FILES['avatar']['name'];

        }else{
            $avatar = 'ni.jpeg';
        }
    }else{
        $avatar = 'ni.jpeg';
    }

    setSettings ([
       'a_color'    => $_POST['a_color'],
       'width'      => $_POST['width'],
       'bghead'     => $_POST['bghead'],
       'bgfoot'     => $_POST['bgfoot'],
       'fontsize'   => $_POST['fontsize'],
       'avatar'     => $avatar,
    ]);
}





$settings  = getSettings();

//echo "<pre>";
//print_r($settings['avatar']);
//echo "</pre>";

$a_color   = (isset($settings['a_color']) ? $settings['a_color'] : '#464646');
$width     = (isset($settings['width']) ? $settings['width'] : 30);
$bghead    = (isset($settings['bghead']) ? $settings['bghead'] : 'powderblue');
$bgfoot    = (isset($settings['bgfoot']) ? $settings['bgfoot'] : 'cornflowerblue');
$fontsize  = (isset($settings['fontsize']) ? $settings['fontsize'] : '16');
$avatar    = (isset($settings['avatar']))  ? $settings['avatar'] : 'ni.jpeg';
echo "<img src='/5/images/".$avatar."' width='100'><br/><br/>";

?>

Найстройки: <br/><br/>

<form enctype="multipart/form-data" method="post">
    <input type="text" name="a_color" value="<?= $a_color ?>"/><label> - Цвет шрифта</label><br/><br/>

    <input type="text" name="width" id="width" value="<?= $width ?>"/><label for="width"> - Ширина левого сайдбара</label><br/><br/>

    <input type="text" name="bghead" id="bghead" value="<?= $bghead ?>"/><label for="bghead"> - Фон хедера</label><br/><br/>

    <input type="text" name="bgfoot" id="bgfoot" value="<?= $bgfoot ?>"/><label for="bgfoot"> - Фон футера</label><br/><br/>

    <input type="text" name="fontsize" id="fontsize" value="<?= $fontsize ?>"/><label for="fontsize"> - Размер шрифта</label><br/><br/><br/>
    Выберите фото пользователя:<br/><br/>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <input type="file" name="avatar" id="avatar" /><label for="avatar"> </label>
    <br/><br/><br/>
    <input type="submit" name="data" value="Сохранить" />
</form>
<br/><br/>
