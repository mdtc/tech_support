<?php

class Technician extends TechnicianDB{


    public function getFullName(){
        $names = $this -> getTechDB();
        foreach($names as $name){
            $first = $name['firstName']; 
            $last = $name['lastName'];

            $full_Name[] = $first . " " . $last;
        }

        return $full_Name;
    }

};



?>