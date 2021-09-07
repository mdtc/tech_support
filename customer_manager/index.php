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
    $customer_id = filter_input(INPUT_POST, 'customer_Id');
    $customer = get_customer($customer_id);
    include("customer_display.php");
} else if ($action == 'update_customer') {
    echo("update button working");

    $customer_id = filter_input(INPUT_POST, 'customerID');
    $first_name = filter_input(INPUT_POST, 'firstName');
    $last_name = filter_input(INPUT_POST, 'lastName');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $postal_code = filter_input(INPUT_POST, 'postalCode');
    $country_code = filter_input(INPUT_POST, 'countryCode');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    
    update_customer($customer_id, $first_name, $last_name,
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password);    
    
    include('customer_search.php');
}
?>