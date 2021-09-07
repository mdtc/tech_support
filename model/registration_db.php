<?php
function add_registration($customer_id, $product_code) {
    global $db;
    $query = 'INSERT INTO registrations
                    (customerID, productCode)
                VALUES
                (:customer_code, :product_code)';

    $statement = $db->prepare($query);
    $statement -> bindValue(':customer_code', $customer_id);
    $statement -> bindValue(':product_code', $product_code);
    $statement -> execute();
    $statement -> closeCursor();            
}
?>