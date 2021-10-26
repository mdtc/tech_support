<?php
require('../model/database.php');
require('../model/incident_db.php');
require('../model/customer_db.php');
require('../model/product_db.php');





$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action === NULL){
        $action = 'incident_getCustomer';
    }
}

if ($action == 'incident_getCustomer') {
    include('incident_getCustomer.php');
} else if ($action == 'get_customers') {
    $email = filter_input(INPUT_POST, 'custEmail');
    $customer = get_customer_by_email($email);
    
    $products = get_products();
    require('incident_displayCustomer.php');
    
}  else if ($action == 'create_incident') {

    $customer_id = filter_input(INPUT_POST, 'cusID');
    $product_code = filter_input(INPUT_POST, 'code');
    $title = filter_input(INPUT_POST, 'title'); 
    $description = filter_input(INPUT_POST, 'description');
    // Validate the inputs with empty function
    if ( empty($customer_id) || empty($product_code) ||
       empty($title) || empty($description)) {
    $error = "Invalid tech data. Check all fields and try again.";
    include('../errors/error.php');
    }else{
        add_incident($customer_id, $product_code, $title, $description);
        include('incident_success.php');
    };
}