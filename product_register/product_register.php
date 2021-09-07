<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php  echo $message;?></p>
    <?php elseif($customerLogin): ?>
        <form action="." method="post" id="aligned">
        <table>
            <?php foreach ($customerLogin as $customer) : ?>
            <tr>
                <th>Customer: </th>
                <td><?php echo htmlspecialchars($customer['firstName'] . " " . $customer['lastName']); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>    
                <th>Product:</th>
            <td>
                <select>
                    <?php foreach ($products as $product) : ?>
                    <option name="chosen_product" value=<?php echo htmlspecialchars($product['name']); ?>><?php echo htmlspecialchars($product['name']); ?></option>        
                    <?php endforeach; ?>
                </select>
            </td>    
            </tr>
            <tr> 
                <td><form action="." method="post">
                <input type="hidden" name="action"
                       value="register_product">
                <input type="submit" value="Register Product">
            </form></td>
            </tr>  
        </table>
        </form>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>