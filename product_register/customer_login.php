<?php include '../view/header.php'; ?>
<main>
<div  class="mainMenu2" id="cmenu">
    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- display a search form -->
    <form action="." method="post">
    <input type="hidden" name="action" value="get_customer">
    <label>Email:</label>
    <input type="email" name="email" placeholder="Type your email" required>
    <input type="submit" value="Login" /><br>
    </form>
</div>
</main>
<?php include '../view/footer.php'; ?>