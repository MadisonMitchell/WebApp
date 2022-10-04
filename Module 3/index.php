<?php
    // capture the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $sales_tax_input = filter_input(INPUT_POST, 'sales_tax', FILTER_VALIDATE_INT);
    $local_tax = filter_input(INPUT_POST, 'local_tax', FILTER_VALIDATE_INT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_INT);

    // validate the data
    $error_message = ''; //baseline value
    if (empty($product_description)){
        $error_message .= 'Product Description is a required field.<br>';
    }

    //validate the list price
    if ($list_price === FALSE) {
        $error_message .= 'List Price must be a valid number.<br>';
    } else if ($list_price <= 0) {
        $error_message .= 'List price must be greater than 0.<br>';
    }
    
    //validate the sales tax
    if ($sales_tax_input === FALSE) {
        $error_message .= 'Sales Tax must be a valid whole number.<br>';
    } else if ($sales_tax_input <= 0) {
        $error_message .= 'Sales Tax must be greater than 0.<br>';
    }


    //validate the local tax 
    if ($local_tax === FALSE) {
        $error_message .= 'Local Tax must be a valid whole number.<br>';
    } else if ($local_tax <= 0) {
        $error_message .= 'Local Tax must be greater than 0.<br>';
    }

    // validate discount percent
    if ($discount_percent === FALSE) {
        $error_message .= 'Discount Percent must be a valid whole number.<br>';
    } else if ($discount_percent <= 0) {
        $error_message .= 'Discount Percent must be greater than 0.<br>';
    }
    

    if ($error_message != '') {
        include('main.php');
        exit();
    }

    

    //calculate discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //calculate the sales tax
    $sales_tax = $discount_price * $sales_tax_input * .01;

    //calculate the local tax
    $local_tax_amount = $discount_price * $local_tax * .01;

    //identify sales total
    $sales_total = $discount_price + $sales_tax + $local_tax_amount;

    //formatting..
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);
    $sales_tax_percent_formatted = $sales_tax_input."%";
    $sales_tax_formatted = "$".number_format($sales_tax, 2);
    $local_tax_percent_formatted = $local_tax."%";
    $local_tax_formatted = "$".number_format($local_tax_amount, 2);
    $sales_total_formatted = "$".number_format($sales_total, 2);
?>
<html>
    <head> 
        <title>MyWinery Discounts</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Winery Discounts</h1>

            <label>Product Description:</label>
            <span><?php echo htmlspecialchars($product_description); ?></span><br>

            <label>List Price:</label>
            <span><?php echo htmlspecialchars($list_price_formatted); ?></span><br>

            <label>Standard Discount:</label>
            <span><?php echo htmlspecialchars($discount_percent_formatted); ?></span><br>

            <label>Discount Amount:</label>
            <span><?php echo $discount_formatted; ?></span><br>

            <label>Discount Price:</label>
            <span><?php echo $discount_price_formatted; ?></span><br>

            <br>

            <label>Sales Tax Rate:</label>
            <span><?php echo $sales_tax_percent_formatted; ?></span><br>

            <label>Sales Tax Amount:</label>
            <span><?php echo $sales_tax_formatted; ?></span><br>

            <label>Local Tax Rate:</label>
            <span><?php echo $local_tax_percent_formatted; ?></span><br>

            <label>Local Tax Amount:</label>
            <span><?php echo $local_tax_formatted; ?></span><br>

            <label>Sales Total:</label>
            <span><?php echo $sales_total_formatted; ?></span><br>

        </main>
    </body>
</html>