<?php
    //set the default values
    if (!isset($fields)) { $fields = ''; }
?>


<html>
    <head> 
        <title>MyWinery Discounts</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
        <form method="post" action="main.php">
                <input type="submit" value="Return to Main">
            </form>
        <div id="content">
            <form action="." method="post">
            <fieldset>
                <legend>User Information</legend>
                    <label> First Name:</label>
                        <input type="text" name="first_name"
                            value='<?php echo htmlspecialchars($first_name);?>'>
                        <?php echo $fields->getField('first_name')->getHTML(); ?>
                        <br><br>
                    <label> Last Name:</label>
                        <input type="text" name="last_name"
                            value='<?php echo htmlspecialchars($last_name);?>'>
                        <?php echo $fields->getField('last_name')->getHTML(); ?>
                        <br><br>
                    <label> Phone:</label>
                        <input type="text" name="phone"
                            value='<?php echo htmlspecialchars($phone);?>'>
                        <?php echo $fields->getField('phone')->getHTML(); ?>
                        <br><br>
                    <label> Email:</label>
                        <input type="text" name="email"
                            value='<?php echo htmlspecialchars($email);?>'>
                        <?php echo $fields->getField('email')->getHTML(); ?>
                        <br><br>
            </fieldset>
            <fieldset>
                <legend>Submit Registration</legend>
                    <label>&nbsp;</label>
                        <input type="submit" name="action" value="Register">
                        <input type="submit" name="action" value="Reset" />
                        <br>
            </fieldset>
            </form>
        </div>
        </main>
    </body>
</html>