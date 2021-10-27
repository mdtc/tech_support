<?php
require('../model/database.php');
require('../model/technician_db.php');
require('../model/database_oo.php');
require('../model/technician_db_oo.php');
require('technician.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action === NULL){
        $action = 'list_technicians';
    }
}

if ($action == 'list_technicians') {
    // get the technicians from db
    $technicians = get_technicians();
    $FullName = new Technician;
    $techs_name =  $FullName -> getFullName();
    $i = 0;
    //Display technicians list
    include('technician_list.php');
    // Delete technicians
} else if ($action == 'delete_technician') {
    $technician_id = filter_input(INPUT_POST, 'technician_id');
    delete_technician($technician_id);
    header("Location: .");
    // Add technician
} else if ($action == 'show_add_form') {
    header("Location: technician_add.php");
} else if ($action == 'add_technician') {
    $first_name = filter_input(INPUT_POST, 'firstName');
    $last_name = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email'); 
    $phone = filter_input(INPUT_POST, 'phone');
    $password = filter_input(INPUT_POST, 'password');
    // Validate the inputs with empty function
    if ( empty($first_name) || empty($last_name) || empty($email)
      || empty($phone) || empty($password)) {
    $error = "Invalid tech data. Check all fields and try again.";
    include('../errors/error.php');
    }else{
        add_technician($first_name, $last_name, $email, $phone, $password);
        header("Location: .");
    }
}
?>