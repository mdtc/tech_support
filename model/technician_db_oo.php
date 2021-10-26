<?php


class TechnicianDB extends Database{


    protected function getTechDB(){
        $sql = "SELECT * FROM technicians";
        $statement = $this -> connect()->query($sql);
        $statement->execute();
        $Technicians = $statement->fetchAll();
        $statement->closeCursor();
        return $Technicians;


    }

};



?>