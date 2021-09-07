<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL){
        $action = 'login_customer';
    }
}


//instantiate variable(s)
$email = '';
$customerLogin = array();

if ($action == 'login_customer') {
    include('customer_login.php');
} else if ($action == 'get_customer') {
    $email = filter_input(INPUT_POST, 'email');
    $customerLogin = get_customer_by_email($email);
    $products = get_products();
    if(empty($customerLogin)){
       $message = "No customers found";};
    include('product_register.php');
} else if ($action == 'register_product') {

    $customer_id = $customerLogin['customerID'];
    $product_code = filter_input(INPUT_POST, 'chosen_product');
    $result = add_registration($customer_id, $product_code);
    if($result){
        $success = "product " . $product_code . " was registered succesfully";
    }else{
        $issue = "product " . $product_code . " was NOT registered";
    }
    include('registration_result.php');
}
?>