<?php

if(isset($_GET)){
    $file_open = fopen ($_GET['name'],'r');

    $file_edit = fread($file_open,1024);}

?>
    <form  method="POST">
        Введите изменения:<br/><br/>
        <textarea name="text"><?php echo $file_edit; fclose($file_open);?></textarea>
        <br/>
        <br/>
        <input type="submit" value="Сохранить" name="save">
    </form>
    <br/>
<a href="./index.php">Вернуться на главную</a><br/>
<?php

if(isset($_POST['text'])){
    $cnt = trim($_POST['text']);
    $file_open = fopen ($_GET['name'],'w+'); //w+ режим полного перезаписывания

    $text = fwrite($file_open,$cnt);
    if($text){

        echo "Изменения успешно сохранены";
    }
    fclose($file_open);
}

?>