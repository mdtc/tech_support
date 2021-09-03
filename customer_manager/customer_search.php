<?php include '../view/header.php'; ?>
<main>
    <h2>Customer Search</h2>
    
    <!-- display a search form -->
    <form action="." method="post">
        <!--  ??? -->
    </form>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php elseif ($customers) : ?>
        <h2>Results</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
                <!--  ??? -->
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>