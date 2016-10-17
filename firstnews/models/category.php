<?php

class Category extends Model{

    public function getList($only_published = false){
        $sql = "select * from categories where 1";
        if( $only_published ){
            $sql .= " and is_published = 1";
        }

       // $sql .= " ORDER BY id DESC";

        return $this->db->query($sql);
    }

    public function getListNews($cid, $limit, $offset, $only_published = false){
        
        $sql = "select * from news where cid = '{$cid}' ";
        if( $only_published ){
            $sql .= " and is_published = 1 ";
        }
        $sql .= "limit {$limit} offset {$offset}";
        return $this->db->query($sql);
    }
    
    public function getCountNews($cid,$only_published = false){
        $sql = "select count(*) as result from news where cid = '{$cid}' ";
        if( $only_published ){
            $sql .= " and is_published = 1 ";
        }
 //print_r($this->db->query($sql)[0]['result']);
        return $this->db->query($sql)[0]['result'];
    }
    
    public function getByAlias($alias){
        $alias = $this->db->escape($alias);
        $sql = "select * from categories where alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getById($id){
        $id = (int)$id;
        $sql = "select * from categories where id = '{$id}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }
    
    public function getNewsTitle($id){
        $id = (int)$id;
        $sql = "select title from news where cid = '{$id}' and is_published = 1 limit 5";
        $result = $this->db->query($sql);
        return isset($result) ? $result : null;
    }

    public function getNewsForSlider(){
        $sql = "select nid,title, content, image from news where 1 and is_published = 1 GROUP BY nid ASC limit 4";
        $result = $this->db->query($sql);
        return isset($result) ? $result : null;
    }
    
    public function save($data, $id = null){
        if( !isset($data['alias']) || !isset($data['title']) || !isset($data['description']) ){
            return false;
        }

        $id = (int)$id;
        $alias = $this->db->escape($data['alias']);
        $title = $this->db->escape($data['title']);
        $description = $this->db->escape($data['description']);
        $is_published = isset($data['is_published']) ? 1 : 0;

        if( !$id ){//Add new record
            $sql = "
            insert into categories
              set alias = '{$alias}',
                  title = '{$title}',
                  description = '{$description}',
                  is_published = '{$is_published}'
            ";
        } else {// Update existing record
            $sql = "
            update categories
              set alias = '{$alias}',
                  title = '{$title}',
                  description = '{$description}',
                  is_published = '{$is_published}'
              where id = {$id}
            ";
        }

        return $this->db->query($sql);
    }

    public function delete($id){
        $id = (int)$id;
        $sql = "delete from categories where id = {$id}";
        return $this->db->query($sql);
    }

}