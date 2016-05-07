<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:19
 */

if(isset($_POST['num'])){
    if(!preg_match('/^\d+$/',$_POST['num'])){
        echo "Введите корректное число";
    } else {
        $num = $_POST['num'];
    }
}else{
    $num = 0;
}
if(isset($_POST['but'])) {

    if (isset($num)) {

        $count = strlen($num);
        $sum = 0;

        for ($i = 0; $i < $count; $i++){
            $sum = $sum + $num[$i];
        }

    }
}
?>
<form action="" method="POST">
    <input type="text" name="num" value="<?php if(isset($num)) echo $num;?>"/>

    <input type="submit" name="but" value="Вывести сумму">

    <?php if(isset($sum)) echo $sum; ?>
</form>
