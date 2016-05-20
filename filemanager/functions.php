<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 20.05.16
 * Time: 21:29
 */

function path($path){

    if ($handle = opendir($path)) {   //открываем каталог по передаваемому пути из index.php
        echo "<table border='1' width='50%' cellpadding='0'>";
        echo "<tr><td>Имя файла</td><td>Последняя дата изменения</td></tr>";

        while (false !== ($file = readdir($handle))) { //получаем элемент каталога
            echo "<tr>";

            $item = '';

            if(is_dir($file)){ //проверка на директория ли?
                $item = $path. "/" .$file;
                echo "<td><a href='index.php?dir=".$item."'>".$file."</a></td>";

            } else{ // если не директория

                $item = $path."/".$file;

                if(strpos($file,'.txt') == true){ //если текстовый файл

                    echo "<td><a href='edit.php?name=".$item."'>".$file."</a></td>";
                } else {
                    echo "<td>".$file."</td>";
                }
            }


            $item = $path."/".$file;
            $file_info = stat($item); //считываем данные о файле 
            echo "<td>".date('d-m-Y H:i:s',$file_info['mtime'])."</td>"; //последняя дата изменения файла
            echo "</tr>";
        }

        echo "</table>";

        closedir($handle);
    }
}

