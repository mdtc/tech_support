<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'search_customers';
    }
}



//instantiate variable(s)
$last_name = '';
$customers = array();

if ($action == 'search_customers') {   
    include('customer_search.php');
} else if ($action == 'display_customers') {
    $last_name = filter_input(INPUT_POST, 'custLastName');
    if (empty($last_name)){
        $message = "No customers found";
    };
    $customers = get_customers_by_last_name($last_name);
    include("customer_search.php");
} else if ($action == 'display_customer') {
    get_customer($customer_id);
} else if ($action == 'update_customer') {
   // ???
    include('customer_search.php');
}
?>