<?php
function get_customers() {
    global $db;
    $query = 'SELECT * FROM customers
              ORDER BY name';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}

function get_customers_by_last_name($last_name) {
    global $db;
    $query = "SELECT * FROM customers where lastName LIKE '%$last_name%'";
    $statement = $db->prepare($query);
    $statement -> execute();
    $customers = $statement->fetchAll();
    $statement ->closeCursor();
    return $customers;
}


function get_customer($customer_id) {
    // ???
}

function get_customer_by_email($email) {
    // ???
}

function delete_customer($customer_id) {
    // ???
}

function add_customer($first_name, $last_name, 
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password) {
    // ???
}

function update_customer($customer_id, $first_name, $last_name,
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password) {
   // ???
}
?>