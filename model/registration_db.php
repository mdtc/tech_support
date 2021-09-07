<?php
function add_registration($customer_id, $product_code) {
    global $db;
    $date = date('Y-m-d H:i:s');
    $query = 'INSERT INTO registrations
                    (customerID, productCode, registrationDate)
                VALUES
                (:customer_code, :product_code, :registrationDate)
                ON DUPLICATE KEY UPDATE
                registrationDate = :registrationDate';

    $statement = $db->prepare($query);
    $statement -> bindValue(':customer_code', $customer_id);
    $statement -> bindValue(':product_code', $product_code);
    $statement -> bindValue(':registrationDate', $date);
    $status = $statement -> execute();
    $statement -> closeCursor();     
    return $status;       
}
?>