
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
                <option value="LEAG10">League Scheduler 1.0</option>
                <option value="LEAGD10">League Scheduler Deluxe 1.0</option>
                <option value="TEAM10">Team Manager Version 1.0</option>
                <option value="TRNY10">Tournament Master Version 1.0</option>
                <option value="TRNY20">Tournament Master Version 2.0</option>
            </select></td>
        </tr>
        <tr>
            <th><label for="title">Title: </label></th>
            <td><input type="text" id='title' name='title' ></td>
        </tr>
        <tr>
            <th>Description: </th>
            <td><textarea name="description" id="" cols="30" rows="10" value='description'></textarea></td>
        </tr>
      
    
    </table>
    <input type="submit" value="Create Incident"/><br>
    </form>
 


</div>
</main>
<?php include '../view/footer.php'; ?>