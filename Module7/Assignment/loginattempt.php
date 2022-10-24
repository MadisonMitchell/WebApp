<?php
    $email = filter_input(INPUT_POST, 'email');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    //Create Expressions
    $email_pattern = '/Harris@gmail.com/';
    $email_match = preg_match($email_pattern, $email);
    $username_pattern = '/Harris123/';
    $username_match = preg_match($username_pattern, $username);
    $password_pattern = '/Password123/';
    $password_match = preg_match($password_pattern, $password);

    //Validate Email
    if ($email_match === false) {
        echo 'Error testing email.';
    } else if ($email_match === 0) {
        echo "Email is not valid.";
    } else {
        echo 'Email is valid.';
    }

    //Validate Username
    if ($username_match === false) {
        echo 'Error testing username.';
    } else if ($username_match === 0) {
        echo "username is not valid.";
    } else {
        echo 'username is valid.';
    }

    //Validate Password
    if ($password_match === false) {
        echo 'Error testing password.';
    } else if ($password_match === 0) {
        echo "password is not valid.";
    } else {
        echo 'password is valid.';
    }

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

            <h1>Winery Discounts Login</h1>
                <!-- Email -->
                <label> Email:</label>
                <input type="text" name="email"
                    value="<?php echo htmlspecialchars($email); ?>"><br>
                <!-- Username -->
                <label> Username:</label>
                <input type="text" name="username"
                    value="<?php echo htmlspecialchars($username); ?>"><br>
                <!-- Password -->
                <label> Password:</label>
                <input type="text" name="password"
                    value="<?php echo htmlspecialchars($password); ?>"><br>
                <br>
                <label>&nbsp;</label>
                <input type="submit" action="post" value="Login"><br>    
            </form>
        </main>
    </body>
</html>