<?php
require('../model/database.php');
require('../model/technician_db.php');

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
    //Display technicians list
    include('technician_list.php');
} else if ($action == 'delete_technician') {
    // ???
} else if ($action == 'show_add_form') {
    // ???
} else if ($action == 'add_technician') {
    // Validate the inputs
}
?>