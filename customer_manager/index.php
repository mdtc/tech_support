<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    // ???
}

//instantiate variable(s)
$last_name = '';
$customers = array();

if ($action == 'search_customers') {   
    // ???
} else if ($action == 'display_customers') {
    // ???
} else if ($action == 'display_customer') {
    // ???
} else if ($action == 'update_customer') {
   // ???
    include('customer_search.php');
}
?>