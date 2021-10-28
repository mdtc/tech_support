<?php include '../view/header.php'; ?>
<main>
    <div class="mainMenu2" id="cmenu">
        <h1>Add Technician</h1>
        <form action="." method="post" id="aligned">
            <input type="hidden" name="action" value="add_technician">
            
            <label>First Name:</label>
            <input type="text" name="firstName" required><br>
            
            <label>Last Name:</label>
            <input type="text" name="lastName" required><br>
            
            <label>Email:</label>
            <input type="text" name="email" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br>
            
            <label>Phone:</label>
            <input type="text" name="phone" required /><br>
            
            <label>Password:</label>
            <input type="text" name="password" required /><br>
            
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Technician" /><br>
        </form>
        <p class="button"><a class="stext" href="../technician_manager">View Technician List</a></p>
    </div>
</main>
<?php include '../view/footer.php'; ?>