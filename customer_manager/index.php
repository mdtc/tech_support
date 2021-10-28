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

//Controller modified to use switch statements instead of if/else statments to 
//select appropiate action 


$last_name = '';
$customers = array();


switch($action){

    case 'search_customers';
        include('customer_search');

    case 'display_customers';
        $last_name = filter_input(INPUT_POST, 'custLastName');
        if (empty($last_name)){
            $message = "No customers found";
        };
        $customers = get_customers_by_last_name($last_name); 
        include("customer_search.php");
    continue;

    case 'display_customer';
        $customer_id = filter_input(INPUT_POST, 'customer_Id');
        $customer = get_customer($customer_id);
        $c_country = $customer['countryCode'];
        $countries = get_country();
        include("customer_display.php");
    continue;
    
    case 'update_customer';
        $customer_id = filter_input(INPUT_POST, 'customerID');
        if($customer_id == ""){
            $customer_id = rand(2000, 9999);
        }
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

        if ( empty($customer_id) || empty($first_name) ||
        empty($last_name) || empty($address) || empty($city) ||
        empty($state) || empty($postal_code) || empty($country_code) ||
        empty($phone) || empty($email) || empty($password)) {
        $error = "Invalid tech data. Check all fields and try again.";
        include('../errors/error.php');
        }else{
        update_customer($customer_id, $first_name, $last_name,
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password);
        include('customer_success.php');
        }; 
    continue;
    
    case 'add_customer'; 
        $c_country = "US";
        $countries = get_country();
        $add = True;
        include("customer_display.php");    

    }

?>