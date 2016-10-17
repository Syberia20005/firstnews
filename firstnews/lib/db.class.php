<?php
class DB{

    protected $connection;

    public function __construct($host,$user,$password,$db_name)
    {
        $this->connection = new mysqli($host,$user,$password,$db_name);

        $this->connection->set_charset("utf8");

        if( mysqli_connect_error() ){
            throw new Exception('Could not connect to DB');
        }
    }

    public function query($sql){
        if( !$this->connection ){
            return false;
        }

        $result = $this->connection->query($sql);

        if( mysqli_error($this->connection) ){
            throw new Exception(mysqli_error($this->connection));
        }

        if( is_bool($result) ){
            return $result;
        }

        $data = array();
        while ( $row = mysqli_fetch_assoc($result) ){
            $data[] = $row;
        }//print_r($data);
        return $data;
    }

    public function escape($str){
        return mysqli_escape_string($this->connection,$str );
    }
    
    public function num_rows($str){
        return mysqli_num_rows(mysqli_query($this->connection,$str));
    }

}