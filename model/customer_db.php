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
    global $db;
    $query = 'SELECT * FROM customers
              WHERE customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customer_id);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    return $customer;
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
    
    global $db;
    $query = 'UPDATE customers
              SET firstName = :firstName,
                  lastName = :lastName,
                  address = :address,
                  city = :city,
                  state = :state,
                  postalCode = :postalCode,
                  countryCode = :countryCode,
                  phone = :phone,
                  email = :email,
                  password = :password
              WHERE  customerID = :customerID';
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $first_name);
    $statement->bindValue(':lastName', $last_name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':postalCode', $postal_code);
    $statement->bindValue(':countryCode', $country_code);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':customerID', $customer_id);
    $statement->execute();
    $statement->closeCursor();
}
?>