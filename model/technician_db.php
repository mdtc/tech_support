<?php
function get_technicians() {
    try{
        global $db;
        $query = 'SELECT * FROM technicians
                  ORDER BY firstName';
        $statement = $db->prepare($query);
        $statement->execute();
        $technicians = $statement->fetchAll();
        $statement->closeCursor();    
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
    return $technicians;
}

function delete_technician($technician_id) {
    try{
        global $db;
        $query = 'DELETE FROM technicians
                  WHERE techID = :techID';
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $technician_id);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}

function add_technician($first_name, $last_name, $email, $phone, $password) {
    try{
        global $db;
        $query = 'INSERT INTO technicians
                     (firstName, lastName, email, phone, password)
                  VALUES
                     (:firstName, :lastName, :email, :phone, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $first_name);
        $statement->bindValue(':lastName', $last_name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}

function update_technician($technician_id, $first_name, $last_name, $email, $phone, $password) {
    try{
        global $db;
        $query = 'UPDATE technicians
                  SET firstName = :firstName,
                      lastName = :lastName,
                      email = :email,
                      phone = :phone,
                      password = :password
                  WHERE techID = :techID';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $first_name);
        $statement->bindValue(':lastName', $last_name);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':techID', $technician_id);
        $statement->execute();
        $statement->closeCursor();
    }catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
}

?>