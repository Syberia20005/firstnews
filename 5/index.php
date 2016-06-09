<?php

require_once 'user.php';

$user = getUser();

requiredUser($user);

$section = 'welcome';
if(!empty($_GET['section'])){
    if(file_exists($_GET['section'] . '.php')){
        $section = $_GET['section'];
    }

}

ob_start();
require_once 'head.php';
$head = ob_get_clean();

ob_start();
require_once 'menu.php';
$menu = ob_get_clean();

ob_start();
require_once 'footer.php';
$footer = ob_get_clean();

ob_start();
require_once $section . '.php';
$content = ob_get_clean();

$settings   = getSettings();
$a_color    = (isset($settings['a_color']) ? $settings['a_color'] : '#464646' );
$width      = (isset($settings['width']) ? $settings['width'] : 30 );
$bghead     = (isset($settings['bghead']) ? $settings['bghead'] : 'powderblue' );
$bgfoot     = (isset($settings['bgfoot']) ? $settings['bgfoot'] : 'cornflowerblue' );
$fontsize   = (isset($settings['fontsize']) ? $settings['fontsize'] : 16 );


?>
<!DOCTYPE html>
<html>
    <header>
        <title>Hi <?= $user['name'] ?></title>
    </header>
    <body>
        <style>
            body{
                padding: 0;
                margin: 0;
                color: #464646;
            }
            a{
                color: <?php echo $a_color ?>;
                text-decoration: none;
            }
            a:hover{
                text-decoration: underline;
            }
            .head,.footer{
                padding: 10px 5px;
                background-color: <?echo $bghead; ?>;
                text-align: right;
            }
            .menu{
                float: left;
                width: calc(<?=$width?>% - 20px);
                background-color: #ffee43;
                font-size: <?echo $fontsize; ?>px;
                padding: 10px;
            }
            .content{
                float: left;
                width: calc(<?=100 - $width?>% - 20px);
                padding: 10px;
                /*color: powderblue;*/
            }
            .footer{
                text-align: center;
                clear: both;
                background-color: <?echo $bgfoot; ?>;
            }
        </style>
        <div class="head"><?= $head ?></div>
        <div class="menu"><?= $menu ?></div>

        <div class="content"><?= $content ?></div>
        <div class="footer"><?= $footer ?></div>
    </body>
</html>
