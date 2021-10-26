<?php include '../view/header.php'; ?>
<main>
 <div class="mainMenu2">

 

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

        <label>Country: </label>
        <div class="stylish">
            <select name="countryCode" class="country_select">
                <?php foreach($countries as $country) :?>
                <option <?php if($country['countryCode'] == $c_country) echo 'selected="selected"'; ?> 
                value=<?php echo htmlspecialchars($country['countryCode']);?>><?php echo htmlspecialchars($country['countryName']);?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>

        <label>Phone: </label>
        <input type="tel" name="phone" pattern="\(\d{3}\)\s?\d{3}-\d{4}" value="<?php echo $customer['phone'];?>" placeholder="Use (123)_123-4567 format">
        <label class="message">Use (123) 986-9876 format</label><br><br>

        <label>Email: </label>
        <input type="text" name="email" value=<?php echo htmlspecialchars($customer['email']); ?>><br>

        <label>Password: </label>
        <input type="text" name="password" value=<?php echo htmlspecialchars($customer['password']); ?>><br>

        <input type="hidden" name="customerID" value="<?php echo htmlspecialchars($customer['customerID']); ?>"><br>

        <input type="submit" value="Update Customer">
    </form><br>
    <p class="button"><a class="" href="customer_search.php">Go Back</a></p>
</div>
</main>
<?php include '../view/footer.php'; ?>