<?php
function get_technicians() {
    global $db;
    $query = 'SELECT * FROM technicians
              ORDER BY firstName';
    $statement = $db->prepare($query);
    $statement->execute();
    $technicians = $statement->fetchAll();
    $statement->closeCursor();
    return $technicians;
}

function delete_technician($technician_id) {
    // ???
}

function add_technician($first_name, $last_name, $email, $phone, $password) {
    // ???
}

function update_technician($technician_id, $first_name, $last_name, $email, $phone, $password) {
    // ???
}

?>