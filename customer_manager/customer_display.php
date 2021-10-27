<?php include '../view/header.php'; ?>
<main>
 <div class="mainMenu2">

 

    <!-- display a table of customer information -->
    <h2>View/Update Customer</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name='action' value='update_customer'>

        <label>First Name: </label>
        <input type="text" name="firstName" value=<?php echo htmlspecialchars($customer['firstName']); ?> required minlength="1" maxlength="51"><br>
        <? if (isset($name_error)): ?>
        <span><?php echo htmlspecialchars($name_error)?></span>
        <? endif; ?>

        <label>Last Name: </label>
        <input type="text" name="lastName" value=<?php echo htmlspecialchars($customer['lastName']); ?> required minlength="1" maxlength="51"><br>
        <? if (isset($last_error)): ?>
        <span><?php echo htmlspecialchars($last_error)?></span>
        <? endif; ?>

        <label>Address: </label>
        <input type="text" name="address" value=<?php echo htmlspecialchars($customer['address']); ?> required minlength="1" maxlength="51"><br>
        <? if (isset($add_error)): ?>
        <span><?php echo htmlspecialchars($add_error)?></span>
        <? endif; ?>

        <label>City: </label>
        <input type="text" name="city" value=<?php echo htmlspecialchars($customer['city']); ?> required minlength="1" maxlength="51"><br>
        <? if (isset($city_error)): ?>
        <span><?php echo htmlspecialchars($city_error)?></span>
        <? endif; ?>
        
        <label>State: </label>
        <input type="text" name="state" value=<?php echo htmlspecialchars($customer['state']); ?> required minlength="1" maxlength="51"><br>
        <? if (isset($state_error)): ?>
        <span><?php echo htmlspecialchars($state_error)?></span>
        <? endif; ?>

        <label>Postal Code: </label>
        <input type="text" name="postalCode" value=<?php echo htmlspecialchars($customer['postalCode']); ?> required minlength="1" maxlength="21"><br>
        <? if (isset($postal_error)): ?>
        <span><?php echo htmlspecialchars($postal_error)?></span>
        <? endif; ?>

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
        <input type="tel" name="phone" value="<?php echo $customer['phone'];?>" placeholder="Use (123)_123-4567 format" required pattern="\(\d{3}\)\s?\d{3}-\d{4}">
        <label class="message">Use (123) 986-9876 format</label><br><br>
        <? if (isset($phone_error)): ?>
        <span><?php echo htmlspecialchars($phone_error)?></span>
        <? endif; ?>

        <label>Email: </label>
        <input type="text" name="email" value=<?php echo htmlspecialchars($customer['email']); ?> required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br>
        <? if (isset($email_error)): ?>
        <span><?php echo htmlspecialchars($email_error)?></span>
        <? endif; ?>


        <label>Password: </label>
        <input type="text" name="password" value=<?php echo htmlspecialchars($customer['password']); ?> required minlength="6" maxlength="21"><br>
        <? if (isset($pass_error)): ?>
        <span><?php echo htmlspecialchars($pass_error)?></span>
        <? endif; ?>

        <input type="hidden" name="customerID" value="<?php echo htmlspecialchars($customer['customerID']); ?>"><br>

        <input type="submit" value="Add/Update Customer">
    </form><br>
    <p class="button"><a class="" href="customer_search.php">Go Back</a></p>
</div>
</main>
<?php include '../view/footer.php'; ?>