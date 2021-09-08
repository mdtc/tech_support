<?php include 'view/header.php'; ?>
<main>
    <nav class="mainMenu">    
    <h2>Administrators</h2>
    <ul>
        <li><a href="product_manager">Manage Products</a></li>
        <li><a href="technician_manager">Manage Technicians</a></li>
        <li><a href="customer_manager">Manage Customers</a></li>
        <li class="hidden"><a href="under_construction.php">Create Incident</a></li>
        <li class="hidden"><a href="under_construction.php">Assign Incident</a></li>
        <li class="hidden"><a href="under_construction.php">Display Incidents</a></li>
    </ul>

    <h2 class="hidden">Technicians</h2>
    <ul>
        <li class="hidden"><a href="under_construction.php">Update Incident</a></li>
    </ul>

    <h2>Customers</h2>
    <ul>
        <li><a href="product_register">Register Product</a></li>
    </ul>
    </nav>
</main>
<?php include 'view/footer.php'; ?>