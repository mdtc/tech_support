<?php



function get_customers() {
    try{
    global $db;
    $query = 'SELECT * FROM customers
              ORDER BY name';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }

    return $customers;

}

function get_customers_by_last_name($last_name) {
    try{
        global $db;
        $query = "SELECT * FROM customers where lastName LIKE '%$last_name%'";
        $statement = $db->prepare($query);
        $statement -> execute();
        $customers = $statement->fetchAll();
        $statement ->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $customers;
}


function get_customer($customer_id) {
    try{

        global $db;
        $query = 'SELECT * FROM customers
                  WHERE customerID = :customerID';
        $statement = $db->prepare($query);
        $statement->bindValue(':customerID', $customer_id);
        $statement->execute();
        $customer = $statement->fetch();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $customer;
}

function get_customer_by_email($email) {
    try{

        global $db;
        $query = 'SELECT * FROM customers
                  WHERE email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $customer = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $customer;
}

function get_country() {
    try{

        global $db;
        $query = 'SELECT * FROM countries';
        $statement = $db->prepare($query);
        $statement->execute();
        $countries = $statement->fetchAll();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $countries;
}



function delete_customer($customer_id) {
    try{
        global $db;
        $query = 'DELETE FROM customers
                  WHERE customerID = :customer_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}

function add_customer($first_name, $last_name, 
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password) {

        try{

            global $db;
            $query = 'INSERT INTO customers
                         (firstName, lastName,
                          address, city, state, postalCode, countryCode,
                          phone, email, password)
                      VALUES
                         (:first_name, :last_name,
                          :address, :city, :state, :postal_code, :country_code,
                          :phone, :email, :password)';
            $statement = $db->prepare($query);
            $statement->bindValue(':first_name', $first_name);
            $statement->bindValue(':last_name', $last_name);
            $statement->bindValue(':address', $address);
            $statement->bindValue(':city', $city);
            $statement->bindValue(':state', $state);
            $statement->bindValue(':postal_code', $postal_code);
            $statement->bindValue(':country_code', $country_code);
            $statement->bindValue(':phone', $phone);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':password', $password);
            $statement->execute();
            $statement->closeCursor();
        }catch (PDOException $e) {
            $error_message = $e->getMessage();
            include('../errors/database_error.php');
            exit();
        }    
}

function update_customer($customer_id, $first_name, $last_name,
        $address, $city, $state, $postal_code, $country_code,
        $phone, $email, $password) {
    try{

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
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}
?>