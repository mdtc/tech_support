<?php include '../view/header.php'; ?>
<main>
<div class="mainMenu">

    <h2>Register Product</h2>
    <?php if ($success) : ?>
        <p><?php  echo $success;?></p><br>
        <?php elseif($issue): ?>
            <p><?php  echo $issue;?></p><br>
            
            <?php endif; ?>
            
    <p><a class="button2" href="customer_login.php">Register another product</a></p>
            
</div>
</main>
<?php include '../view/footer.php'; ?>