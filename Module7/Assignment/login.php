<?php
    if (!isset($email)) { $email = ''; }
    if (!isset($username)) { $username = ''; }
    if (!isset($password)) { $password = ''; }

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
            <h1>Winery Discounts Login</h1>
            <form method="post" action="loginattempt.php">
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
                <input type="submit" action="post" value="Login"><br>
            </form>
        </main>
    </body>
</html>