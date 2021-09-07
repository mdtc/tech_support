<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if ($success) : ?>
        <p><?php  echo $success;?></p><br>
    <?php elseif($issue): ?>
        <p><?php  echo $issue;?></p><br>
    
    <?php endif; ?>

    <p><a href="customer_login.php">Register another product</a></p>
       
</main>
<?php include '../view/footer.php'; ?>