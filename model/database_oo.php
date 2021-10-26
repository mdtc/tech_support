<?php


class Database{

    private $dsn;
    private $username;
    private $password;

    protected function connect(){
        $this -> dsn = 'mysql:host=localhost;dbname=tech_support';
        $this -> username = 'ts_user';
        $this -> password  = 'pa55word';

        $conn = new PDO($this->dsn, $this->username, $this->password  ); 

        return $conn;

    }

};



?>