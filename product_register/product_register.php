<?php include '../view/header.php'; ?>
<main>
<div  class="mainMenu2">
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
                <input type="hidden" name="customer_id" value=<?php echo htmlspecialchars($customer['customerID']); ?>>
            </tr>
            <?php endforeach; ?>
            <tr>    
                <th>Product:</th>
            <td>
                <input list="products" name='product_id'>
                <datalist id="products">
                     <?php foreach ($products as $product) : ?>
                    <option value=<?php echo htmlspecialchars($product['productCode']); ?>><?php echo htmlspecialchars($product['name']); ?></option> 
                    <?php endforeach; ?>
                </datalist>
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
</div>
</main>
<?php include '../view/footer.php'; ?>
