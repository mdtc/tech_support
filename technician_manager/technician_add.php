<?php include '../view/header.php'; ?>
<main>
    <h1>Add Technician</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_technician">

        <label>First Name:</label>
        <input type="text" name="firstName"><br>

        <label>Last Name:</label>
        <input type="text" name="lastName"><br>

        <label>Email:</label>
        <input type="text" name="email"><br>

        <label>Phone:</label>
        <input type="text" name="phone" /><br>

        <label>Password:</label>
        <input type="text" name="password" /><br>
        

        <label>&nbsp;</label>
        <input type="submit" value="Add Technician" /><br>
    </form>
    <p><a href="../technician_manager">View Technician List</a></p>
</main>
<?php include '../view/footer.php'; ?>