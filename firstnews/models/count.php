<?php

class Count extends Model
{
    /* проверка, есть ли запись в MySQL */
    /* таблице с таким id или ее нет */
    public function searchID($id)
    {
        $result = "SELECT * FROM `my_log` WHERE `page_id` LIKE '".$id."'";
        $num_rows = $this->db->num_rows($result);
        if ($num_rows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    /* Читает запись из MySQL таблицы */
    /* возвращает ассоциированный массив */
    public function MySQLRead($id)
    {
        $id = addslashes($id);
        $result = "SELECT * FROM `my_log` WHERE `page_id` LIKE '".$id."'";
        /**TODO mysql_fetch_assoc***/
        return $this->db->query($result);
    }

    /* Обновление времени для конкретной записи */
    public function UpdateTime($id, $time)
    {
        $id = addslashes($id);
        $time = addslashes($time);
        $result = "UPDATE `my_log` SET `date` = '".$time."' WHERE `page_id` = '".$id."'";
        return $this->db->query($result);
    }

    /* Обновление счетчиков для записи с указанным id */
    public function UpdateCounders($id, $all, $time)
    {
        $id = addslashes($id);
        $time = addslashes($time);
        $result = "UPDATE `my_log` SET `all` = '".$all."',`today` = '".$time."' WHERE `page_id` = '".$id."'";
        return $this->db->query($result);
    }

    /* Запись всех значений "По умолчанию" */
    public function Default_Write($id)
    {
        $id = addslashes($id);
        $result = "INSERT INTO `my_log` ( `page_id` , `all` , `today` , `date` ) VALUES ('".$id."' , 1 , 1 , '".(time()+60*60*24)."');";
        return $this->db->query($result);
    }

}