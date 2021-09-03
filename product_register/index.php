<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
}

//instantiate variable(s)
$email = '';

if ($action == 'login_customer') {
    // ???
} else if ($action == 'get_customer') {
    // ???
} else if ($action == 'register_product') {
    // ???
}
?>