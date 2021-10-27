<?php

class TechnicianDB extends Database{


    protected function getTechDB(){
        $sql = "SELECT * FROM technicians";
        $results = $this->connect()->query($sql);
        $numRows = $results-> num_rows;

        if($numRows > 0){
            while($row = $results->fetch_assoc()){
                $technicians[] = $row;
            }
        }
        return $technicians;
    }

};



?>