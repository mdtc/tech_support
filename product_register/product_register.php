<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php  echo $message;?></p>
    <?php else: ?>
        <form action="." method="post" id="aligned">
           <!--  ??? -->
        </form>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>