<?php include '../view/header.php'; ?>
<main>
    <h2>Customer Search</h2>
    
    <!-- display a search form -->
    <form action="." method="post">
    <input type="hidden" name="action" value="display_customers">
    <label>Last name:</label>
    <input type="text" name="custLastName" placeholder="Type customer's Last name">
    <input type="submit" value="search" /><br>
    </form>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php elseif ($customers) : ?>
        <h2>Results</h2>
        <table>
            <tr>
                <th>Last Name</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
                <td><?php echo htmlspecialchars($customer['lastName']); ?></td>
                <td><?php echo htmlspecialchars($customer['firstName']); ?></td>
                <td><?php echo htmlspecialchars($customer['email']); ?></td>
                <td><?php echo htmlspecialchars($customer['city']); ?></td>
                <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="display_customer">
                <input type="hidden" name="customer_Id"
                       value="<?php echo htmlspecialchars($customer['customerID']); ?>">
                <input type="submit" value="Select">
            </form></td>

            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>