<?php

class Uncos extends Model{

    public function getList($only_published = false){
        $sql = "select * from news where 1";
        if( $only_published ){
            $sql .= " and is_published = 1";
        }
        return $this->db->query($sql);
    }

    public function getById($id){
        $id = (int)$id;
        $sql = "select * from news where nid = '{$id}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getByAlias($alias){
        $alias = $this->db->escape($alias);
        $sql = "select * from news where alias = '{$alias}' limit 1";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getByTags($id){
        $id = (int)$id;
        $sql = "select tags from news where nid = '{$id}' ";
        $result = $this->db->query($sql);
        return isset($result[0]) ? $result[0] : null;
    }

    public function getListTagsNews($tag, $only_published = false){
        $sql = "select * from news ";
        if( $only_published ){
            $sql .= " and is_published = 1";
        }
        $sql .= " where tags LIKE '%{$tag}%'";
        return $this->db->query($sql);
    }
    
    public function getSearchList($query, $limit = false, $offset = false){
        $sql  = "select  alias, title, tags from news where title like '%{$query}%' or tags like '%{$query}%' order by nid desc ";
        if($limit && $offset){
            $sql .= "limit {$limit}, {$offset}";
        }
        return $this->db->query($sql);
    }

    public function getCountNews($tag){
        $sql  = "select count(*) as res from news where title like '%{$tag}%' or tags like '%{$tag}%' ";
        return $this->db->query($sql)[0]['res'];
    }
    
    public function save($data, $id = null){
        if( !isset($data['alias']) || !isset($data['title']) || !isset($data['adt']) || !isset($data['content'])  || !isset($data['cats']) ){
            return false;
        }

        $id      = (int)$id;
        $cats    = $this->db->escape($data['cats']);
        $alias   = $this->db->escape($data['alias']);
        $title   = $this->db->escape($data['title']);
        $image   = $this->db->escape($data['image']);
        $adt     = $this->db->escape($data['adt']);
        $content = $this->db->escape($data['content']);
        $tags    = $this->db->escape($data['tags']);
        $is_published = isset($data['is_published']) ? 1 : 0;

        if( !$id ){//Add new record
            $sql = "
            insert into news
              set alias = '{$alias}',
                  cid  = '{$cats}',
                  title = '{$title}',
                  image = '{$image}',
                  adt   = '{$adt}',
                  content = '{$content}',
                  tags  = '{$tags}',
                  is_published = '{$is_published}'
            ";
        } else {// Update existing record
            $sql = "
            update news
              set alias = '{$alias}',
                  cid  = '{$cats}',
                  title = '{$title}',
                  image = '{$image}',
                  adt   = '{$adt}',
                  content = '{$content}',
                  tags  = '{$tags}',
                  is_published = '{$is_published}'
              where nid = {$id}
            ";
        }
//echo $this->db->query($sql);
        return $this->db->query($sql);
    }

    public function delete($id){
        $id = (int)$id;
        $sql = "delete from news where nid = {$id}";
        return $this->db->query($sql);
    }
}