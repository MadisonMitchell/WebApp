<?php
    $cookie_name = "user";
    $cookie_value = "Madie M.";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

    //set the expiration date in the past
    setcookie($cookie_name, "", time() + (86400 * 30), "/"); 
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE['user'])) {
                echo "Cookie 'user' still exists,";
            } else {
                echo "Cookie 'user' is already deleted,";
            }
        ?>
    </body>
</html>


