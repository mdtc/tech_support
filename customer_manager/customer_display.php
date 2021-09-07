<?php include '../view/header.php'; ?>
<main>

    <!-- display a table of customer information -->
    <h2>View/Update Customer</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name='action' value='update_customer'>

        <label>First Name: </label>
        <input type="text" name="firstName" value=<?php echo htmlspecialchars($customer['firstName']); ?>><br>

        <label>Last Name: </label>
        <input type="text" name="lastName" value=<?php echo htmlspecialchars($customer['lastName']); ?>><br>

        <label>Address: </label>
        <input type="text" name="address" value=<?php echo htmlspecialchars($customer['address']); ?>><br>

        <label>City: </label>
        <input type="text" name="city" value=<?php echo htmlspecialchars($customer['city']); ?>><br>
        
        <label>State: </label>
        <input type="text" name="state" value=<?php echo htmlspecialchars($customer['state']); ?>><br>

        <label>Postal Code: </label>
        <input type="text" name="postalCode" value=<?php echo htmlspecialchars($customer['postalCode']); ?>><br>

        <label>Country Code: </label>
        <input type="text" name="countryCode" value=<?php echo htmlspecialchars($customer['countryCode']); ?>><br>

        <label>Phone: </label>
        <input type="tel" name="phone" pattern="\(\d{3}\)\s?\d{3}-\d{4}" value="<?php echo $customer['phone'];?>" placeholder="Use (123)_123-4567 format"><br>

        <label>Email: </label>
        <input type="text" name="email" value=<?php echo htmlspecialchars($customer['email']); ?>><br>

        <label>Password: </label>
        <input type="text" name="password" value=<?php echo htmlspecialchars($customer['password']); ?>><br>

        <input type="hidden" name="customerID" value="<?php echo htmlspecialchars($customer['customerID']); ?>"><br>

        <input type="submit" value="Update Customer">
    </form>
    <p><a href="customer_search.php">Search Customers</a></p>

</main>
<?php include '../view/footer.php'; ?>