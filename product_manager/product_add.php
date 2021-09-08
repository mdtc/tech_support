<?php include '../view/header.php'; ?>

<main>
    <div  class="mainMenu2">
        
        <h1>Add Product</h1>
        <form action="." method="post" id="aligned" class="produc_add">
            <input type="hidden" name="action" value="add_product">
            
            <label>Code:</label>
            <input type="text" name="code"><br>
            
            <label>Name:</label>
            <input type="text" name="name"><br>
            
            <label>Version:</label>
            <input type="text" name="version"><br>
            
            <label>Release Date:</label>
            <input type="text" name="release_date" />
            <label class="message">Use 'yyyy-mm-dd' format</label><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Product" /><br>
        </form>
        <p class="button"><a class="stext" href="../product_manager">View Product List</a></p>        
    </div>
</main>
<?php include '../view/footer.php'; ?>