<?php


class Database{

    private $server;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this -> server = 'localhost';
        $this -> username = 'ts_user';
        $this -> password  = 'pa55word';
        $this -> dbname = 'tech_support';

        $conn = new Mysqli($this->server, $this->username, $this->password, $this->dbname);        
        return $conn;
    }

};


?>