<?php
    //set the default values
    if (!isset($product_description)) { $product_description = ''; }
    if (!isset($list_price)) { $list_price = ''; }
    if (!isset($sales_tax)) { $sales_tax = ''; }
    if (!isset($local_tax)) { $local_tax = ''; }
    if (!isset($discount_percent)) { $discount_percent = ''; }
?>

<html>
    <head>
        <title>Pet Store</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
<body>
    <main>
        <h1>Pet Store</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } //end if statement ?>

        <form action="winediscount.php" method="post">
            <div id="data">
                <!-- Product Description -->
                <label> Product Description:</label>
                <input type="text" name="product_description"
                    value="<?php echo htmlspecialchars($product_description); ?>"><br>
                <!-- List Price -->
                <label> Cost of Product:</label>
                <input type="text" name="list_price"
                    value="<?php echo htmlspecialchars($list_price);?>"><br>
                <!-- Sales Tax -->
                <label> Sales Tax:</label>
                <input type="text" name="sales_tax"
                    value="<?php echo htmlspecialchars($sales_tax);?>"><br>
                <!-- Local Tax -->
                <label> Local Tax:</label>
                <input type="text" name="local_tax"
                    value="<?php echo htmlspecialchars($local_tax);?>"><br>
                <!-- Discount Percentage -->
                <label> Discount:</label>
                <input type="text" name="discount_percent"
                    value="<?php echo htmlspecialchars($discount_percent);?>">
                <span>%</span><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
        </form>
    </main>
</body>
