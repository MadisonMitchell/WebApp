<?php
    //set the default values
    if (!isset($fields)) { $fields = ''; }

    $servername = "127.0.0.1";
    $username = "root";
    $password = "suta7919";
    $database = "petshop";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $database);

    //Validate Connection
    if($conn->connect_error) {
       die("Connection Invalid: ". $conn->connect_error);
    } 


    $sql = "SELECT first_name, last_name, phone_number, email, pass FROM styles";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
         while($row = $result->fetch_assoc()) {
              echo "id: " . $row["first_name"]. " " . $row["last_name"]. " " . $row["phone_number"]. " " . $row["email"]. " " . $row["pass"]. " " . "<br>";
        }
    } else {
        echo "0 results";
    }


$conn-> close();
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
                    <label> Password:</label>
                        <input type="text" name="pass"
                            value='<?php echo htmlspecialchars($password_register);?>'>
                        <?php echo $fields->getField('pass')->getHTML(); ?>
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