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
<<<<<<< HEAD
    $query = "SELECT * FROM customers where lastName LIKE '%$last_name%'";
=======
<<<<<<< HEAD
    $query = "SELECT * FROM customers where lastName LIKE '%$last_name%'";
=======
    $query = 'SELECT * FROM customers where lastName LIKE %:last_name%';
>>>>>>> 8a3b3c1e16ae3afe18fb124a7341985ff6876a7c
>>>>>>> 5b7595cd2c70b18e53e76b44a824df5af6c84b35
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