
<?php include '../view/header.php'; ?>
<main>
<div class="mainMenu2"> 
    <h1>Create Incident</h1>
    <!-- display a table of products -->
    <table>
        <tr>
            <th>Customer: </th>
            <td><?php echo htmlspecialchars($customer[0]['firstName']) ." ". ($customer[0]['lastName'])?></td>
            <tr>
        <form action="" method='post'>
        <input type="hidden" name="action" value="create_incident">
        <input type="hidden" name='cusID' value=<?php echo htmlspecialchars($customer[0]['customerID'])?> >
        </tr>
            <th><label for="code">Product:</label></th>
            <td><select name="code" id="code">
                <?php foreach($products as $product) :?>
                <option value=<?php echo htmlspecialchars($product['productCode'])?>><?php echo htmlspecialchars($product['name'])?></option>
                <?php endforeach; ?>
            </select></td>
        </tr>
        <tr>
            <th><label for="title">Title: </label></th>
            <td><input type="text" id='title' name='title' required ></td>
        </tr>
        <tr>
            <th>Description: </th>
            <td><textarea name="description" id="" cols="30" rows="10" value='description' required></textarea></td>
        </tr>
      
    
    </table>
    <input type="submit" value="Create Incident"/><br>
    </form>
 


</div>
</main>
<?php include '../view/footer.php'; ?>