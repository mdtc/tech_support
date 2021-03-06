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
    if(isset($_COOKIE['Cookie_login'])){
        $email = $_COOKIE['Cookie_login'];
        $customerLogin = get_customer_by_email($email);
        $products = get_products();
        include('product_register.php');
    }else{
        include('customer_login.php');
    }
} else if ($action == 'get_customer') {
    $email = filter_input(INPUT_POST, 'email');
    setcookie('Cookie_login', $email, time() + (60), "/");
    $customerLogin = get_customer_by_email($email);
    if(empty($customerLogin)){$message = "No customers found";}
    $products = get_products();
    include('product_register.php');
} else if ($action == 'register_product') {
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $product_code = filter_input(INPUT_POST, 'product_id');
    $result = add_registration($customer_id, $product_code);
    if($result){
        $success = "product " . $product_code . " was registered succesfully";
    }else{
        $issue = "product " . $product_code . " was NOT registered";
    }
    include('registration_result.php');
} else if($action == 'delete_cookie'){
    unset($_COOKIE['Cookie_login']);
    setcookie('Cookie_login', $email, time() - (3600), "/");
    header("Location: customer_login.php");
}
?>