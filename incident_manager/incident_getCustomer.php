<?php include '../view/header.php'; ?>
<main>
    <div  class="mainMenu2">

        <h2>Get Costumer</h2>
        
        <!-- display a search form -->
        <form action="" method="post">
            <input type="hidden" name="action" value="get_customers">
            <label>Email:</label>
            <input type="email" name="custEmail" placeholder="Type here to search">
            <input type="submit" value="Get Costumer"/><br>
        </form>
    </div>
</main>
<?php include '../view/footer.php'; ?>